<!-- Nama Kelurahan Field -->
<div class="col-sm-12">
    {!! Form::label('nama_kelurahan', 'Nama Kelurahan:') !!}
    <p>{{ $kelurahan->nama_kelurahan }}</p>
</div>

<!-- Kecamatan Id Field -->
<div class="col-sm-12">
    {!! Form::label('nama_kecamatan', 'Kecamatan:') !!}
    <p>{{ $kelurahan->kecamatan->nama_kecamatan }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('kecamatan_id', 'Id Kecamatan:') !!}
    <p>{{ $kelurahan->kecamatan_id }}</p>
</div>

