<?php 

Class brand extends DController{

    public function __construct(){
        Session::init();
        $data = array();
        $massage = array();
        parent::__construct();
    }
    public function index(){
        $this->add_brand();
    }
    public function add_brand(){
        $this->load->view('admin/header');    
        $this->load->view('admin/menu');
        $this->load->view('admin/brand/addbrand');
        $this->load->view('admin/footer');
    }

    public function list_brand(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $table = 'brand';
        $brandmodel = $this->load->model('brandmodel');
        $data['brand'] = $brandmodel->brand($table);
        $this->load->view('admin/brand/list_brand',$data);
        $this->load->view('admin/footer');
    }
    public function brand_product($id){
        
        $table_categories = 'categories';
        $table_brand = 'brand';
        $table_product = 'products';

        $homemodel =  $this->load->model('homemodel');
        $brandmodel =  $this->load->model('brandmodel');
        $data['category'] = $homemodel->category($table_categories);
        $data['brand'] = $homemodel->brand($table_brand);
          $data['product'] = $homemodel->product($table_product);
          $data['brand_by_id'] = $brandmodel->brand_by_id($table_brand,$table_product,$id);
          $this->load->view('header',$data);
          $this->load->view('slider');
          $this->load->view('brandproduct',$data);
          $this->load->view('footer');
    }
    public function product_detail($id){
        
        $table_categories = 'categories';
        $table_brand = 'brand';
        $table_product = 'products';

        $homemodel =  $this->load->model('homemodel');
        $brandmodel =  $this->load->model('brandmodel');

          $data['category'] = $homemodel->category($table_categories);
          $data['brand'] = $homemodel->brand($table_brand);
          $data['product'] = $homemodel->product_detail($table_product,$id);
          $data['brand_by_id'] = $homemodel->brand_by_id($table_brand,$table_product,$id);
          $this->load->view('header',$data);
          $this->load->view('slider');
        $this->load->view('product_detail',$data);
        $this->load->view('footer');
    }

    public function insert_brand(){
        $brandmodel =  $this->load->model('brandmodel');
        $table_brand = 'brand';
        $title = $_POST['title_brand'];
        $data = array(
            'title_brand'=>$title
        );

        $result = $brandmodel->insert_brand($table_brand,$data);
        if($result == 1 ){  
            $message['msg'] = "Thêm thương hiệu thành công  ";
            header('Location:'.BASE_URL."/brand/add_brand?msg=".urlencode(serialize($message)));
        }else{
            $message['msg'] = "Thêm thương hiệu thất bại ";
            header('Location:'.BASE_URL."/brand/add_brand?msg=".urlencode(serialize($message)));
        }
    }
    public function edit_brand($id){ 
        $table = 'brand';
        $cond = "brand.id_brand = '$id'";
        $brandmodel = $this->load->model('brandmodel');
        $data['brandbyid'] = $brandmodel->brandbyid($table,$cond);
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/brand/edit_brand',$data);
        $this->load->view('admin/footer');
    }
    public function update_brand($id){
        $brandmodel =  $this->load->model('brandmodel');
        $title_brand = $_POST['title_brand'];
        $table_brand = 'brand';
        $cond = "id_brand = '$id'";
        $data = array(
            'title_brand'=>$title_brand
        );
        $result = $brandmodel->updatebrand($table_brand,$data,$cond); 
        if($result == 1 ){
            $message['msg'] = "Cập nhật danh mục thành công  ";
            header("Location:".BASE_URL."/brand/list_brand?msg=".urlencode(serialize($message)));
        }else{
            $message['msg'] = "Cập nhật danh mục thất bại ";
            header("Location:".BASE_URL."/brand/list_brand?msg=".urlencode(serialize($message)));
        }

    }

    public function delete_brand($id){
        $table = 'brand';
        $cond = "brand.id_brand = '$id'";
        $brandmodel = $this->load->model('brandmodel');
        $result = $brandmodel->deletebrand($table,$cond);
        if($result == 1 ){
            $message['msg'] = "Xóa danh mục thành công  ";
            header("Location:".BASE_URL."/brand/list_brand?msg=".urlencode(serialize($message)));
        }else{
            $message['msg'] = "Xóa danh mục thất bại ";
            header("Location:".BASE_URL."/brand/list_brand?msg=".urlencode(serialize($message)));
        }

    }

    public function notfound(){
        $this->load->view('header');
        $this->load->view('slider');
        $this->load->view('404');
        $this->load->view('footer');
    }
}
?>