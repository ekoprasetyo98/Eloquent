@extends('master')
@section('konten')
        <div class="card mt-3">
            <div class="card-header text-center">
                Daftar Data Pegawai
            </div>
            <div class="card-body p-3">
                <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-plus-lg"></i> Tambah Data
                </button>   
                <table class="table table-bordered table-striped table-hover mt-3">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
            
                    <?php $no=1?>
                    @foreach($dataPegawai as $d)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$d->nama}}</td>
                        <td>{{$d->alamat}}</td>
                        <td>
                            <a class="btn btn-secondary" href="/pegawai/detail/{{$d->id}}"><i class="bi bi-eye-fill"></i></a>
                            <a class="btn btn-warning" href="/pegawai/edit/{{$d->id}}"><i class="bi bi-pencil-fill"></i></a>
                            <a class="btn btn-danger" href="/pegawai/delete/{{$d->id}}"><i class="bi bi-trash-fill"></i></a>

                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form input data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="/pegawai/input" method="POST">
            {{csrf_field()}}
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Masukan nama" required="">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" placeholder="Masukan alamat" required="">
            </div>
            
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>
    <div class="modal-footer">
    </div>
    </div>
</div>
</div>
    @endsection