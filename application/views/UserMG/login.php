<div class="subTitle">
    <h3>로그인</h3>
</div>
<div class = "loginForm">
    <form action="<?php echo URL."UserMG/loginUser" ?>" method="POST">
        <table>
            <tr>
                <td>아이디</td>
                <td><input type="text" name="user_id" value=""></td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input type="password" name="user_pw" value=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="" value="로그인"></td>
            </tr>
        </table>
    </form>
</div>
