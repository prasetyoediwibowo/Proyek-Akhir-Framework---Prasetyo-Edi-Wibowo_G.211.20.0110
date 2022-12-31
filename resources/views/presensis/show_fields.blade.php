<!-- Id Presensi Field -->
<div class="col-sm-12">
    {!! Form::label('id_presensi', 'Id Presensi:') !!}
    <p>{{ $presensi->id_presensi }}</p>
</div>

<!-- Nip Field -->
<div class="col-sm-12">
    {!! Form::label('nip', 'Nip:') !!}
    <p>{{ $presensi->nip }}</p>
</div>

<!-- Tanggal Field -->
<div class="col-sm-12">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    <p>{{ $presensi->tanggal }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $presensi->status }}</p>
</div>

<!-- Keterangan Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{{ $presensi->keterangan }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $presensi->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $presensi->updated_at }}</p>
</div>

