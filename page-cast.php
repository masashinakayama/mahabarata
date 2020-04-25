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
<?php get_template_part('template-parts/pankuzu'); ?>


<h2 class="cast-single-title title">CAST</h2>




<!-- cast-single -->

<section class="cast-single">
    <div class="inner">
    
    


    <?php if(get_field('repeat_casts')): ?>
      <div class="casters">
    
      <?php while(the_repeater_field('repeat_casts')): ?>
        <div class="caster">
          <img src="<?php the_sub_field('casts_img'); ?>" alt="キャストの顔写真">
           <div class="cast-menu2">
              <p class="p1"><?php the_sub_field('casts_bunya'); ?></p>
              <p class="txtm p2"><?php the_sub_field('casts_name'); ?></p>
              <p class="txtxs p3"><?php the_sub_field('casts_sp'); ?></p>
           </div>
          <p class="txtxs cast-content"><?php the_sub_field('casts_nai'); ?></p>
        </div>
        <?php endwhile; ?>
        
      </div>
      <?php endif; ?>



    
    </div>
    </section>













<!-- cast-center -->

<section class="cast-center">

<?php if(get_field('repeat_musician')): ?>
<div class="inner">

<?php while(the_repeater_field('repeat_musician')): ?>

  <div class="cast-center-box">

      <div class="cast-center-img"><img src="<?php the_sub_field('musician_img'); ?>" alt="キャストの顔写真"></div>
      <div class="cast-center-content">
         <p class="cast-txt"><?php the_sub_field('musician_bunya'); ?></p>
         <p class="txtl"><?php the_sub_field('musician_name'); ?></p>
         <p class="txtxs"><?php the_sub_field('musician_sp'); ?></p>
         <p class="txtxs"><?php the_sub_field('musician_nai'); ?></p>
      </div>
  
  </div>
  <?php endwhile; ?>


</div>
<?php endif; ?>

</section>




















<!-- cast-bottom -->

<section class="cast-bottom">
<?php if(get_field('repeat_staff')): ?>

<div class="inner">

    <?php while(the_repeater_field('repeat_staff')): ?>
    <div class="cast-bottom-box">
        <p><?php the_sub_field('staff_bunya'); ?></p>
        <p class="txtl"><?php the_sub_field('staff_name'); ?></p>
        <p class="txtxs"><?php the_sub_field('staff_sp'); ?></p>
    </div>
    <?php endwhile; ?>

</div>
<?php endif; ?>

</section>














<?php get_template_part('template-parts/schedule'); ?>







<?php get_footer(); ?>