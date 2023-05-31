<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register SignUp</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="css/bootstrap.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="cssSignIn_Up.css">
    <link rel="stylesheet" href="../Home/Home.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <style>
        /* home.css */
        * {
            font-family: 'Kanit', sans-serif;
        }

        body {
            background: url('../IMG/bg.png');
            background-size: cover;
        }

        .container-fluid {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .header-area {
            padding-top: 10px;
            padding-bottom: 10px;
            position: relative;
            z-index: 10;
        }

        .header {
            width: 94%;
            height: 110px;
            position: relative;
            background-color: rgb(254, 254, 254, 70%);
            top: 10%;
            left: 50%;
            transform: translate(-50%, 0%);
            border-radius: 20px;
            font-size: 23.5px;
        }

        .logo-img {
            position: absolute;
            top: 11px;
            left: 35px;
            width: 90px;
        }

        .logo-word {
            position: absolute;
            top: 21px;
            left: 158px;
            width: 115px;
        }

        .line {
            position: absolute;
            top: 20px;
            left: 310px;
            border-left: 3px solid rgb(253 165 39);
            height: 70px;
        }

        .nav {
            position: absolute;
            top: 30px;
        }

        .nav:link, .nav:visited {
            color: black;
            text-decoration: none;
        }

        .nav:hover {
            color: rgb(136, 136, 136);
        }

        .logo-basket {
            position: absolute;
            top: 35px;
            right: 380px;
            width: 38px;
            filter: brightness(100);
        }

        .basket-bg {
            position: absolute;
            top: 28px;
            right: 177px;
            width: 270px;
            height: 55px;
            border-radius: 35px;
            background-color: rgb(241 72 34);
        }

        .basket-num {
            position: absolute;
            top: 18px;
            right: 430px;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: rgb(253 165 39);
            text-align: center;
        }

        .logo-user {
            position: absolute;
            top: 32px;
            right: 70px;
            width: 50px;
        }

        /* SignIn.css */
        .modal-dialog{
            display: flex;
            justify-content: center;
            position: absolute;
            left: 50%;
            top: 150%;
            transform: translate(-50%, 0);
        }

    .footer{
        margin: 0;
        width: 1920px;
        height: 150px;
        margin-top:725px;
        left: -15px;
        bottom: 0;
        position: fixed;
        background-color: rgb(254, 254, 254, 70%);
        font-size: 23.5px;
    }

    .logo-img-footer {
        position: absolute;
        top: 31px;
        left: 350px;
        width: 90px;
    }

    .logo-word-footer {
        position: absolute;
        top: 41px;
        left: 480px;
        width: 115px;
    }

    .line-footer {
        position: absolute;
        top: 40px;
        left: 630px;
        border-left: 3px solid rgb(253 165 39);
        height: 70px;
    }

    </style>
</head>
<body>
    <div class="container-fluid">
    <header>
        <div class="header-area">
            <div class="header">
                <a href="../Home/Home.php">
                    <img class="logo-img"
                        src="../IMG/logo/logo-img.png">
                    <img class="logo-word"
                        src="../IMG/logo/logo-word.png">
                </a>
                <div class="bar">
                    <a class="line"></a>
                    <a class="nav" href="../Home/Home.php" style="top: 40px; left: 360px;">หน้าหลัก</a>
                    <a class="nav" href="../Menu/Menu.php" style="top: 40px; left: 505px;">เมนู</a>
                    <a class="nav" href="../Promotion/Promotion.php" style="top: 40px; left: 610px;">โปรโมชั่น</a>
                </div>
                <div class="bar-basket">
                    <a class="basket-bg"></a>
                    <img class="logo-basket"
                        src="../IMG/logo/logo-basket.png">
                    <a class="nav" style="top: 38px; right: 205px; color: white;">ออเดอร์ของคุณ</a>
                    <a class="basket-num">
                        <p style="color: white; font-size: 23px;">
                        <?php
                            class NumDB extends SQLite3{
                                function __construct(){
                                    $this->open('../Database/selectMenu.db');
                                }
                            }

                            $db = new NumDB();
                            if(!$db){
                                echo $db->lastErrorMsg();
                            }
                            $sql ="SELECT * from selectMenu";
                            $ret = $db->query($sql);
                            $num = 0;
                            while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                                +$num += +$row['AMOUNT'];
                            }
                            echo $num;

                            $db->close();
                        ?>
                        </p>
                    </a>
                    <a class="basket-bg" href="../Purchase/Purchase.php" style="background-color: transparent;"></a>
                </div>

                <div class="dropdown">
                    <img src = "../IMG/logo/logo-user.png"
                        aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" type="button" class="logo-user" class="dropdown-toggle">
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../User/SignIn.php">Sign in</a>
                        <a class="dropdown-item" href="../User/SignUp.php">Sign up</a>
                        <a class="dropdown-item" href="../User/Profile.php">Profile</a>
                        <a class="dropdown-item" href="../Home/Home.php">Log out</a>
                    </div>
                </div>
            </div>
        </div>
                        </header>

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form class="form-row" action="profile.php" method="POST">
                <div class="left">
                    <div class="inLeft">
                        <div class="modal-header">
                            <h1 class="modal-title">สมัครสมาชิก</h1>
                        </div>

                        <div class="modal-body">
                            <div class="md-form">
                                <label>ชื่อผู้ใช้</label><br>
                                <input type="text" class="form-control validate" name="userName" size="50" value="ascii">
                            </div>

                            <div class="md-form">
                                <label>อีเมลล์</label><br>
                                <input type="text" class="form-control validate" name="eMail" size="50" value="ascii@gmail.com">
                            </div>

                            <div class="md-form">
                                <label>รหัสผ่าน</label><br>
                                <input type="text" class="form-control validate" name="password" size="50" value="1122">
                            </div>

                            <div class="md-form">
                                <label>ยืนยันรหัสผ่าน</label><br>
                                <input type="text" class="form-control validate" name="confirmPass" size="50" value="1122">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div class="inRight">
                        <div class="brand">
                            <img class = "logo" src="../IMG/logo/logo-img.png" alt="logo">
                            <img class = "kaitae" src="../IMG/logo/logo-word.png" alt="brand">
                        </div>
                        <div class="btnAndlabel">
                            <button class="button" name="createData">สร้างบัญชีผู้ใช้</button>
                            <label class="label">เป็นสมาชิกอยู่แล้ว ? <a href = "signIn.php">เข้าสู่ระบบ</a>เลย</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="footer">
                <footer>
                    <a href="../Home/Home.php">
                        <img class="logo-img-footer"
                            src="../IMG/logo/logo-img.png">
                        <img class="logo-word-footer"
                            src="../IMG/logo/logo-word.png">
                    </a>
                    <a class="line-footer"></a>
                        <p class="nav" style="top: 60px; left: 680px;">ผู้จัดทำ</p>
                        <p class="nav" style="top: 40px; left: 805px;">จิรโรจน์ เลิศอัครนานนท์</p>
                        <p class="nav" style="top: 40px; left: 1040px;">(64070014)</p>
                        <p class="nav" style="top: 40px; left: 1200px;">ฐิติภา เอี่ยมสิริวงศ์</p>
                        <p class="nav" style="top: 40px; left: 1420px;">(64070025)</p>
                        <p class="nav" style="top: 80px; left: 805px;">พงศ์พันธุ์ แสงพล</p>
                        <p class="nav" style="top: 80px; left: 1040px;">(64070191)</p>
                        <p class="nav" style="top: 80px; left: 1200px;">พรไพลิน วงศ์ศรีตรัง</p>
                        <p class="nav" style="top: 80px; left: 1420px;">(64070196)</p>
                </footer>
            </div>
</body>
</html>
