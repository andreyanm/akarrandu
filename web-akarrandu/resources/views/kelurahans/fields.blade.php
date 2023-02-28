<!-- Nama Kelurahan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_kelurahan', 'Nama Kelurahan:') !!}
    {!! Form::text('nama_kelurahan', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Kecamatan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kecamatan_id', 'Kecamatan Id:') !!}
    {!! Form::select('kecamatan_id',$kecamatans, null, ['class' => 'form-control']) !!}
</div>