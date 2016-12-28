<?php
class Model{
    function __construct($db){
        try{
            $this->db = $db;

        }catch(PDOException $e){
            exit('데이터베이스 연결에 오류가 발생했습니다.');
        }
    }
    function select($tableName,$order){
        $query = "SELECT * FROM $tableName ORDER BY $order DESC";
        $stmt = $this->db->prepare($query);
        $stmt ->execute();
        $row = $stmt->fetchAll();
        return $row;
    }

    function selectCount($tableName){
        $query = "SELECT count(*) count FROM $tableName";
        $stmt = $this->db->prepare($query);
        $stmt ->execute();
        $row = $stmt->fetchAll();
        return $row;
    }
    function whereCount($tableName, $kind){
        $query = "SELECT count(*) count FROM $tableName WHERE item_kind = '$kind'";
        $stmt = $this->db->prepare($query);
        $stmt ->execute();
        $row = $stmt->fetchAll();
        return $row;
    }
    // 첫째 인자 테이블 명 둘째인자부터 데이터 입력(열에 맞춰)
    function insert(){
        $insertList = array();
        $size = func_num_args();
        for($i=0;$i<$size;++$i){
            $insertList[] = func_get_arg($i);
        }
        $query = "INSERT INTO $insertList[0] VALUES(";
        for($i=1;$i<$size;++$i){
            $query .= '\''.$insertList[$i].'\'';
            if($i < $size-1) $query .=',';
        }
        $query .=")";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

    function contentSelect($tName, $row, $arg){
        $query = "SELECT * FROM $tName WHERE $row='$arg'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $row = $stmt->fetchAll();
        return $row;
    }

    // 첫번째 테이블이름을 두번째, 세번째 바꿀 조건 다음은 [열이름, 값] 순으로 받아서 수정
    function update(){
        $count = func_num_args();
        $args = array();
        for($i = 0;$i<$count;++$i){
            $args[] = func_get_arg($i);
        }
        $query = "UPDATE $args[0] SET ";
        for($i = 3;$i<$count-1;$i+=2){
            $query .= $args[$i]."="."'".$args[$i+1]."'";
            if($i >= $count-2){
            }else{
                $query .= ",";
            }
        }
        $query .= " WHERE ".$args[1]."="."$args[2]";
        echo $query;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }
}
?>
