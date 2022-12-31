<!-- Nip Field -->
<div class="col-sm-12">
    {!! Form::label('nip', 'Nip:') !!}
    <p>{{ $pegawai->nip }}</p>
</div>

<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $pegawai->nama }}</p>
</div>

<!-- Tempat Lahir Field -->
<div class="col-sm-12">
    {!! Form::label('tempat_lahir', 'Tempat Lahir:') !!}
    <p>{{ $pegawai->tempat_lahir }}</p>
</div>

<!-- Jabatan Field -->
<div class="col-sm-12">
    {!! Form::label('jabatan', 'Jabatan:') !!}
    <p>{{ $pegawai->jabatan }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $pegawai->alamat }}</p>
</div>

<!-- Nomor Telepon Field -->
<div class="col-sm-12">
    {!! Form::label('nomor_telepon', 'Nomor Telepon:') !!}
    <p>{{ $pegawai->nomor_telepon }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pegawai->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pegawai->updated_at }}</p>
</div>

