  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Form Pinjaman</title>
        <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
        <link rel="icon" href="{{asset('admin/image/logo_sitesi.png')}}">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">SITESI</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Cari ..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        @guest

                        @else
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                        @endguest
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    <div class="nav">
                            <a class="nav-link" href="/admin_test">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <h1>Input Beasiswa</h1>
                <br>
                <form action="{{route('prosesviewdata',['id'=> $input_beasiswa->id])}}" method="get">
                {{csrf_field()}}
                <div class="form-group">
                     <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Nama</label>
                             <div class="cols-sm-10">
                                <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="nama" id="username" readonly value="{{$input_beasiswa->nama}}"/>
                                 </div>
                            </div>
                    </div>
                    <div class="form-group">
                     <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">NIM</label>
                             <div class="cols-sm-10">
                                <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="nim" id="username" readonly value="{{$input_beasiswa->nim}}"/>
                                 </div>
                            </div>
                    </div> 
                    <div class="form-group">
                     <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">IPS</label>
                             <div class="cols-sm-10">
                                <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="ips" id="username" readonly value="{{$input_beasiswa->ips}}"/>
                                 </div>
                            </div>
                    </div>
                    <div class="form-group">
                     <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Periode</label>
                             <div class="cols-sm-10">
                                <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="periode" id="username" readonly value="{{$input_beasiswa->periode}}"/>
                                 </div>
                            </div>
                    </div>     
                    </div>     <div class="form-group">
                     <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Transkrip</label>
                             <div class="cols-sm-10">
                                <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="transkrip" id="username" readonly value="{{$input_beasiswa->transkrip}}"/>
                                 </div>
                            </div>
                    </div> 
                    <div class="form-group">
                         
                            <label for="exampleInputEmail1">Validasi : </label>
                            <select class="selectpicker form-control" name="status_beasiswa">
                            <option>Setuju</option>
                            <option>Tidak Setuju</option>
                            </select>
                    </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                </main>
            </div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SITESI 2021</div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('admin/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>