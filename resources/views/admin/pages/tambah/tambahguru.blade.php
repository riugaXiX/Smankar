
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
              <form action="{{ route('guru.tambah') }}" method="post">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" name='NIK' class="form-control" id="exampleInputEmail1" placeholder="Masukan NIK Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name='nmGuru' class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Guru">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name='almtGuru' class="form-control" id="exampleInputEmail1" placeholder="Masukan Alamat Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor HP</label>
                    <input type="text" name='nomorGuru' class="form-control" id="exampleInputEmail1" placeholder="Masukan Nomor Hp Anda">
                  </div>
                  <div class="form-group">
                  <label for="pelajaran">Pilih Mata pelajaran:</label>
                  <select class='form-control' name="pelajaran_id" id="category">
                   <option value="">Pilih Mata Pelajaran</option>
                   @foreach($Pelajarans as $d)
                  <option value="{{ $d['id'] }}">{{ $d['nmPelajaran'] }}</option>
                  @endforeach
                  </select>
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