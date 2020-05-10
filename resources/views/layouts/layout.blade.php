
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge"> 


  <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">  
  <script src="//code.jquery.com/jquery.js"></script>
  <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>



  <title>ITIMS</title>

    <link rel="stylesheet" href="/css/app.css">
    
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">




  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-auto">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image "
           style="opacity: .8">
      <span class="brand-text font-weight-light">ITIMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/user.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-laptop-code"></i>
              <p>
                Fixed Asset
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="">
                <a href="/asset" class="nav-link">
                  <i class="fas fa-desktop nav-icon"></i>
                  <p>Asset</p>
                </a>
              </li>
              <li class="">
                <a href="/asset/purchase/create" class="nav-link">
                  <i class="fas fa-shopping-cart nav-icon"></i>
                  <p>Purchase</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-mouse"></i>
              <p>
                Consumables
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="">
                <a href="/employee" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Employee</p>
                </a>
              </li>
              <li class="">
                <a href="/division" class="nav-link">
                  <i class="fas fa-sitemap nav-icon"></i>
                  <p>Division</p>
                </a>
              </li>
              <li class="">
                <a href="/branch" class="nav-link">
                  <i class="fas fa-laptop-house nav-icon"></i>
                  <p>Branch</p>
                </a>
              </li>
              <li class="">
                <a href="/category" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="">
                <a href="/manufacturer" class="nav-link">
                  <i class="fas fa-industry nav-icon"></i>
                  <p>Manufacturer</p>
                </a>
              </li>
              <li class="">
              <a href="/astmodel" class="nav-link">
                <i class="fab fa-blackberry nav-icon"></i>
                <p>Model</p>
              </a>
            </li>
            <li class="">
              <a href="/supplier" class="nav-link">
                <i class="fas fa-person-booth nav-icon"></i>
                <p>Supplier</p>
              </a>
            </li>
            <li class="">
              <a href="/warehouse" class="nav-link">
                <i class="fas fa-warehouse nav-icon"></i>
                <p>Warehouse</p>
              </a>
            </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Reports
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      {{-- Anything you want --}}
      <strong>Developed By:</strong> 
      <a href="mailto:ba@banglacat.com">Bangla CAT Business Applications Team</a>
    </div>
    <!-- Default to the left -->
    {{-- <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. --}}
    <strong> Acorn Infrastructure Services Ltd.</strong>  
  </footer>
</div>
<!-- ./wrapper -->

<script src="/js/app.js"></script>
@include('sweetalert::alert')
</body>
</html>
