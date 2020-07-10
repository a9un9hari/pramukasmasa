@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Tambahkan Regu</h1>
</div>
<div class="panel-body">
    {!! Form::open( ['url' => route('dashboard.regu.store'),'method'=>'post', 'files'=> true, 'class'=>'form-horizontal']) !!}
        @include('regu.admin._form')
    {!! Form::close() !!}
</div>
@endsection
