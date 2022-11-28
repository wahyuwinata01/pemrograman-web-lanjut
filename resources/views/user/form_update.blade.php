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

<form action="{{route("edit",['id' => $id])}}" method="post">
    @csrf
    @method("put")

    Nama : <input type ="text" name="nama"> <br>
    email : <input type ="text" name="email"> <br>
    Username : <input type ="text" name="username"> <br>
    password : <input type ="password" name="password"> <br>

    <button type="submit">Simpan</button>
</form>

@endsection