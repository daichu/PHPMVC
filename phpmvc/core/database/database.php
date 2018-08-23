<?php
class Database {

    public static $connection = null;

    public function __construct()
    {
        if (self::$connection) {
            return self::$connection;
        }

        $this->connect();
    }

    public function connect() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mvc";

        // Create connection
        self::$connection = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if (self::$connection->connect_error) {
            die("Connection failed: " . self::$connection->connect_error);
        }
    }

    public function disconnect() {
        self::$connection->close();
    }

}