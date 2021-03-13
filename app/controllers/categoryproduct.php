
<?php 

Class categoryproduct extends DController{

    public function __construct(){
        $data = array();
        parent::__construct();
    }
    public function index(){
     $this->category_product();
    }

    public function category_product($id){
       
        $table_categories = 'categories';
        $table_brand = 'brand';
        $table_product = 'products';

        $homemodel =  $this->load->model('homemodel');
          $data['category'] = $homemodel->category($table_categories);
          $data['brand'] = $homemodel->brand($table_brand);
          $data['product'] = $homemodel->product($table_product);
          $data['category_by_id'] = $homemodel->category_by_id($table_categories,$table_product,$id);
          $this->load->view('header',$data);
          $this->load->view('slider');
          $this->load->view('categoryproduct',$data);
          $this->load->view('footer');
    }
    public function product_detail($id){
        $table_categories = 'categories';
        $table_brand = 'brand';
        $table_product = 'products';

        $homemodel =  $this->load->model('homemodel');
          $data['category'] = $homemodel->category($table_categories);
          $data['brand'] = $homemodel->brand($table_brand);
          $data['product'] = $homemodel->product_detail($table_product,$id);
          $data['category_by_id'] = $homemodel->category_by_id($table_categories,$table_product,$id);
        $this->load->view('header',$data);
        $this->load->view('product_detail',$data);
       
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







