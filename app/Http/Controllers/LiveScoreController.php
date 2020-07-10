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

class LiveScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laki = Regu::where('jenis_kelamin', 'laki_laki')->get();
        $perempuan = Regu::where('jenis_kelamin', 'perempuan')->get();
        return view('livescore.admin.edit')->with(compact('laki', 'perempuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perempuan()
    {
        $data = Regu::where('jenis_kelamin', 'perempuan')->orderBy('no_dada', 'asc')->get();
        return view('livescore.show')->with(compact('data'));
    }

    
    public function l()
    {
        $laki = Regu::where('jenis_kelamin', 'laki_laki')->orderBy('no_dada', 'asc')->get();
        return view('livescore.laki')->with(compact('laki'));
    }

    
    public function p()
    {
        $perempuan = Regu::where('jenis_kelamin', 'perempuan')->orderBy('no_dada', 'asc')->get();
        return view('livescore.perempuan')->with(compact('perempuan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->all();
        foreach ($req['data'] as $key => $value) {
            $dataUpdate = Regu::find($key);
            $dataUpdate->update($value);
        }

        $success = [
            "level"    => "success",
            "message"   => "Sukses mengubah data live score "
        ];
        Session::flash("flash_notification", $success);
        return redirect()->route('dashboard.livescore');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function laki()
    {
        $data = Regu::where('jenis_kelamin', 'laki_laki')->orderBy('no_dada', 'asc')->get();
        return view('livescore.show')->with(compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
