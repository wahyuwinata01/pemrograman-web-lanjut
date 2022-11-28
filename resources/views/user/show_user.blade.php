@extends("blank")
@section("konten")

<br>

Nama : {{$data_user->nama}} <br>
Username : {{$data_user->username}} <br>
email : {{$data_user->email}} <br>
Created : {{$data_user->created_at}} <br>
updated : {{$data_user->update_at}} <br>

@endsection