<?php 

Class index extends DController{
  
    public function __construct(){
      Session::init();
        $data = array();
        parent::__construct();
    }
    public function index(){
     $this->homepage();
    }
    public function homepage(){
      
        $table_categories = 'categories';
        $table_brand = 'brand';
        $table_product = 'products';

        $homemodel =  $this->load->model('homemodel');
          $data['category'] = $homemodel->category($table_categories);
          $data['brand'] = $homemodel->brand($table_brand);
          $data['product'] = $homemodel->product($table_product);
          $this->load->view('header',$data);
          $this->load->view('slider');
          $this->load->view('home',$data);
          $this->load->view('footer');
    
     }
     public function contact_us(){
       
        $table_categories = 'categories';
        $table_brand = 'brand';
        $table_product = 'products';

        $homemodel =  $this->load->model('homemodel');
          $data['category'] = $homemodel->category($table_categories);
          $data['brand'] = $homemodel->brand($table_brand);
          $data['product'] = $homemodel->product($table_product);
          $this->load->view('header',$data);
          $this->load->view('slider');
        $this->load->view('contact',$data);
        $this->load->view('footer');
    }
    public function search(){
      $table_categories = 'categories';
      $table_brand = 'brand';
      $table_product = 'products';
      $key = $_POST['keyword'];
      $homemodel =  $this->load->model('homemodel');
      $data['category'] = $homemodel->category($table_categories);
      $data['brand'] = $homemodel->brand($table_brand);
      $data['search'] = $homemodel->search($table_product,$key);

      $this->load->view('header',$data);
      $this->load->view('slider');
      $this->load->view('search',$data);
      $this->load->view('footer');
    }
    
    public function notfound(){
        $table_categories = 'categories';
        $table_brand = 'brand';
        $table_product = 'products';

        $homemodel =  $this->load->model('homemodel');
          $data['category'] = $homemodel->category($table_categories);
          $data['brand'] = $homemodel->brand($table_brand);
          $data['product'] = $homemodel->product($table_product);
          $this->load->view('header',$data);
          $this->load->view('slider');
          $this->load->view('404');
          $this->load->view('footer');
       
    }

   
}
?>