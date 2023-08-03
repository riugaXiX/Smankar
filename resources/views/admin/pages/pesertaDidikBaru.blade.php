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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>NIS </th>
                    <th>Alamat</th>
                    <th>Nomor Handphone</th>
                    <th>Email</th>
                    <th>Bahasa inggris</th>
                    <th>Indonesia</th>
                    <th>Matematika</th>
                    <th>Total Pada nilai</th>
                    <th>aksi</th>

                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($PPDBS as $d)
                    <tr>
                      <td>{{ $d['nmSiswa'] }}</td>
                      <td>{{ $d['NIS'] }}</td>
                      <td>{{ $d['almtSiswa'] }}</td>
                      <td>{{ $d['nmrSiswa'] }}</td>
                      <td>{{ $d['email'] }}</td>
                      <td>{{ $d['inggris'] }}</td>
                      <td>{{ $d['indonesia'] }}</td>
                      <td>{{ $d['matematika'] }}</td>
                      <td>{{ $d['totalnilai']}}</td>
                      <td>
                      <a href="ppdb/terima/{{ $d['id'] }}"><button type="button" class="btn btn-outline-primary">Terima</button></a> 
                      <a href="/tolak/{{ $d['id']}} "><button type="button" class="btn btn-outline-danger">Tolak</button></a>

                      </td>
                    </tr>
                      
                    @endforeach
                  
                  </tbody>
                  <tfoot>
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
@endsection