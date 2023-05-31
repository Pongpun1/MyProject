<?php
    // class MyDB3 extends SQLite3 {
    //     function __construct() {
    //         $this->open('currentMenu.db');
    //     }
    // }

    // $db2 = new MyDB3();

    // $sql ="SELECT * from information_schema.tables;";
    // $ret = $db->query($sql);
    // while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
    //     set INCART = "NO";
    // }

    // $ret = $db->exec($sql);

    // if(!$ret) {
    //     echo $db3->lastErrorMsg();
    // }
    // else {
    //     echo $db3->changes();

    // }
    // $db3->close();

    class MyDB2 extends SQLite3 {
        function __construct() {
            $this->open('selectMenu.db');
        }
    }

    $db2 = new MyDB2();

    $sql =<<<EOF
    DELETE FROM selectMenu;
    EOF;

    $ret = $db2->exec($sql);
    if(!$ret) {
        echo $db2->lastErrorMsg();
    }
    else {
        echo $db2->changes();
    }

    $db2->close();
?>
