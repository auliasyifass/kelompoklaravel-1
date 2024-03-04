@extends('layouts.admin')

@section('judul', 'Data Pelajar')

@section('content')
<div class="p-3">
    <a href="{{ route('pelajar.create') }}" class="btn btn-primary my-3">Tambah Data Pelajar</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">No HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelajars as $pelajar)
            <tr>
                <td>{{ $pelajar->id }}</td>
                <td>{{ $pelajar->nis }}</td>
                <td>{{ $pelajar->nama }}</td>
                <td>{{ $pelajar->no_hp }}</td>
                <td>{{ $pelajar->alamat }}</td>
                <td>

                    <a href="{{ route('pelajar.edit', $pelajar->id) }}" class="btn btn-sm btn-info">Show</a>
                    <a href="{{ route('pelajar.edit', $pelajar->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('pelajar.destroy', $pelajar->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data pelajar ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
<!-- Include datatables script -->
<script src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
<script>
    // Initialize datatables
    $(document).ready(function() {
        $('#example1').DataTable();
    });
</script>
@endsection
