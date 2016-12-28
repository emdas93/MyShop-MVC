<?php
class UserMG extends Controller{
    function register(){
        require "application/views/_templates/header.php";
        require "application/views/UserMG/register.php";
        require "application/views/_templates/footer.php";
    }
    function login(){
        require "application/views/_templates/header.php";
        require "application/views/UserMG/login.php";
        require "application/views/_templates/footer.php";
    }
    function userInfo(){
        require "application/views/_templates/header.php";
        require "application/views/UserMG/userinfo.php";
        require "application/views/_templates/footer.php";
    }
    function buyed(){
        $userModel = $this->loadModel("usermodel");
        $list = $userModel->contentSelect("delivery", "user_id", $_SESSION['user']->user_id);
        require "application/views/_templates/header.php";
        require "application/views/UserMG/buyed.php";
        require "application/views/_templates/footer.php";
    }

    function insertUser(){
        $this->blankCheck();
        $userModel = $this->loadModel("usermodel");
        $userModel->register($_POST['user_id'], $_POST['user_pw'], $_POST['user_name'], $_POST['user_birth'], $_POST['user_phone'], $_POST['user_addr'], $_POST['user_email'], $_POST['user_gender']);
        echo "<script>location.href='".URL."';</script>";
    }
    function loginUser(){
        $userModel = $this->loadModel("usermodel");
        $userModel->login($_POST['user_id'], $_POST['user_pw']);
        echo "<script>location.href='".URL."';</script>";
    }
    function logoutUser(){
        session_destroy();
        echo "<script>location.href='".URL."';</script>";
    }
    function blankCheck(){
        if($_POST['user_id'] == "" || !isset($_POST['user_id'])){
            echo "<script>";
            echo "alert('아이디를 입력 해주세요');";
            echo "history.go(-1);";
            echo "</script>";
        }else if($_POST['user_pw'] == "" || !isset($_POST['user_pw'])){
            echo "<script>";
            echo "alert('비밀번호를 입력 해주세요');";
            echo "history.go(-1);";
            echo "</script>";
        }else if($_POST['user_name'] == "" || !isset($_POST['user_name'])){
            echo "<script>";
            echo "alert('이름을 입력 해주세요');";
            echo "history.go(-1);";
            echo "</script>";
        }else if($_POST['user_birth'] == "" || !isset($_POST['user_birth'])){
            echo "<script>";
            echo "alert('생년월일을 입력 해주세요');";
            echo "history.go(-1);";
            echo "</script>";
        }else if($_POST['user_addr'] == "" || !isset($_POST['user_addr'])){
            echo "<script>";
            echo "alert('주소를 입력 해주세요');";
            echo "history.go(-1);";
            echo "</script>";
        }else if($_POST['user_phone'] == "" || !isset($_POST['user_phone'])){
            echo "<script>";
            echo "alert('전화번호를 입력 해주세요');";
            echo "history.go(-1);";
            echo "</script>";
        }else if($_POST['user_email'] == "" || !isset($_POST['user_email'])){
            echo "<script>";
            echo "alert('전화번호를 입력 해주세요');";
            echo "history.go(-1);";
            echo "</script>";
        }else if($_POST['user_gender'] == "" || !isset($_POST['user_gender'])){
            echo "<script>";
            echo "alert('성별을 입력 해주세요');";
            echo "history.go(-1);";
            echo "</script>";
        }
    }

}
?>
