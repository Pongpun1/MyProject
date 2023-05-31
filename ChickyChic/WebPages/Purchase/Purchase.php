<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../Home/Home.css">
    <link rel="stylesheet" href="Purchase.css">

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
            padding-bottom: 20px;
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

        .btn, .btn:hover {
            width: 100%;
            background-color: rgb(241 72 34);
            border-radius: 20px;
            border: 2px solid rgb(241 72 34);
            text-decoration: none;
        }
        .modal-title {
            color: rgb(253 165 39);
            margin-top: 2%;
            margin-bottom: 2%;
            margin-left: 4%;
            font-size:25px;
        }

        .table {
            font-size: 28px;
        }

        .row {
            font-size: 28px;
            position: relative;
            top: 0;
            left: 50%;
            transform: translate(-50%, 0);
            width: 90%;
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .pay {
            padding: 1rem;
            width: 25rem;
            height: 20rem;
            top: 5%;
            position: sticky;
            font-size: 25px;
        }

        .butt {
            position:relative;
            background-color: rgb(253 165 39);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            font-size: 25px;
        }

        .butt:focus {
            border: none;
            outline: none;
        }

        .form-check-input {
            position:relative;
            top:4%;
            width:16.5px;
            height:16.5px;
        }

        .form-check-label, .input-group-text, .form-control, textarea {
            font-size:25px;
        }

        .invalid input:required:invalid {
            background: #BE4C54;
        }

        .invalid input:required:valid {
            background: #17D654;
        }

        .btn-primary:disabled {
            background-color: rgb(241 72 34);
            border: none;
        }

        .footer{
            margin: 0;
            margin-top: 50px;
            width: 1920px;
            height: 150px;
            bottom:20px;
            left:-15px;
            position: relative;
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

        <?php
            class MyDB extends SQLite3{
                function __construct(){
                    $this->open('../Database/selectMenu.db');
                }
            }

            $db = new MyDB();
            if(!$db){
                echo $db->lastErrorMsg();
            }
        ?>

        <div class="row">
            <div class="col-md-9">
                <table class="table">
                    <tr>
                        <th style="width:20%;">รายการ</th>
                        <th style="width:40%;"></th>
                        <th style="width:15%;">จำนวน</th>
                        <th style="width:15%;">ราคา</th>
                        <th style="width:10%;"></th>
                    </tr>
                    <?php
                        $sql ="SELECT * from selectMenu";
                        $ret = $db->query($sql);
                        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                            echo "<tr>";
                            echo "<td>" . "<img src='" . $row['IMG'] . "' width='100%' style='aspect-ratio: 1/1; object-fit: contain;'></td>";
                            echo "<td style='text-align: left;'>" .$row['NAME'] . "</td>";
                            echo "<td>"
                            . "<span class='decrease'><button type='button' class='butt' style='right:20%;'
                            onclick='decrease({$row['ID']}, `selectMenu`)'>-</button></span>"
                            . "<span class='num' style='font-size:25px' id='selectMenu-{$row['ID']}'>{$row['AMOUNT']}</span>"
                            . "<span class='increase'><button type='button' class='butt' style='left:20%;'
                            onclick='increase({$row['ID']}, `selectMenu`)'>+</button></span>"
                            . "</td>";
                            echo "<td>" . (+$row['PRICE'])*(+$row['AMOUNT']) . "</td>";
                            echo "<td><span class='delete'><button type='button' class='butt' style='background-color:grey; font-size:20px; right:20%;'
                            onclick='deleteDB({$row['ID']}, `selectMenu`)'>x</button></span></td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="pay card text-center">
                    <div class="card-body">
                        <p class="card-text">
                            <span style="float: left;">ค่าอาหาร</span>
                            <span style="float: right;">
                            <?php
                                $sql ="SELECT * from selectMenu";
                                $ret = $db->query($sql);
                                $total = 0;
                                while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                                    +$total += +$row['PRICE'] * +$row['AMOUNT'];
                                }
                                echo $total;
                            ?> บาท</span><br>
                            <span style="float: left;">ค่าจัดส่ง</span>
                            <span style="float: right;">
                            <?php
                                $sql ="SELECT * from selectMenu";
                                $ret = $db->query($sql);
                                if (empty($ret) || $total == 0) {
                                    $ship = 0;
                                }
                                else {
                                    $ship = 17.5;
                                    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                                        +$ship += 2.5 * +$row['AMOUNT'];
                                    }
                                }
                                echo $ship ;
                            ?> บาท</span><br><br>
                            <b><span style="float: left;">ยอดรวม</span>
                            <span style="float: right;">
                            <?php
                                echo +$total + +$ship ;
                            ?> บาท</span><br></b>
                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderConfirm"
                            style="border-radius: 30px; font-size: 25px;">ดำเนินการต่อ</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="orderConfirm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title"><b>ที่อยู่สำหรับการจัดส่ง</b></h5>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">ชื่อ</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="fname" required>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">นามสกุล</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="lname" required>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3" style="max-width:86%; margin-left: 5%;">
                                <div class="input-group-prepend" >
                                    <span class="input-group-text">ที่อยู่</span>
                                </div>
                                <textarea class="form-control rounded-0" rows="2" required></textarea>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">ตำบล/แขวง</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="district" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">จังหวัด</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="province" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">รหัสไปรษณีย์</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="postnum" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">เบอร์โทรศัพท์</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="phone" required>
                                    </div>
                                </div>
                            </div>
                            <h5 class="modal-title" style="margin-bottom: 1%;"><b>รูปแบบการชำระเงิน</b></h5>
                            <div class="form-check" style="margin-left: 5%;">
                                <input class="form-check-input" type="radio" name="payment" required>
                                <label class="form-check-label" style="color:black;">เก็บเงินปลายทาง</label><br>
                                <input class="form-check-input" type="radio" name="payment" required>
                                <label class="form-check-label" style="color:black;">บัญชีธนาคาร</label>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" id="modalSaveBtn" data-backdrop="static"
                                style="font-size: 25px; border-radius:30px; width:40%; margin-top:2%; background-color:white; color:rgb(241 72 34);" >บันทึก</button>
                                <span style="width: 5%;"></span>
                                <button type="button" class="btn btn-primary" id="modalConBtn" disabled=true data-toggle="modal" data-target="#orderFinish" data-dismiss="modal"
                                style="font-size: 25px; border-radius:30px; width:40%; margin-top:2%;">ดำเนินการต่อ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="orderFinish" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title" style="text-align:center;"><b>ขอบคุณสำหรับคำสั่งซื้อของคุณ ! <br> รอรับอาหารภายใน 30 นาทีได้เลย</b></h5>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close"
                            style="font-size: 25px; border-radius:30px; width:80%; margin-top:2%; margin-bottom:2%;"
                            onclick="refreshPage()">ตกลง</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
            $db->close();
        ?>

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

