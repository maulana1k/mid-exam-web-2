@extends('layouts.app') @section('content')
<div class="container mt-4">
    <div class="card p-4">
        <h1>Create Post</h1>
        <form action="{{ route('store') }}" method="POST">
            @method('POST') @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" />
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" />
            </div>

            <div class="mb-3">
                <label for="ukuran" class="form-label">Ukuran</label>
                <select class="form-control" id="ukuran" name="ukuran">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_jenis" class="form-label">Jenis Baju</label>
                <select class="form-control select2" id="id_jenis" name="id_jenis">
                    @foreach ($jenis as $j)
                    <option value="{{$j->id}}">{{$j->jenis}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $(".select2").select2({
            placeholder: "Search...",
            allowClear: true,
        });
    });
</script>
@endsection