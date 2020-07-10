@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h2">Edit Live Score</h1>
</div>
<div class="panel-body">
    {!! Form::open( ['url' => route('dashboard.livescore.store'),'method'=>'post', 'files'=> true, 'class'=>'form-horizontal']) !!}
		<table class="table table-striped">
			<tr>
				<th>Pangkalan</th>
				<th>Nama Regu</th>
				<th>No Dada</th>
				<th>
                    Giat A <br>
                    Pioneering
                </th>
				<th>
                    Giat B <br>
                    Scout Chef
                </th>
				<th>
                    Giat C <br>
                    SMS
                </th>
				<th>
                    Giat D <br>
                    BPT
                </th>
				<th>
                    Giat E <br>
                    Fotografi
                </th>
				<th>
                    Giat F <br>
                    PPGD
                </th>
				<th>
                    Giat G <br>
                    CTP
                </th>
			</tr>
            @foreach($laki as $key)
                <tr>
                    <td>{{ $key->user->gudep }}</td>
                    <td>{{ $key->nama }}</td>
                    <td>{{ $key->no_dada }}</td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_a]', $key->giat_a, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_b]', $key->giat_b, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_c]', $key->giat_c, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_d]', $key->giat_d, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_e]', $key->giat_e, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_f]', $key->giat_f, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_g]', $key->giat_g, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                </tr>
            @endforeach
            @foreach($perempuan as $key)
                <tr>
                    <td>{{ $key->user->gudep }}</td>
                    <td>{{ $key->nama }}</td>
                    <td>{{ $key->no_dada }}</td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_a]', $key->giat_a, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_b]', $key->giat_b, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_c]', $key->giat_c, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_d]', $key->giat_d, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_e]', $key->giat_e, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_f]', $key->giat_f, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                    <td>
                        {!! Form::text('data['.$key->id.'][giat_g]', $key->giat_g, ['class'=>'form-control', 'size' => '1']) !!}
                    </td>
                </tr>
            @endforeach
		</table>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-2">
                {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>

    {!! Form::close() !!}
</div>
@endsection