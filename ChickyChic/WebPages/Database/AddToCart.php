<?php 

   /* Connect and Open Database */
   class MyDB2 extends SQLite3
   {
       function __construct()
       {
           $this->open('selectMenu.db');
       }
   }
   

   // Open Database 
   $db2 = new MyDB2();

   $id = $_POST['Cartid'];
   $name = $_POST['Cartname'];
   $price = $_POST['Cartprice'];
   $img = $_POST['Cartimg'];
   $amount = $_POST['Cartamount'];
   $type = $_POST['Carttype'];
   if(!$id || !$name || !$price || !$img || !$amount || !$amount < 0) echo new Error("มีบางอย่างผิดพลาดโปรดกินไก่ 1 ชิ้น");

   $sql =<<<EOF
   INSERT INTO selectMenu (ID,NAME,PRICE,AMOUNT,IMG)
   VALUES ($id, '$name', $price, $amount, '$img');
   EOF;

   $ret = $db2->exec($sql);
   if(!$ret) echo $db2->lastErrorMsg();
   
   class MyDB extends SQLite3
   {
       function __construct()
       {
           $this->open('currentMenu.db');
       }
   }


   $db = new MyDB();

   $sql =<<<EOF
   UPDATE $type set INCART = "YES" where ID=$id;
   EOF;

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo $db->changes();
   }

   // Close database
   $db2->close();

?>