<?php 

Class DModel{
    protected $db = array();// chỉ những cái kế thừa thì dùng dc 
    public function __construct(){
        $connect = 'mysql:dbname=newshop; host=localhost;charset=utf8';
        $user = 'root';
        $pass = '';
        $this->db =new Database($connect,$user,$pass);
    }
}