<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashboard | Tutor</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/lte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/lte/plugins/fontawesome-free/css/all.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- HEADER -->
<<<<<<< HEAD
@include('/header')

<!-- Main Sidebar Container -->
@include('murid/sidebar')
=======
@include('tutor/header')

<!-- Main Sidebar Container -->
@include('tutor/sidebar')
>>>>>>> 9066250bfd05fd696dcb57e927667e360c54b1f8
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
<<<<<<< HEAD
            <h1 class="m-0 text-dark">Invoice</h1>
=======
            <h1 class="m-0 text-dark">Jadwal Mengajar</h1>
>>>>>>> 9066250bfd05fd696dcb57e927667e360c54b1f8
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              <table class="table table-responsive-lg table-bordered small" id="jadwal">
                <thead class="thead-dark">
                    <tr>
<<<<<<< HEAD
                        <th>No.</th>
                        <th>No. Invoice</th>
                        <th>Kelas</th>
                        <th>Program</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Konfirmasi</th>
                        <th>Unduh</th>
=======
                        
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Pengaturan</th>
>>>>>>> 9066250bfd05fd696dcb57e927667e360c54b1f8
                    </tr>
                </thead>
                <tbody>
                    <tr>
<<<<<<< HEAD
                        <td>1.</td>
                        <td>#190930001</td>
                        <td>6 SD</td>
                        <td>1</td>
                        <td>Sendowo</td>
                        <td>
                          <a class=" btn btn-sm btn-danger" style="color:white;">
                            <span>Belum Konfirmasi</span>
                          </a>
                        </td>
                        <td>
                          <a class=" btn btn-sm btn-success" style="color:white;">
                            <span class="fa fa-envelope"></span>
                          </a>
                        </td>
                        <td>
                          <a href="/invoicenya" class=" btn btn-sm btn-success" style="color:white;">
                            <span class="fa fa-download"></span>
                          </a>
                        </td>
                    </tr>
                </tbody>
            </table>
=======
                        
                        <td>6 SD</td>
                        <td>Matematika</td>
                        <td>Selasa, Rabu, Kamis</td>
                        <td>Ruang HY - U202</td>
                        <td>
                            <a style="color:#158ADF; cursor:pointer">
                            <span>Edit</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
                </table>
>>>>>>> 9066250bfd05fd696dcb57e927667e360c54b1f8
              </div>
            </div>

            
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<<<<<<< HEAD


<!-- Main Footer -->
@include('murid/footer')


<!-- REQUIRED SCRIPTS -->
<script
=======
  <script
>>>>>>> 9066250bfd05fd696dcb57e927667e360c54b1f8
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> 
    <script>
      $(document).ready( function () {
<<<<<<< HEAD
      $('#invoice').DataTable();
      });
    </script>

=======
      $('#tutor').DataTable();
      });
    </script>

<!-- Main Footer -->
@include('tutor/footer')

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

>>>>>>> 9066250bfd05fd696dcb57e927667e360c54b1f8
<!-- jQuery -->
<script src="{{ asset('/lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>