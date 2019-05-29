<?php

/*
* PDO Database Class
* Connect To Database
* Create Prepare Statement
* Bind Values
* Return rows and result
*/

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    //DB handler
    private $dbh;
    private $stmt;
    private $error;

    public function __construct(){
        //Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

        $option = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        //CREATE PDO INSTANCE
        try {
    
        } catch (PDOEXCEPTION $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
}