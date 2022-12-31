<!-- Nip Field -->
<div class="col-sm-12">
    {!! Form::label('nip', 'Nip:') !!}
    <p>{{ $gaji->nip }}</p>
</div>

<!-- Nama Pegawai Field -->
<div class="col-sm-12">
    {!! Form::label('nama_pegawai', 'Nama Pegawai:') !!}
    <p>{{ $gaji->nama_pegawai }}</p>
</div>

<!-- Total Gaji Field -->
<div class="col-sm-12">
    {!! Form::label('total_gaji', 'Total Gaji:') !!}
    <p>{{ $gaji->total_gaji }}</p>
</div>

<!-- Nomor Rekening Field -->
<div class="col-sm-12">
    {!! Form::label('nomor_rekening', 'Nomor Rekening:') !!}
    <p>{{ $gaji->nomor_rekening }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $gaji->alamat }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $gaji->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $gaji->updated_at }}</p>
</div>

