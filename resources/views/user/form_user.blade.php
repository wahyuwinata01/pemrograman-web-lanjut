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
<a href ="{{route("table-saya")}}">Lihat Table<a/>
<br>
<form action="{{route("simpan-saya")}}" method="post">
    @csrf

    Nama        : <input type ="text" name="nama"> <br>
    email       : <input type ="text" name="email"> <br>
    Username    : <input type ="text" name="username"> <br>
    password    : <input type ="password" name="password"> <br>
    level       : <select name="level">
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                  </select> <br>

    <button type="submit">Simpan</button>
</form>

@endsection