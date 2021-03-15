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
            $this->load->view('admin/post/add_post');
            $this->load->view('admin/footer');
        }
        public function insert_post(){
            $table = 'category_post';
            $title_category_post = $_POST['title_category_post'];
            $desc_category_post = $_POST['desc_category_post'];
            $data = array(
                'title_category_post'=>$title_category_post,
                'desc_category_post' =>$desc_category_post
            );
            $categorymodel =  $this->load->model('categorymodel');
    
            $result = $categorymodel->insertcategory_post($table,$data);
            if($result == 1 ){  
                $message['msg'] = "Thêm danh mục sản phẩm thành công  ";
                header('Location:'.BASE_URL."/post?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Thêm danh mục sản phẩm thất bại ";
                header('Location:'.BASE_URL."/post?msg=".urlencode(serialize($message)));
            }
        }
    
        public function list_post(){
            $table = 'category_post';
            $this->load->view('admin/header');
            $this->load->view('admin/menu');
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->post_category($table);
            $this->load->view('admin/post/list_post',$data);
            $this->load->view('admin/footer');
        }
        public function delete_post($id){
            $table = 'category_post';
            $cond = "category_post.id_category_post = '$id'";
            $categorymodel = $this->load->model('categorymodel');
            $result = $categorymodel->deletecategory_post($table,$cond);
            if($result == 1 ){
                $message['msg'] = "Xóa danh mục thành công  ";
                header("Location:".BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Xóa danh mục thất bại ";
                header("Location:".BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
            }
    
        }
        public function edit_post($id){ 
            $table = 'category_post';
            $cond = "id_category_post = '$id'";
            $categorymodel = $this->load->model('categorymodel');
            $data['categorybyid'] = $categorymodel->categorybyid_post($table,$cond); 
            $this->load->view('admin/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/post/edit_post',$data);
            $this->load->view('admin/footer');
        }
        public function update_category_post($id){
            $title_category_post = $_POST['title_category_post'];
            $desc_category_post = $_POST['desc_category_post'];
            $table = 'category_post';
            $cond = "id_category_post = '$id'";
            $data = array(
                'title_category_post'=>$title_category_post,
                'desc_category_post' =>$desc_category_post
            );

            $categorymodel = $this->load->model('categorymodel');
            $result = $categorymodel->updatecategory_post($table,$data,$cond); 
            if($result == 1 ){
                $message['msg'] = "Cập nhật danh mục thành công  ";
                header("Location:".BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Cập nhật danh mục thất bại ";
                header("Location:".BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
            }
        }
}
?>