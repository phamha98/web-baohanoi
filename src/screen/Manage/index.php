<?php
session_start();
if (empty($_SESSION['email'])) header('location:dangnhap.php');
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Quản trị tin tức</title>
  <link type="text/css" rel="stylesheet" href="style.css">
  <link type="text/css" rel="stylesheet" href="../Css/style-header.css">
  <link type="text/css" rel="stylesheet" href="../Css/style-container.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

</head>

<body>
  <div class="container">
    <?php
    include('../../component/header.php')
    ?>
    
    <div class="content-manage">
      <!-- Example split danger button -->
      <div class="dropdown button">
        <button class="btn btn-secondary dropdown-toggle parent" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Tài Khoản
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item children" href="#">Quản lý</a></li>
          <li><a class="dropdown-item" href="#">Đăng nhập</a></li>
          <li><a class="dropdown-item" href="#">Đăng ký</a></li>
        </ul>
      </div>
      <div class="dropdown button">
        <button class="btn btn-secondary dropdown-toggle parent" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Chủ Đề
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Quản lý chủ đề</a></li>
          <li><a class="dropdown-item" href="#">Thêm mới chủ đề</a></li>
          <li><a class="dropdown-item" href="#">Cập nhật chủ đề</a></li>
        </ul>
      </div>
      <div class="dropdown button">
        <button class="btn btn-secondary dropdown-toggle parent" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Bài viết
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Quản lý bài viết</a></li>
          <li><a class="dropdown-item" href="#">Thêm mới bài viết</a></li>
          <li><a class="dropdown-item" href="#">Cập nhật bài viết</a></li>
        </ul>
      </div>
    </div>
    <div class="cle"></div>
  </div>
  <?php include('../../component/script-link.php') ?>

</body>

</html>