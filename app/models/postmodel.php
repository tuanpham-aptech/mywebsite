<?php 

Class postmodel extends DModel{


    public function __construct(){
        parent::__construct();

    }
    public function post($table_post){
        $sql = "SELECT *FROM $table_post ORDER BY id_post DESC";
        return $this->db->select($sql); 
     }
     public function postbyid($table,$cond){
        $sql = "SELECT *FROM $table WHERE $cond";
       return $this->db->select($sql); 
     }

     public function insertpost($table_post,$data){
        return $this->db->insert($table_post,$data);  
     }

     public function updatepost($table_post,$data,$cond){
         return $this->db->update($table_post,$data,$cond);
     }

     public function deletepost($table_post,$cond){
        return $this->db->delete($table_post,$cond);
     }

}
?>