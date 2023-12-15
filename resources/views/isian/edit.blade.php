@extends('layout.dashboard')
@section('content')
<h1>Ubah data cerpen anda</h1>
<form method="POST" action="{{'/isian/'.$data->penulis}}">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="penulis" class="form-label">Nama Penulis:</label>
        <input type="text" id="penulis" name="penulis" class="fore-control" placeholder="penulis" value="{{$data->penulis}}">
    </div>
    <div class="mb-3">
        <label for="judul" class="form-label">Judul Cerita:</label>
        <input type="text" id="judul" name="judul" class="fore-control" placeholder="judul" value="{{$data->judul}}">
    </div>
    <div class="mb-3">
        <label for="genre" class="form-label">Genre Cerita:</label>
        <input type="text" id="genre" name="genre" class="fore-control" placeholder="genre" value="{{$data->genre}}">
    </div>
    <div class="mb-3">
        <label for="cerita" class="form-label">Cerita:</label>
        <input type="file" id="cerita" name="cerita" class="fore-control" placeholder="cerita" value="{{$data->cerita}}">
    </div>
    <div class="mb-3">
        <button>Edit!</button><a class="btn btn-secondry" href="/isian">kembali</a>
    </div>    
</form>
@endsection