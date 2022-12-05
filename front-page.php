<!DOCTYPE html>
<html lang="ja">

<head>

  <!-- ヘッダー -->
  <?php get_header(); ?>

</head>

<body class="pg_top">
  <div class="hp_wrapper">

    <header class="ly_header">

      <!-- ヘッダー共通パーツ -->
      <?php get_template_part('includes/header') ?>

    </header>

    <main>
      <!-- ファーストビュー ★後でリンク設定 -->
      <div class="bl_firstView">
        <h2 class="bl_firstView_ttl">TOEFL対策はEngress</h2>
        <p class="bl_firstView_txt">日本人へのTOEFL指導歴豊かな講師陣の<br />
          コーチング型TOEFLスクール</p>
        <a class="el_roundBtn el_roundBtn__w260h60" href="">資料請求</a>
        <a class="bl_firstView_link" href="">お問い合わせ</a>
      </div>
      <!-- /.bl_firstView -->

      <div class="ly_cont">
        <section class="ly_cont_inner">
          <!-- TOEFL学習でこんな悩みありませんか？ -->
          <section class="ly_section ly_section__blue">

            <div class="bl_section_ttl">
              <h3 class="el_lv3Heading el_lv3Heading__white">TOEFL学習でこんな悩みありませんか？</h3>
            </div>
            <!-- /.bl_section_ttl -->
            <div class="bl_section_body">
              <div class="bl_textUnit">
                <p class="bl_textUnit_txt">勉強の習慣が<br />身についていない</p>
                <p class="bl_textUnit_txt">勉強しているはず<br />なのに点数が伸びない</p>
                <p class="bl_textUnit_txt">正しい勉強方法が<br />わからない</p>
              </div>
              <!-- /.bl_textUnit -->
              <div class="bl_boxWhite">
                <div class="bl_boxWhite_inner">
                  <h4 class="bl_boxWhite_ttl">Engressは<br />TOEFLに特化したスクールです</h4>
                  <p class="bl_boxWhite_txt">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br />TOEFLの苦手分野を克服します。</p>
                </div>
                <!-- /.bl_boxWhite_inner -->
              </div>
              <!-- /.bl_boxSign -->
            </div>
            <!-- /.bl_section_body -->
          </section>

          <!-- TOEFL対策に特化したEngress3つの強み -->
          <section class="ly_section">
            <div class="bl_section_ttl">
              <h3 class="el_lv3Heading">TOEFL対策に特化したEngress3つの強み</h3>
            </div>
            <!-- /.bl_section_ttl -->
            <div class="bl_section_body">
              <div class="bl_mediaUnit js_mediaAdjustment">
                <div class="bl_media bl_media__rev">
                  <div class="bl_media_img" style="background-image: url(<?php echo esc_url(get_theme_file_uri('img/feature01@2x.jpg')) ?>"></div>
                  <!-- /.bl_media_img -->
                  <div class="bl_media_body">
                    <span class="el_label">特長 １</span>
                    <h4 class="bl_media_ttl">TOEFLに最適化された<br />無駄のないカリキュラム</h4>
                    <p class="bl_media_txt">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
                  </div>
                  <!-- /.bl_media_body -->

                </div>
                <!-- /.bl_media -->
                <div class="bl_media">
                  <div class="bl_media_img" style="background-image: url(<?php echo esc_url(get_theme_file_uri('img/feature02@2x.jpg')) ?>)"></div>
                  <!-- /.bl_media_img -->
                  <div class="bl_media_body">
                    <span class="el_label">特長 ２</span>
                    <h4 class="bl_media_ttl">日本人指導歴10年以上の<br />経験豊富な講師陣</h4>
                    <p class="bl_media_txt">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
                  </div>
                  <!-- /.bl_media_body -->

                </div>
                <!-- /.bl_media -->
                <div class="bl_media bl_media__rev">
                  <div class="bl_media_img" style="background-image: url(<?php echo esc_url(get_theme_file_uri('img/feature03@2x.jpg')) ?>)"></div>
                  <!-- /.bl_media_img -->
                  <div class="bl_media_body">
                    <span class="el_label">特長 ３</span>
                    <h4 class="bl_media_ttl">平均3ヶ月でTOEFL iBT20点アップ</h4>
                    <p class="bl_media_txt">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
                  </div>
                  <!-- /.bl_media_body -->

                </div>
                <!-- /.bl_media -->
              </div>
              <!-- /.bl_mediaUnit -->

              <!-- ★後でリンク設定 -->
              <div class="bl_boxImg">
                <h4 class="bl_boxImg_ttl">Engressの料金プランはこちら</h4>
                <a class="el_transparentBtn" href="">料金を見てみる</a>
              </div>
              <!-- /.bl_boxImg -->
            </div>
            <!-- /.bl_section_body -->
          </section>

          <!-- TOEFL成功事例 -->
          <section class="ly_section ly_section__blue">
            <div class="bl_section_ttl">
              <h3 class="el_lv3Heading el_lv3Heading__white">TOEFL成功事例</h3>
            </div>
            <!-- /.bl_section_ttl -->
            <div class="bl_section_body">
              <div class="bl_cardUnit bl_cardUnit__col3">
                <div class="bl_card">
                  <p class="bl_card_topTxt">TOEFL iBT 100点を突破してコロンビア大学大学院に進学できました！</p>
                  <figure class="bl_card_imgWrapper">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/model01@2x.jpg')) ?>" alt="" width="125" height="140">
                  </figure>
                  <div class="bl_card_body">
                    <span class="bl_card_title">会社員</span>
                    <span class="bl_card_name">T.Fujiyamaさん</span>
                    <span class="bl_card_result">3ヶ月でTOEFL80→108点</span>
                  </div>
                  <!-- /.bl_card_body -->
                </div>
                <!-- /.bl_card -->
                <div class="bl_card">
                  <p class="bl_card_topTxt">半年でTOEFL 40点→100点を達成！コロンビア大学大学院に合格</p>
                  <figure class="bl_card_imgWrapper">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/model02@2x.jpg')) ?>" alt="" width="125" height="140">
                  </figure>
                  <div class="bl_card_body">
                    <span class="bl_card_title">大学生</span>
                    <span class="bl_card_name">Y.Takiyamaさん</span>
                    <span class="bl_card_result">6ヶ月でTOEFL40→100点</span>
                  </div>
                  <!-- /.bl_card_body -->
                </div>
                <!-- /.bl_card -->
                <div class="bl_card">
                  <p class="bl_card_topTxt">早稲田大学 国際教養学部AO入試合格！TOEFL iBT 109点</p>
                  <figure class="bl_card_imgWrapper">
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/model03@2x.jpg')) ?>" alt="" width="125" height="140">
                  </figure>
                  <div class="bl_card_body">
                    <span class="bl_card_title">高校生</span>
                    <span class="bl_card_name">M.Yamadaさん</span>
                    <span class="bl_card_result">5ヶ月でTOEFL68→109点</span>
                  </div>
                  <!-- /.bl_card_body -->
                </div>
                <!-- /.bl_card -->
              </div>
              <!-- /.bl_cardUnit -->
            </div>
            <!-- /.bl_section_body -->
          </section>

          <!-- ご利用の流れ -->
          <section class="ly_section">
            <div class="bl_section_ttl">
              <h3 class="el_lv3Heading">ご利用の流れ</h3>
            </div>
            <!-- /.bl_section_ttl -->
            <div class="bl_section_body">
              <dl class=bl_flowList>
                <div class="bl_flowList_set">
                  <dt class="bl_flowList_ttl">お問い合わせ</dt>
                  <dd class="bl_flowList_txt">まずはフォームまたはお電話からお申し込みください。</dd>
                </div>
                <!-- /.bl_flowList_set -->
                <div class="bl_flowList_set">
                  <dt class="bl_flowList_ttl">ヒアリング</dt>
                  <dd class="bl_flowList_txt">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</dd>
                </div>
                <!-- /.bl_flowList_set -->
                <div class="bl_flowList_set">
                  <dt class="bl_flowList_ttl">学習プランのご提供</dt>
                  <dd class="bl_flowList_txt">目標達成のために最適な学習プランをご提案致します。</dd>
                </div>
                <!-- /.bl_flowList_set -->
                <div class="bl_flowList_set">
                  <dt class="bl_flowList_ttl">ご入会</dt>
                  <dd class="bl_flowList_txt">お申込み完了後、レッスンがスタートします。</dd>
                </div>
                <!-- /.bl_flowList_set -->
              </dl>
            </div>
            <!-- /.bl_section_body -->
          </section>

          <!-- よくある質問 -->
          <section class="ly_section">
            <div class="bl_section_ttl">
              <h3 class="el_lv3Heading">よくある質問</h3>
            </div>
            <!-- /.bl_section_ttl -->
            <div class="bl_section_body">
              <dl class="bl_accordion">
                <dt>
                  <button class="bl_accordion_btn is_active" tyle="button">Engressはサラリーマンでも学習を続けられるでしょうか？</button>
                </dt>
                <dd>
                  <p class="bl_accordion_txt is_active">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                </dd>
                <dt>
                  <button class="bl_accordion_btn" tyle="button">教材はオリジナルのものを使用しているのでしょうか？</button>
                </dt>
                <dd>
                  <p class="bl_accordion_txt">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                </dd>
                <dt>
                  <button class="bl_accordion_btn" tyle="button">講師に日本人はいますか？</button>
                </dt>
                <dd>
                  <p class="bl_accordion_txt">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                </dd>
                <dt>
                  <button class="bl_accordion_btn" tyle="button">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</button>
                </dt>
                <dd>
                  <p class="bl_accordion_txt">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                </dd>
              </dl>
            </div>
            <!-- /.bl_section_body -->
          </section>

          <!-- 2カラム -->
          <div class="ly_contUnit ly_contUnit__col2">
            <!-- ブログ -->
            <section class="ly_contUnit_section">
              <div class="bl_section_ttl">
                <h3 class="el_lv3Heading">ブログ</h3>
              </div>
              <!-- /.bl_section_ttl -->
              <div class="bl_section_body">
                <ul class="bl_horizList lg_mb106">
                  <?php
                  $query = get_recentlyPost();
                  if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                      $category = get_the_category();  ?>
                      <li>
                        <a class="bl_media bl_media__recentPost" href="<?php echo esc_url(the_permalink()); ?>">
                          <div class="bl_media_img bl_media_img__recentPost bl_media_badge" style="background-image: url(<?php echo esc_url(get_thumbnail()); ?>)" data-name="<?php echo $category[0]->cat_name ?>"></div>
                          <div class="bl_media_body bl_media_body__recentPost">
                            <h4 class="bl_media_ttl bl_media_ttl__recentPost js_textTrim" data-num="45"><?php the_title(); ?></h4>
                            <time class="bl_media_date bl_media_date__recentPost"><?php the_time('Y-m-d'); ?></time>
                          </div>
                        </a>
                      </li>
                    <?php endwhile;
                  else : ?>
                    <p>おすすめの記事はありませんでした。</p>
                  <?php endif;
                  wp_reset_postdata(); ?>
                </ul>
              </div>
              <!-- /.bl_section_body -->
            </section>

            <!-- お知らせ -->
            <section class="ly_contUnit_section">
              <div class="bl_section_ttl">
                <h3 class="el_lv3Heading">お知らせ</h3>
              </div>
              <!-- /.bl_section_ttl -->
              <div class="bl_section_body">
                <ul class="bl_newsList bl_newsList__vert lg_mb106">
                  <?php
                  $query = get_recentlyNews();
                  if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                      $category = get_the_category();  ?>
                      <li class="bl_newsList_set bl_newsList_set__vert">
                        <a href="<?php echo esc_url(the_permalink()); ?>">
                          <time class="bl_newsList_date bl_newsList_date__vert"><?php the_time('Y-m-d'); ?></time>
                          <h4 class="bl_newsList_ttl js_textTrim" data-num="46"><?php the_title(); ?></h4>
                        </a>
                      </li>
                    <?php endwhile;
                  else : ?>
                    <p>おすすめの記事はありませんでした。</p>
                  <?php endif;
                  wp_reset_postdata(); ?>
                </ul>
              </div>
              <!-- /.bl_section_body -->
            </section>
        </section>
      </div>
      <!-- /.ly_cont -->
    </main>

    <footer>
      <div class="ly_footer">
        <div class="ly_footer_inner">
          <!-- CTAエリア ★後でリンク設定 -->
          <div class="bl_cta">
            <span class="bl_cta_msg">まずは無料で資料請求から</span>
            <a class="el_roundBtn" href="">資料請求</a>
            <a class="bl_cta_link" href="">お問い合わせ</a>
          </div>
          <!-- /.bl_actionNav -->
          <!-- CTAエリア（電話） -->
          <div class="bl_ctaTel">
            <span class="bl_ctaTel_msg">お電話でのお問い合わせはこちら</span>
            <span class="bl_ctaTel_tel">0123-456-7890</span>
            <span class="bl_ctaTel_hours">平日 08:00~20:00</span>
          </div>
          <!-- /.bl_telNav -->
        </div>
        <!-- /.ly_footer_inner -->
      </div>
      <!-- /.ly_footer -->
      <!-- フッター共通パーツ -->
      <?php get_template_part('includes/footer') ?>
    </footer>



    <!-- フッター -->
    <?php get_footer(); ?>
  </div>
  <!-- /.hp_wrapper -->
</body>

</html>