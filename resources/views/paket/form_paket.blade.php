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
<a href ="{{route("table_paket")}}">Lihat Table<a/>
<br>
<form action="{{route("simpan_paket")}}" method="post">
    @csrf
                          <input type ="text" hidden name="id_user" value="{{$user->id}}"><br>
    Nama Pengirim       : <input type ="#" name="nama_pengirim" value="{{$user->nama}}"><br>
    Nama Penerima       : <input type ="text" name="nama_penerima"> <br>
    Nama Barang         : <input type ="text" name="nama_barang" size="50"> <br>
    Kategori            : <select name="kategori">
        @foreach($kategoris as $kategori)
            <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option></select><br>
        @endforeach
    alamat              : <input type ="text" name="alamat" size="50"> <br>
    posisi_barang       : <input type ="text" name="posisi_barang" size="50"> <br>
    Tanggal Pengiriman  : <input type ="date" name="tanggal_pengiriman" size="50"> <br>
    Tanggal Diterima    : <input type ="date" name="tanggal_diterima" size="50"> <br>

    <button type="submit">Simpan</button>
</form>

@endsection