<?php 

Class category extends DController{

    public function __construct(){
        $data = array();
        $massage = array();
        parent::__construct();
    }

    public function list_category(){
        $this->load->view('header');
       $categorymodel =  $this->load->model('categorymodel');
       $table_categories = 'categories';
      $data['category'] = $categorymodel->category($table_categories);
        $this->load->view('category',$data);
        $this->load->view('footer');

    }

    public function categorybyid($id){
        $this->load->view('header');
       $categorymodel =  $this->load->model('categorymodel');
       $cond = "categories.id = '$id'";// condition
       $table_categories = 'categories';
      $data['categorybyid'] = $categorymodel->categorybyid($table_categories,$cond);
        $this->load->view('categorybyid',$data);
        $this->load->view('footer');

    }
    public function addcategory(){
        $this->load->view('addcategory');
    }
    public function insertCategory(){
        $categorymodel =  $this->load->model('categorymodel');
        $table_categories = 'categories';
        $title = $_POST['title'];
        $data = array(
            'name'=>$title
        );
        $result = $categorymodel->insertcategory($table_categories,$data);
        if($result == 1 ){
            $massage['msg'] = "Thêm dữ liệu thành công ";
        }else{
            $massage['msg'] = "Thêm dữ liệu thất bại ";
        }
        $this->load->view('addcategory',$massage);

    }

    public function updateCategory(){
        $categorymodel =  $this->load->model('categorymodel');
        $table_categories = 'categories';
        // $title = $_POST['title'];
        $id = 6;
        $cond = "categories.id = '$id'";
        $data = array(
            'name'=>'Laptop'
        );
        $result = $categorymodel->updatecategory($table_categories,$data,$cond);// kết quả thêm dũ liệu vào bảng
        if($result == 1){
            echo "Cập nhật dữ liệu thành công ";
        }else{
            echo "Cập nhật dữ liệu thất bại ";
        }
    }

    public function deletecategory(){
        $categorymodel =  $this->load->model('categorymodel');
        $table_categories = 'categories';
        // $title = $_POST['title'];
        $id = 5;
        $cond = "categories.id = '$id'";
        $result = $categorymodel->deletecategory($table_categories,$cond);// kết quả thêm dũ liệu vào bảng
        if($result == 1){
            echo "Xóa dữ liệu thành công ";
        }else{
            echo "Xóa dữ liệu thất bại ";
        }
    }
}
?>