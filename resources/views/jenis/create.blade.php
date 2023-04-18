@extends('layouts.app') @section('content')
<div class="container mt-4">
    <div class="card p-4">
        <h1>Tambah Jenis Baju</h1>
        <form action="{{ route('jenis.store') }}" method="POST">
            <form action="" method="POST">
                @method('POST') @csrf
                <div class="mb-3">
                    <label for="jenis" class="form-label">Jenis</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" />
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
    </div>
</div>

@endsection