
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Lampung Cerdas - Data Webinar</title>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  </head>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-text mx-3">Lampung Cerdas</div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
          Menu
        </div>
        <!-- Nav Item - Data Webinar -->
        <li class="nav-item active">
          <a class="nav-link" href="data-webinar.html">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Data Webinar</span>
          </a>
        </li>
        <!-- Nav Item - Tambah Data Webinar -->
        <li class="nav-item">
          <a class="nav-link" href="tambah-data-webinar.html">
            <i class="fas fa-fw fa-plus"></i>
            <span>Tambah Data Webinar</span>
          </a>
        </li>
        <!-- Nav Item - Ubah Data Webinar -->
        <li class="nav-item">
          <a class="nav-link" href="ubah-data-webinar.html">
            <i class="fas fa-fw fa-edit"></i>
            <span>Ubah Data Webinar</span>
          </a>
        </li>
      </ul>
      <!-- End of Sidebar -->
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-fw fa-user"></i>
                  <span>Douglas McGee</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-fw fa-sign-out-alt"></i>
                  <span>Logout</span>
                </a>
              </li>
            </ul>
          </nav><!-- Nav Item - Tambah Data Webinar -->
<li class="nav-item">
    <a class="nav-link" href="tambah-data-webinar.html">
      <i class="fas fa-fw fa-plus"></i>
      <span>Tambah Data Webinar</span>
    </a>
  </li>
  
  <!-- ... -->
  
  <!-- Begin Page Content -->
  <div class="container-fluid">
  
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Webinar</h1>
  
    <!-- Form -->
    <div class="row">
      <div class="col-lg-12">
        <form>
          <!-- Webinar Title -->
          <div class="form-group">
            <label for="webinarTitle">Title</label>
            <input type="text" class="form-control" id="webinarTitle" name="judul " placeholder="Enter webinar title" required>
          </div>
          <!-- Webinar Date -->
          <div class="form-group">
            <label for="webinarDate">Date</label>
            <input type="date" class="form-control" id="webinarDate" name="waktu" required>
          </div>
           <!-- Deskripsi Webinar -->
          <div class="form-group">
            <label for="deskwebinar">Deskripsi webinar</label>
            <input type="deskwebinar" class="form-control" id="deskwebinar" name="deskwebinar" required>
          </div>
          <!-- Nama Pemateri -->
          <div class="form-group">
            <label for="namapemateri">Nama Pemateri</label>
            <input type="namapemateri" class="form-control" id="namapemateri" name="namapemateri" required>
          </div>
          <!-- Deskripsi Pemateri -->
          <div class="form-group">
            <label for="deskpemateri">Nama Pemateri</label>
            <input type="deskpemateri" class="form-control" id="deskpemateri" name="deskpemateri" required>
          </div>
          <!-- Submit Button -->
          <button type="submit" class="btn btn-primary">Add Webinar</button>
        </form>
      </div>
    </div>
  
  </div>
  <!-- /.container-fluid -->