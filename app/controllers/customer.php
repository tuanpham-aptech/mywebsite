<?php 

Class customer extends DController{

    public function __construct(){
        $data = array();
        parent::__construct();
    }
    public function index(){
     $this->customer();
    }
    public function customer(){
        // $this->load->view('header');
        // $table_categories = 'categories';
        // $table_brand = 'brand';
        // $table_product = 'products';

        // $homemodel =  $this->load->model('homemodel');
        //   $data['category'] = $homemodel->category($table_categories);
        //   $data['brand'] = $homemodel->brand($table_brand);
        //   $data['product'] = $homemodel->product($table_product);

        //   $this->load->view('home',$data);
        //   $this->load->view('footer');
    
     }

     public function customer_login(){
        $table_categories = 'categories';
        $table_brand = 'brand';
        $table_product = 'products';
        $table_customer = 'customers';
        Session::init();
         $this->load->view('header');
        $homemodel =  $this->load->model('homemodel');
        $customermodel =  $this->load->model('customermodel');

          $data['category'] = $homemodel->category($table_categories);
          $data['brand'] = $homemodel->brand($table_brand);
          $data['product'] = $homemodel->product($table_product);
          $data['customer'] = $customermodel->customer($table_customer);


          $this->load->view('customer_login');
          $this->load->view('footer');
     }
     public function insert_register(){
        $name = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $address = $_POST['address'];

        $table_customer = 'customers';
        $data = array(
            'customer_name'=>$name,
            'customer_phone'=>$phone,
            'customer_email'=>$email,
            'customer_password'=>md5($password),
            'customer_address'=>$address,

        );
        $customermodel =  $this->load->model('customermodel');

        $result = $customermodel->insertcustomer($table_customer,$data);// kết quả thêm dũ liệu vào bảng
        if($result == 1 ){  
            $message['msg'] = "Đăng kí thành công  ";
            header('Location:'.BASE_URL."/customer/customer_login?msg=".urlencode(serialize($message)));
        }else{
            $message['msg'] = "Đăng kí thất bại ";
            header('Location:'.BASE_URL."/customer/customer_login?msg=".urlencode(serialize($message)));
        }
    }
    public function customer_login_user(){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $table_customer = 'customers';
        $customermodel = $this->load->model('customermodel');

        $count = $customermodel->login($table_customer,$username,$password);// nếu có trong database có trả về 1 
       if($count == 0){
           $message['msg'] = "Tên tài khoản hoặc mật khẩu không chính xác, xin kiểm tra lại ";
           header('Location:'.BASE_URL."/customer/customer_login?msg=".urlencode(serialize($message)));
        }else{
          $result = $customermodel->getLogin($table_customer,$username,$password);
          //gọi Session ra 
          Session::init();
          Session::set('customer',true);// kiểm tra xem người dùng đã đăng nhập chưa 
          Session::set('customer_name',$result[0]['customer_name']);// trong đó username là key còn $result[0]['username'] là value
          Session::set('customer_id',$result[0]['customer_id']);// trong đó userid là key còn $result[0]['userid'] là value
          $message['msg'] = "Đăng nhập tài khoản  thành công ";
          header('Location:'.BASE_URL."/?msg=".urlencode(serialize($message)));
        }
    }
    public function customer_logout(){
        if(!Session::get('customer')){
            header('Location:'.BASE_URL."/customer/customer_login");
        }else{
            Session::init();
            Session::unset('customer');
        }
    }
   
}
?>