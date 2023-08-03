
@extends('layouts.template')

@section('csstambahan')

@endsection


@section('konten')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah data Guru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('pelajaran.edit',$data->id) }}" method="post">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Pelajaran</label>
                    <input type="text" name='kdPelajaran' class="form-control" id="exampleInputEmail1" placeholder="Masukan Kode Pelajaran" value="{{$data['kdPelajaran']}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelajaran</label>
                    <input type="text" name='nmPelajaran' class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Pelajaran" value="{{$data['nmPelajaran']}}">
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