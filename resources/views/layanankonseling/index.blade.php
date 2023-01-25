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

    <link rel="stylesheet" href="{{ asset('../vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../vendor/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('../vendor/perfect-scrollbar/css/perfect-scrollbar.css') }}">

    <!-- CSS for this page only -->
    <link rel="stylesheet" href="{{ asset('../vendor/chart.js/dist/Chart.min.css') }}">
    <!-- End CSS  -->

    <link rel="stylesheet" href="{{ asset('../assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap-override.min.css') }}">
    <link rel="stylesheet" id="theme-color" href="{{ asset('../assets/css/dark.min.css') }}">
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
                                <a href="/logout">
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
        {{-- Sidebar --}}
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
                    <li >
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-desktop"></i>
                            <span>Akademik</span>
                        </a>
                        <ul class="sub-menu">
                            <li ><a href="/pelanggaran"
                                    class="link"><span>Pelanggaran</span></a></li>
                            <li><a href="/perizinan" class="link"><span>Perizinan</span></a></li>
                        </ul>

                    </li>
                    <li class="active open">
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-layers-alt"></i>
                            <span>Non Akademik</span>
                        </a>
                        <ul class="sub-menu ">
                            <li><a href="/anbk" class="link"><span>ANBK</span></a></li>
                            <li class="active open"><a href="/beasiswa" class="link"><span>Beasiswa</span></a></li>
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
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Data Informasi Konseling</h4>
                                </div>

                                <div class="card-body">
                                 

                                    <br>
                                    <form action="/beasiswa" method="GET">
                                        <div class="input-group mb-3">
                                            <input type="search" class="form-control" name="search"
                                                placeholder="Cari berdasarkan nama">
                                            <button class="btn btn-primary" type="submit"
                                                id="button-addon2">Search</button>
                                        </div>
                                    </form>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table" id="example" class="display nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">NIM</th>
                                                    <th scope="col">Jurusan</th>
                                                    <th scope="col">Kelas</th>
                                                    <th scope="col">Deskripsi</th>
                                                    <th scope="col">Tanggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($konseling as $key => $item)
                                                    <tr>
                                                        <td>{{ $beasiswa->firstItem() + $key }}</td>
                                                        <td>{{ $item['judul'] }}</td>
                                                        <td>{{ $item['deskripsi'] }}</td>
                                                        <td>{{ $item['dokumen'] }}</td>
                                                        <td>{{ $item['kontak'] }}</td>
                                                
                                                        <td>{{ $item['tgl'] }}</td>
                                                        <td>
                                    
                                                            <li class="list-inline-item">
                                                                <a href="{{ url('/beasiswa/edit', $item->id) }}"
                                                                    class="btn btn-success btn-sm rounded-0"
                                                                    type="button" data-toggle="tooltip"
                                                                    data-placement="top" title="Edit"><i
                                                                        class="fa fa-edit"></i></a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="{{ url('/beasiswa/delete', $item->id) }}"
                                                                    class="btn btn-danger btn-sm rounded-0"
                                                                    type="button" data-toggle="tooltip"
                                                                    data-placement="top" title="Delete"><i
                                                                        class="fa fa-trash"></i></a>

                                                            </li>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        Showing
                                        {{ $beasiswa->firstItem() }}
                                        to
                                        {{ $beasiswa->lastItem() }}
                                        of
                                        {{ $beasiswa->total() }}
                                    </div>
                                    <div class="text-right">
                                        {{ $beasiswa->links() }}
                                    </div> --}}

                                </div>

                            </div>
                        </div>
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
        </footer>
        <div class="overlay action-toggle">
        </div>
    </div>
    <script src="{{ asset('../vendor/bootstrap/dist/js/bootstrap.bundle.js ') }}"></script>
    <script src="{{ asset('../vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>

    <!-- js for this page only -->
    <script src="{{ asset('../vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('../assets/js/page/index.js') }}"></script>
    <!-- ======= -->
    <script src="{{ asset('../assets/js/main.js') }}"></script>
    <script>
        Main.init()
    </script>
</body>

</html>
