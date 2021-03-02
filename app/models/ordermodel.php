<?php 

Class ordermodel extends DModel{

   public  function __construct(){
    parent::__construct();
   }
   public function insert_order($table_order,$data_order){
       return $this->db->insert($table_order,$data_order); 
   }
   public function insert_order_detail($table_order_details,$data){
    return $this->db->insert($table_order_details,$data); 
   }
   public function list_order($table_order){
    $sql = "SELECT *FROM $table_order ORDER BY order_id DESC";
    return $this->db->select($sql);
   }
 
}
?>