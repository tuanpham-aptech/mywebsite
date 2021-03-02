<?php 

Class customermodel extends DModel{


    public function __construct(){
        parent::__construct();

    }
    public function customer($table_customer){
        $sql = "SELECT *FROM $table_customer ORDER BY id DESC";
        return $this->db->select($sql);// truyền vào bảng cần lấy dữ liệu 
     }
     public function customerbyid($table,$cond){
        $sql = "SELECT *FROM $table WHERE $cond";
       return $this->db->select($sql); 
     }

     public function insertcustomer($table_categories,$data){
        return $this->db->insert($table_categories,$data);  
     }

     public function updatecustomer($table_categories,$data,$cond){
         return $this->db->update($table_categories,$data,$cond);
     }

     public function deletecustomer($table_categories,$cond){
        return $this->db->delete($table_categories,$cond);
     }
     public function login($table_customer,$username,$password){
        $sql = "SELECT *FROM $table_customer WHERE customer_email = ? AND customer_password = ?";
        return $this->db->affectedRows($sql,$username,$password);// truyền vào bảng cần lấy dữ liệu 
    }
    public function getLogin($table_customer,$username,$password){// lấy ra 
        
        $sql = "SELECT *FROM $table_customer WHERE customer_email = ? AND customer_password = ?";
        return $this->db->selectUser($sql,$username,$password);// truyền vào bảng cần lấy dữ liệu 
    }
    

}