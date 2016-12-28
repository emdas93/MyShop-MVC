<?php
class QA extends Controller{
    function __conturct(){
    }
    function index($pageNum){
        $boardModel = $this->loadModel("boardmodel");
        $boardModel->init("QnA",10,3,$pageNum);
        $list = $boardModel->forPagingSelect("QnA","b_no",$pageNum);
        require 'application/views/_templates/header.php';
        require 'application/views/QA/index.php';
        require 'application/views/_templates/footer.php';
    }

    function write(){
        $this->loginCheck();
        require 'application/views/_templates/header.php';
        require 'application/views/QA/write.php';
        require 'application/views/_templates/footer.php';
    }
    function insert(){
        $_POST['b_title'] = htmlspecialchars($_POST['b_title']);
        $_POST['b_content'] = htmlspecialchars($_POST['b_content']);
        $_POST['b_content'] = nl2br($_POST['b_content']);
        $b_fileURL = $this->multiFileUpload();
        $today = Date("y-m-d / h:i:s");
        $boardModel = $this->loadModel("boardmodel");
        $boardModel->insert("QnA","",$_POST['b_title'],$_POST['b_content'],$_SESSION['user']->user_name,$today,0,$b_fileURL,$_SESSION['user']->user_no,0);
        header("location:".URL."QA/index/1");

    }
    function view($arg){
        $this->loginCheck();
        $boardModel = $this->loadModel("boardmodel");
        $boardModel->viewed($arg);
        $row = $boardModel->contentSelect("QnA","b_no",$arg)[0];
        $fileURL = explode("::",$row->b_fileURL);
        require "application/views/_templates/header.php";
        require "application/views/QA/view.php";
        require "application/views/_templates/footer.php";
    }
    function updateView($arg){
        $boardModel = $this->loadModel("boardmodel");
        $row = $boardModel->contentSelect("QnA","b_no",$arg)[0];
        require "application/views/_templates/header.php";
        require "application/views/QA/update.php";
        require "application/views/_templates/footer.php";
    }
    function update(){
        $boardModel = $this->loadModel("boardmodel");
        $_POST['b_title'] = htmlspecialchars($_POST['b_title']);
        $_POST['b_content'] = htmlspecialchars($_POST['b_content']);
        $boardModel->update("QnA","b_no",$_POST['b_no'],"b_content",$_POST['b_content'], "b_title",$_POST['b_title'],"b_update","1");
        header("location:".URL."QA/index/1");

    }
    function multiFileUpload(){
        $fileDir = "public/files/";
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
    function download($contentNum,$downNum){
        $boardModel = $this->loadModel("boardmodel");
        $row = $boardModel->contentSelect("QnA","b_no",$contentNum)[0];
        $fileURL = explode("::",$row->b_fileURL);
        $filePath = $fileURL[$downNum];
        $fileSize = filesize($filePath);
        $path_parts = pathinfo($filePath);
        $fileName = $path_parts['basename'];
        header("Pragma: public");
        header("Expires: 0");
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"$fileName\"");
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: $fileSize");

        ob_clean();
        flush();
        readfile($filePath);
    }
}
