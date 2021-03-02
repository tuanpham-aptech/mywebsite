<?php 

Class loginmodel extends DModel{

    public function __construct(){
        parent::__construct();

    }
    public function login($table_admin,$username,$password){
        $sql = "SELECT *FROM $table_admin WHERE username = ? AND password = ?";
        return $this->db->affectedRows($sql,$username,$password);// truyền vào bảng cần lấy dữ liệu 
    }
    public function getLogin($table_admin,$username,$password){// lấy ra 
        
        $sql = "SELECT *FROM $table_admin WHERE username = ? AND password = ?";
        return $this->db->selectUser($sql,$username,$password);// truyền vào bảng cần lấy dữ liệu 
    }
}