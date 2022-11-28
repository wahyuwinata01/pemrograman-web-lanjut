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

<form action="{{route("edit_tracking",['id' => $id])}}" method="post">
    @csrf
    @method("put")

    Posisi Barang       : <input type ="text" name="posisi_barang"> <br>
    Tanggal             : <input type ="date" name="tanggal"> <br>
    <button type="submit">Simpan</button>
</form>

@endsection