<?php 

Class customermodel extends DModel{


    public function __construct(){
        parent::__construct();

    }
    public function customer($table_customer){
        $sql = "SELECT *FROM $table_customer ORDER BY customer_id DESC";
        return $this->db->select($sql);
     }
    public function customerbyid($table,$cond){
        $sql = "SELECT *FROM $table WHERE $cond";
       return $this->db->select($sql); 
    }

    public function insertcustomer($table_customer,$data){
        return $this->db->insert($table_customer,$data);  
     }    
     // hàm mới 
     public function countUser($table_customer,$email){
         $sql = "SELECT *FROM $table_customer WHERE customer_email = ?";
        return $this->db->countRegister($sql,$email);
    }
    public function updatecustomer($table_customer,$data,$cond){      
        return $this->db->update($table_customer,$data,$cond);
    }

    public function deletecustomer($table,$cond){
        return $this->db->delete($table,$cond);
    }
    public function login($table_customer,$username,$password){
        $sql = "SELECT *FROM $table_customer WHERE customer_email = ? AND customer_password = ?";
        return $this->db->affectedRows($sql,$username,$password);
    }
    public function getLogin($table_customer,$username,$password){// lấy ra 
        
        $sql = "SELECT *FROM $table_customer WHERE customer_email = ? AND customer_password = ?";
        return $this->db->selectUser($sql,$username,$password);// truyền vào bảng cần lấy dữ liệu 
    }
    // comment 
    public function insertComment($table_comment,$data){
        return $this->db->insert($table_comment,$data);  
    }
    // public function getComment($table_comments,$table_customers,$cond){
    //     $sql = "SELECT *FROM  $table_comments,$table_customers";
    // }
    public function getIdCustomerComment($table_comment,$key){
        $sql = "SELECT  customer_id FROM $table_comment WHERE customer_id = '$key' ";
        return $this->db->selectOne($sql);
    }
    

}