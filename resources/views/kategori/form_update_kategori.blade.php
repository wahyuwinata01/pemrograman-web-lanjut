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
<form action="{{route("edit_kategori",['id' => $id])}}" method="post">
    @csrf
    @method("put")
    Nama Kategori       : <input type ="text" name="nama_kategori"> <br>

    <button type="submit">Simpan</button>
</form>

@endsection