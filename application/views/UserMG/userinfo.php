<div class="subTitle">
    <h3><?php echo $_SESSION['user']->user_id; ?> 님의 정보 <a href="<?php echo URL."UserMG/buyed" ?>">[구매목록]</a></h3>
</div>
<div class="userInfo">
    <table>
        <tr>
            <td>아이디</td>
            <td>: <?php echo $_SESSION['user']->user_id; ?></td>
        </tr>
        <tr>
            <td>이름</td>
            <td>: <?php echo $_SESSION['user']->user_name; ?></td>
        </tr>
        <tr>
            <td>생년월일</td>
            <td>: <?php echo $_SESSION['user']->user_birth; ?></td>
        </tr>
        <tr>
            <td>휴대전화</td>
            <td>: <?php echo $_SESSION['user']->user_phone; ?></td>
        </tr>
        <tr>
            <td>주소</td>
            <td>: <?php echo $_SESSION['user']->user_addr; ?></td>
        </tr>
        <tr>
            <td>성별</td>
            <td>: <?php echo $_SESSION['user']->user_gender; ?></td>
        </tr>
        <tr>
            <td>가입일자</td>
            <td>: <?php echo $_SESSION['user']->user_joinDate; ?></td>
        </tr>
    </table>
</div>
