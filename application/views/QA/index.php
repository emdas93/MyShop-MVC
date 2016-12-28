<div class="subTitle">
    <h3>Q &amp; A</h3>
</div>
<div class="qnaTableArea">
    <table>
        <tr>
            <td>번호</td>
            <td>제목</td>
            <td>작성날짜</td>
            <td>작성자</td>
            <td>조회수</td>
        </tr>
        <?php foreach($list as $row){ ?>
            <tr>
                <td><?php echo $row->b_no; ?></td>
                <td><?php if($row->b_update=="1") echo "[수정됨]"; ?><a href="<?php echo URL."QA/view/".$row->b_no; ?>"><?php echo $row->b_title; ?></a></td>
                <td><?php echo $row->b_date; ?></td>
                <td><?php echo $row->b_writer; ?></td>
                <td><?php echo $row->b_viewed; ?></td>
            </tr>
        <?php } ?>
            <tr>
                <td colspan="5">
                    <?php if($pageNum==1){}else{ ?>
                    <a href="<?php echo URL."QA/index/".($pageNum-1); ?>">이전</a>
                    <?php } ?>
                    <?php for($i=$boardModel->startPage;$i<$boardModel->endPage;++$i){ ?>
                        <a href="<?php echo URL."QA/index/".$i; ?>"><?php echo $i?></a>
                    <?php } ?>
                    <?php if($pageNum==$boardModel->totalPage || $boardModel->totalList == 0){}else{ ?>
                    <a href="<?php echo URL."QA/index/".($pageNum+1); ?>">다음</a>
                    <?php } ?>
                </td>
            </tr>
    </table>
    <div><a href="<?php echo URL."QA/write" ?>">글쓰기</a></div>
</div>
