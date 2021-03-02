
<?php 

Class ordercartuser extends DController{

    public function __construct(){
        $data = array();
        parent::__construct();
    }
    public function index(){
     $this->ordercartuser();
    }

    public function ordercartuser(){
        Session::init();
        $this->load->view('header');
        $table_categories = 'categories';
        $table_brand = 'brand';
        $table_product = 'products';

        $homemodel =  $this->load->model('homemodel');
          $data['category'] = $homemodel->category($table_categories);
          $data['brand'] = $homemodel->brand($table_brand);
          $data['product'] = $homemodel->product($table_product);
        //$data['category_by_id'] = $homemodel->category_by_id($table_categories,$table_product,$id);

          $this->load->view('cart',$data);
          $this->load->view('footer');
    }

    public function dathang(){
        Session::init();
        $table_order = 'order';
        $table_order_details = 'order_details';
        $ordermodel = $this->load->model('ordermodel');

         $name = $_POST['name'];
         $phone = $_POST['phone'];
         $address = $_POST['address'];
         $email = $_POST['email'];
         $content = $_POST['content'];
         $order_code = rand(0,9999).'new';

         date_default_timezone_set('asia/ho_chi_minh');//lg
         $date = date('d/m/Y');
         $hour = date('h:i:sa');
         $order_date = $date.' '.$hour;
         $data_order = array(
            'order_status'=>'0',
            'order_date'=>$order_date,
            'order_code'=>$order_code

        );
        // echo"<pre>";
        // echo $order_date;
        // echo "</pre>";
        $result = $ordermodel->insert_order($table_order,$data_order);


        // if(Session::get("shopping_cart") == true){
        //    foreach(Session::get("shopping_cart" as $key =>$cat){
        //      $data = array(

        //      );
        //    }
        //     //  echo $name.' '.$phone.' '.$address.' '.$email.' '.$content.' '.$order_code;

        // }
    }

    public function addtocart(){
        Session::init();
        //Session::destroy();
        if(isset($_SESSION['shopping_cart'])){
            $valiable = 0;
            foreach($_SESSION['shopping_cart'] as $key =>$value){
                if($_SESSION['shopping_cart'][$key]['product_id'] == $_POST['product_id']){
                    $valiable ++;
                    $_SESSION['shopping_cart'][$key]['product_quantity'] = $_SESSION['shopping_cart'][$key]['product_quantity'] + $_POST['product_quantity'];
                }
            }   
            if($valiable == 0){
                $item = array(
                    'product_id' => $_POST['product_id'],
                    'product_title' => $_POST['product_title'],
                    'product_image' => $_POST['product_image'],
                    'product_quantity' => $_POST['product_quantity'],
                    'product_price' => $_POST['product_price']
                );
                $_SESSION['shopping_cart'][] = $item;  
            }
        }else{
            $item = array(// cttgh
                'product_id' => $_POST['product_id'],
                'product_title' => $_POST['product_title'],
                'product_image' => $_POST['product_image'],
                'product_quantity' => $_POST['product_quantity'],
                'product_price' => $_POST['product_price']
            );
            $_SESSION['shopping_cart'][] = $item; // nếu chưa tồn tại  tạo ra một mảng 
        }
        header("Location:".BASE_URL.'/ordercartuser');

    }
  
    public function notfound(){
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }
   
}
?>







