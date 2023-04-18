@extends('layouts.app') @section('content')

<div class="container mt-4">
    <div class="p-2">
        <h2>Data Baju</h2>
        <a class="btn btn-success my-2" href="{{ route('create') }}">
            Tambah </a>
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Ukuran</th>
                    <th>Jenis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($baju as $b)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->harga}}</td>
                    <td>{{$b->ukuran}}</td>
                    <td>{{$b->jenis_baju->jenis}}</td>
                    <td>
                        <form action="{{ route('destroy',$b->id) }}" method="POST">
                            {{-- <a class="btn btn-primary" href="{{ route('jenis.edit',$p->id) }}">Edit</a> --}}
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $("#myTable").DataTable();
    });
</script>
@endsection