<?php
class database {
    protected $conn = null;
    public function __construct(){
        $this->conn = mysqli_connect('localhost','root','quanghuy','demo');
        if(!$this->conn){
            die("Cannot connect to the database");
        }
    }
}
