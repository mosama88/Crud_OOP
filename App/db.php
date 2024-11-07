<?php


 namespace App;
Class Database{
    


    private $serverName =  "localhost";
    private $username =  "root";
    private $password =  "";
    private $dbName =  "crud_php_oop";
    private $conn;


    public function __construct(){
        $this->conn = mysqli_connect($this->serverName,$this->username,$this->password,$this->dbName);

        if(!$this->conn){
            die ("Server not connected" . mysqli_connect_error());
        }
    }

    public function insert($sql){
        if (mysqli_query($this->conn, $sql)) {  // تمرير $sql كمعامل ثاني
            return "Employee Added Success"; 
        }else{
            die("Error : " .  mysqli_error($this->conn));
        }
    }


    public function enc_password($password){
        return md5($password);
    }
}