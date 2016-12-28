<div class="subTitle">
    <h3><?php echo $row->b_title; ?></h3>
</div>
<div class = "contentInfo">
    <span>작성자 : <?php echo $row->b_writer; ?></span><br>
    <span>작성일자 : <?php echo $row->b_date; ?></span><br>
    <span>조회수 : <?php echo $row->b_viewed; ?></span>
</div>
<div class="b_content">
    <?php echo $row->b_content; ?>
</div>
<div class="attachmentArea">
    <span>첨부파일</span>
        <div>
            <?php for($i=0;$i<count($fileURL);++$i){; ?>
                [<?php echo $i+1?>] <a href="<?php echo URL."QA/download/".$row->b_no."/".$i; ?>"><span><?php echo basename($fileURL[$i])." " ?></a></span><br>
            <?php } ?>
        </div>
    </a>
</div>
<div class="contentMenu">
    <span><a href="<?php echo URL."QA/updateView/".$row->b_no; ?>">글수정</a></span>
    <span><a href="<?php echo URL."QA/index/1"; ?>">목록으로</a></span>
</div>
