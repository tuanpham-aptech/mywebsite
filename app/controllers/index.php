<?php 

Class index extends DController{

    public function __construct(){
        $data = array();
        parent::__construct();
    }
    public function index(){
     $this->homepage();
    }
    public function homepage(){
        $this->load->view('header');
        $table_categories = 'categories';
        $table_brand = 'brand';
        $table_product = 'products';

        $homemodel =  $this->load->model('homemodel');
          $data['category'] = $homemodel->category($table_categories);
          $data['brand'] = $homemodel->brand($table_brand);
          $data['product'] = $homemodel->product($table_product);

          $this->load->view('home',$data);
          $this->load->view('footer');
    
     }

     public function contact_us(){
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');
     }
    
    public function notfound(){
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }
   
}
?>