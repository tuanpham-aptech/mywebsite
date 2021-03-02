<?php 

Class brand extends DController{

    public function __construct(){
        $data = array();
        $massage = array();
        parent::__construct();
    }

    public function list_brand(){
        $this->load->view('header');
       $homemodel =  $this->load->homemodel('homemodel');
       $table_brand = 'brand';
      $data['brand'] = $homemodel->brand($table_brand);
        $this->load->view('home',$data);
        $this->load->view('footer');

    }
    public function brand_product($id){
        $this->load->view('header');
        $table_categories = 'categories';
        $table_brand = 'brand';
        $table_product = 'products';

        $homemodel =  $this->load->model('homemodel');
        $brandmodel =  $this->load->model('brandmodel');
        $data['category'] = $homemodel->category($table_categories);
        $data['brand'] = $homemodel->brand($table_brand);
          $data['product'] = $homemodel->product($table_product);
          $data['brand_by_id'] = $brandmodel->brand_by_id($table_brand,$table_product,$id);

          $this->load->view('brandproduct',$data);
          $this->load->view('footer');
    }
    public function product_detail($id){
        $this->load->view('header');
        $table_categories = 'categories';
        $table_brand = 'brand';
        $table_product = 'products';

        $homemodel =  $this->load->model('homemodel');
        $brandmodel =  $this->load->model('brandmodel');

          $data['category'] = $homemodel->category($table_categories);
          $data['brand'] = $homemodel->brand($table_brand);
          $data['product'] = $homemodel->product_detail($table_product,$id);
          $data['brand_by_id'] = $homemodel->brand_by_id($table_brand,$table_product,$id);

        $this->load->view('product_detail',$data);
        $this->load->view('footer');
    }
    public function notfound(){
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }
}
?>