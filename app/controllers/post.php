<?php 

Class post extends DController{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->add_category();
        }
        public function add_category(){
            $this->load->view('admin/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/post/add_category');
            $this->load->view('admin/footer');
        }
        public function insert_category(){
            $title_category_post = $_POST['title_category_post'];
            $desc_category_post = $_POST['desc_category_post'];
            $table = 'category_post';
            $data = array(
                'title_category_post'=>$title_category_post,
                'desc_category_post' =>$desc_category_post
            );
            $categorymodel =  $this->load->model('categorymodel');
    
            $result = $categorymodel->insertcategory_post($table,$data);// kết quả thêm dũ liệu vào bảng
            if($result == 1 ){  
                $message['msg'] = "Thêm danh mục sản phẩm thành công  ";
                header('Location:'.BASE_URL."/post?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Thêm danh mục sản phẩm thất bại ";
                header('Location:'.BASE_URL."/post?msg=".urlencode(serialize($message)));
            }
        }
    
        public function list_category(){
            $this->load->view('admin/header');
            $this->load->view('admin/menu');
            $table = 'category_post';
            $categorymodel = $this->load->model('categorymodel');// gọi ra model gọi từ model category
            $data['category'] = $categorymodel->post_category($table);// lấy dữ liệu ra lưu vào biến data 
            $this->load->view('admin/post/list_category',$data);// truyền dữ liệu sang view hiển thị 
            $this->load->view('admin/footer');
        }
        public function delete_category($id){
            $table = 'category_post';
            $cond = "category_post.id_category_post = '$id'";// condition
            $categorymodel = $this->load->model('categorymodel');// gọi ra model gọi từ model category
            $result = $categorymodel->deletecategory_post($table,$cond);// lấy dữ liệu ra lưu vào biến data 
            if($result == 1 ){
                $message['msg'] = "Xóa danh mục thành công  ";
                header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Xóa danh mục thất bại ";
                header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
            }
    
        }
        public function edit_category($id){ 
            $table = 'category_post';
            $cond = "id_category_post = '$id'";// condition
            $categorymodel = $this->load->model('categorymodel');// gọi ra model gọi từ model category
            $data['categorybyid'] = $categorymodel->categorybyid_post($table,$cond);// lấy dữ liệu ra lưu vào biến data 
            $this->load->view('admin/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/post/edit_post',$data);
            $this->load->view('admin/footer');
        }
        public function update_category_post($id){
            $title_category_post = $_POST['title_category_post'];
            $desc_category_post = $_POST['desc_category_post'];
            $table = 'category_post';
            $cond = "id_category_post = '$id'";// condition
            $data = array(
                'title_category_post'=>$title_category_post,
                'desc_category_post' =>$desc_category_post
            );

            $categorymodel = $this->load->model('categorymodel');// gọi ra model gọi từ model category
            $result = $categorymodel->updatecategory_post($table,$data,$cond);// lấy dữ liệu ra lưu vào biến data 
            if($result == 1 ){
                $message['msg'] = "Cập nhật danh mục thành công  ";
                header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Cập nhật danh mục thất bại ";
                header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
            }
        }
}
?>