<div class="subTitle">
    <h3>상품등록</h3>
</div>
<div class="itemWriteArea">
    <form action="<?php echo URL."Item/insert" ?>" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td colspan="4">
                    <select name="item_kind">
                        <option value="none" selected>---------</option>
                        <option value="machine">운동기구</option>
                        <option value="food">보충식품</option>
                        <option value="sports">스포츠용품</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>제목</td>
                <td><input type="text" name="item_title" value=""></td>
                <td>상품이름</td>
                <td><input type="text" name="item_name" value=""></td>
            </tr>
            <tr>
                <td>상품 타이틀 이미지</td>
                <td><input type="file" name="item_titleImg" value=""></td>
                <td>상품가격</td>
                <td><input type="text" name="item_price" value=""></td>
            </tr>
            <tr>
                <td>판매자</td>
                <td><input type="text" name="item_owner" value="<?php echo $_SESSION['user']->user_name; ?>" readonly></td>
                <td>작성날짜</td>
                <td><input type="text" name="item_date" value="<?php echo $today=Date("y-m-d / h:i:s"); ?>" readonly></td>

            </tr>
            <tr>
                <td>상품 상세 이미지</td>
                <td colspan="3"><input type="file" name="file[]" value="" multiple></td>
            </tr>
            <tr>
                <td>내용</td>
                <td colspan="3"><textarea name="item_content" rows="10" cols="50"></textarea></td>
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
