



<?php

// 投稿ページのサムネイルを追加する方法　アイキャッチ画像
add_theme_support("post-thumbnails");

// 外観にメニュー表示
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}
// グローバルメニュー位置
register_nav_menus( array(
    'global' => 'グローバル',
    'side'   => 'サイド',
    'footer' => 'フッター'
 ) );

?>


