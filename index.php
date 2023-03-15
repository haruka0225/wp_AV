<!-- ヘッダー読み込み -->
<?php get_header(); ?>
  <main>
    <div class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="logo1">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_pc.png" alt="" class="pic">

      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_pc.png" alt="" class="logo2">
    </div>

    <p>進化し続ける「街」アメリカンビレッジマガジン</p>


  <!----- Latest Articles --------------->
    <section class="Latest">
      <h1>Latest Articles</h1>
      <!-- メインループここから -->
        <div class="Latest-box">
          <?php
            if (have_posts()) :
              while(have_posts()):
                the_post();
          ?>
          <div class="box">
            <img class="Latest-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="post-img">
              <div class="box-text">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
                <a href="">READ MO<span>RE</span></a>
              </div>
          </div>

          <?php
            endwhile;
          else :
          ?>
          <section class="container-wrap" id="htmlcss">
            <h2 class="subtitle">表示する記事がありません</h2>
          </section>
          <?php endif; ?>
          <!-- メインループここまで -->
        </div>
    </section>
  </main>

<!-- フッター読み込み -->
<?php get_footer(); ?>