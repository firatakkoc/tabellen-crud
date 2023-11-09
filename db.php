<?php

class DB {

    private const HOST = "localhost:3306";
    private const DBNAME = "udemy";
    private const USER = "root";
    private const PASSWORD = "";

    private static $dbConnect;

    public static function connectDB() {
      if(self::$dbConnect === null) {

        self::$dbConnect = new PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME, self::USER, self::PASSWORD);


        // Error Mode user Exceptions, to catch them and output,
        self::$dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Not every DB System can't handle Prepared Statements. Emulate can helps here, but for this projekt its turned off
        self::$dbConnect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      }

    return self::$dbConnect;
  
  }

}
