<?php get_header(); ?>






<!-- main -->

<section class="main-single">
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

<section class="news-single">
  <div class="inner">
    <h2 class="title">NEWS</h2>

    <div class="news-box">
        <div class="news-top">
        <?php
if ( has_post_thumbnail() ) {
the_post_thumbnail( 'large' );
}
?>
        </div>
        <div class="news-center">
        <time class="entry-published .txtxs" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y/n/j' ); ?></time>
          <p class="all"><?php the_excerpt(); //抜粋を表示 ?></p>
        </div>



          <?php if(have_rows('repeat_news')): ?>

        <div class="news-bottom">
        <?php while(have_rows('repeat_news')): the_row(); ?>

        <p class="txtl bottom-title"><?php the_sub_field('news_title'); ?></p>
          <p class="txtm bottom-subtitle"><?php the_sub_field('news_sub_title1'); ?></p>
          <p><?php the_sub_field('news_nai1'); ?></p>
          <p class="txtm bottom-subtitle"><?php the_sub_field('news_sub_title2'); ?></p>
          <p><?php the_sub_field('news_nai2'); ?></p>

        <?php endwhile; ?>
        </div>

        <?php endif; ?>


    </div>

        

<? //ページネーション ?>


<div class="pagenation">
  <div class="page-left">
    <?php previous_post_link('<i class="fa fa-chevron-circle-left"></i> %link', '前の記事へ'); ?>
  </div>
  <div class="page-right">
    <?php next_post_link('%link <i class="fa fa-chevron-circle-right"></i>', '次の記事へ'); ?>
  </div>
</div>

  </div>
</section>








<?php get_template_part('template-parts/schedule'); ?>








<?php get_footer(); ?>