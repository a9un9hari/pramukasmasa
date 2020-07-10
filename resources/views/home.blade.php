@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Selamat datang di sistem pendaftaran ajang lomba ASC 2018. Daftarkan segera regu kamu <a href="{{ route('dashboard.regu.create') }}">disini</a>    
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-i6oilhVQ0E?controls=0&disablekb=1&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLSdmGXb-J6Harw9IxermCQtF4vjYwGSbljtup2WNrHuw-076hg/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
            </div>
        </div>
    </div>
</div>
@endsection
