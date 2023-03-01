<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nik Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nik', 'Nik:') !!}
    {!! Form::text('nik', null, ['class' => 'form-control','maxlength' => 16,'maxlength' => 16]) !!}
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    {!! Form::select('jenis_kelamin',['Laki laki' => 'Laki laki','Perempuan'=> 'Perempuan']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Rw Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rw', 'Rw:') !!}
    {!! Form::text('rw', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Rt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rt', 'Rt:') !!}
    {!! Form::text('rt', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Nohp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nohp', 'Nohp:') !!}
    {!! Form::text('nohp', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Kecamatan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kecamatan_id', 'Kecamatan Id:') !!}
    {!! Form::select('kecamatan_id',$kecamatans, null, ['class' => 'form-control']) !!}
</div>

<!-- Kelurahan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kelurahan_id', 'Kelurahan Id:') !!}
    {!! Form::select('kelurahan_id',$kelurahans, null, ['class' => 'form-control']) !!}
</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('users_id', null, ['class' => 'form-control']) !!}
</div>