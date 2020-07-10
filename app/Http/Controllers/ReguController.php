<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use File;
use Session;
use App\Regu;
use App\Peserta;
use App\Http\Requests;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\DataTables;

class ReguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            if( $request->user()->id == 1 ){
                $data = Regu::select();
            }else{
                $data = Regu::where('user_id', $request->user()->id)->get();
            }
            return DataTables::of($data)
                ->addColumn('action', function($data){
                    return view('datatable._action', [
                    'model' => $data,
                    'form_url' => route('dashboard.regu.destroy', $data->id),
                    'edit_url' => route('dashboard.regu.edit', $data->id),
                    'confirm_message' => 'Apakah anda yakin menghapus regu ' . $data->nama . '?'
                    ]);
                })->rawColumns(['action','status_regu'])->make(true);
        }

        $html = $htmlBuilder
                ->addColumn(['data' => 'nama', 'name' => 'nama', 'title' => 'Nama'])
                ->addColumn(['data' => 'gender', 'name' => 'jenis_kelamin', 'title' => 'Gender'])
                ->addColumn(['data' => 'gudep', 'name' => 'gudep', 'title' => 'Gudep'])
                ->addColumn(['data' => 'tgl_daftar', 'name' => 'tgl_daftar', 'title' => 'Tgl Daftar'])
                ->addColumn(['data' => 'status_regu', 'name' => 'status', 'title' => 'Status'])
                ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
        return view('regu.admin.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regu.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'            => 'required',
            'jenis_kelamin'   => 'required',
        ]);
        $req = $request->all();
        $req['status'] = 'menunggu_pembayaran';
        $req['user_id'] = $request->user()->id;

        if ( ! empty($request->konfirmasi_pembayaran) ) {
            $ext = $request->konfirmasi_pembayaran->getClientOriginalExtension();
            $filename = str_slug( $req['nama'] , "-").'-'.time().'.'.$ext;
            $file = $request->konfirmasi_pembayaran->move(public_path('images/konfirmasi/'), $filename);
            $req['konfirmasi_pembayaran'] = $filename;
            $req['status'] = 'menunggu_konfirmasi';
        }

        $data = Regu::create($req);
        $success = [
            "level"    => "success",
            "message"   => "Telah berhasil menambahkan regu ".$data->nama
        ];

        Session::flash("flash_notification", $success);
        return redirect()->route('dashboard.regu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Regu::find($id);
        $peserta = Peserta::where('regu_id', $id)->get();
        $count['anggota'] = Peserta::where('regu_id', $id)->where('jabatan', 'Anggota')->count();
        $count['pinru'] = Peserta::where('regu_id', $id)->where('jabatan', 'Pemimpin Regu')->count();
        $count['wapinru'] = Peserta::where('regu_id', $id)->where('jabatan', 'Wakil Pemimpin Regu')->count();
        $count['cst'] = Peserta::where('regu_id', $id)->where('jabatan', 'Official (CST)')->count();
        $count['pembina'] = Peserta::where('regu_id', $id)->where('jabatan', 'Pembina Pendamping')->count();
        return view('regu.admin.edit')->with(compact('data', 'peserta', 'count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $req = $request->all();
        $this->validate($request, [
            'nama'            => 'required',
            'jenis_kelamin'   => 'required',
        ]);
        $dataUpdate = Regu::find($id);

        if ( ! empty($request->konfirmasi_pembayaran) ) {
            $ext = $request->konfirmasi_pembayaran->getClientOriginalExtension();
            $filename = str_slug( $req['nama'] , "-").'-'.time().'.'.$ext;
            $file = $request->konfirmasi_pembayaran->move(public_path('images/konfirmasi/'), $filename);
            $req['konfirmasi_pembayaran'] = $filename;
            if (File::exists(public_path('images/konfirmasi/').$dataUpdate->konfirmasi_pembayaran)){
                File::delete(public_path('images/konfirmasi/').$dataUpdate->konfirmasi_pembayaran);
            }
            $req['status'] = 'menunggu_konfirmasi';
        }
        
        $dataUpdate->update($req);
        $success = [
            "level"    => "success",
            "message"   => "Sukses mengubah data regu ".$dataUpdate->nama
        ];
        Session::flash("flash_notification", $success);
        return redirect()->route('dashboard.regu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Regu::find($id);
        if (File::exists(public_path('images/konfirmasi/').$data->konformasi_pembayaran)){
            File::delete(public_path('images/konfirmasi/').$data->konformasi_pembayaran);
        }

        Regu::destroy($id);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Regu ".$data->nama." berhasil dihapus"
        ]);
        return redirect()->route('dashboard.regu.index');
    }
}
