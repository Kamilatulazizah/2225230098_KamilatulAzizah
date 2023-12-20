@extends('layout.siswa')
@section('kontent')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<h1 class="text-center mb-5">Table Data Siswa</h1>
<p></p>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama_depan</th>
                <th>Nama_belakang</th>
                <th>Jenis_kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->Nama_depan}}</td>
                <td>{{$item->Nama_belakang}}</td>
                <td>{{$item->Jenis_kelamin}}</td>
                <td>{{$item->Agama}}</td>
                <td>{{$item->Alamat}}</td>
                <td>
                    <a class='btn btn-warning btn-sm' href="{{url('/isidata/'.$item->Nama_depan.'/edit')}}">Edit</a>
                    <form onsubmit="return confirm('Apakah Yakin?')" class="d-inline" action="{{'/isidata/'.$item->Nama_depan}}" method="post"> @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                    <a href="/"class="btn btn-success">Tambah +</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection