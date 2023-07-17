<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  

  <title>Lampung Cerdas - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('css/sb-admin-2.min.css')?>" rel="stylesheet">
  <link href="img/lampung cerdas.webp" rel="icon">

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
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Data Webinar -->
      <li class="nav-item">
        <a class="nav-link" href="/datawebinar">
          <i class="fas fa-fw fa-calender"></i>
          <span> Data Webinar</span></a>
      </li>

      <!-- Nav Item - Tambah Data Webinar -->
      <li class="nav-item">
        <a class="nav-link" href="/tambahdatawebinar">
          <i class="fas fa-fw fa-plus"></i>
          <span>Tambah Data Webinar</span></a>
      </li>

      <!-- Nav Item - Data Peserta -->
      <li class="nav-item">
                <a class="nav-link collapsed" href="/datapeserta" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Data Peserta</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php 
                          $db = db_connect();
                          $query =$db->query('SELECT * FROM webinar')->getResult();
                          foreach ($query as $tampildata){
                        ?>
                        <a class="collapse-item" href="<?= '/datapeserta/'.$tampildata->id ?>"><?= $tampildata->judul ?></a>
                        <?php }?>
                    </div>
                </div>
            </li>     

      <!-- Nav Item - Data Presensi -->
       <li class="nav-item">
                <a class="nav-link collapsed" href="/datapresensi" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Data Presensi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php 
                          $db = db_connect();
                          $query =$db->query('SELECT * FROM webinar')->getResult();
                          foreach ($query as $tampildata){
                        ?>
                        <a class="collapse-item" href="<?= '/datapresensi/'.$tampildata->id ?>"><?= $tampildata->judul ?></a>
                        <?php }?>
                    </div>
                </div>
            </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Notifikasi
      </div>

      <!-- Nav Item - Data Notifikasi -->
      <li class="nav-item">
                <a class="nav-link collapsed" href="/datanotifikasi" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Data Notifikasi</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php 
                          $db = db_connect();
                          $query =$db->query('SELECT * FROM webinar')->getResult();
                          foreach ($query as $tampildata){
                        ?>
                        <a class="collapse-item" href="<?= '/datanotifikasi/'.$tampildata->id ?>"><?= $tampildata->judul ?></a>
                        <?php }?>
                    </div>
                </div>
            </li>

      <!-- Nav Item - Tambah Data Notifikasi -->
      <li class="nav-item">
        <a class="nav-link" href="/tambahdatanotifikasi">
          <i class="fas fa-fw fa-plus"></i>
          <span>Tambah Data Notifikasi</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    