<?php get_header(); ?>




<!-- main -->

<section class="main-archive">
  <div class="inner">
     <img src="<?php echo get_template_directory_uri() ?>/img/main1.png" alt="メインのタイトル" class="img1">
    <img src="<?php echo get_template_directory_uri() ?>/img/main2.png" alt="メインのサブタイトル" class="img2">
    <div class="main-btn"><a href="<?php if( get_field('reserv') ) { ?>
      <?php the_field('reserv'); ?>
      <?php } ?>"><p class="txts">チケット予約サイトへ</p></a></div>
  </div>
</section>
  

<!-- パンくず -->

<?php get_template_part('template-parts/pagenation'); ?>
  







<!-- INQUIRY -->

<section class="inquiry-after">
  <div class="inner">
    <h2 class="title">INQUIRY</h2>
    <div class="inquiry-after-in">
      <p class="txtm">お問い合わせありがとうございました。<br>メッセージは正常に送信されました。</p>
    </div>
  </div>
</section>







<!-- news -->

<section class="news-confilm">
  <div class="inner">
    <h2 class="title">LATEST NEWS</h2>
    <a href="/news" class="news-btn"><p class="txts">ニュース一覧へ</p></a>



    <!--  新着記事を5件取得し、3記事目から表示を変更  -->


<?php $paged = get_query_var('paged'); ?>
<?php query_posts("posts_per_page=5&paged=$paged"); ?>


<?php if (have_posts()) : ?>
    <div class="news-boxs">
<?php while(have_posts()) : the_post(); $counter++;?>
<?php if ($counter <= 3): ?><!– 最初の記事判別 –>


      <a class="news-box" href="<?php the_permalink(); //記事のリンクを表示 ?>">
        <?php
             if ( has_post_thumbnail() ) {
               the_post_thumbnail( 'large' );
             }
        ?>
      <time class="txtxs news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
      <p class="news-nai"><?php the_excerpt(); //抜粋を表示 ?></p>
      </a>

<?php else:?>

  <a class="news-box-new" href="<?php the_permalink(); //記事のリンクを表示 ?>">
          <?php
             if ( has_post_thumbnail() ) {
             the_post_thumbnail( 'medium' );
             }
          ?>
           <div class="new-content">
             <time class="txtxs news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
             <p class="news-nai"><?php the_excerpt(); //抜粋を表示 ?></p>
          </div>
      </a>
 

<?php endif;?><!– /最初の記事判別 –>
<?php endwhile; ?>

    </div>
<?php endif; ?>



  </div>
</section>











<?php get_template_part('template-parts/schedule'); ?>






<?php get_footer(); ?>