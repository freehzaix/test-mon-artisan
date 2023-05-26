@section('image')
    <img src="./../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
@endsection

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nature d'intervention</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="./../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="./../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="./../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="./../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="./../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="./../plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('include.menu')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Les Nature d'intervention</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Accueil</a></li>
                                <li class="breadcrumb-item active">Nature d'intervention</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="row">
                <div class="col-4">
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Ajouter une intervention</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @if(session('status'))
                            <div class="alert alert-success"> {{ session('status') }} </div>
                        @endif
                        <form action="{{ route('intervention') }}" method="POST">
                            @csrf
                          <div class="card-body">
                            <div class="form-group">
                              <label for="nature_intervention">Nature d'intervention</label>
                              <input type="text" class="form-control" id="nature_intervention" name="nature_intervention" placeholder="Ajoutez une intervention..">
                            </div>
                          </div>
                          <!-- /.card-body -->
          
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                          </div>
                        </form>
                      </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Liste des natures d'interventions</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <table class="table table-sm">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Nature d'intervention</th>
                                <!--<th>Actions</th>-->
                              </tr>
                            </thead>
                            <tbody>

                                @php $i_intervenion = 1; @endphp
                                @foreach ($natureInterventions as $item)
                                <tr>
                                    <td>{{ $i_intervenion }}</td>
                                    <td>{{ $item->nature_intervention }}</td>
                                    <!--
                                    <td>
                                        <a href="#" class="btn btn-info">Update</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>-->
                                </tr>
                                @php $i_intervenion += 1; @endphp
                                @endforeach

                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                </div>
            </div>

           
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="https://freehzaix.com/boutique" target="_blank">Jean-Luc
                    DOH</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block"></div>
        </footer>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="./../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="./../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="./../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Sparkline -->
    <script src="./../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="./../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="./../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="./../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="./../plugins/moment/moment.min.js"></script>
    <script src="./../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../dist/js/pages/dashboard.js"></script>
</body>

</html>
