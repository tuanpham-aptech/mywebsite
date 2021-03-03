<?php 

Class brandmodel extends DModel{

   public  function __construct(){
    parent::__construct();
   }
  
   public function brand($table_brand){
      $sql = "SELECT *FROM $table_brand ORDER BY id_brand DESC";
      return $this->db->select($sql);// truyền vào bảng cần lấy dữ liệu 
   }
   public function brand_by_id($table_brand,$table_product,$id){
      $sql = "SELECT *FROM $table_brand,$table_product WHERE $table_brand.id_brand = $table_product.id_brand
       AND $table_product.id_brand = '$id'
      ORDER BY $table_product.id_brand DESC";
      return $this->db->select($sql);// truyền vào bảng cần lấy dữ liệu 
   }
   public function product_detail($table_product,$id){
      $sql = "SELECT *FROM $table_product WHERE $table_product.id_product = '$id' ";
     return $this->db->select($sql);// truyền vào bảng cần lấy dữ liệu 
   }
   public function insert_brand($table_brand,$data){
      return $this->db->insert($table_brand,$data);  

   }
   public function brandbyid($table,$cond){
      $sql = "SELECT *FROM $table WHERE $cond";
      return $this->db->select($sql); 
   }
   
   public function updatebrand($table_brand,$data,$cond){
      return $this->db->update($table_brand,$data,$cond);
  }

  public function deletebrand($table,$cond){
     return $this->db->delete($table,$cond);
  }
}