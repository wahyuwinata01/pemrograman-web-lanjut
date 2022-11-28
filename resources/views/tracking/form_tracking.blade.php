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
<h1>Ini Form Paket</h1>
<a href ="{{route("table_tracking")}}">Lihat Table<a/>
<br>
<form action="{{route("simpan_tracking")}}" method="post">
    @csrf

    Posisi Barang       : <input type ="text" name="posisi_barang"> <br>
    Tanggal             : <input type ="date" name="tanggal" size="50"> <br>

    <button type="submit">Simpan</button>
</form>

@endsection