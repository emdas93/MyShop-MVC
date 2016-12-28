<div class = "subTitle">
    <h3>구매 목록 입니다</h3>
</div>
<div class = "userBuyedList">

<?php foreach($list as $row){ ?>
    <div class="subTitle">
        주문번호 : No.<?php echo $row->d_no; ?>
    </div>
    <div class="userItemList">
        <img src="<?php echo URL.$row->item_titleImg; ?>" alt="">
        <div class="contentDetail">
            <p>상품명 : <?php echo $row->item_name; ?></p><br>
            <p>상품수량 : <?php echo $row->item_quantity; ?></p><br>
            <p>상품가격 : <?php echo $row->item_price*$row->item_quantity; ?></p><br>
            <p>주문일 : <?php echo $row->d_date; ?></p><br>
            <p>받으시는분 : <?php echo $row->user_name; ?>님</p><br>
            <p>받으시는분 주소 : <?php echo $row->user_addr; ?></p><br>
        </div>
    </div>
    <div class="clear"></div>
<?php } ?>
</div>
