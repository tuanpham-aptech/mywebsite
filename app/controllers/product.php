<?php 

Class product extends DController{

    function __construct(){
        $data = array();
        $massage = array();
        parent::__construct();
    }

    public function index(){
        $this->add_category();
    }
    public function add_category(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/product/add_category');
        $this->load->view('admin/footer');
    }
    public function insert_category(){
        $title_category_product = $_POST['title_category_product'];
        $table_categories = 'categories';
        $data = array(
            'name'=>$title_category_product
        );
        $categorymodel =  $this->load->model('categorymodel');

        $result = $categorymodel->insertcategory($table_categories,$data);
        if($result == 1 ){  
            $message['msg'] = "Thêm danh mục sản phẩm thành công  ";
            header('Location:'.BASE_URL."/product?msg=".urlencode(serialize($message)));
        }else{
            $message['msg'] = "Thêm danh mục sản phẩm thất bại ";
            header('Location:'.BASE_URL."/product?msg=".urlencode(serialize($message)));
        }
    }

    public function list_category(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $table = 'categories';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category($table);
        $this->load->view('admin/product/list_category',$data); 
        $this->load->view('admin/footer');
    }
    public function delete_category($id){
        $table = 'categories';
        $cond = "categories.id = '$id'";
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->deletecategory($table,$cond); 
        if($result == 1 ){
            $message['msg'] = "Xóa danh mục thành công  ";
            header("Location:".BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
        }else{
            $message['msg'] = "Xóa danh mục thất bại ";
            header("Location:".BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
        }

    }
    public function edit_category($id){ 
        $table = 'categories';
        $cond = "categories.id = '$id'";
        $categorymodel = $this->load->model('categorymodel');
        $data['categorybyid'] = $categorymodel->categorybyid($table,$cond); 
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/product/edit_category',$data);
        $this->load->view('admin/footer');
    }
    public function update_category($id){
        $title_category_product = $_POST['title_category_product'];
        $table = 'categories';
        $cond = "id = '$id'";// condition
        $data = array(
            'name'=>$title_category_product
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->updatecategory($table,$data,$cond);
        if($result == 1 ){
            $message['msg'] = "Cập nhật danh mục thành công  ";
            header("Location:".BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
        }else{
            $message['msg'] = "Cập nhật danh mục thất bại ";
            header("Location:".BASE_URL."/product/list_category?msg=".urlencode(serialize($message)));
        }
    }

    //add product
    public function add_product(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $table_categories = 'categories';
        $categorymodel =  $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category($table_categories);
        $this->load->view('admin/product/add_product',$data);
        $this->load->view('admin/footer');
    }

    public function insert_product(){
        $title = $_POST['title_product'];
        $desc = $_POST['desc_product'];
        $price = $_POST['price_product'];
        $quantity = $_POST['quantity_product'];
        $image = $_FILES['image_product']['name'];// lấy trường name

        $tmp_image = $_FILES['image_product']['tmp_name'];// biến tạm name
        $div = explode('.',$image);
        $file_ext = strtolower(end($div));// đổi tất cả thành chữ thường và thêm đuôi mở rộng vào cuối 
        $unique_image = $div[0] .'.'.$file_ext;// biến thời gian chánh trùng hình ảnh 
        $path_uploads = "public/uploads/product/".$unique_image;

        $categoryid = $_POST['category_product'];

        $table = 'products';
        $data = array(
            'title_product'=>$title,
            'desc_product'=>$desc,
            'price_product'=>$price,
            'quantity_product'=>$quantity,
            'image_product'=>$unique_image,
            'id_category_product'=>$categoryid 

        );
        $categorymodel =  $this->load->model('categorymodel');

        $result = $categorymodel->insertproduct($table,$data);
        if($result == 1 ){  
            $message['msg'] = "Thêm danh mục sản phẩm thành công  ";
            header('Location:'.BASE_URL."/product/add_product?msg=".urlencode(serialize($message)));
        }else{
            $message['msg'] = "Thêm danh mục sản phẩm thất bại ";
            header('Location:'.BASE_URL."/product/add_product?msg=".urlencode(serialize($message)));
        }
    }

    public function delete_product($id){
        $table = 'products';
        $cond = "id_product = '$id'";
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->delete_product($table,$cond);
        if($result == 1 ){
            $message['msg'] = "Xóa danh mục thành công  ";
            header("Location:".BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
        }else{
            $message['msg'] = "Xóa danh mục thất bại ";
            header("Location:".BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
        }

    }
    
    public function list_product(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $table_product = 'products';
        $table_category = 'categories';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->list_product($table_product,$table_category); 
        $this->load->view('admin/product/list_product',$data);
        $this->load->view('admin/footer');
    }

    public function edit_product($id){ 
        $table_product = 'products';
        $table_category = 'categories';
        $cond = "id_product = '$id'";
        $categorymodel = $this->load->model('categorymodel');
        $data['productbyid'] = $categorymodel->productbyid($table_product,$cond);
        $data['category'] = $categorymodel->category($table_category);
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/product/edit_product',$data);
        $this->load->view('admin/footer');
    }

    
    public function update_product($id){
        $table = 'products';
        $cond = "products.id_product = '$id'";
        $categorymodel =  $this->load->model('categorymodel');

        $title = $_POST['title_product'];
        $desc = $_POST['desc_product'];
        $price = $_POST['price_product'];
        $quantity = $_POST['quantity_product'];
        $categoryid = $_POST['category_product'];

        $image = $_FILES['image_product']['name'];// lấy trường name
        $tmp_image = $_FILES['image_product']['tmp_name'];// biến tạm name
        $div = explode('.',$image);
        $file_ext = strtolower(end($div));// đổi tất cả thành chữ thường và thêm đuôi mở rộng vào cuối 
        $unique_image = $div[0] .'.'.$file_ext;// biến thời gian chánh trùng hình ảnh 
        $path_uploads = "public/uploads/product/".$unique_image;

        if($image){
            $data['productbyid'] = $categorymodel->productbyid($table_product,$cond); 
            foreach($data['productbyid'] as $key => $value){
                $path_unlink ="public/uploads/product/"; 
                    unlink($path_unlink.$value['image_product']);// hủy liên kết 
            }
            $data = array(
                'title_product'=>$title,
                'desc_product'=>$desc,
                'price_product'=>$price,
                'quantity_product'=>$quantity,
                'image_product'=>$unique_image,
                'id_category_product'=>$categoryid
            );
            move_uploaded_file($tmp_image,$path_uploads);

        }else{
            $data = array(
                'title_product'=>$title,
                'desc_product'=>$desc,
                'price_product'=>$price,
                'quantity_product'=>$quantity,
                'id_category_product'=>$categoryid
    
            );
        }
        $result = $categorymodel->updateproduct($table,$data,$cond);
        if($result == 1 ){  
            $message['msg'] = "Cập nhật sản phẩm thành công  ";
            header('Location:'.BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
        }else{
            $message['msg'] = "Cập nhật sản phẩm thất bại ";
            header('Location:'.BASE_URL."/product/list_product?msg=".urlencode(serialize($message)));
        }
    }
   

}