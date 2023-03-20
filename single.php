<!-- ヘッダー読み込み -->
<?php get_header(); ?>
<main>
  <!----- Latest Articles --------------->
  <section class="Latest-Articles wrapper">
      <h1>Latest Articles</h1>
        <div class="Latest">
          <!-- メインループここから -->
          <?php
            if (have_posts()) :
              while(have_posts()):
                the_post();
          ?>
          <div class="Latest-box">
            <img class="Latest-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="post-img">
              <div class="box-text">
                <p><?php the_date(); ?></p>
                <p><?php the_title(); ?></p>
                
              </div>
              <a href="#">READ MORE</a>
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
  <!------- メインループここまで ------->
</main>
<!-- フッター読み込み -->
<?php get_footer(); ?>