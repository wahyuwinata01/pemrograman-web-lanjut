@extends("blank")
@section("konten")

<br>

Nama Pengirim : {{$data_paket->nama_pengirim}} <br>
Nama Penerima : {{$data_paket->nama_penerima}} <br>
Nama Barang : {{$data_paket->nama_barang}} <br>
Alamat : {{$data_paket->alamat}} <br>
Tanggal Pengiriman : {{$data_paket->tanggal_pengiriman}} <br>
Tanggal Penerimaan : {{$data_paket->tanggal_penerimaan}} <br>
Created : {{$data_paket->created_at}} <br>
updated : {{$data_paket->update_at}} <br>

@endsection