<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/css/admin/app.css')}}" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div class="page-title"><span>portal news</span></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Admin<span class="user-name">Admin</span></a>
                <div class="dropdown-menu" role="menu">     
                  <div class="user-info">
                    <div class="user-name">Túpac Amaru</div>
                    <div class="user-position online">Available</div>
                  </div><a class="dropdown-item" href="pages-profile.html"><span class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item" href="#"><span class="icon mdi mdi-settings"></span>Settings</a><a class="dropdown-item" href="pages-login.html"><span class="icon mdi mdi-power"></span>Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class="active"><a href="index.html"><i class="icon mdi mdi-home"></i><span>Главная</span></a></li>
                  <li><a href="{{route('admin.news.create')}}"><i class="icon mdi mdi-face"></i><span>Новости</span></a></li>
                  <li><a href="charts.html"><i class="icon mdi mdi-chart-donut"></i><span>Пользователи</span></a></li>
                  <li><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Forms</span></a></li>
                  <li><a href="#"><i class="icon mdi mdi-border-all"></i><span>Tables</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        <div class="main-content container-fluid">
          @yield('content')
        </div>
      </div>
    </div>
    <script src="{{asset('assets/js/admin/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/admin/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/admin/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/admin/app.js')}}" type="text/javascript"></script>
  </body>
</html>