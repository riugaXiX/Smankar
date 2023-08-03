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
                <h3 class="card-title">Mata Pelajaran</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="pelajaran/tambahpelajaran"><button type="button" class="btn btn-primary mb-1">+ Tambah Data Mata Pelajaran</button></a> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Kode Pelajaran</th>
                    <th>Nama Pelajaran </th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($pelajarans as $pelajaran )
                      <tr>
                        <td>{{ $pelajaran['kdPelajaran'] }}</td>
                        <td>{{ $pelajaran['nmPelajaran'] }}</td>
                        <td>
                          <div class="">
                            <a href="pelajaran/editpelajaran/{{$pelajaran['id']}}"><button type="button" class="btn btn-outline-success">Edit</button></a> 
                            <form action="pelajaran/hapuspelajaran/{{ $pelajaran['id'] }}" method="post" onsubmit="return confirmDelete()">
                              @csrf
                              <button type="submit" class="btn btn-outline-danger">Hapus</button>
                            </form>
                          </div>
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