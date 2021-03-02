<?php 

Class ordermodel extends DModel{

   public  function __construct(){
    parent::__construct();
   }
   public function insert_order($table_order,$data_order){
       return $this->db->insert($table_order,$data_order); 
   }

 
}
?>