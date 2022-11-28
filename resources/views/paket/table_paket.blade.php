<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
<link rel="stylesheet" href="Admin/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
<link rel="stylesheet" href="Adminlte/dist/css/adminlte.min.css">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Responsive Hover Table</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        {{-- <a href ="{{route("form_paket", )}}">Tambah data<a/> --}}
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Pengirim</th>
                <th>Nama Penerima</th>
                <th>Nama Barang</th>
                <th>Alamat</th>
                <th>Tanggal Pengiriman</th>
                <th>Tanggal Penerimaan</th>
                {{-- <th>Created_at</th>
                <th>Updated_at</th> --}}
              </tr>
            </thead>
            <tbody>
                @foreach($data_paket as $paket)
                  <tr>
                    <th scope="row">{{$paket->id}}</th>
                    <td>{{$paket->nama_pengirim}}</td>
                    <td>{{$paket->nama_penerima}}</td>
                    <td>{{$paket->nama_barang}}</td>
                    <td>{{$paket->alamat}}</td>
                    <td>{{$paket->tanggal_pengiriman}}</td>
                    <td>{{$paket->tanggal_diterima}}</td>
                    {{-- <td>{{$paket->created_at}}</td>
                    <td>{{$paket->updated_at}}</td> --}}
                    <td>
                      <a href= "{{route("form_edit_paket", ["id" => $paket->id])}}">Edit</a>
                      
                      <a href= "{{route("paket_show", ["id" => $paket->id])}}">Show</a>

                      <form action="{{route("delete_paket", ['id' => $paket->id])}}" method="post">
                        @csrf
                        @method("delete")
                        <button tytpe="submit">Hapus</button>
                      </form>
                  </tr>
                  @endforeach
                </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

<script src="Adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="Adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Adminlte/dist/js/demo.js"></script>