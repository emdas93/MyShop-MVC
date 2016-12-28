<div class = "subTitle">
    <h3>제품</h3>
</div>
<?php foreach($list as $row){ ?>
    <div class = "itemBox">
        <div class = "itemimg">
            <a href="<?php echo URL."Item/view/".$row->item_no; ?>"><img src="<?php echo URL.$row->item_titleImg ?>" alt="">
        </div>
        <a href="<?php echo URL."Item/view/".$row->item_no; ?>"><p><?php echo $row->item_title; ?></p></a>
        <p><?php echo $row->item_price; ?>원</p>
    </div>
<?php } ?>
<div class="itemPage">
    <?php if($pageNum==1){}else{ ?>
    <a href="<?php echo URL."QA/index/".($pageNum-1); ?>">이전</a>
    <?php } ?>
    <?php for($i=$itemModel->startPage;$i<$itemModel->endPage;++$i){ ?>
        <a href="<?php echo URL."QA/index/".$i; ?>"><?php echo $i?></a>
    <?php } ?>
    <?php if($pageNum==$itemModel->totalPage || $itemModel->totalList == 0){}else{ ?>
    <a href="<?php echo URL."QA/index/".($pageNum+1); ?>">다음</a>
    <?php } ?>
</div>
<div class="itemMenu">
    <a href="<?php echo URL."Item/write"; ?>">상품등록</a>
</div>
