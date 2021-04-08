<?php session_start(); ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Thông tin tài khoản</title>
    <style>
        .tong {
            width: 500px;
            height: 500px;
            margin: auto;
            background: #0F9;
            text-align: center;
            position: relative;
        }

        .left {
            width: 200px;
            height: 350px;
            background: #CCC;
            float: left;
        }

        .right {
            width: 300px;
            height: 350px;
            background: #FFC;
            float: left;
            text-align: left;
        }

        .taskbar {
            width: 100%;
            height: 40px;
            background: #09C;
        }

        .bot {
            width: 100%;
            height: 40px;
            position: absolute;
            bottom: 10px;
            line-height: 40px;
            background: #6F0;
        }

        a {
            text-decoration: none;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php
    include('../../function/dieukhien.php');
    $taikhoan = new taikhoan();
    if (empty($_SESSION['email'])) header('location:Login');
    $email = $_SESSION['email'];
    foreach ($taikhoan->laythongtin_email($email) as $th) {
    }
    ?>
    <div class="tong">
        <h3><span>Thông tin cá nhân</h3>
        <div class="left">
            <img src="anhcuatui/<?php echo $th['anh']; ?>" alt="No picture" width="180px" height="200px">
            <h3><?php echo $th['hoten']; ?></h3>
        </div>
        <div class="right">
            <h4>Tên bạn là:<?php echo $th['hoten']; ?></h4>
            <h4>Email của bạn:<?php echo $th['email']; ?></h4>
            <h4>Giới tính:<?php echo $th['gioitinh']; ?></h4>
            <h4>Ngày sinh:<?php echo $th['ngaysinh']; ?></h4>
            <h4>Địa chỉ:<?php echo $th['diachi']; ?></h4>
        </div>
        <div class="capnhat">
            <a href="capnhatthongtintaikhoan.php">Cập nhật thông tin?</a>
            <a href="logout.php">Thoát?</a>
        </div>
        <div class="taskbar"><a href="../Manage">Quản trị</a><a href="qltaikhoan.php"> | Tài khoản</a></div>
        <div class="clear"></div>
        <div class="bot">Phiên đăng nhập bởi:<?php echo $_SESSION['email']; ?> </div>
    </div>

</body>

</html>