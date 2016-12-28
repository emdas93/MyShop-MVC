<script src = "<?php echo URL."public/js/register.js"; ?>"></script>
<div class="subTitle">
    <h3>회원가입</h3>
</div>
<div class="registerForm">
    <form action="<?php echo URL."UserMG/insertUser" ?>" method="POST" name="loginForm">
        <table>
            <tr>
                <td>아이디</td>
                <td><input type="text" name="user_id" value=""><span id="idChk">아이디를 입력해주세요.</span><br></td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input type="password" name="user_pw" value=""></td>
            </tr>
            <tr>
                <td>비밀번호확인</td>
                <td><input type="password" name="user_pw_chk" value=""><span id="pwChk">비밀번호를 입력해주세요.</span></td>
            </tr>
            <tr>
                <td>이름</td>
                <td><input type="text" name="user_name" value=""></td>
            </tr>
            <tr>
                <td>생년월일</td>
                <td><input type="date" name="user_birth" value=""></td>
            </tr>
            <tr>
                <td>휴대폰</td>
                <td><input type="text" name="user_phone" value=""></td>
            </tr>
            <tr>
                <td>주소</td>
                <td><input type="text" name="user_addr" value=""></td>
            </tr>
            <tr>
                <td>이메일</td>
                <td><input type="text" name="user_email" value=""></td>
            </tr>
            <tr>
                <td>성별</td>
                <td>
                    남 <input type="radio" name="user_gender" value="male">
                    여 <input type="radio" name="user_gender" value="female">
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="" value="작성완료"> <input type="reset" name="" value="다시작성"></td>
            </tr>
        </table>
    </form>
</div>
