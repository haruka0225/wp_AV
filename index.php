<!-- ヘッダー読み込み -->
<?php get_header(); ?>
  <main>
    <div class="box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="logo1">

      <div class="img-box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_1_pc.png" alt="" class="pic">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_2_pc.png" alt="" class="pic">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_3_pc.png" alt="" class="pic">
      </div>
      
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_pc.png" alt="" class="logo2">
    </div>

    <p>進化し続ける「街」アメリカンビレッジマガジン</p>


  <!----- Latest Articles --------------->
    <section class="Latest">
      <h1>Latest Articles</h1>
        <div class="Latest-box">
          <!-- メインループここから -->
          <?php
            if (have_posts()) :
              while(have_posts()):
                the_post();
          ?>
          <div class="box">
            <img class="Latest-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="post-img">
              <div class="box-text">
                <p><?php the_date(); ?></p>
                <p><?php the_title(); ?></p>
              </div>
              <a href="">READ MORE</a>
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