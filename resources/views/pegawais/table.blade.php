<div class="table-responsive">
    <table class="table" id="pegawais-table">
        <thead>
        <tr>
            <th>Nip</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Jabatan</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pegawais as $pegawai)
            <tr>
                <td>{{ $pegawai->nip }}</td>
            <td>{{ $pegawai->nama }}</td>
            <td>{{ $pegawai->tempat_lahir }}</td>
            <td>{{ $pegawai->jabatan }}</td>
            <td>{{ $pegawai->alamat }}</td>
            <td>{{ $pegawai->nomor_telepon }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pegawais.destroy', $pegawai->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pegawais.show', [$pegawai->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pegawais.edit', [$pegawai->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
