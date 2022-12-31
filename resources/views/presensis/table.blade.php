<div class="table-responsive">
    <table class="table" id="presensis-table">
        <thead>
        <tr>
            <th>Id Presensi</th>
        <th>Nip</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>Keterangan</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($presensis as $presensi)
            <tr>
                <td>{{ $presensi->id_presensi }}</td>
            <td>{{ $presensi->nip }}</td>
            <td>{{ $presensi->tanggal }}</td>
            <td>{{ $presensi->status }}</td>
            <td>{{ $presensi->keterangan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['presensis.destroy', $presensi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('presensis.show', [$presensi->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('presensis.edit', [$presensi->id]) }}"
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
