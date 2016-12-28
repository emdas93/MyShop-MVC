<?php
class Home extends Controller
{
    public function index(){
        require 'application/views/_templates/header.php';
        require 'application/views/home/index.php';
        require 'application/views/_templates/footer.php';
    }
    function write(){
        $this->loginCheck();
        require 'application/views/_templates/header.php';
        require 'application/views/Home/write.php';
        require 'application/views/_templates/footer.php';
    }
}
?>
