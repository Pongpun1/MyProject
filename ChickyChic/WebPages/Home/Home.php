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

    <link rel="stylesheet" href="Home.css">

</head>

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


    .half-top-content {
        position: relative;
        z-index: -2;
        display: flex;
        background-image: url('../IMG/menu/chicken/10.jpg');
        background-position: center;
        background-size: cover;
        left: 10%;
        width: 1600px;
        height: 800px;
    }

    .half-top-left-content {
        position: absolute;
        right: 0px;
        background-color: rgb(255, 255, 255);
        opacity: 0.85;
        width: 500px;
        height: 800px;
    }

    .logo-img-content {
        width: 250px;
        display: flex;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;

    }

    .logo-word-content {
        width: 200px;
        margin-left: auto;
        margin-right: auto;
        display: flex;
    }

    .slogan {
        position: relative;
        top: 80px;
        text-align: center;
        font-size: 30px;
    }

    .half-bottom-content {
        /* border:1px solid black; */
        position: relative;
        width: 90%;
        left: 6%;
        height: 140%;
    }

    .half-bottom-top-content {
        position: relative;
        width: 70%;
        height: 50%;
        top: 3%;
        left: 15%;

    }

    .half-bottom-bottom-content {
        position: relative;
        width: 100%;
        height: 50%;
        left: 5%;

    }

    .d-block {
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
    }


    .card {
        text-align: center;
        align-items: center;
        border-radius: 40px;
        margin: 6%;
    }

    #cardd {
        border-radius: 30px;
    }

    .card-img-top {
        margin-top: 5%;
        width: 80%;
        aspect-ratio: 1/1;
        object-fit: contain;
    }

    .card-text {
        font-size: 18px;
        color: grey;
    }

    h3 {
        font-size: 25px;
    }

    #listsOfFood {
        position: relative;
        top: 50px;
        right:25;
    }

    .try-now{
        position: absolute;
        z-index: 1;
        width: 65%;
        left: -22%;
        top:-18%;
        /* border:1px solid black; */
    }

    .logo-img-bottom {
        position: absolute;
        bottom:0%;
        right: -60px;
        width: 140px;
    }
    .card-title {
        font-size: 27px;
        color:black;
    }

    a:hover {
        text-decoration: none;
    }

    .card-subtitle {
        font-size: 20px;
        text-decoration: none;
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
                    <a class="nav" href="../Home/Home.php" style="top: 40px; left: 360px; color: rgb(253 165 39);">หน้าหลัก</a>
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

        <div class="content">

            <div class="half-top-content">
                <div class="half-top-left-content">
                    <img class="logo-img-content"
                        src="../IMG/logo/logo-img.png">
                    <img class="logo-word-content"
                        src="../IMG/logo/logo-word.png">
                    <div class="slogan">
                        <p>ยืนหนึ่งเรื่องความกรอบ</p>
                        <p>สะอาด ปลอดภัย น่าไว้ใจ</p>
                    </div>
                </div>
            </div>

            <div class="half-bottom-content">
            <div class="half-bottom-top-content">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block"
                                src="../IMG/menu/chicken/11.jpg"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block"
                                src="../IMG/menu/chicken/12.jpg"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block"
                                src="../IMG/menu/chicken/13.jpg"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
                </div>

                <div class="half-bottom-bottom-content">
                <div class="row" id="listsOfFood">

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
                                $ret = $db->query("SELECT * from chicken");
                                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                                    if($row['ID'] == 5){
                                        echo "
    <div class='col-md-4'>
      <div class='card' style='width:70%;'>
      <a href='../Menu/Menu.php'>
      <img src='{$row['IMG']}'class='card-img-top'>
      <img class='try-now' src='../IMG/logo/try-now.png'>
          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
              </div><br>
          </div>
      </a>
      </div>
      </div>";
    }
}
                                // Close database
                                $db->close();
                                ?>


                    <?php
                                // Open Database
                                $db = new MyDB();
                                if (!$db) {
                                    echo $db->lastErrorMsg();
                                    return;
                                }

                                // Query process
                                $ret = $db->query("SELECT * from Promotion");
                                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                                    if($row['ID'] == 41){
echo "<div class='col-md-4'>
      <div class='card' style='width: 70%;'>
      <a href='../Promotion/Promotion.php #burger'>
      <img src='{$row['IMG']}'class='card-img-top'>
      <img class='try-now' src='../IMG/logo/try-now.png'>

          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
              </div><br>
          </div>
        </a>
      </div>
  </div>";
                                    }
}
                                // Close database
                                $db->close();
                                ?>

                    <?php
                                // Open Database
                                $db = new MyDB();
                                if (!$db) {
                                    echo $db->lastErrorMsg();
                                    return;
                                }

                                // Query process
                                $ret = $db->query("SELECT * from Promotion");
                                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                                    if($row['ID'] == 37){
                                        echo "<div class='col-md-4'>
      <div class='card' style='width: 70%;'>
              <a href='../Promotion/Promotion.php'>
              <img src='{$row['IMG']}'
              class='card-img-top'>
              <img class='try-now' src='../IMG/logo/try-now.png'>

          <div class='card-body'>
              <h3 class='card-title'>{$row['NAME']}</h3>
              <h6 class='card-subtitle mb-2 text-muted'>{$row['PRICE']} บาท</h6>
              <div><br>
              </div><br>
          </div>
          </a>
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

</html>
