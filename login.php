<?php
session_start();
error_reporting(0);
include "./model/connectdb.php";
if (isset($_POST['login']) && ($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $customer = mysqli_query($con, "SELECT * FROM user WHERE username='$username' and password='$password'and role=0");
    $admin = mysqli_query($con, "SELECT * FROM user WHERE username='$username' and password='$password'and role=1");
    $num1 = mysqli_fetch_array($admin);
    $num0 = mysqli_fetch_array($customer);
    if ($num1 > 0) {

        $extra = "admin/view/manage_product.php";
        $_SESSION['login'] = $_POST['username'];
        $_SESSION['id'] = $num1['id'];
        echo "<script>window.location.href='" . $extra . "'</script>";
        exit();
    } elseif ($num0 > 0) {

        $extra = "index.php";
        $_SESSION['login'] = $_POST['username'];
        $_SESSION['id'] = $num0['id'];
        echo "<script>window.location.href='" . $extra . "'</script>";
        exit();
    } else {
        $_SESSION['action1'] = "<div style='color:red'>Invalid username or password..!</div>";
        $extra = "login.php";
        echo "<script>window.location.href='" . $extra . "'</script>";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo Trang Login</title>
    <link rel="stylesheet" href="./view/css/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section>
        <!--Bắt Đầu Phần Hình Ảnh-->
        <div class="img-bg">
            <img src="./view/img/hinh-nen-dien-thoai-minion.jpg" alt="Hình Ảnh Minh Họa">
        </div>
        <!--Kết Thúc Phần Hình Ảnh-->
        <!--Bắt Đầu Phần Nội Dung-->
        <div class="noi-dung">
            <div class="form">
                <h2>Trang Đăng Nhập</h2>

                <form action="" method="post">
                    <div class="input-form">
                        <span>Tài Khoản</span>
                        <input type="text" name="username">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="password">
                    </div>
                    <div class="nho-dang-nhap">
                        <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label>
                    </div>
                    <div class="input-form">
                        <input type="submit" name="login" value="Đăng Nhập">
                    </div>
                    <?php echo $_SESSION['action1']; ?><?php echo $_SESSION['action1'] = ""; ?></p>
                    <div class="input-form" style="margin-top: 10%;">
                        <p>Bạn Chưa Có Tài Khoản? <a href="index.php?act=dangki">Đăng Ký</a></p>
                    </div>
                </form>
                <div class="mxh" style="margin-top: -15%;">
                    <h3>Đăng Nhập Bằng Mạng Xã Hội</h3>
                    <ul class="icon-dang-nhap">
                        <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                        <li><i class="fa fa-google" aria-hidden="true"></i></li>
                        <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Kết Thúc Phần Nội Dung-->
    </section>
    <style>
        header {
            display: none;
        }

        footer {
            display: none;
        }

        #footer {
            display: none;
        }

        p {
            display: none;
        }

        hr {
            display: none;
        }

        #hd {
            display: none;
        }
    </style>
</body>

</html>