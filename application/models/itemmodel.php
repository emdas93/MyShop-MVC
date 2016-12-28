<?php
require "model.php";
class ItemModel extends Model{
    public $totalList;      // 총 데이터의 수
    public $list_per_page;       // 한 페이지당  표시할 데이터 수
    public $block_per_page;      // 블록 당 페이지 수
    public $totalPage;        // 총 페이지 수
    public $totalBlock;       // 총 블럭 수
    public $pageNow;
    public $startPage;
    public $endPage;

    function __construct($db){
        try{
            $this->db = $db;
        }catch(PDOException $e){
            exit('데이터베이스 연결에 오류가 발생했습니다.');
        }
    }

    function init($table,$pageList,$pageBlock,$pageNum,$kind){
        $this->totalList = $this->whereCount($table,$kind)[0]->count;
        $this->list_per_page = 10;
        $this->block_per_page = 10;
        $this->totalPage = ceil($this->totalList/$this->list_per_page);
        $this->totalBlock = ceil($this->totalPage/$this->block_per_page);
        $this->presentBlock = ceil($pageNum/$this->block_per_page);
        $this->startPage = ceil(($this->presentBlock-1)*$this->list_per_page)+1;
        $this->endPage = $this->startPage+$this->list_per_page;
        if($this->endPage > $this->totalPage){
            $this->endPage = $this->totalPage+1;
        }
    }
    function forPagingSelect($tableName,$order,$page_no,$kind){
        $s_point = ($page_no-1)*$this->list_per_page;
        $query = "SELECT * FROM $tableName WHERE item_kind='$kind' ORDER BY $order DESC  LIMIT $s_point,$this->list_per_page";
        $stmt = $this->db->prepare($query);
        $stmt ->execute();
        $row = $stmt->fetchAll();
        return $row;
    }
    function selectCountWhere($tableName,$kind){
        $query = "SELECT count(*) count FROM $tableName";
        if($kind==null){}
        else{
            $query .= " WHERE item_kind = '$kind'";
        }
        $stmt = $this->db->prepare($query);
        $stmt ->execute();
        $row = $stmt->fetchAll();
        return $row;
    }
}
?>
