<!-- ナビゲーションやお問い合わせ情報 -->
<div class="ly_footer ly_footer__bgBlue">
    <div class="ly_footer_inner">
        <div class="bl_footerUtils">
            <!-- ナビゲーション -->
            <nav class="bl_footerNav">
                <ul class="bl_footerNav_inner">
                    <?php
                    $menu_name = 'global_nav';
                    ?>
                    <?php if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) : ?>
                        <?php
                        $menu = wp_get_nav_menu_object($locations[$menu_name]);
                        $menu_items = wp_get_nav_menu_items($menu->term_id);
                        ?>

                        <?php foreach ((array) $menu_items as $item) : ?>
                            <li><a class="bl_footerNav_link" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
                        <?php endforeach; ?>

                    <?php else : ?>
                        <li>メニューがありません</li>
                    <?php endif; ?>
                </ul>
            </nav>

            <div class="bl_footerUtils_right">
                <!-- サイトロゴ -->
                <a class="el_siteTtl" href="<?php esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/img/logo.svg')); ?>" alt="Engress" width="136" height="27"></a>

                <!-- ★後でリンク設定 -->
                <div class="bl_actionNav_vert bl_actionNav_vert__rev">
                    <span class="bl_actionNav_hours bl_actionNav_hours__offWhite">平日08:00〜20:00</span>
                    <span class="bl_actionNav_tel bl_actionNav_tel__offWhite">0123-456-7890</span>
                </div>
                <!-- /.bl_actionNav_vert -->

            </div>
            <!-- /.bl_footerUtils_right -->
        </div>
        <!-- /.bl_footerUtils -->
    </div>
    <!-- /.ly_footer_inner -->
</div>
<!-- /.ly_footer -->

<!-- コピーライト -->
<div class="ly_footer">
    <div class="ly_footer_inner">
        <p class="el_copyRight">&copy;2020- <?php echo get_the_date('Y'); ?> <?php bloginfo('name'); ?>.</p>
    </div>
    <!-- /.ly_footer_inner -->
</div>
<!-- /.ly_footer -->