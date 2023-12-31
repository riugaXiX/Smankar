@extends('layouts.template')

@section('csstambahan')
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection


@section('konten')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Calon Peserta didik baru</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="siswa/tambahsiswa"><button type="button" class="btn btn-primary mb-1">+ Tambah Data Siswa</button></a> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>NIS </th>
                    <th>Alamat</th>
                    <th>Nomor Handphone</th>
                    <th>Email</th>
                    <th>aksi</th>

                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($Siswas as $d)
                    <tr>
                      <td>{{ $d['nmSiswa'] }}</td>
                      <td>{{ $d['NIS'] }}</td>
                      <td>{{ $d['almtSiswa'] }}</td>
                      <td>{{ $d['nmrSiswa'] }}</td>
                      <td>{{ $d['email'] }}</td>
                      <td>
                      <a href="/siswa/editsiswa/{{$d['id']}}"><button type="button" class="btn btn-outline-primary">Edit</button></a> 
                      <form action="siswa/hapussiswa/{{ $d['id'] }}" method="post" onsubmit="return confirmDelete()">
                           @csrf
                           <button type="submit" class="btn btn-outline-danger">Hapus</button>
                        </form>
                      </td>
                    </tr>
                      
                    @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Nama</th>
                    <th>NIS </th>
                    <th>Alamat</th>
                    <th>Nomor Handphone</th>
                    <th>Email</th>
                    <th>aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection


@section('jstambahan')
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this data?');
    }
</script>
@endsection