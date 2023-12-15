@extends('layout.dashboard')
@section('content')
<a href="/">tambah data </a>
<table class=table border="2" cellpanding="10" cellspacing="0" >
    <thead>
        <tr>
            <th>Nama Penulis</th>
            <th>Judul Cerita</th>
            <th>Genre Cerita</th>
            <th>Cerita</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->penulis}}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->genre}}</td>
            <td>{{$item->cerita}}</td>
            <td>
                <a class="btn btn-warning btn-sm" href="{{url('/isian/'.$item->penulis.'/edit')}}">Edit</a>
                <form onsubmit="return confirm('Apakah anda yakin?')" class="d-inline" action="{{'/isian/'.$item->penulis}}" method="post">@csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection