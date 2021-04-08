<?php
session_start();
$id = $_GET['id'];
$tieude = $_GET['tieude'];
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title><?php echo $tieude; ?></title>
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

        <?php
        include('../../function/dieukhien.php');

        $baiviet = new tintuc();
        foreach ($baiviet->laybaiviet_theochude($_SESSION['chude']) as $bv) {

        ?>

        <?php } ?>

        <div class="post-conent">
            <?php
            $baiviet = new tintuc();
            foreach ($baiviet->laynoidung_theoid($id) as $nd) {
            ?>
                <div class="post-chidren">
                    <p style="padding-left: 30px;margin-top: 10px;">Chuyên mục <?php echo $nd['chude']; ?></p>
                    <div class="title">
                        <?php echo $nd['tieude']; ?>
                    </div>
                    <div class="post-row">
                        <div class="post-image">
                            <img src="../../image/<?php echo $nd['anh']; ?>" width="350px"  >
                        </div>
                        <div class="post-summary">
                            Tóm tắt:<?php echo $nd['tomtat']; ?></br>
                        </div>
                    </div>
                    <div class="cle"></div>
                    <div class="post-text"><?php echo $nd['noidung'] ?></div>
                <?php } ?>
                </div>
        </div>
        <div class="cle"></div>
    </div>
</body>

</html>