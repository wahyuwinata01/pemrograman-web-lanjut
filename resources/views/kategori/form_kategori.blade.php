@extends("blank")
@section("konten")

@if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif
<br>
<h1>Ini Form Kategori</h1>
<a href ="{{route("table_kategori")}}">Lihat Table<a/>
<br>
<form action="{{route("simpan_kategori")}}" method="post">
    @csrf

    Nama Kategori       : <input type ="text" name="nama_pengirim"> <br>

    <button type="submit">Simpan</button>
</form>

@endsection