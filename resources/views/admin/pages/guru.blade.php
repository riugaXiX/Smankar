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
                <h3 class="card-title">Guru</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="guru/tambahguru"><button type="button" class="btn btn-primary mb-1">+ Tambah data guru</button></a> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NIK</th>
                    <th>Nama </th>
                    <th>Alamat</th>
                    <th>Nomor Hp</th>
                    <th>Mata Pelajaran</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($Gurus as $d )
                      <tr>
                        <td>{{ $d['NIK'] }}</td>
                        <td>{{ $d['nmGuru'] }}</td>
                        <td>{{ $d['almtGuru'] }}</td>
                        <td>{{ $d['nomorGuru'] }}</td>
                        <td>{{ $d['pelajaran']['nmPelajaran'] }}</td>
                        <td>
                        <a href="guru/editguru/{{$d['id']}}"><button type="button" class="btn btn-outline-success">Edit</button></a> 
                        <form action="guru/hapusguru/{{ $d['id'] }}" method="post" onsubmit="return confirmDelete()">
                           @csrf
                           <button type="submit" class="btn btn-outline-danger">Hapus</button>
                        </form>

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

<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this data?');
    }
</script>
@endsection