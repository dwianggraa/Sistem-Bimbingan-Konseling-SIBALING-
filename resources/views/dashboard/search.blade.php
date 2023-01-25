
<!DOCTYPE html>
<html lang="en">
@yield('main')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blank Page &mdash; Arfa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../vendor/perfect-scrollbar/css/perfect-scrollbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- CSS for this page only -->
<!-- js for this page only -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<!-- ======= -->
    <!-- End CSS  -->

    <link rel="stylesheet" href="../assets/css/style.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-override.min.css">
    <link rel="stylesheet" id="theme-color" href="../assets/css/dark.min.css">
    <script>
        $(document).ready(function(){
            $('#keyword').autocomplete({
                source: "{{url('/pelanggaran/search')}}",
            });
        });
        </script>
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
                                        <img src="../assets/images/avatar1.png" class="rounded-circle w-100" alt="user1">
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
                                <a href="#">
                                    <div class="message-image">
                                        <img src="../assets/images/avatar2.png" class="rounded-circle w-100" alt="user1">
                                    </div>
                                    <div class="message-content">
                                        <div class="subject">
                                            Michele
                                        </div>
                                        <div class="body">
                                            Please come to my party
                                        </div>
                                        <div class="time">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img src="../assets/images/avatar1.png" class="rounded-circle w-100" alt="user1">
                                    </div>
                                    <div class="message-content read">
                                        <div class="subject">
                                            Brad
                                        </div>
                                        <div class="body">
                                            I have something to discuss, please call me soon
                                        </div>
                                        <div class="time">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img src="../assets/images/avatar2.png" class="rounded-circle w-100" alt="user1">
                                    </div>
                                    <div class="message-content">
                                        <div class="subject">
                                            Anel
                                        </div>
                                        <div class="body">
                                            Sorry i'm late
                                        </div>
                                        <div class="time">8 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-image">
                                        <img src="../assets/images/avatar2.png" class="rounded-circle w-100" alt="user1">
                                    </div>
                                    <div class="message-content">
                                        <div class="subject">
                                            Mary
                                        </div>
                                        <div class="body">
                                            Please answer my question last night
                                        </div>
                                        <div class="time">Last month</div>
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
                                <a href="#">
                                    <div class="message-icon text-info">
                                        <i class="fas fa-info"></i>
                                    </div>
                                    <div class="message-content read">
                                        <div class="body">
                                            Your licence will expired soon
                                        </div>
                                        <div class="time">3 hours ago</div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-icon text-success">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="message-content">
                                        <div class="body">
                                            Successfully register new user
                                        </div>
                                        <div class="time">8 hours ago</div>
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
                <div class="text">AR</div>
                <div class="close-sidebar action-toggle">
                    <i class="ti-close"></i>
                </div>
            </div>
            <div class="sidebar-content">
                <ul>
                    <li>
                        <a href="index.html" class="link">
                            <i class="ti-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-desktop"></i>
                            <span>UI Elements</span>
                        </a>
                        <ul class="sub-menu ">
                            <li><a href="element-ui.html" class="link"><span>Elements</span></a></li>
                            <li><a href="element-accordion.html" class="link"><span>Accordion</span></a></li>
                            <li><a href="element-tabs-collapse.html" class="link"><span>Tabs & Collapse</span></a></li>
                            <li><a href="element-card.html" class="link"><span>Card</span></a></li>
                            <li><a href="element-button.html" class="link"><span>Buttons</span></a></li>
                            <li><a href="element-alert.html" class="link"><span>Alert</span></a></li>
                            <li><a href="element-themify-icons.html" class="link"><span>Themify Icons</span></a></li>
                            <li><a href="element-modal.html" class="link"><span>Modal</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-book"></i>
                            <span>Form</span>
                        </a>
                        <ul class="sub-menu ">
                            <li><a href="form-element.html" class="link">
                                    <span>Form Element</span></a>
                            </li>
                            <li><a href="form-datepicker.html" class="link">
                                    <span>Datepicker</span></a>
                            </li>
                            <li><a href="form-select2.html" class="link">
                                    <span>Select2</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-notepad"></i>
                            <span>Utilities</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="error-404.html" target="_blank" class="link"><span>Error 404</span></a></li>
                            <li><a href="error-403.html" target="_blank" class="link"><span>Error 403</span></a></li>
                            <li><a href="error-500.html" target="_blank" class="link"><span>Error 500</span></a></li>
                        </ul>
                    </li>
                    <li class="active open">
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-layers-alt"></i>
                            <span>Pages</span>
                        </a>
                        <ul class="sub-menu expand">
                            <li class="active"><a href="pages-blank.html" class="link"><span>Blank</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-hummer"></i>
                            <span>Auth</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="auth-login.html" target="_blank" class="link"><span>Login</span></a></li>
                            <li><a href="auth-register.html" target="_blank" class="link"><span>Register</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="main-menu has-dropdown">
                            <i class="ti-write"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="sub-menu ">
                            <li><a href="table-basic.html" class="link"><span>Table Basic</span></a></li>
                            <li><a href="table-datatables.html" class="link"><span>DataTables</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="charts.html" class="link">
                            <i class="ti-bar-chart"></i>
                            <span>Charts</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>   
       
        <div class="main-content">
            <div class="text">
                <div class="content-wrapper">
                    <div class="card">
                        <div class="card-header">
                            <h4>Default Form</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="basicInput" class="form-label">Nama</label>
                                        <input type="text" class="form-control typeahead" id="username">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         
            <div class="content-wrapper">
                
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
                                    <input class="form-check-input lg theme-color" type="radio" name="ThemeColor" id="light"
                                        value="light">
                                    <label class="form-check-label" for="light">Light</label>
                                </div>
                                <div class="form-check form-check-inline lg">
                                    <input class="form-check-input lg theme-color" type="radio" name="ThemeColor" id="dark"
                                        value="dark">
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
            Copyright © 2022 &nbsp <a href="https://www.youtube.com/c/mulaidarinull" target="_blank" class="ml-1"> Mulai Dari Null </a> <span> . All rights Reserved</span>
        </footer>
        <div class="overlay action-toggle">
        </div>
    </div>
    <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="../vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js" integrity="sha512-P2Z/b+j031xZuS/nr8Re8dMwx6pNIexgJ7YqcFWKIqCdbjynk4kuX/GrqpQWEcI94PRCyfbUQrjRcWMi7btb0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        var path = "{{route('autocomplete')}}";

        $('input.typeahead').typeahead({
            source: function(terms,process){
                return $.get(path,{terms:terms}, function(data){
                    return process(data);
                });
            }
        });
        </script>

</body>

</html>