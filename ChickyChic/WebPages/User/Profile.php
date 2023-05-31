<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Profile</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="css/bootstrap.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="cssProfile.css">
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
            font-size: 25px;
        }

        .logo-img {
            position: absolute;
            top: 11px;
            left: 35px;
            width: 90px;
        }

        .logo-word {
            position: absolute;
            top: 23px;
            left: 160px;
            width: 110px;
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
            top: 25px;
            right: 170px;
            width: 280px;
            height: 60px;
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
            <div class="modal-header">
                <h1 class="modal-title">ข้อมูลผู้ใช้</h1>
            </div>
            <form action="profile.php" method="POST" id="myForm" name="Form" onsubmit="return validate()">
                <div class="modal-body">
                    <div class="md-form" id="name">
                        <label>ชื่อ</label>
                        <input type="text" class="form-control" name="fname" id="fname" value="ascii">
                        <label>นามสกุล</label>
                        <input type="text" class="form-control" name="lname" id="lname" value="ascii">
                    </div>

                    <div class="md-form">
                        <label>ที่อยู่</label>
                        <textarea rows="3" class="form-control" name="address" id="address">computer</textarea><br>
                    </div>

                    <div class="md-form" id="location">
                        <label>จังหวัด</label>
                        <input type="text" class="form-control" name="province" id="province" value="bkk">
                        <label>แขวง/เขต</label>
                        <input type="text" class="form-control" name="zone" id="zone" value="ladkrabang"><br>
                    </div>

                    <div class="md-form" id="number">
                        <label>รหัสไปรษณีย์</label>
                        <input type="text" class="form-control" name="post" id="post" value="92000">
                        <label>เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" name="tel" id="tel" value="095000000">
                    </div>
                </div>
                <button type="submit" class="submit" name="save" data-toggle="modal" data-target="#myModal">บันทึก</button>
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

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog" id="modal-dialog">
            <div class="modal-content" id="modal-contents">
                <div class="modal-header" id="modal-headers">
                    <h3 class="modal-title">Please fill out all data.</h3>
                </div>
                <div class="modal-body" id="modal-bodys">
                    <h5 id="nameData">Please try again.</h5>
                </div>
                <div class="modal-footer" id="modal-footer">
                    <button type="button" id="close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    

    <div id="backSignIn" class="modal fade" role="dialog">
        <div class="modal-dialog" id="modal-dialog">
            <div class="modal-content" id="modal-contents">
                <div class="modal-header" id="modal-headers">
                    <h3 class="modal-title">You already have an account.</h3>
                </div>
                <div class="modal-body" id="modal-bodys">
                    <h5 id="nameData">Please go back to sign in.</h5>
                </div>
                <div class="modal-footer" id="modal-footer">
                    <button type="button" id="close" data-dismiss="modal" onclick="location.href='SignIn.php'">Sign in</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validate(){
            let fname = document.forms["Form"]["fname"].value;
            let lname = document.forms["Form"]["lname"].value;
            let address = document.forms["Form"]["address"].value;
            let province = document.forms["Form"]["province"].value;
            let zone = document.forms["Form"]["zone"].value;
            let post = document.forms["Form"]["post"].value;
            let tel = document.forms["Form"]["tel"].value;
            let nameData = document.getElementById("nameData");
            if (fname == ""){
                nameData.textContent = "Please fill out your first name.";
                $( document ).ready(function() {
                    $("#myModal").modal("show")
                });
                return false;
            }
            else if (lname == ""){
                nameData.textContent = "Please fill out your last name.";
                $( document ).ready(function() {
                    $("#myModal").modal("show")
                });
                return false;
            }
            else if (address == ""){
                nameData.textContent = "Please fill out your address.";
                $( document ).ready(function() {
                    $("#myModal").modal("show")
                });
                return false;
            }
            else if (province == ""){
                nameData.textContent = "Please fill out your province.";
                $( document ).ready(function() {
                    $("#myModal").modal("show")
                });
                return false;
            }
            else if (zone == ""){
                nameData.textContent = "Please fill out your zone.";
                $( document ).ready(function() {
                    $("#myModal").modal("show")
                });
                return false;
            }
            else if (post == ""){
                nameData.textContent = "Please fill out your post number.";
                $( document ).ready(function() {
                    $("#myModal").modal("show")
                });
                return false;
            }
            else if (tel == ""){
                nameData.textContent = "Please fill out your telephone number.";
                $( document ).ready(function() {
                    $("#myModal").modal("show")
                });
                return false;
            }
        }
    </script>

    <?php
        error_reporting(0);
        ///////////////////Insert Data//////////////////////
        if (isset($_POST['createData'])){
            class UserData extends SQLite3{
                function __construct(){
                    $this->open('data.db');
                }
            }
            $db = new UserData();
            /////////////////////////////Create Table UserData//////////////////////////////////
            // $table = <<<EOF
            // CREATE TABLE UserData
            // (Id INTEGER PRIMARY KEY AUTOINCREMENT,
            // UserName CHAR(50) NOT NULL,
            // Email CHAR(80) NOT NULL,
            // Password CHAR(30) NOT NULL);
            // CREATE UNIQUE INDEX unique_username ON "UserData" ("UserName");
            // CREATE UNIQUE INDEX unique_email ON "UserData" ("Email");
            // EOF;
            // $record = $db->exec($table);

            /////////////////////////////Insert Data//////////////////////////////////
            $userName = $_POST['userName'];
            $eMail = $_POST['eMail'];
            $password = $_POST['password'];
            $table = <<<EOF
            insert into UserData (UserName, Email, Password)
            values ('$userName', '$eMail', '$password');
            EOF;

            $record = $db->exec($table);

            ////////////////////////////Check if has account////////////////////////////
            $select = "select * from UserData2";
            $allData = $db->query($select);
            $checkLast = false;
            while($row = $allData->fetchArray(SQLITE3_ASSOC)){
                if((($userName === $row['UserName']) || ($userName === $row['Email']))){
                    echo    '<script type="text/javascript">
                                $( document ).ready(function() {
                                $("#backSignIn").modal("show")
                                });
                            </script>';
                    break;
                }
            }

            $db->close();
        }

        if (isset($_POST['save'])){
            class UserData extends SQLite3{
                function __construct(){
                    $this->open('data.db');
                }
            }
            $db = new UserData();
            echo "<script type='text/javascript'>";
                echo "window.location='SignIn.php'";
            echo "</script>";

            /////////////////////////////Create Table UserData2//////////////////////////////////
            // $table2 = <<<EOF
            // CREATE TABLE UserData2
            // (UserName CHAR(50) NOT NULL,
            // Email CHAR(80) NOT NULL,
            // Password CHAR(30) NOT NULL,
            // FirstName CHAR(50) NOT NULL,
            // LastName CHAR(50) NOT NULL,
            // Address CHAR(150) NOT NULL,
            // Province CHAR(50) NOT NULL,
            // Zone CHAR(50) NOT NULL,
            // PostNumber INT NOT NULL,
            // Tel INT NOT NULL,
            // PRIMARY KEY (UserName, Email));
            // EOF;
            // $record = $db->exec($table2);

            /////////////////////////////Insert Data 2//////////////////////////////////
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $province = $_POST['province'];
            $zone = $_POST['zone'];
            $post = $_POST['post'];
            $tel = $_POST['tel'];

            $sql = "SELECT * FROM UserData ORDER BY Id DESC LIMIT 1";
            $ret = $db->query($sql);

            while($row = $ret->fetchArray(SQLITE3_ASSOC)){
                $userName = $row['UserName'];
                $email = $row['Email'];
                $password = $row['Password'];
            }

            $table2 = <<<EOF
            insert into UserData2 (UserName, Email, Password, FirstName, LastName, Address, Province, Zone, PostNumber, Tel)
            values ('$userName', '$email', '$password', '$fname', '$lname', '$address', '$province', '$zone', $post, $tel);
            EOF;

            $record = $db->exec($table2);
            $db->close();
        }
    ?>

</body>
</html>