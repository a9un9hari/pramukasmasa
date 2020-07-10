@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Ubah Data Peserta</h1>
</div>
<div class="panel-body">
    {!! Form::model($data, ['url' => route('dashboard.peserta.update', $data->id),'method'=>'put', 'files'=> true, 'class'=>'form-horizontal']) !!}
        @include('peserta.admin._form')
    {!! Form::close() !!}
</div>
@endsection

@section('scripts')
    <script>
        $( document ).ready(function() {
            $('#jabatan').on('change', function(){
                var jabatan = $(this).val();
                if( jabatan == 'Official (CST)' || jabatan == 'Pembina Pendamping' )
                    $('#jenis_kelamin').prop('disabled', false);
                else
                    $('#jenis_kelamin').prop('disabled', true);
            });
        });
        var jab = $('#jabatan').val();
        if( jab == 'Official (CST)' || jab == 'Pembina Pendamping' )
            $('#jenis_kelamin').prop('disabled', false);
        else
            $('#jenis_kelamin').prop('disabled', true);
    </script>
@endsection