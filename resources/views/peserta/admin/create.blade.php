@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Tambahkan Peserta</h1>
</div>
<div class="panel-body">
    {!! Form::open( ['url' => route('dashboard.peserta.store',$regu_id),'method'=>'post', 'files'=> true, 'class'=>'form-horizontal']) !!}
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
    </script>
@endsection

