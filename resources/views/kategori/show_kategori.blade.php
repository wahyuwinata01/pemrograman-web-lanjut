@extends("blank")
@section("konten")

<br>

Nama kategori : {{$data_kategori->nama_kategori}} <br>
Created : {{$data_kategori->created_at}} <br>
updated : {{$data_kategori->update_at}} <br>

@endsection