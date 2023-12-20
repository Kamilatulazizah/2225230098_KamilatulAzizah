@extends('layout.siswa')
@section('kontent')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<h1 class="text-center mb-5">Edit Data Pendaftaran Siswa Baru</h1>
<form method="POST" action="{{'/isidata/'.$data->Nama_depan}}">
    @csrf
    @method('put')
<div class="container">
    <div class="mb-3">
        <label for="Nama_depan" class="form-lable">Nama_depan:</label>
        <input type="text" id="Nama_depan" name="Nama_depan" class="form-control" placeholder="Nama_depan" value="{{$data->Nama_depan}}">
    </div>
    <div class="mb-3">
        <label for="Nama_belakang" class="form-lable">Nama_belakang:</label>
        <input type="text" id="Nama_belakang" name="Nama_belakang" class="form-control" placeholder="Nama_belakang" value="{{$data->Nama_belakang}}">
    </div>
    <div class="mb-3">
        <label for="Jenis_kelamin" class="form-lable">Jenis_kelamin:</label>
        <input type="text" id="Jenis_kelamin" name="Jenis_kelamin" class="form-control" placeholder="Jenis_kelamin" value="{{$data->Jenis_kelamin}}">
    </div>
    <div class="mb-3">
        <label for="Agama" class="form-lable">Agama:</label>
        <input type="text" id="Agama" name="Agama" class="form-control" placeholder="Agama" value="{{$data->Agama}}">
    </div>
    <div class="mb-3">
        <label for="Alamat" class="form-lable">Alamat:</label>
        <input type="text" id="Alamat" name="Alamat" class="form-control" placeholder="Alamat" value="{{$data->Alamat}}">
    </div>
    <div class="d-grid">
        <button>Edit</button> <a class="btn btn-secondry" href="/isidata">Kembali</a>
    </div>
</form>
@endsection