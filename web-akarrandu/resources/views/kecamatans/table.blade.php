<div class="table-responsive">
    <table class="table" id="kecamatans-table">
        <thead>
        <tr>
            <th>Nama Kecamatan</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($kecamatans as $kecamatan)
            <tr>
                <td>{{ $kecamatan->nama_kecamatan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['kecamatans.destroy', $kecamatan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('kecamatans.show', [$kecamatan->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('kecamatans.edit', [$kecamatan->id]) }}"
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
    {{ $kecamatans->links() }} 
</div>
