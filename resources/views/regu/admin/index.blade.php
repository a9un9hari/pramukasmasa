@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Data Regu</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="{{ route('dashboard.regu.create') }}" class="btn btn-sm btn-outline-secondary" title="">Tambahkan Regu</a>
      </div>
    </div>
</div>
<div class="panel-body">
    {!! $html->table(['class'=>'table table-striped table-bordered table-hover']) !!}
</div>
@endsection

@section('style')
    <!-- DataTables Responsive CSS -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('scripts')
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

    {!! $html->scripts() !!}
@endsection
