<?php
session_start();
require_once("../functions.php");
if(!isset($_SESSION["login"])){
    header("Location: ../login.php");
    exit;
}
if(!isset($_SESSION["admin"])){
    header("Location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Queasy - Admin</title>
  
  <link rel="icon" href="../img/q!.ico" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" id="searchInput" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Search, expand, dll -->
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../img/Q!.png" alt="Logo queasy" class="brand-image">
      <span class="brand-text font-weight-normal m-3 text-decoration-none">Queasy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../img/math.jpg" class="img-circle elevation-2" alt="User Image" style="width: 36px; height: 36px;">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link
                <?php 
                if(!isset($_GET['content'])){
                    echo "active" ;
                }
                ?>
            ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Dashboard Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link
            <?php 
              if($_GET['content'] == "user"){
                    echo "active";
            }
            ?>
            ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?content=user" class="nav-link 
                <?php 
                  if($_GET['content'] == "user"){
                      echo "active";
                    }
                ?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show All Tables</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Tabel quiz -->
          <li class="nav-item">
            <a href="#" class="nav-link
            <?php 
              if($_GET['content'] == "category"){
                    echo "active";
              }
            ?>
            ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?content=category" class="nav-link
                <?php 
                  if($_GET['content'] == "category"){
                      echo "active";
                    }
                ?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show All Tables</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link
              <?php 
                if($_GET['content'] == "quiz"){
                    echo "active";
                }
              ?>
            ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables Quiz
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?content=quiz" class="nav-link
                <?php 
                  if($_GET['content'] == "quiz"){
                      echo "active";
                    }
                ?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show All Tables</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link
              <?php 
                if($_GET['content'] == "questions"){
                    echo "active";
                }
              ?>
            ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables Question
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?content=questions" class="nav-link
                <?php 
                  if($_GET['content'] == "questions"){
                      echo "active";
                    }
                ?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show All Tables</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link
              <?php 
                if($_GET['content'] == "options"){
                    echo "active";
                }
              ?>
            ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables Options
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?content=options" class="nav-link
                <?php 
                  if($_GET['content'] == "options"){
                      echo "active";
                    }
                ?>
                ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show All Tables</p>
                </a>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <p class="m-0 opacity-75"><?php echo date('Y-m-d'); ?></p>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">/ Admin Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <?php
      if(isset($_GET['content'])){
        $content = $_GET['content'];
        if($content == "user"){
          include "view_user.php";
        }else if($content == "quiz"){
          include "view_quiz.php";
        }else if($content == "questions"){
          include "view_question.php";
        }else if($content == "category"){
          include "view_category.php";
        }else if($content == "options"){
          include "view_option.php";
        }else if($content == "edit"){
          include "edit.php";
        }else if($content == "create"){
          include "create.php";
        }
      } else {
        include "dashboard.php";
      }
      ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 Queasy</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
a<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script src="dist/js/pages/dashboard.js"></script>
<script>
  var searchInput = document.getElementById("searchInput");
  function search() {
            var searchText = searchInput.value.toLowerCase();

            // Ambil semua baris tabel
            var tableRows = document.querySelectorAll("tbody tr");

            // Loop melalui setiap baris tabel
            for (var i = 0; i < tableRows.length; i++) {
                var tableRow = tableRows[i];
                var rowData = tableRow.innerText.toLowerCase();

                // Periksa apakah teks pencarian cocok dengan data baris
                if (rowData.includes(searchText)) {
                    tableRow.style.display = ""; // Tampilkan baris jika cocok
                } else {
                    tableRow.style.display = "none"; // Sembunyikan baris jika tidak cocok
                }
            }
        }
        searchInput.addEventListener("input", search);
</script>
</body>
</html>
