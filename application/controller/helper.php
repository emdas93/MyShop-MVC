<?php
class Helper extends Controller{

    function idChk($arg){
        $helperModel = $this->loadModel("helpermodel");
        $idChk = $helperModel->userSelect($arg);
        if($idChk->count >= 1){
            echo 1;
        }else{
            echo 0;
        }
    }
}
?>
