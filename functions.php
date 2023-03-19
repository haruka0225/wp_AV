<?php
  // 投稿ページのサムネイルを追加する方法　アイキャッチ画像
  add_theme_support("post-thumbnails");
?>


<!-- もっと見るボタン -------------------->
<?php
  function count_user_posttype($userid,$posttype) {
    global $wpdb;
    $where = get_posts_by_author_sql($posttype, true, $userid,true);
    $count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts $where" );
    return $count;
    }
?>