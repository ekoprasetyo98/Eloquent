@extends('master')
@section('konten')
<div class="card">
    <div class="card-header">
        Form edit
    </div>
    <div class="card-body">
        {{-- @foreach($dataPegawaiById as $d) --}}
        <form action="/pegawai/update/{{$dataPegawaiById->id}}" method="POST">
            {{csrf_field()}}
            {{method_field('POST')}}
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" value="{{$dataPegawaiById->nama}}" required="">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" value="{{$dataPegawaiById->alamat}}" required="">
            </div>
            
            <a href="/pegawai" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
        {{-- @endforeach --}}
    </div>
</div>
    
@endsection