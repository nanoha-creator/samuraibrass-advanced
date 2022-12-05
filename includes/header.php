<div class="ly_header_inner">
    <div class="bl_headerUtils">
        <h1 class="el_siteTtl"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/img/logo.svg')); ?>" alt="Engress" width="136" height="27"></a></h1>

        <!-- ナビゲーション -->
        <nav class="bl_headerNav">
            <ul class="bl_headerNav_inner">
                <?php
                $menu_name = 'global_nav';
                ?>
                <?php if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) : ?>
                    <?php
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    ?>

                    <?php foreach ((array) $menu_items as $item) : ?>
                        <li><a class="bl_headerNav_link" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                    <?php endforeach; ?>

                <?php else : ?>
                    <li>メニューがありません</li>
                <?php endif; ?>
            </ul>
        </nav>

        <!-- ★後でリンク設定 -->
        <div class="bl_actionNav">
            <div class="bl_actionNav_vert">
                <span class="bl_actionNav_hours">平日08:00〜20:00</span>
                <span class="bl_actionNav_tel">0123-456-7890</span>
            </div>
            <a class="el_btn" href="#">資料請求</a>
            <a class="el_btn el_btn__blue" href="<?php echo esc_url(home_url('/contact/')) ?>">お問い合わせ</a>
        </div>
        <!-- /.bl_actionNav -->
    </div>
    <!-- /.bl_headerUtils -->
</div>
<!-- /.ly_header_inner -->