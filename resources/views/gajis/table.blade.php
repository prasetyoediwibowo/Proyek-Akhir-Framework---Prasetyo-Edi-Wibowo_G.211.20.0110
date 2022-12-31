<div class="table-responsive">
    <table class="table" id="gajis-table">
        <thead>
        <tr>
            <th>Nip</th>
        <th>Nama Pegawai</th>
        <th>Total Gaji</th>
        <th>Nomor Rekening</th>
        <th>Alamat</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($gajis as $gaji)
            <tr>
                <td>{{ $gaji->nip }}</td>
            <td>{{ $gaji->nama_pegawai }}</td>
            <td>{{ $gaji->total_gaji }}</td>
            <td>{{ $gaji->nomor_rekening }}</td>
            <td>{{ $gaji->alamat }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['gajis.destroy', $gaji->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gajis.show', [$gaji->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('gajis.edit', [$gaji->id]) }}"
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
