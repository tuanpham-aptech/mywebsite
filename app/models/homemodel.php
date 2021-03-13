<?php 

Class homemodel extends DModel{

   public  function __construct(){
    parent::__construct();
   }
   public function category($table_categories){
      $sql = "SELECT *FROM $table_categories ORDER BY id DESC";
      return $this->db->select($sql);// truyền vào bảng cần lấy dữ liệu 
   }

   public function brand($table_brand){
      $sql = "SELECT *FROM $table_brand ORDER BY id_brand DESC";
      return $this->db->select($sql);// truyền vào bảng cần lấy dữ liệu 
   }
   public function product($table_product){
      $sql = "SELECT *FROM $table_product ";
      return $this->db->select($sql);// truyền vào bảng cần lấy dữ liệu 
   }
   public function search($table_product,$key){
      $sql = "SELECT *FROM $table_product WHERE $table_product.title_product LIKE '%".$key."%'";
      return $this->db->select($sql); 
   }
   public function category_by_id($table_categories,$table_product,$id){
      $sql = "SELECT *FROM $table_categories,$table_product WHERE $table_categories.id = $table_product.id_category_product
       AND $table_product.id_category_product = '$id'
      ORDER BY $table_product.id_category_product DESC";
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
  
}
?>