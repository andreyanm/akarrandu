<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $warga->nama }}</p>
</div>

<!-- Nik Field -->
<div class="col-sm-12">
    {!! Form::label('nik', 'Nik:') !!}
    <p>{{ $warga->nik }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $warga->alamat }}</p>
</div>

<!-- Rw Field -->
<div class="col-sm-12">
    {!! Form::label('rw', 'Rw:') !!}
    <p>{{ $warga->rw }}</p>
</div>

<!-- Rt Field -->
<div class="col-sm-12">
    {!! Form::label('rt', 'Rt:') !!}
    <p>{{ $warga->rt }}</p>
</div>

<!-- Nohp Field -->
<div class="col-sm-12">
    {!! Form::label('nohp', 'Nohp:') !!}
    <p>{{ $warga->nohp }}</p>
</div>

<!-- Kecamatan Id Field -->
<div class="col-sm-12">
    {!! Form::label('kecamatan_id', 'Kecamatan Id:') !!}
    <p>{{ $warga->kecamatan->nama_kecamatan }}</p>
</div>

<!-- Kelurahan Id Field -->
<div class="col-sm-12">
    {!! Form::label('kelurahan_id', 'Kelurahan Id:') !!}
    <p>{{ $warga->kelurahan->nama_kelurahan }}</p>
</div>

<!-- Users Id Field -->
<div class="col-sm-12">
    {!! Form::label('users_id', 'Users Id:') !!}
    <p>{{ $warga->users->name }}</p>
</div>

