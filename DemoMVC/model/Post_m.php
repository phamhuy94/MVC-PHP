<?php

require_once "config/database.php";

class Post_m extends database {

    protected $table = "user";

    public function __construct() {
        parent::__construct();
    }

    public function getAll() {
        $query = " SELECT * FROM " . $this->table . " ORDER BY username ASC ";
        // $ra = mysqli_query(mysqli_connect('localhost','root','quanghuy','demo'),"SELECT * FROM user ORDER BY username ASC");
        $ra = mysqli_query($this->conn, $query);
        $result = array();

        while ($row = mysqli_fetch_array($ra)) {
            $result[] = array(
                'id' => $row['id'],
                'username' => $row['username'],
                'email' => $row['email'],
            );
        }
        return $result;
    } 
    
    public function Insert($username, $email){
        $query = "INSERT INTO " . $this->table . " (username, email) VALUE ('".$username."', '".$email."');";
        $rs = mysqli_query($this->conn,$query);
        return $rs;
    }
    
    public function Delete($del) {
        $query = "DELETE FROM " . $this->table . " WHERE id='".$del."'; ";      
        $rs = mysqli_query($this->conn,$query);
        return $rs;
    }
    
    public function GetUpdate($value){
        $query = " SELECT * FROM " . $this->table . " WHERE id='" . $value . "'" ;
        $ra = mysqli_query($this->conn, $query);      
        $result = array();

        while ($row = mysqli_fetch_array($ra)) {
            $result[] = array(
                'id' => $row['id'],
                'username' => $row['username'],
                'email' => $row['email'],
            );
        }
        return $result;    
    }
    
    public function Update($update_username,$update_email,$update_id){
        $query = "UPDATE " . $this->table . " SET username='".$update_username."', email='".$update_email."' WHERE id='".$update_id."' ";
        $rs = mysqli_query($this->conn, $query);      
        $result = array();

        while ($row = mysqli_fetch_array($rs)) {
            $result[] = array(
                'id' => $row['id'],
                'username' => $row['username'],
                'email' => $row['email'],
            );
        }
        return $result; 
    }
    public function Search($search_name){
        $query = "SELECT * FROM " . $this->table . " WHERE username LIKE  '%".$search_name."%' ";
        $rb = mysqli_query($this->conn, $query);
        $search = array();
        if(mysqli_num_rows($rb) > 0){       
            while($list = mysqli_fetch_array($rb)){ 
                $search[] = array(
                    'id' => $list['id'],
                    'username' => $list['username'],
                    'email' => $list['email'],
                );
            }
        }
        return $search;
    }
}
