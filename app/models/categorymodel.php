<?php 

Class categorymodel extends DModel{


    public function __construct(){
        parent::__construct();

    }
    public function category($table_categories){
        $sql = "SELECT *FROM $table_categories ORDER BY id DESC";
        return $this->db->select($sql);// truyền vào bảng cần lấy dữ liệu 
     }
     public function categorybyid($table,$cond){
        $sql = "SELECT *FROM $table WHERE $cond";
       return $this->db->select($sql); 
     }

     public function insertcategory($table_categories,$data){
        return $this->db->insert($table_categories,$data);  
     }

     public function updatecategory($table_categories,$data,$cond){
         return $this->db->update($table_categories,$data,$cond);
     }

     public function deletecategory($table_categories,$cond){
        return $this->db->delete($table_categories,$cond);
     }

     //Category post

     public function post_category($table){
        $sql = "SELECT *FROM $table ORDER BY id_category_post ASC";
        return $this->db->select($sql);// truyền vào bảng cần lấy dữ liệu 
     }
     public function insertcategory_post($table_categories,$data){
        return $this->db->insert($table_categories,$data);
     }
     public function deletecategory_post($table,$cond){
        return $this->db->delete($table,$cond);

     }
     public function updatecategory_post($table,$data,$cond){
        return $this->db->update($table,$data,$cond);

     }
     public function categorybyid_post($table,$cond){
        $sql = "SELECT *FROM $table WHERE $cond";
        return $this->db->select($sql);
     }
     //product
     public function insertproduct($table,$data){
      return $this->db->insert($table,$data);
     }

     public function list_product($table_product,$table_category){
      $sql = "SELECT *FROM $table_product,$table_category WHERE $table_product.id_category_product = $table_category.id ORDER BY $table_product.id_product DESC";
      return $this->db->select($sql);// truyền vào bảng cần lấy dữ liệu 
   }
   public function delete_product($table,$cond){
      return $this->db->delete($table,$cond);

   }

  public function productbyid($table,$cond){
      $sql = "SELECT *FROM $table WHERE $cond";

     return $this->db->select($sql);
   
   }

   public function updateproduct($table_product,$data,$cond){
      return $this->db->update($table_product,$data,$cond);
  }

}