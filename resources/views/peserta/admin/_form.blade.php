
<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
	{!! Form::label('nama', 'Nama Lengkap *', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('nama', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
	{!! Form::label('jabatan', 'Jabatan Dalam Regu *', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('jabatan', $jabatan, null, ['class'=>'form-control select2', 'id' =>'jabatan']) !!}
		{!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
	{!! Form::label('jenis_kelamin', 'Jenis Kelamin *', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('jenis_kelamin', [ 'laki_laki' => 'Laki Laki', 'perempuan' => 'Perempuan'], $jenis_kelamin, ['class'=>'form-control select2','id' => 'jenis_kelamin', 'disabled' => 'disabled']) !!}
		{!! Form::hidden('jenis_kelamin', $jenis_kelamin) !!}
		{!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
	{!! Form::label('tempat_lahir', 'Tempat Lahir *', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('tempat_lahir', null, ['class'=>'form-control']) !!}
		{!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
	{!! Form::label('tanggal_lahir', 'Tanggal Lahir *', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('tanggal_lahir', null, ['class'=>'form-control']) !!}
		{!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
	{!! Form::label('alamat', 'Alamat *', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-5">
		{!! Form::textarea('alamat', null, ['class'=>'form-control', 'rows' => '5']) !!}
		{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('kota') ? ' has-error' : '' }}">
				{!! Form::label('kota *', 'Kota/Kabupaten', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('kota', null, ['class'=>'form-control']) !!}
					{!! $errors->first('kota', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group{{ $errors->has('kodepos') ? ' has-error' : '' }}">
				{!! Form::label('kodepos', 'Kode Pos', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('kodepos', null, ['class'=>'form-control']) !!}
					{!! $errors->first('kodepos', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				{!! Form::label('email', 'Email', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('email', null, ['class'=>'form-control']) !!}
					{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
				{!! Form::label('telp', 'Telp./HP', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('telp', null, ['class'=>'form-control']) !!}
					{!! $errors->first('telp', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
	{!! Form::label('agama', 'Agama *', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-3">
		{!! Form::select('agama', [ 'Islam' => 'Islam', 'Kristen' => 'Kristen', 'Katolik' => 'Katolik', 'Hindu' => 'Hindu', 'Budha' => 'Budha'], null, ['class'=>'form-control select2']) !!}
		{!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('gol_darah') ? ' has-error' : '' }}">
	{!! Form::label('gol_darah', 'Gol Darah *', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-1">
		{!! Form::select('gol_darah', [ 'A' => 'A', 'B' => 'B', 'O' => 'O', 'AB' => 'AB'], null, ['class'=>'form-control select2']) !!}
		{!! $errors->first('gol_darah', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<h3 class="col-md-3">Pendidikan Pokok</h3>
</div>
<div class="form-group">
	<h5 class="col-md-3">SD/MI</h5>
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('sd_nama') ? ' has-error' : '' }}">
				{!! Form::label('sd_nama', 'Nama Sekolah *', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('sd_nama', null, ['class'=>'form-control']) !!}
					{!! $errors->first('sd_nama', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('sd_tempat_tahun') ? ' has-error' : '' }}">
				{!! Form::label('sd_tempat_tahun', 'Tempat dan Tamat Tahun *', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('sd_tempat_tahun', null, ['class'=>'form-control']) !!}
					{!! $errors->first('sd_tempat_tahun', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<h5 class="col-md-3">SMP/MTs</h5>
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('smp_nama') ? ' has-error' : '' }}">
				{!! Form::label('smp_nama', 'Nama Sekolah', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('smp_nama', null, ['class'=>'form-control']) !!}
					{!! $errors->first('smp_nama', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('smp_tempat_tahun') ? ' has-error' : '' }}">
				{!! Form::label('smp_tempat_tahun', 'Tempat dan Tamat Tahun', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('smp_tempat_tahun', null, ['class'=>'form-control']) !!}
					{!! $errors->first('smp_tempat_tahun', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<h5 class="col-md-3">SMA/MA</h5>
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('sma_nama') ? ' has-error' : '' }}">
				{!! Form::label('sma_nama', 'Nama Sekolah', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('sma_nama', null, ['class'=>'form-control']) !!}
					{!! $errors->first('sma_nama', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('sma_tempat_tahun') ? ' has-error' : '' }}">
				{!! Form::label('sma_tempat_tahun', 'Tempat dan Tamat Tahun', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('sma_tempat_tahun', null, ['class'=>'form-control']) !!}
					{!! $errors->first('sma_tempat_tahun', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<h5 class="col-md-3">Perguruan Tinggi</h5>
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('perti_nama') ? ' has-error' : '' }}">
				{!! Form::label('perti_nama', 'Nama Perguruan Tinggi', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('perti_nama', null, ['class'=>'form-control']) !!}
					{!! $errors->first('perti_nama', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('perti_tempat_tahun') ? ' has-error' : '' }}">
				{!! Form::label('perti_tempat_tahun', 'Tempat dan Tamat Tahun', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('perti_tempat_tahun', null, ['class'=>'form-control']) !!}
					{!! $errors->first('perti_tempat_tahun', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<h3 class="col-md-3">Kepramukaan</h3>
</div>
<div class="form-group">
	<h5 class="col-md-3">Siaga</h5>
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('siaga_tingkat') ? ' has-error' : '' }}">
				{!! Form::label('siaga_tingkat', 'Tingkat Terakhir', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('siaga_tingkat', null, ['class'=>'form-control']) !!}
					{!! $errors->first('siaga_tingkat', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('siaga_tempat_tahun') ? ' has-error' : '' }}">
				{!! Form::label('siaga_tempat_tahun', 'Tempat dan Tahun', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('siaga_tempat_tahun', null, ['class'=>'form-control']) !!}
					{!! $errors->first('siaga_tempat_tahun', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<h5 class="col-md-3">Penggalang</h5>
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('penggalang_tingkat') ? ' has-error' : '' }}">
				{!! Form::label('penggalang_tingkat', 'Tingkat Terakhir', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('penggalang_tingkat', null, ['class'=>'form-control']) !!}
					{!! $errors->first('penggalang_tingkat', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('penggalang_tempat_tahun') ? ' has-error' : '' }}">
				{!! Form::label('penggalang_tempat_tahun', 'Tempat dan Tahun', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('penggalang_tempat_tahun', null, ['class'=>'form-control']) !!}
					{!! $errors->first('penggalang_tempat_tahun', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<h5 class="col-md-3">Penegak</h5>
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('penegak_tingkat') ? ' has-error' : '' }}">
				{!! Form::label('penegak_tingkat', 'Tingkat Terakhir', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('penegak_tingkat', null, ['class'=>'form-control']) !!}
					{!! $errors->first('penegak_tingkat', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('penegak_tempat_tahun') ? ' has-error' : '' }}">
				{!! Form::label('penegak_tempat_tahun', 'Tempat dan Tahun', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('penegak_tempat_tahun', null, ['class'=>'form-control']) !!}
					{!! $errors->first('penegak_tempat_tahun', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<h5 class="col-md-3">Pandega</h5>
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('pandega_tingkat') ? ' has-error' : '' }}">
				{!! Form::label('pandega_tingkat', 'Tingkat Terakhir', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('pandega_tingkat', null, ['class'=>'form-control']) !!}
					{!! $errors->first('pandega_tingkat', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('pandega_tempat_tahun') ? ' has-error' : '' }}">
				{!! Form::label('pandega_tempat_tahun', 'Tempat dan Tahun', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('pandega_tempat_tahun', null, ['class'=>'form-control']) !!}
					{!! $errors->first('pandega_tempat_tahun', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<h3 class="col-md-12">Kegiatan Kepramukaan/Non Pramuka</h3>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('kegiatan_1_nama') ? ' has-error' : '' }}">
				{!! Form::label('kegiatan_1_nama', 'Nama Kegiatan', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('kegiatan_1_nama', null, ['class'=>'form-control']) !!}
					{!! $errors->first('kegiatan_1_nama', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('kegiatan_1_tempat_tahun') ? ' has-error' : '' }}">
				{!! Form::label('kegiatan_1_tempat_tahun', 'Tempat dan Tahun', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('kegiatan_1_tempat_tahun', null, ['class'=>'form-control']) !!}
					{!! $errors->first('kegiatan_1_tempat_tahun', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('kegiatan_2_nama') ? ' has-error' : '' }}">
				{!! Form::label('kegiatan_2_nama', 'Nama Kegiatan', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('kegiatan_2_nama', null, ['class'=>'form-control']) !!}
					{!! $errors->first('kegiatan_2_nama', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('kegiatan_2_tempat_tahun') ? ' has-error' : '' }}">
				{!! Form::label('kegiatan_2_tempat_tahun', 'Tempat dan Tahun', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('kegiatan_2_tempat_tahun', null, ['class'=>'form-control']) !!}
					{!! $errors->first('kegiatan_2_tempat_tahun', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('kegiatan_3_nama') ? ' has-error' : '' }}">
				{!! Form::label('kegiatan_3_nama', 'Nama Kegiatan', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('kegiatan_3_nama', null, ['class'=>'form-control']) !!}
					{!! $errors->first('kegiatan_3_nama', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('kegiatan_3_tempat_tahun') ? ' has-error' : '' }}">
				{!! Form::label('kegiatan_3_tempat_tahun', 'Tempat dan Tahun', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('kegiatan_3_tempat_tahun', null, ['class'=>'form-control']) !!}
					{!! $errors->first('kegiatan_3_tempat_tahun', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('kegiatan_4_nama') ? ' has-error' : '' }}">
				{!! Form::label('kegiatan_4_nama', 'Nama Kegiatan', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('kegiatan_4_nama', null, ['class'=>'form-control']) !!}
					{!! $errors->first('kegiatan_4_nama', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('kegiatan_4_tempat_tahun') ? ' has-error' : '' }}">
				{!! Form::label('kegiatan_4_tempat_tahun', 'Tempat dan Tahun', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('kegiatan_4_tempat_tahun', null, ['class'=>'form-control']) !!}
					{!! $errors->first('kegiatan_4_tempat_tahun', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('kegiatan_5_nama') ? ' has-error' : '' }}">
				{!! Form::label('kegiatan_5_nama', 'Nama Kegiatan', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('kegiatan_5_nama', null, ['class'=>'form-control']) !!}
					{!! $errors->first('kegiatan_5_nama', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group{{ $errors->has('kegiatan_5_tempat_tahun') ? ' has-error' : '' }}">
				{!! Form::label('kegiatan_5_tempat_tahun', 'Tempat dan Tahun', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('kegiatan_5_tempat_tahun', null, ['class'=>'form-control']) !!}
					{!! $errors->first('kegiatan_5_tempat_tahun', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<h3 class="col-md-12">Medical Assesment</h3>
</div>
<div class="form-group{{ $errors->has('penyakit') ? ' has-error' : '' }}">
	{!! Form::label('penyakit', 'Penyakit yang pernah atau sedang diderita', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-3">
		{!! Form::text('penyakit', null, ['class'=>'form-control']) !!}
		{!! $errors->first('penyakit', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('gangguan_jiwa') ? ' has-error' : '' }}">
	{!! Form::label('gangguan_jiwa', 'Mengalami gangguan jiwa', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-3">
		{!! Form::text('gangguan_jiwa', null, ['class'=>'form-control']) !!}
		{!! $errors->first('gangguan_jiwa', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('patah_tlang') ? ' has-error' : '' }}">
	{!! Form::label('patah_tlang', 'Mengalami Patah tulang', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-3">
		{!! Form::text('patah_tlang', null, ['class'=>'form-control']) !!}
		{!! $errors->first('patah_tlang', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('sedang_perawatan') ? ' has-error' : '' }}">
	{!! Form::label('sedang_perawatan', 'Sedang dalam perawatan dokter', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-3">
		{!! Form::text('sedang_perawatan', null, ['class'=>'form-control']) !!}
		{!! $errors->first('sedang_perawatan', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('ketergantungan_obat') ? ' has-error' : '' }}">
	{!! Form::label('ketergantungan_obat', 'Ketergantungan terhadap obat-obat', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-3">
		{!! Form::text('ketergantungan_obat', null, ['class'=>'form-control']) !!}
		{!! $errors->first('ketergantungan_obat', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-2">
			<div class="form-group{{ $errors->has('tinggi_badan') ? ' has-error' : '' }}">
				{!! Form::label('tinggi_badan', 'Tinggi Badan *', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('tinggi_badan', null, ['class'=>'form-control']) !!}
					{!! $errors->first('tinggi_badan', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group{{ $errors->has('berat_badan') ? ' has-error' : '' }}">
				{!! Form::label('berat_badan', 'Berat Badan *', ['class'=>'col-md-12 control-label']) !!}
				<div class="col-md-12">
					{!! Form::text('berat_badan', null, ['class'=>'form-control']) !!}
					{!! $errors->first('berat_badan', '<p class="help-block">:message</p>') !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
	{!! Form::label('foto', 'Foto *', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('foto', ['class'=>'form-control']) !!}
		{!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
		<br>
		@if( ! empty($data) )
			<img src="{{ $data->foto_url }}" width="200" alt="" />
		@endif
	</div>
</div>
<div class="form-group{{ $errors->has('surat_sehat') ? ' has-error' : '' }}">
	{!! Form::label('surat_sehat', 'Surat Sehat *', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('surat_sehat', ['class'=>'form-control']) !!}
		{!! $errors->first('surat_sehat', '<p class="help-block">:message</p>') !!}
		<br>
		@if( ! empty($data) )
			<img src="{{ $data->surat_sehat_url }}" width="200" alt="" />
		@endif
	</div>
</div>
<div class="form-group{{ $errors->has('kartu_pelajar') ? ' has-error' : '' }}">
	{!! Form::label('kartu_pelajar', 'Kartu Pelajar *', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('kartu_pelajar', ['class'=>'form-control']) !!}
		{!! $errors->first('kartu_pelajar', '<p class="help-block">:message</p>') !!}
		<br>
		@if( ! empty($data) )
			<img src="{{ $data->kartu_pelajar_url }}" width="200" alt="" />
		@endif
	</div>
</div>
<div class="form-group{{ $errors->has('kartu_pelajar') ? ' has-error' : '' }}">
	{!! Form::label('kartu_pelajar', '* Wajib di isi.', ['class'=>'col-md-2 control-label']) !!}
</div>
<div class="form-group">
	<div class="col-md-6 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
