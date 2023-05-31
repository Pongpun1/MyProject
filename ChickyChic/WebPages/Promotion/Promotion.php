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

    <link href="css/bootstrap.css" rel="stylesheet" media="all">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Promotion.css">
    <link rel="stylesheet" href="../Home/Home.css">

</head>

<body>
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
                    <a class="nav" href="../Home/Home.php" style="top: 40px; left: 360px; ">หน้าหลัก</a>
                    <a class="nav" href="../Menu/Menu.php" style="top: 40px; left: 505px;">เมนู</a>
                    <a class="nav" href="../Promotion/Promotion.php" style="top: 40px; left: 610px; color: rgb(253 165 39);">โปรโมชั่น</a>
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

        <div class="container">
            <div class="content">

                <div class="row">
                    <?php
                    // Connect to Database
                    class MyDB extends SQLite3
                    {
                        function __construct()
                        {
                            $this->open('../Database/currentMenu.db');
                        }
                    }
                    // Open Database
                    $db = new MyDB();
                    if (!$db) {
                        echo $db->lastErrorMsg();
                        return;
                    }

                    // Query process
                    $ret = $db->query("SELECT * from Promotion");
                    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                        if ($row['INCART'] == "NO") {
                            echo "<div class='col-md-8'>
                        <div class='card'>
                            <img class='pic-set' src='{$row['IMG']}'>
                            <div class='price'>
                                <p>{$row['PRICE']} บาท</p>
                            </div>
                            <div class='infomation'>
                                <h2 style='color: rgb(253 165 39);'>{$row['NAME']}</h2><br>
                                <p>{$row['DESCRIPTION']}</p>
                                <p>{$row['DESCRIPTION2']}</p>
                                <p>{$row['DESCRIPTION3']}</p>
                                <p>{$row['DESCRIPTION4']}</p>
                                <p>{$row['DESCRIPTION5']}</p>
                            </div>
                            <div id='set-count-1'></div>

                            <div class='amount'>
                                <span class='minus'><button class='glyphicon' type='button'
                                style='color: rgb(255, 255, 255);' onclick='decrease({$row['ID']}, `Promotion`)'>-</button></span>
                                <span class='set-count' style='position: absolute;font-size: 25px;top: 330;right: 455px;' id='Promotion-{$row['ID']}'>{$row['AMOUNT']}</span>
                                <span class='plus'><button class='glyphicon' type='button'
                                    style='color: rgb(255, 255, 255);' onclick='increase({$row['ID']}, `Promotion`)'>+</button></span>
                            </div><br>

                            <div><button class='add btn btn-danger' id='button-Promotion-{$row['ID']}'
                            onclick='addToCart({$row['ID']}, `{$row['NAME']}`, {$row['PRICE']}, {$row['AMOUNT']}, `{$row['IMG']}`, `Promotion`)'>เพิ่มลงตะกร้า</button></div>
                        </div>
                    </div>";
                        } else {
                            echo "<div class='col-md-8'>
                        <div class='card'>
                            <img class='pic-set' src='{$row['IMG']}'>
                            <div class='price'>
                                <p>{$row['PRICE']} บาท</p>
                            </div>
                            <div class='infomation'>
                                <h2 style='color: rgb(253 165 39);'>{$row['NAME']}</h2><br>
                                <p>{$row['DESCRIPTION']}</p>
                                <p>{$row['DESCRIPTION2']}</p>
                                <p>{$row['DESCRIPTION3']}</p>
                                <p>{$row['DESCRIPTION4']}</p>
                                <p>{$row['DESCRIPTION5']}</p>
                            </div>
                            <div id='set-count-1'></div>

                            <div class='amount'>
                                <span class='minus'><button class='glyphicon' type='button'
                                style='color: rgb(255, 255, 255);' onclick='decrease({$row['ID']}, `Promotion`)'>-</button></span>
                                <span class='set-count' style='position: absolute;font-size: 25px;top: 330;right: 455px;' id='Promotion-{$row['ID']}'>{$row['AMOUNT']}</span>
                                <span class='plus'><button class='glyphicon' type='button'
                                    style='color: rgb(255, 255, 255);' onclick='increase({$row['ID']}, `Promotion`)'>+</button></span>
                            </div><br>

                            <div><button class='add btn btn-danger' disabled id='button-chicken-{$row['ID']}'>เพิ่มลงตะกร้าแล้ว</button></div>
                        </div>
                    </div>";
                        }
                    }
                    // Close database
                    $db->close();
                    ?>


                </div>
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
    </div>
</body>


<script>
    const updateProduct = (id, type, newAmount) => {
        $.ajax({
            type: "POST",
            url: "../Database/UpdateMenu.php",
            data: {
                id: id,
                type: type,
                amount: newAmount
            },
            error: (result) => {
                console.log(result)
            },
        });
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

        if (newAmount < 0) return

        select.innerText = newAmount

        updateProduct(id, type, newAmount)


    }

    const addToCart = (id, name, price, amount, img, type) => {

        $.ajax({
            type: "POST",
            url: "../Database/AddToCart.php",
            data: {
                Cartid: id,
                Cartname: name,
                Cartprice: price,
                Cartamount: amount,
                Cartimg: img,
                Carttype: type
            },
            error: (result) => {
                console.log(result)
            },
            success: (result) => {

                const selectButton = document.querySelector(`#button-${type}-${id}`)
                console.log(selectButton)
                selectButton.onclick = null
                selectButton.innerText = "เพิ่มลงในตะกร้าแล้ว"
                selectButton.disabled = true
            }
        });

        window.location = window.location
    }
</script>

</html>
