
@extends('layouts.template')

@section('csstambahan')

@endsection


@section('konten')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah data siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('siswa.edit',$data->id) }}" method="post">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama siswa</label>
                    <input type="text" name='nmSiswa' class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Siswa" value="{{$data['nmSiswa']}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIS</label>
                    <input type="text" name='NIS' class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Pelajaran"value="{{$data['NIS']}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Siswa</label>
                    <input type="text" name='almtSiswa' class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Pelajaran"value="{{$data['almtSiswa']}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Siswa</label>
                    <input type="text" name='nmrSiswa' class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Pelajaran"value="{{$data['nmrSiswa']}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Siswa</label>
                    <input type="text" name='email' class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Pelajaran"value="{{$data['email']}}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


@endsection


@section('jstambahan')

@endsection