<!-- パンくずリスト -->
<div class="bl_breadcrumb">
    <?php if (!is_front_page()) : ?>
        <div class="bl_breadcrumb_txt">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </div>
    <?php endif; ?>
</div>
<!-- /.bl_breadcrumb -->