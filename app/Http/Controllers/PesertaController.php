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

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($regu_id)
    {
        $regu = Regu::find($regu_id);
        $jenis_kelamin = $regu->jenis_kelamin;
        $pinru = Peserta::where('jabatan', 'Pemimpin Regu')->where('regu_id', $regu_id)->count();
        $wapinru = Peserta::where('jabatan', 'Wakil Pemimpin Regu')->where('regu_id', $regu_id)->count();
        $cst = Peserta::where('jabatan', 'Official (CST)')->where('regu_id', $regu_id)->count();
        $pembina = Peserta::where('jabatan', 'Pembina Pendamping')->where('regu_id', $regu_id)->count();
        $jabatan['Anggota'] = 'Anggota';
        if($pinru == 0)
            $jabatan['Pemimpin Regu'] = 'Pemimpin Regu';
        if($wapinru == 0)
            $jabatan['Wakil Pemimpin Regu'] = 'Wakil Pemimpin Regu';
        if($cst == 0)
            $jabatan['Official (CST)'] = 'Official (CST)';
        if($pembina == 0)
            $jabatan['Pembina Pendamping'] = 'Pembina Pendamping';

        return view('peserta.admin.create')->with(compact('regu_id', 'jabatan', 'jenis_kelamin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $regu_id)
    {
        $this->validate($request, [
            'nama'              => 'required',
            'jenis_kelamin'     => 'required',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required',
            'alamat'            => 'required',
            'kota'              => 'required',
            'agama'             => 'required',
            'gol_darah'         => 'required',
            'sd_nama'           => 'required',
            'sd_tempat_tahun'   => 'required',
            'smp_nama'          => 'required',
            'smp_tempat_tahun'  => 'required',
            'jabatan'           => 'required',
            'tinggi_badan'      => 'required',
            'berat_badan'       => 'required',
            'surat_sehat'       => 'required|image|mimes:jpeg,png,jpg,gif',
            'foto'              => 'required|image|mimes:jpeg,png,jpg,gif',
            'kartu_pelajar'     => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        $req = $request->all();
        $req['regu_id'] = $regu_id;
        
        // Surat Sehat
        $ext = $request->surat_sehat->getClientOriginalExtension();
        $filename = str_slug( $req['nama'] , "-").'-'.time().'-surat_sehat.'.$ext;
        $file = $request->surat_sehat->move(public_path('images/regu/'.$regu_id.'/'), $filename);
        $req['surat_sehat'] = $filename;
        
        // Foto
        $ext = $request->foto->getClientOriginalExtension();
        $filename = str_slug( $req['nama'] , "-").'-'.time().'-foto.'.$ext;
        $file = $request->foto->move(public_path('images/regu/'.$regu_id.'/'), $filename);
        $req['foto'] = $filename;
        
        // Kartu Pelajar
        $ext = $request->foto->getClientOriginalExtension();
        $filename = str_slug( $req['nama'] , "-").'-'.time().'-kartu_pelajar.'.$ext;
        $file = $request->kartu_pelajar->move(public_path('images/regu/'.$regu_id.'/'), $filename);
        $req['kartu_pelajar'] = $filename;

        $data = Peserta::create($req);
        $success = [
            "level"    => "success",
            "message"   => "Berhasil menyimpan data peserta dengan nama : ".$data->nama
        ];
        Session::flash("flash_notification", $success);
        return redirect()->route('dashboard.regu.edit', $regu_id);
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
        $data = Peserta::find($id);
        $regu = Regu::find($data->regu_id);
        $jenis_kelamin = $regu->jenis_kelamin;

        $pinru = Peserta::where('jabatan', 'Pemimpin Regu')->where('regu_id', $data->regu_id);
        $wapinru = Peserta::where('jabatan', 'Wakil Pemimpin Regu')->where('regu_id', $data->regu_id);
        $cst = Peserta::where('jabatan', 'Official (CST)')->where('regu_id', $data->regu_id);
        $pembina = Peserta::where('jabatan', 'Pembina Pendamping')->where('regu_id', $data->regu_id);
        $jabatan['Anggota'] = 'Anggota';
        if($pinru->count() == 0 OR $pinru->first()->id == $id)
            $jabatan['Pemimpin Regu'] = 'Pemimpin Regu';
        if($wapinru->count() == 0 OR $wapinru->first()->id == $id)
            $jabatan['Wakil Pemimpin Regu'] = 'Wakil Pemimpin Regu';
        if($cst->count() == 0 OR $cst->first()->id == $id)
            $jabatan['Official (CST)'] = 'Official (CST)';
        if($pembina->count() == 0 OR $pembina->first()->id == $id)
            $jabatan['Pembina Pendamping'] = 'Pembina Pendamping';

        return view('peserta.admin.edit')->with(compact('jabatan', 'data', 'jenis_kelamin'));
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
        $this->validate($request, [
            'nama'              => 'required',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required',
            'alamat'            => 'required',
            'kota'              => 'required',
            'agama'             => 'required',
            'gol_darah'         => 'required',
            'sd_nama'           => 'required',
            'sd_tempat_tahun'   => 'required',
            'smp_nama'          => 'required',
            'smp_tempat_tahun'  => 'required',
            'jabatan'           => 'required',
            'tinggi_badan'      => 'required',
            'berat_badan'       => 'required'
        ]);
        $req = $request->all();
        $dataUpdate = Peserta::find($id);
        
        // Surat Sehat
        if ( ! empty($request->surat_sehat) ) {
            $ext = $request->surat_sehat->getClientOriginalExtension();
            $filename = str_slug( $req['nama'] , "-").'-'.time().'-surat_sehat.'.$ext;
            $file = $request->surat_sehat->move(public_path('images/regu/'.$dataUpdate->regu_id.'/'), $filename);
            $req['surat_sehat'] = $filename;
        }
        
        // Foto
        if ( ! empty($request->foto) ) {
            $ext = $request->foto->getClientOriginalExtension();
            $filename = str_slug( $req['nama'] , "-").'-'.time().'-foto.'.$ext;
            $file = $request->foto->move(public_path('images/regu/'.$dataUpdate->regu_id.'/'), $filename);
            $req['foto'] = $filename;
        }
        
        // Kartu Pelajar
        if ( ! empty($request->kartu_pelajar) ) {
            $ext = $request->foto->getClientOriginalExtension();
            $filename = str_slug( $req['nama'] , "-").'-'.time().'-kartu_pelajar.'.$ext;
            $file = $request->kartu_pelajar->move(public_path('images/regu/'.$dataUpdate->regu_id.'/'), $filename);
            $req['kartu_pelajar'] = $filename;
        }

        $dataUpdate->update($req);
        $success = [
            "level"    => "success",
            "message"   => "Berhasil mengubah data peserta dengan nama : ".$dataUpdate->nama
        ];
        Session::flash("flash_notification", $success);
        return redirect()->route('dashboard.regu.edit', $dataUpdate->regu_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Peserta::find($id);
        Peserta::destroy($id);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Peserta dengan nama ".$data->nama." berhasil dihapus"
        ]);
        return redirect()->route('dashboard.regu.edit',$data->regu_id);
    }
}