<script>

    (function() {
        'use strict';
        window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            else {
                let btn = document.getElementById("modalConBtn")
                btn.disabled = false;
            }
            event.preventDefault();
            form.classList.add('was-validated');
            }, false);
        });
        }, false);
    })();

    const updateProduct = (id, type, newAmount) => {
        $.ajax({
            type: "POST",
            url: "../Database/UpdateOrder.php",
            data: {
                id: id,
                type: type,
                amount: newAmount
            },
            error: (result) => {
                console.log(result)
            },
        });

        window.location = window.location
    }


    const increase = (id, type) => {

        let select = document.querySelector(`#${type}-${id}`)

        let newAmount = parseInt(select.innerText) + 1

        select.innerText = newAmount

        updateProduct(id, type, newAmount)

    }

    const decrease = (id, type) => {

        let select = document.querySelector(`#${type}-${id}`)

        let newAmount = parseInt(select.innerText) - 1

        if (newAmount < 1) return

        select.innerText = newAmount

        updateProduct(id, type, newAmount)

    }

    const deleteDB = (id, type) => {

        let select = document.querySelector(`#${type}-${id}`)

        $.ajax({
            type: "POST",
            url: "../Database/DeleteOrder.php",
            data: {
                id: id,
                type: type,
            },
            error: (result) => {
                console.log(result)
            },
        });

        window.location = window.location
    }

    const refreshPage = () => {
        $.ajax({
            type: "POST",
            url: "../Database/DeleteAll.php",
            error: (result) => {
                console.log(result)
            },
        }),
        window.location = window.location
    }

</script>
</html>
