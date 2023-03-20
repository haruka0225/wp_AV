<!-- ヘッダー読み込み -->
<?php get_header(); ?>
<main>
  <div class="box wrapper">


    <div class="img-box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="logo1">

      <img src="<?php echo do_shortcode('[metaslider id="14"]'); ?>
      
      <!-- <img src=" <?php //echo get_template_directory_uri(); 
                     ?>/assets/img/visual_1_pc.png" alt="" class="pic"> -->
      <!-- <img src="<?php //echo get_template_directory_uri(); 
                      ?>/assets/img/visual_2_pc.png" alt="" class="pic"> -->
      <!-- <img src="<?php //echo get_template_directory_uri(); 
                      ?>/assets/img/visual_3_pc.png" alt="" class="pic">   -->
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visual_text_pc.png" alt="" class="logo2">
  </div>

  <p class="wrapper">進化し続ける「街」アメリカンビレッジマガジン</p>


  <!----- Latest Articles --------------->
  <section class="Latest-Articles wrapper">
    <h1>Latest Articles</h1>
    <div class="Latest">
      <!-- メインループここから -->
      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
      ?>
          <div class="Latest-box">
            <img class="Latest-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="post-img">
            <div class="box-text">
              <p><?php the_date(); ?></p>
              <p><?php the_title(); ?></p>
            </div>
            <a class="read-more" href="#">READ MORE</a>
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
    <button class="more-btn">もっと見る</button>
  </section>

  <img src="<?php echo do_shortcode('[metaslider id="14"]'); ?>
  
</main>
<!-- フッター読み込み -->
<?php get_footer(); ?>