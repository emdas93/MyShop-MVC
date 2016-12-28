<?php
class Item extends Controller{
    function index($kind,$pageNum){
        $itemModel = $this->loadModel("itemmodel");
        $itemModel->init("item_board",6,3,$pageNum,$kind);
        $list = $itemModel->forPagingSelect("item_board","item_no",$pageNum,$kind);
        require 'application/views/_templates/header.php';
        require 'application/views/Item/index.php';
        require 'application/views/_templates/footer.php';
    }

    function write(){
        $this->loginCheck();
        require 'application/views/_templates/header.php';
        require 'application/views/Item/write.php';
        require 'application/views/_templates/footer.php';
    }

    function view($pageNum){
        $this->loginCheck();
        $itemModel = $this->loadModel("itemModel");
        $row = $itemModel->contentSelect("item_board","item_no",$pageNum)[0];
        $imgSRC = explode("::",$row->item_imgSRC);
        require 'application/views/_templates/header.php';
        require 'application/views/Item/view.php';
        require 'application/views/_templates/footer.php';
    }
    function buyView($pageNum){
        $this->loginCheck();
        $itemModel = $this->loadModel("itemModel");
        $row = $itemModel->contentSelect("item_board","item_no",$pageNum)[0];
        require 'application/views/_templates/header.php';
        require 'application/views/Item/buyView.php';
        require 'application/views/_templates/footer.php';
    }

    function insert(){
        $_POST['item_price'] = htmlspecialchars($_POST['item_price']);
        $_POST['item_title'] = htmlspecialchars($_POST['item_title']);
        $_POST['item_content'] = htmlspecialchars($_POST['item_content']);
        $_POST['item_content'] = nl2br($_POST['item_content']);
        if($_POST['item_kind']=='none'){
            echo "<script>";
            echo "alert('상품 카테고리를 선택해 주세요.');";
            echo "history.go(-1)";
            echo "</script>";
        }else{

        }

        $item_titleImg = $this->fileUpload();
        $item_imgSRC = $this->multiFileUpload();
        $today = Date("y-m-d / h:i:s");
        $itemModel = $this->loadModel("itemModel");
        $itemModel->insert("item_board","",$_POST['item_name'],$_POST['item_title'],$_POST['item_content'],$item_titleImg,$item_imgSRC,$_POST['item_price'],$_POST['item_kind'],$_SESSION['user_no']);
        echo "<script>location.href = '".URL."Item/index/".$_POST['item_kind']."/1'</script>";
    }
    function multiFileUpload(){
        $fileDir = "public/files/itemImg/";
        $fileURL = "";
        $count = count($_FILES['file']['name']);
        for($i=0; $i<$count;++$i){
            move_uploaded_file($_FILES['file']['tmp_name'][$i],$fileDir.basename($_FILES['file']['name'][$i]));
            $fileURL .= $fileDir.$_FILES['file']['name'][$i];
            if($i<$count-1){
                $fileURL .="::";
            }
        }
        return $fileURL;
    }
    function fileUpload(){
        $fileDir = "public/files/titleImg/";
        $filePath = $fileDir.$_FILES['item_titleImg']['name'];
        move_uploaded_file($_FILES['item_titleImg']['tmp_name'], $fileDir.basename($_FILES['item_titleImg']['name']));
        return $filePath;
    }

    function buy(){
        $itemModel = $this->loadModel("itemModel");
        $itemModel->insert("delivery","",$_POST['item_no'],$_POST['item_name'],$_POST['item_price'],$_POST['item_titleImg'],$_POST['item_quantity'],$_POST['user_addr'],$_POST['user_name'],$_POST['user_email'], $_POST['user_phone'], $_SESSION['user']->user_id, $_POST['d_date']);
        header("location:".URL."UserMG/buyed");
        echo "<script>location.href = '".URL."UserMG/buyed</script>";
    }
}
?>
