<?php
require "model.php";
class HelperModel extends Model{
    function __construct($db){
        try{
            $this->db = $db;

        }catch(PDOException $e){
            exit('데이터베이스 연결에 오류가 발생했습니다.');
        }
    }

    function userSelect($id){
        $query = "SELECT count(*) count FROM user WHERE user_id = '$id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll()[0];
    }
}
?>
