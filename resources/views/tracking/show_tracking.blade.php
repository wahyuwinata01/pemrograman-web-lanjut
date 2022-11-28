@extends("blank")
@section("konten")

<br>

ID_Tracking : {{$data_tracking->id}} <br>
ID Paket : {{$data_tracking->paket->id}} <br>
Nama Barang : {{$data_tracking->paket->nama_barang}} <br>
Posisi Barang : {{$data_tracking->posisi_barang}} <br>
Tanggal : {{$data_tracking->tanggal}} <br>
Created : {{$data_tracking->created_at}} <br>
updated : {{$data_tracking->update_at}} <br>

@endsection