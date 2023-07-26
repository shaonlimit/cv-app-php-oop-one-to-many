<?php

namespace App\traits;

use PDO;
use PDOException;

trait All_Traits
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $pdo;
    public function __construct()
    {
        try {
            $pdo = new PDO("mysql:host=$this->servername;dbname=cv_app", $this->username, $this->password);
            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->pdo = $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
