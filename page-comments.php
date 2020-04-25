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

<div class="pankuzu">
<?php get_template_part('template-parts/pankuzu'); ?>
</div>







<!-- comments -->

<section class="comments-single">
    <div class="inner">
      <h2 class="comments-title title">COMMENTS</h2>
      <p class="txtl">舞台関係者のみならず各界著名人からコメントが届いています！</p>
      <div class="comments-area">
        <div class="comments-name">
          <p class="person-name">京都佛立ミュージアム館長 <span>長松清潤</span></p>
          <p class="txts">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
            まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
        </div>
      </div>

      <?php if(get_field('repeat_comments')): ?>
      <div class="comments-boxs">

      <?php while(the_repeater_field('repeat_comments')): ?>
        <div class="comments-box">
           <p class="txtl"><?php the_sub_field('comments_name'); ?></p>
           <p class="txtxs"><?php the_sub_field('comments_bunya'); ?></p>
           <p class="comments-content"><?php the_sub_field('comments_text'); ?></p> 
        </div>
        <?php endwhile; ?>  
        
      </div>
      <?php endif; ?>











    </div>
    </section>


    <?php get_template_part('template-parts/schedule'); ?>










<?php get_footer(); ?>