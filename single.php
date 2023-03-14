<!-- ヘッダー読み込み -->
<?php get_header(); ?>
<main>
  <!----- Latest Articles --------------->
  <section class="Latest">
    <h1>Latest Articles</h1>
    <!------- メインループ ------->
    <div>
      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
      ?>
              <div class="box-text">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
                <a href="">READ MO<span>RE</span></a>
              </div>
            </div>
          </div>
        <?php
        endwhile;
      else :
        ?>
        <section class="conteiner-weap" id="htmlcss">
          <h2 class="subtitle">表示する記事がりません</h2>
        </section>
      <?php endif; ?>
    </div>
  </section>
  <!------- メインループここまで ------->
</main>
<!-- フッター読み込み -->
<?php get_footer(); ?>