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

<form action="{{route("edit_kurir",['id' => $id])}}" method="post">
    @csrf
    @method("put")

    
    Nama        : <input type ="text" name="nama"> <br>
    NIK         : <input type ="text" name="nik"> <br>
    Alamat      : <input type ="text area" name="alamat" size="50"> <br>
    Jenis Kelamin   : <input type ="radio" name="jenis_kelamin" value="Laki - Laki">Laki - laki
                      <input type ="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>

    <button type="submit">Simpan</button>
</form>

@endsection