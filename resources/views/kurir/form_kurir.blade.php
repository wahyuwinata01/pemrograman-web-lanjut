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
<h1>Ini Form Kurir</h1>
<a href ="{{route("table_kurir")}}">Lihat Table<a/>
<br>
<form action="{{route("simpan_kurir")}}" method="post">
    @csrf

    Nama        : <input type ="text" name="nama"> <br>
    NIK         : <input type ="text" name="nik"> <br>
    Alamat      : <input type ="text area" name="alamat" size="50"> <br>
    Jenis Kelamin   : <input type ="radio" name="jenis_kelamin" value="Laki - Laki">Laki - laki
                      <input type ="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>
    User        : <select name="user">
        @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->nama}}</option>
        @endforeach
    </select>
    <button type="submit">Simpan</button>
</form>

@endsection