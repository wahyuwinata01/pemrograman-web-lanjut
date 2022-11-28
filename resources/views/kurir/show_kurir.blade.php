@extends("blank")
@section("konten")


Nama : {{$data_kurir->nama_kurir}} <br>
NIK : {{$data_kurir->nik}} <br>
Alamat : {{$data_kurir->alamat}} <br>
Jenis Kelamin : {{$data_kurir->jenis_kelamin}} <br>
Created : {{$data_kurir->created_at}} <br>
updated : {{$data_kurir->update_at}} <br>

@endsection