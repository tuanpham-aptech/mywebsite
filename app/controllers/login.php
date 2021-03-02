<?php 

Class login extends DController{

    public function __construct(){
        $data = array();
        $message = array();
        parent::__construct();
    }
    public function index(){
     $this->login();
    }
    public function dashboard(){
        Session::checkSession();//check xem có tồn tại đăng nhập ko  khi có đăng nhập ms cho vào trang admin/dashboard
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');

    }
    public function login(){
        $this->load->view('header');
        echo "<br>";
        Session::init();
        if(Session::get("login")== true){// nếu đã đăng nhập chuyển hướng 
            header("Location:".BASE_URL."/login/dashboard");
        }
        $this->load->view('admin/login');
        $this->load->view('footer');

    }
    public function authentication_login(){
         $username = $_POST['username'];
         $password = md5($_POST['password']);
         $table_admin = 'users';
         $loginmodel = $this->load->model('loginmodel');

         $count = $loginmodel->login($table_admin,$username,$password);// nếu có trong database có trả về 1 
        if($count == 0){
            $message['msg'] = "Username or Password không chính xác, xin kiểm tra lại ";
            header("Location:".BASE_URL."/login",$message['msg']);
        }else{
           $result = $loginmodel->getLogin($table_admin,$username,$password);
           //gọi Session ra 
           Session::init();
           Session::set('login',true);// kiểm tra xem người dùng đã đăng nhập chưa 
           Session::set('username',$result[0]['username']);// trong đó username là key còn $result[0]['username'] là value
           Session::set('userid',$result[0]['userid']);// trong đó userid là key còn $result[0]['userid'] là value

           header("Location:".BASE_URL."/login/dashboard");
        }
    }

    public function logout(){
        Session::init();
        unset($_SESSION['login']);
        header("Location:".BASE_URL."/login");

    }
  

}
?>