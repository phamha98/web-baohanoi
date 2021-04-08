<?php
session_start();
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Baocutui.vn</title>
  <link type="text/css" rel="stylesheet" href="style.css">
  <link type="text/css" rel="stylesheet" href="../Css/style-header.css">
  <link type="text/css" rel="stylesheet" href="../Css/style-container.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">


</head>

<body>
  <div class="container">
    <?php
    include('../../component/header.php')
    ?>
    <div class="content">
      <div class="row">
        <?php include('../../function/dieukhien.php'); ?>
        <?php $chude = new tintuc();
        foreach ($chude->laychude() as $cd) {
        ?>
          <div class="col-12 col-sm-6 col-md-4  image" style="position: relative;">
            <div style="position: absolute;bottom:0px;left:120px;font-size:30px;color:#090DFF">
              <a href="../Topic/index.php?chude=<?php echo $cd['chude'] ?>">
                <?php echo $cd['chude']; ?>
              </a>
            </div>
            <img src="../../image/<?php echo $cd['anh']; ?>" width="100px">
          </div>
        <?php } ?>
      </div>
      <div class="content2">

        <div class="container-fluid">
          <h4 class="mb-3">Responsive Carousel with Caption</h4>
          <p>.carousel-caption .d-none .d-sm-block</p>
          <div id="myCarousel" class="carousel slide border" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../../image/anhdep1.jpeg" alt="Leopard">
                <div class="carousel-caption d-none d-sm-block">
                  <h5>Leopard</h5>
                  <small>
                    A black Panther is the melanistic color variant of any big cat species.
                    Black Panthers in Asia and Africa are leopards (Panthera pardus).
                  </small>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://nld.mediacdn.vn/thumb_w/540/2020/5/29/doi-hoa-tim-8-15907313395592061395682.png" alt="Cat">
                <div class="carousel-caption d-none d-sm-block">
                  <h5>Black Cat</h5>
                  <small>
                    A black cat is a domestic cat with black fur that may be a mixed or specific breed
                  </small>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://www.nhatbanaz.com/wp-content/uploads/3322_pixta_30838512_L-310x205.jpg" alt="Lion">
                <div class="carousel-caption d-none d-sm-block">
                  <h5>Lion</h5>
                  <small>
                    The lion (Panthera leo) is a species in the cat family (Felidae).
                    A muscular, deep-chested cat, it has a short, rounded head,
                    a reduced neck and round ears
                  </small>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

      </div>
      <div class="content3">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src=" https://www.facebook.com/thuyduonghrIT/posts/294572658728454"></iframe>
        </div>

      </div>
    </div>
    <div class="cle"></div>
  </div>
  <?php include('../../component/script-link.php') ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>

</html>