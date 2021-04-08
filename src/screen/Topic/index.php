<?php
session_start();
$chude = $_GET['chude'];
$_SESSION['chude'] = $chude;
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Chuyên mục <?php echo $chude; ?></title>
  <!--chuyen vao day-->
  <link type="text/css" rel="stylesheet" href="style.css">
  <link type="text/css" rel="stylesheet" href="../Css/style-header.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

</head>

<body>
  <div class="container">
    <?php
    include('../../component/header.php')
    ?>
    <div class="container topic-content">
      <?php
      include('../../function/dieukhien.php');

      $baiviet = new tintuc();
      foreach ($baiviet->laybaiviet_theochude($chude) as $bv) {

      ?>
        
        <div class="card additional" style="width: 800px;">
        <img class="card-img-top" src="../../image/<?php echo $bv['anh'] ?>" width='100px' alt="no image">
        <div class="card-body">
          <h5 class="card-title nodecoration"><a href="../Post/index.php?id=<?php echo $bv['id'] ?>&tieude=<?php echo $bv['tieude'] ?>">
              <?php echo $bv['tieude'] ?>
            </a></h5>
          <p class="card-text">
            <?php echo $bv['tomtat'] ?>
          </p>
          <a href="../Post/index.php?id=<?php echo $bv['id'] ?>&tieude=<?php echo $bv['tieude'] ?>" class="btn btn-primary">Đọc bài</a>
        </div>
      </div>
      <?php } ?>
     
    <div class="cle"></div>
  </div>
</body>

</html>