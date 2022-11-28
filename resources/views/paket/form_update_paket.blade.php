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

<form action="{{route("edit_paket",['id' => $id])}}" method="post">
    @csrf
    @method("put")

    Nama Pengirim       : <input type ="text" name="nama_pengirim"> <br>
    Nama Penerima       : <input type ="text" name="nama_penerima"> <br>
    Nama Barang         : <input type ="text" name="nama_barang" size="50"> <br>
    alamat              : <input type ="text" name="alamat" size="50"> <br>
    Tanggal Pengiriman  : <input type ="date" name="tanggal_pengiriman" size="50"> <br>
    Tanggal Diterima    : <input type ="date" name="tanggal_diterima" size="50"> <br>

    <button type="submit">Simpan</button>
</form>

@endsection