<?php
if ($current_page > 3){
    $first_page = 1;
    ?>
    <a class="page-item " href="?per_page=<?=$item_per_page?>&pageno=<?=$first_page?>">First</a>
<?php }?>

<?php
if ($current_page > 1){
    $prev_page  = $current_page -1;
    ?>
    <a class="page-item" href="?per_page=<?=$item_per_page?>&pageno=<?=$prev_page?>">Prev</a>
<?php }?>


<?php for ($num =1; $num <= $total_pages; $num++) { ?>
    <?php if ($num != $current_page) { ?>
        <?php if ($num != $current_page -3 && $num < $current_page + 3) { ?>
            <a class="page-item" href="?per_page=<?=$item_per_page?>&pageno=<?=$num?>"><?=$num?></a>
        <?php } ?>
    <?php } else {  ?>
            <strong class="page-item" ><?=$num?></strong>
    <?php } ?>    
<?php } ?>

<?php
    if ($current_page < $total_pages - 1){
        $next_page = $current_page+1 ?>
        <a class="page-item" href="?per_page=<?=$item_per_page?>&pageno=<?=$next_page?>">Next</a>
<?php }?>

<?php
    if ($current_page < $total_pages - 3){
        $last_page = $total_pages ?>
        <a class="page-item" href="?per_page=<?=$item_per_page?>&pageno=<?=$last_page?>">Last</a>
<?php }?>


