<div class="table-responsive">
    <table class="table" id="wargas-table">
        <thead>
        <tr>
            <th>Nama</th>
        <th>Nik</th>
        <th>Alamat</th>
        <th>Rw</th>
        <th>Rt</th>
        <th>Nohp</th>
        <th>Kecamatan Id</th>
        <th>Kelurahan Id</th>
        <th>Users Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($wargas as $warga)
            <tr>
                <td>{{ $warga->nama }}</td>
            <td>{{ $warga->nik }}</td>
            <td>{{ $warga->alamat }}</td>
            <td>{{ $warga->rw }}</td>
            <td>{{ $warga->rt }}</td>
            <td>{{ $warga->nohp }}</td>
            <td>{{ $warga->kecamatan->nama_kecamatan }}</td>
            <td>{{ $warga->kelurahan->nama_kelurahan }}</td>
            <td>{{ $warga->users->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['wargas.destroy', $warga->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('wargas.show', [$warga->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('wargas.edit', [$warga->id]) }}"
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
