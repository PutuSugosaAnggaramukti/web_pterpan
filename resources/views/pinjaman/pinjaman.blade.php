  
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
                <h1>Input Informasi Peminjaman</h1>
                <br>
                    <form action="/pinjaman/tambah" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="Nama">
                        </div>
                        <div class="form-group">
                                <label for="harga">NIM</label>
                                <input class="form-control" type="text" name="Nim">
                        </div>
                        <div class="form-group">
                                <label for="harga">Prodi</label>
                                <input class="form-control" type="text" name="prodi">
                        </div>
                        <div class="form-group">
                                <label for="harga">Alamat Sesuai KTP</label>
                                <input class="form-control" type="text" name="alamat_ktp">
                        </div>
                        <div class="form-group">
                                <label for="harga">Alamat Sekarang</label>
                                <input class="form-control" type="text" name="alamat_saatini">
                        </div>
                        <div class="form-group">
                                <label for="harga">Nomor HP/WA</label>
                                <input class="form-control" type="text" name="no_hp">
                        </div>
                        <div class="form-group">
                                <label for="harga">Pekerjaan Orang Tua</label>
                                <input class="form-control" type="text" name="pekerjaan_ortu">
                        </div>
                        <div class="form-group">
                                <label for="harga">Jumlah Pinjaman</label>
                                <input class="form-control" type="text" name="jumlah_pinjaman">
                        </div>
                        <div class="form-group">
                                <label for="gambar">Unggah KTM</label>
                                <input class="form-control" type="file" name="ktm">
                        </div>
                        <div class="form-group">
                                <label for="gambar">Unggah KHS</label>
                                <input class="form-control" type="file" name="khs">
                        </div>
                        <div class="form-group">
                                <label for="gambar">Unggah Daftar Nilai</label>
                                <input class="form-control" type="file" name="daftar_nilai">
                        </div>
                        <div class="form-group">
                                <label for="gambar">Unggah Slip Gaji</label>
                                <input class="form-control" type="file" name="slip_gaji">
                        </div>
                        <div class="form-group">
                                <label for="gambar">Unggah Fotocopy KK</label>
                                <input class="form-control" type="file" name="kk">
                        </div>
                        <div class="form-group">
                                <label for="gambar">Unggah Invoice</label>
                                <input class="form-control" type="file" name="invoice">
                        </div>
                        <div class="form-group">
                                <label for="gambar">Unggah Bukti Pembayaran Listrik</label>
                                <input class="form-control" type="file" name="bayar_listrik">
                        </div>
                        <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Simpan">
                        </div>
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