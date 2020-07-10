
<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
	{!! Form::label('nama', 'Nama Regu', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-3">
		{!! Form::text('nama', null, ['class'=>'form-control', 'id' => 'address']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('no_dada') ? ' has-error' : '' }}">
	{!! Form::label('no_dada', 'Nomor Dada/Regu', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-3">
		{!! Form::text('no_dada', null, ['class'=>'form-control']) !!}
		{!! $errors->first('no_dada', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
	{!! Form::label('jenis_kelamin', 'Gender', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-2">
		{!! Form::select('jenis_kelamin', [ 'laki_laki' => 'Laki Laki', 'perempuan' => 'Perempuan'], null, ['class'=>'form-control select2']) !!}
		{!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('konfirmasi_pembayaran') ? ' has-error' : '' }}">
	{!! Form::label('konfirmasi_pembayaran', 'Bukti Transfer', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('konfirmasi_pembayaran', ['class'=>'form-control']) !!}
		{!! $errors->first('konfirmasi_pembayaran', '<p class="help-block">:message</p>') !!}
		<br>
		@if( ! empty($data) )
			<img src="{{ $data->konfirmasi }}" width="200" alt="" />
		@endif
	</div>
</div>
@if(Auth::user()->id == 1)
<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
	{!! Form::label('status', 'Status', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-3">
		{!! Form::select('status', [ 'menunggu_pembayaran' => 'Menunggu Pembayaran', 'menunggu_konfirmasi' => 'Menunggu Konfirmasi', 'pembayaran_berhasil' => 'Pembayaran Berhasil'], null, ['class'=>'form-control select2']) !!}
		{!! $errors->first('status', '<p class="help-block">:message</p>') !!}
	</div>
</div>
@else
	@if( ! empty($data) )
	<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
		{!! Form::label('status', 'Status', ['class'=>'col-md-12 control-label']) !!}
		<div class="col-md-12">
			@if( $data->status == 'menunggu_pembayaran' )
				<p>Silahkan melakukan pembayaran ke no rek XXXXX untuk pendaftaran regu {{ $data->nama }}</p>
			@elseif( $data->status == 'menunggu_konfirmasi' )
				<p>Pembayaran anda sedang dikonfirmasi. SIlahkan hubungi ke 089XXXX untuk bantuan.</p>
			@else
				<p>Pembayaran anda sudah di konfirmasi silahkan melengkapi data peserta anda.</p>
			@endif
		</div>
	</div>
	@endif
@endif
<div class="form-group">
	<div class="col-md-6 col-md-offset-2">
		{!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
