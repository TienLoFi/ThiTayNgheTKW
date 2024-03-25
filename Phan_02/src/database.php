<?php 
class Database{
    private $conn;
    public function __construct(){
        $this->conn=new mysqli("localhost","root","","thitaynghe");
        $this->conn->set_charset('utf8');
    }

//return mảng 2 chiều
public function getAll($sql){
return $this->conn->query($sql) ->fetch_all(MYSQLI_ASSOC);
}
public function getOne($sql){
    return $this->conn->query($sql) ->fetch_assoc();

}}





?>