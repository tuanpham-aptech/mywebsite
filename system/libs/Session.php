<?php 
Class Session{// quản lý các session 

    public static function init(){
        session_start();
    }

    public static function set($key,$value){ // $key l t t c t $value l g t t t
        $_SESSION[$key] = $value;// khởi tạo 
    }

    public static function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return false;
        }
    }
    
    public static function checkSession(){// hàm kiểm tra tồn tại session ko 
        self::init();// sử dụng lại nếu hàm có static
        if(self::get('login')==false){// nếu ko tồn tại đăng nhập 
            self::destroy();// phá hủy tất cả các session
            header("Location:".BASE_URL."/login");// sau đó trở lại trang đăng nhập  
        }else{

        }
    }
    public static function destroy(){
        session_destroy();// phá hủy 
    }

    public static function unset($key){
        unset($_SESSION[$key]); 
    }

}


?>