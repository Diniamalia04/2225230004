@extends('layout.dashboard')
@section('content')
<link rel="stylesheet" href="/css/style.css">
<body>
<div class="container">
    <h2>Upload Cerpen Anda</h2>
        <form method="POST" action="/isian" >
        @csrf
            <div class="mb-3">
                <label for="penulis" class="form-label">Nama Penulis:</label>
                <input type="text" id="penulis" name="penulis" style="width:90%;" class="fore-control" placeholder="masukan nama anda" value="{{Session::get('penulis')}}">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Cerita:</label>
                <input type="text" id="judul" name="judul" style="width:90%;" class="fore-control" placeholder="masukan judul cerpen anda" value="{{Session::get('judul')}}">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre Cerita:</label>
                <input type="text" id="genre" name="genre" style="width:90%;" class="fore-control" placeholder="masukan genre dalam cerpen anda" value="{{Session::get('genre')}}">
            </div>
            <div class="mb-3">
                <label for="cerita" class="form-label">Cerita:</label>
                <input type="file" id="cerita" name="cerita" style="width:90%;" class="fore-control" value="{{Session::get('cerita')}}">
            </div>
            <div>
                <button type="submit">Upload</button>
            </div>
        </form>
</div>
</body>
@endsection