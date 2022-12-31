<!-- Nip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nip', 'Nip:') !!}
    {!! Form::number('nip', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Pegawai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_pegawai', 'Nama Pegawai:') !!}
    {!! Form::text('nama_pegawai', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Gaji Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_gaji', 'Total Gaji:') !!}
    {!! Form::text('total_gaji', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomor Rekening Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomor_rekening', 'Nomor Rekening:') !!}
    {!! Form::text('nomor_rekening', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>