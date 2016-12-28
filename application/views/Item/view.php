<div class = "subTitle">
    <h3><?php echo $row->item_title; ?></h3>
</div>
<div class = "itemBox">
    <img src="<?php echo URL.$row->item_titleImg; ?>" alt="">
</div>
<div class="itemDetail">
    <form action="<?php echo URL."Item/buyView/".$row->item_no; ?>" method="POST">
        <table>
            <tr>
                <td><span>상품명</span></td>
                <td> : <?php echo $row->item_name; ?></td>
            </tr>
            <tr>
                <td><span>판매가</span></td>
                <td> : <?php echo $row->item_price; ?> 원 </td>
            </tr>
            <tr>
                <td><span>수량</span></td>
                <td> : <input type="number" name="item_quantity" value=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="구매하기"></td>
            </tr>
        </table>
    </form>
</div>

<div class = "itemSubTitle">
    <h3>제품 상세 내용</h3>
</div>
<div class="itemContent">
    <?php echo $row->item_content; ?>
</div>
<div class="itemDetailImg">
    <?php for($i=0;$i<count($imgSRC);++$i){ ?>
    <img src="<?php echo URL.$imgSRC[$i]; ?>" alt="">
    <?php } ?>
</div>
