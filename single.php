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
                <p><?php the_date(); ?></p>
                <p><?php the_title(); ?></p>
                <a href="">READ MORE</a>
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