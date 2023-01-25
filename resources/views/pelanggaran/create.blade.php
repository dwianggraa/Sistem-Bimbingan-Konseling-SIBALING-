<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard &mdash; Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../vendor/perfect-scrollbar/css/perfect-scrollbar.css">

    <!-- CSS for this page only -->
    <link rel="stylesheet" href="../vendor/chart.js/dist/Chart.min.css">
    <link rel="stylesheet" href="{{ asset('../vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="../vendor/izitoast/dist/css/iziToast.min.css">
    <!-- End CSS  -->

    <link rel="stylesheet" href="../assets/css/style.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-override.min.css">
    <link rel="stylesheet" id="theme-color" href="../assets/css/dark.min.css">
</head>

<body>
    <div id="app">
        <div class="shadow-header"></div>
        <header class="header-navbar fixed">
            <div class="toggle-mobile action-toggle"><i class="fas fa-bars"></i></div>
            <div class="header-wrapper">
                <div class="header-left">
                    <div class="theme-switch-icon"></div>
                </div>
                <div class="header-content">
                    <div class="notification dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-envelope"></i>
                        </a>
                        <ul class="dropdown-menu medium">
                            <li class="menu-header">
                                <a class="dropdown-item" href="#">Message</a>
                            </li>
                            <li class="menu-content ps-menu">
                                <a href="#">
                                    <div class="message-image">
                                        <img src="../assets/images/avatar1.png" class="rounded-circle w-100"
                                            alt="user1">
                                    </div>
                                    <div class="message-content read">
                                        <div class="subject">
                                            John
                                        </div>
                                        <div class="body">
                                            Please call me at 9pm
                                        </div>
                                        <div class="time">Just now</div>
                                    </div>
                                </a>

                            </li>
                        </ul>
                    </div>
                    <div class="notification dropdown">
                        <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-bell"></i>
                            <span class="badge">12</span>
                        </a>
                        <ul class="dropdown-menu medium">
                            <li class="menu-header">
                                <a class="dropdown-item" href="#">Notification</a>
                            </li>
                            <li class="menu-content ps-menu">
                                <a href="#">
                                    <div class="message-icon text-danger">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="message-content read">
                                        <div class="body">
                                            There's incoming event, don't miss it!!
                                        </div>
                                        <div class="time">Just now</div>
                                    </div>
                                </a>


                            </li>
                        </ul>
                    </div>
                    <div class="dropdown dropdown-menu-end">
                        <a href="#" class="user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="label">
                                <span></span>
                                <div>Admin</div>
                            </div>
                            <img class="img-user" src="../assets/images/avatar1.png" alt="user"srcset="">
                        </a>
                        <ul class="dropdown-menu small">
                            <!-- <li class="menu-header">
                                <a class="dropdown-item" href="#">Notifikasi</a>
                            </li> -->
                            <li class="menu-content ps-menu">
                                <a href="#">
                                    <div class="description">
                                        <i class="ti-user"></i> Profile
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="description">
                                        <i class="ti-settings"></i> Setting
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="description">
                                        <i class="ti-power-off"></i> Logout
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>
        <nav class="main-sidebar ps-menu">
            <div class="sidebar-toggle action-toggle">
                <a href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <div class="sidebar-opener action-toggle">
                <a href="#">
                    <i class="ti-angle-right"></i>
                </a>
            </div>
            <div class="sidebar-header">
                <div class="text">Sibaling</div>
                <div class="close-sidebar action-toggle">
                    <i class="ti-close"></i>
                </div>
            </div>
            <div class="sidebar-content">
                <ul>
                    <li class="">
                        <a href="/dashboard-admin" class="link">
                            <i class="ti-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/datasiswa" class="link">
                            <i class="ti-desktop"></i>
                            <span>Data Siswa</span>
                        </a>

                    </li>
                    <li class="active open">
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-desktop"></i>
                            <span>Akademik</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="active open"><a href="/pelanggaran"
                                    class="link"><span>Pelanggaran</span></a></li>
                            <li><a href="/perizinan" class="link"><span>Perizinan</span></a></li>
                        </ul>

                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-layers-alt"></i>
                            <span>Non Akademik</span>
                        </a>
                        <ul class="sub-menu ">
                            <li><a href="/anbk" class="link"><span>ANBK</span></a></li>
                            <li><a href="/beasiswa" class="link"><span>Beasiswa</span></a></li>
                            <li><a href="/kesehatan" class="link"><span>Kesehatan Mental</span></a></li>

                        </ul>
                    </li>


                </ul>
            </div>
        </nav>

        @yield('main')
        <div class="main-content">

            <div class="content-wrapper">
                <div class="row same-height">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h3>Form Tambah Data Pelanggaran</h3><br>
                                <div class="row">

                                    <div class="col-md-12">
                                        <form action="{{ url('pelanggaran/simpan') }}" method="POST">
                                            @csrf
                                            <div class="mb-2">
                                                <label for="datepicker-icon" class="form-label">Tanggal
                                                    Pelanggaran</label>
                                                <div class="input-group input-append date"
                                                    data-date-format="dd-mm-yyyy">
                                                    <input name="tgl" id="tgl" class="form-control"
                                                        type="text" readonly="" autocomplete="off">
                                                    <button class="btn btn-outline-secondary" type="button">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="basicInput" class="form-label"> Nama Siswa</label>
                                                <input name="name" id="name" class="form-control"
                                                    type="text" placeholder="Masukkan nama siswa"
                                                    aria-label="default input example">
                                            </div>
                                            <div class="mb-2">
                                                <label for="basicInput" class="form-label"> NIS (Nomor Induk
                                                    Sekolah)</label>
                                                <input name="nis" id="nis" class="form-control"
                                                    type="text" placeholder="Masukkan NIS"
                                                    aria-label="default input example">
                                            </div>
                                            <div class="mb-2">
                                                <label for="basicInput" class="form-label"> Kelas</label>
                                                <select id="kelas"
                                                    name="kelas"class="js-example-basic-single form-select">
                                                    <option>Pilih kelas</option>
                                                    <option data-kelas="10">10</option>
                                                    <option data-kelas="11">11</option>
                                                    <option data-kelas="12">12</option>
                                                </select>
                                                <script>
                                                    const kelas = $('#kelas').data('kelas');
                                                    $('[name=kelas]').val(kelas);
                                                </script>
                                            </div>
                                            <div class="mb-2">
                                                <label for="basicInput" class="form-label"> Jurusan</label>
                                                <select id="jurusan" name="jurusan"
                                                    class="js-example-basic-single form-select">
                                                    <option>Pilih jurusan</option>
                                                    <option data-jurusan="tkj">Teknik Komputer Jaringan</option>
                                                    <option data-jurusan="mm">Multimedia</option>
                                                    <option data-jurusan="rpl">Rekayasa Perangkat Lunak</option>
                                                </select>
                                                <script>
                                                    const jurusan = $('#jurusan').data('jurusan');
                                                    $('[name=jurusan]').val(jurusan);
                                                </script>
                                            </div>
                                            <div class="mb-2">
                                                <label for="basicInput" class="form-label"> Jenis Pelanggaran</label>
                                                <select id="jenis" name="jenis"
                                                    class="js-example-basic-single form-select">
                                                    <option>Pilih jenis pelanggaran</option>
                                                    <option data-pelanggaran="ringan">Ringan (2 - 20 poin)</option>
                                                    <option data-pelanggaran="sedang">Sedang (21 - 50 poin)</option>
                                                    <option data-pelanggaran="berat">Berat (51 -100 poin)</option>
                                                </select>
                                                <script>
                                                    const jenis = $('#jenis').data('pelanggaran');
                                                    $('[name=jenis]').val(jenis);
                                                </script>
                                            </div>
                                            <div class="mb-2">
                                                <label for="basicInput" class="form-label"> Deskripsi
                                                    Pelanggaran</label>
                                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                            </div>
                                            <div class="mb-2">
                                                <label for="basicInput" class="form-label"> Jumlah Poin</label>
                                                <input id="jumlahpoin" name="jumlahpoin" class="form-control"
                                                    type="number" placeholder="Masukkan jumlah poin"
                                                    aria-label="default input example">
                                            </div><br>
                                            {{-- Modal --}}
                                            <div class="d-grid gap-2">
                                                <button class="btn mb-2 btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#verticalCenter" type="button">Simpan</button>
                                            </div>

                                            <div class="modal fade" id="verticalCenter" tabindex="-1"
                                                aria-labelledby="verticalCenterLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="verticalCenterLabel">Tambah
                                                                data</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah yakin untuk menambahkan data?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </form>
    </div>
    </div>

    </div>
    </div>

    <div class="settings">
        <div class="settings-icon-wrapper">
            <div class="settings-icon">
                <i class="ti ti-settings"></i>
            </div>
        </div>
        <div class="settings-content">
            <ul>
                <li class="fix-header">
                    <div class="fix-header-wrapper">
                        <div class="form-check form-switch lg">
                            <label class="form-check-label" for="settingsFixHeader">Fixed Header</label>
                            <input class="form-check-input toggle-settings" name="Header" type="checkbox"
                                id="settingsFixHeader">
                        </div>

                    </div>
                </li>
                <li class="fix-footer">
                    <div class="fix-footer-wrapper">
                        <div class="form-check form-switch lg">
                            <label class="form-check-label" for="settingsFixFooter">Fixed Footer</label>
                            <input class="form-check-input toggle-settings" name="Footer" type="checkbox"
                                id="settingsFixFooter">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="theme-switch">
                        <label for="">Theme Color</label>
                        <div>
                            <div class="form-check form-check-inline lg">
                                <input class="form-check-input lg theme-color" type="radio" name="ThemeColor"
                                    id="light" value="light">
                                <label class="form-check-label" for="light">Light</label>
                            </div>
                            <div class="form-check form-check-inline lg">
                                <input class="form-check-input lg theme-color" type="radio" name="ThemeColor"
                                    id="dark" value="dark">
                                <label class="form-check-label" for="dark">Dark</label>
                            </div>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="fix-footer-wrapper">
                        <div class="form-check form-switch lg">
                            <label class="form-check-label" for="settingsFixFooter">Collapse Sidebar</label>
                            <input class="form-check-input toggle-settings" name="Sidebar" type="checkbox"
                                id="settingsFixFooter">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <footer>
        Copyright © 2022 &nbsp <a href="https://www.youtube.com/c/mulaidarinull" target="_blank" class="ml-1">
            Mulai Dari Null </a> <span> . All rights Reserved</span>
    </footer>
    <div class="overlay action-toggle">
    </div>
    </div>
    <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="../vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>

    <!-- js for this page only -->
    <script src="../vendor/chart.js/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../assets/js/page/index.js"></script>
    @include('sweetalert::alert')

    <!-- ======= -->
    <!-- js for this page only -->
    <script src="../vendor/jquery/dist/jquery.min.js"></script>
    <script src="../vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('.date').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd-mm-yyyy'
        }).on('changeDate', function(e) {
            console.log(e.target.value);
        });
    </script>
    <script src="../assets/js/main.js"></script>
    <script>
        Main.init()
    </script>
</body>

</html>
