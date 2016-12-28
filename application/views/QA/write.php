<div class="subTitle">
    <h3>글쓰기</h3>
</div>
<div>
    <form action="<?php echo URL."QA/insert" ?>" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>제목</td>
                <td colspan="3"><input type="text" name="b_title" value=""></td>
            </tr>
            <tr>
                <td>작성자</td>
                <td><input type="text" name="b_writer" value="<?php echo $_SESSION['user']->user_name; ?>" readonly></td>
                <td>작성날짜</td>
                <td><input type="text" name="b_date" value="<?php echo $today=Date("y-m-d / h:i:s"); ?>" readonly></td>
            </tr>
            <tr>
                <td>파일</td>
                <td><input type="file" name="file[]" value="" multiple></td>
            </tr>
            <tr>
                <td>내용</td>
                <td colspan="3"><textarea name="b_content" rows="10" cols="100"></textarea></td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="submit" name="" value="작성">
                    <input type="reset" name="" value="다시적기">
                </td>
            </tr>
        </table>
    </form>
</div>
