<?php 

Class Database extends PDO{

    public function __construct($connect,$user,$pass){
        parent::__construct($connect,$user,$pass);
    }

    public function select($sql, $data = array(),$fetchStyle = PDO:: FETCH_ASSOC){
        $stmt = $this->prepare($sql);// kiểm tra câu lệnh  
        foreach($data as $key =>$value){// kiem tra dieu kien where trong cau lenh sql cua function categorybyid cua homemodel gui du lieu vao data truyen qua 

        $stmt->bindParam($key,$value);// de so sanh bao nhieu doi tuong can truyen vao dem di so sanh 
        }
        $stmt->execute();// thực hiện câu lệnh 
       return  $stmt->fetchAll($fetchStyle);// trả về kết quả 

    }

    public function insert($table,$data){
        $keys = implode(",",array_keys($data));// thêm kí tự dấu ,
        $values = ":" . implode(", :",array_keys($data));
         $sql = "INSERT INTO $table($keys) VALUES($values)";
         $stmt = $this->prepare($sql);
         foreach($data as $key => $value){
             $stmt->bindValue(":$key",$value);
         }
        return $stmt->execute();
    }
    public function update($table,$data,$cond){
        $updateKeys = NULL;
        foreach($data as $key => $value){
            $updateKeys .= "$key=:$key,";
        }
        $updateKeys = rtrim($updateKeys,",");// cắt dấu phẩy cuối hàng 
        $sql = "UPDATE $table SET $updateKeys WHERE $cond";
        $stmt = $this->prepare($sql);
        foreach($data as $key => $value){
            $stmt->bindValue(":$key",$value);
        }
        return $stmt->execute();

    }
    public function delete($table, $cond, $limit = 1){
        $sql ="DELETE FROM $table WHERE $cond LIMIT $limit";
        return $this->exec($sql);
    }

    public function affectedRows($sql,$username,$password){// hàm so sánh dữ liệu đăng nhập trong database và người dùng 
        $stmt = $this->prepare($sql);
        $stmt->execute(array($username,$password));
        return $stmt->rowCount();//trả về nếu đúng 1 
    }

    public function selectUser($sql,$username,$password){
        
        $stmt = $this->prepare($sql);
        $stmt->execute(array($username,$password));
        return  $stmt->fetchAll(PDO:: FETCH_ASSOC);// trả về dl người đăng nhập 

    }
    // hàm mới 
    public function countRegister($sql,$email){
        $stmt = $this->prepare($sql);
        $stmt->execute(array($email));
        return $stmt->rowCount();// trả về số lượng 
    }

}