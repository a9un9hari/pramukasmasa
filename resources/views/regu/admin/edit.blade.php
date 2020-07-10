@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Edit Regu</h1>
</div>
<div class="panel-body">
    {!! Form::model($data, ['url' => route('dashboard.regu.update', $data->id),'method'=>'put', 'files'=> true, 'class'=>'form-horizontal']) !!}
        @include('regu.admin._form')
    {!! Form::close() !!}
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h3">Daftar Regu</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        @if($data->status == 'pembayaran_berhasil')
            @if( $count['anggota'] < 6 OR $count['pinru'] < 1 OR $count['wapinru'] < 1 OR $count['cst'] < 1 OR $count['pembina'] < 1 )
            <a href="{{ route('dashboard.peserta.create', $data->id) }}" class="btn btn-sm btn-outline-secondary" title="">Tambahkan Peserta</a>
            @endif
        @endif
      </div>
    </div>
</div>
<div class="panel-body">
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th></th>
        </tr>
        @foreach($peserta as $key => $value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->jabatan }}</td>
                <td>
                    {!! Form::open(['url' => route('dashboard.peserta.destroy',$value->id), 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => 'Apakah anda yakin akan menghapus peserta dengan nama '.$value->nama.'?'] ) !!}
                        <a class="btn btn-xs btn-primary" href="{{ route('dashboard.peserta.edit', $value->id) }}"><i class="fa fa-edit"></i></a>
                        {{ Form::button('<i class="fa fa-trash-o"></i>', ['class'=>'btn btn-xs btn-danger', 'type' => 'submit']) }}
                    {!! Form::close()!!}
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection