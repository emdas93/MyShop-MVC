<div class="subTitle">
    <h3>물품 구매 : <?php echo $row->item_title; ?></h3>
</div>
<div class = "itemBox">
    <img src="<?php echo URL.$row->item_titleImg; ?>" alt="">
</div>
<div class="itemDetail">
<form action="<?php echo URL."Item/buy"; ?>" method="POST">
    <table>
        <tr>
            <td><span>상품명 </span></td>
            <td><span>: <?php echo $row->item_name; ?></span></td>
        </tr>
        <tr>
            <td><span>판매가 </span></td>
            <td><span>: <?php echo $row->item_price; ?>원</span></td>
        </tr>
        <tr>
            <td><span>수량 </span></td>
            <td><span>: <?php echo $_POST['item_quantity']; ?></span></td>
        </tr>
        <tr>
            <td>결제 금액</td>
            <td><?php echo $row->item_price * $_POST['item_quantity'] ?></td>
        </tr>
    </table>

</form>
</div>
<div class="itemSubTitle">주문자 정보</div>
<div class="orderInfo">
    <form action="<?php echo URL."Item/buy"; ?>" method="POST">
        <table>
            <tr>
                <td><span>이름</span></td>
                <td><span>: <input type="text" name="user_name" value="<?php echo $_SESSION['user']->user_name; ?>"></span></td>
            </tr>
            <tr>
                <td><span>주소</span></td>
                <td><span>: <input type="" name="user_addr" value="<?php echo $_SESSION['user']->user_addr; ?>"></span></td>
            </tr>
            <tr>
                <td><span>이메일</span></td>
                <td><span>: <input type="" name="user_email" value="<?php echo $_SESSION['user']->user_email; ?>"></span></td>
            </tr>
            <tr>
                <td><span>연락처</span></td>
                <td><span>: <input type="" name="user_phone" value="<?php echo $_SESSION['user']->user_phone; ?>"></span></td>
            </tr>
            <tr>
                <td><span></span></td>
                <td><span></span></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="구매확정"></td>
            </tr>
        </table>
        <input type="hidden" name="item_no" value="<?php echo $row->item_no; ?>">
        <input type="hidden" name="item_name" value="<?php echo $row->item_name; ?>">
        <input type="hidden" name="item_price" value="<?php echo $row->item_price; ?>">
        <input type="hidden" name="item_titleImg" value="<?php echo $row->item_titleImg; ?>">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user']->user_id; ?>">
        <input type="hidden" name="d_date" value="<?php echo $date = Date("y-m-d / h:i:s"); ?>">
        <input type="hidden" name="item_quantity" value="<?php echo $_POST['item_quantity']; ?>">
    </form>
</div>
