<?php
    // Connect to Database 
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('currentMenu.db');
        }
    }

    // Open Database 
    $db = new MyDB();
    if(!$db) {
        echo $db->lastErrorMsg();
    } else {
        echo "Opened database successfully<br>";
    }

    // Query process 
    // Create a Table using SQL 
    $sql =<<<EOF
    CREATE TABLE Promotion
    (ID INT      NOT NULL,
    NAME           TEXT    NOT NULL,
    PRICE            INT     NOT NULL,
    DESCRIPTION     TEXT NOT NULL,
    AMOUNT        INT NOT NULL,
    IMG         TEXT NOT NULL);
    EOF;

    $ret = $db->exec($sql);
    if(!$ret){
    echo $db->lastErrorMsg();
    } else {
    echo "Table created successfully<br>";
    }


    // Close database
    $db->close();

?>