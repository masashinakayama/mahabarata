<?php get_header(); ?>





<!-- main -->

<section class="main-archive">
  <div class="inner">
     <img src="<?php echo get_template_directory_uri() ?>/img/main1.png" alt="メインのタイトル" class="img1">
    <img src="<?php echo get_template_directory_uri() ?>/img/main2.png" alt="メインのサブタイトル" class="img2">
    <div class="main-btn"><a href="<?php the_field('reserv'); ?>
      <?php if( get_field('reserv') ) { ?>
      <?php } ?>"><p class="txts">チケット予約サイトへ</p></a></div>
  </div>
</section>
  

<!-- パンくず -->


<?php get_template_part('template-parts/pankuzu'); ?>





<!-- news -->

<section class="news-archive">
  <div class="inner">
    <h2 class="title">NEWS</h2>

    <?php
//記事があればentriesブロック以下を表示
if (have_posts() ) : ?>

    <div class="news-boxs">

    <?php
//記事数ぶんループ
while ( have_posts() ) :
the_post(); ?>

      <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="news-box">
    
      <?php
if ( has_post_thumbnail() ) {
the_post_thumbnail( 'large' );
}
?>
           <time class="txtxs news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
           <p class="news-nai"><?php the_excerpt(); //抜粋を表示 ?></p>
      </a>
      
      <?php
endwhile;
?>

    </div>
    <?php endif; ?>



   <? //pagenation ?>

    <?php if (paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>

    <?php
echo
paginate_links(
array(
'end_size' => 0,
'mid_size' => 1,
'prev_next' => true,
'prev_text' => '<i class="fas fa-angle-left"></i>',
'next_text' => '<i class="fas fa-angle-right"></i>',
)
);
?>
    <?php endif; ?>


  </div>
</section>








<?php get_template_part('template-parts/schedule'); ?>





<?php get_footer(); ?>