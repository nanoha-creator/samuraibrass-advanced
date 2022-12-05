<!-- トップビュー ★後でリンク設定 -->
<?php
$img = get_thumbnail(the_ID());
?>
<div class="bl_topView" style="background-image: url('<?php echo $img; ?>')">
    <?php if (is_home()) : ?>
        <h1 class="bl_topView_ttl">ブログ</h1>
    <?php else : ?>
        <h1 class="bl_topView_ttl"><?php the_title(); ?></h1>
    <?php endif; ?>
</div>
<!-- /.bl_topView -->