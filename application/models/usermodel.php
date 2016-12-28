<?php
require "model.php";
class UserModel extends Model{
    function __construct($db){
        try{
            $this->db = $db;
        }catch(PDOException $e){
            exit('데이터베이스 연결에 오류가 발생했습니다.');
        }
    }

    function register($user_id,$user_pw,$user_name,$user_birth,$user_phone,$user_addr,$user_email,$user_gender){
        $user_joinDate = Date("y-m-d / h:i:s");
        $query = "INSERT INTO user VALUES('',:user_id,:user_pw,:user_name,:user_birth,:user_phone,:user_addr,:user_email,:user_gender,:user_joinDate)";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(":user_id"=>$user_id,
                             ":user_pw"=>$user_pw,
                             ":user_name"=>$user_name,
                             ":user_birth"=>$user_birth,
                             ":user_phone"=>$user_phone,
                             ":user_addr"=>$user_addr,
                             ":user_email"=>$user_email,
                             ":user_gender"=>$user_gender,
                             ":user_joinDate"=>$user_joinDate));
    }
    function login($user_id, $user_pw){
        $query = "SELECT * FROM user WHERE user_id='$user_id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $row = $stmt->fetchAll()[0];
        if($user_pw == $row->user_pw){
            $_SESSION['user'] = $row;
            unset($_SESSION['user']->user_pw);
        }else{
            echo "
            <script>
                alert('비밀번호가 일치하지 않습니다.');
            </script>";
        }
    }
}
?>
