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
  







<!-- INQUIRY -->

<section class="inquiry">
  <div class="inner">
    <h2 class="title">INQUIRY</h2>



    <div class="inquiry-in">
      <div class="inquiry-content">
      <p class="txtm">小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br>
        公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>
        お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。</p>
      </div>

      <?php echo do_shortcode('[contact-form-7 id="5" title="コンタクトフォーム 1"]'); ?>

       <!--<div class="inquiry-form">
        <div class="form form-name">
          <p class="txtm">お名前</p>
          <input type="text">
        </div>
        <div class="form form-tell">
          <p class="txtm">電話番号</p>
          <input type="text">
        </div>
        <div class="form form-mail">
          <p class="txtm">メールアドレス</p>
          <input type="text">
        </div>
        <div class="form form-nai">
          <p class="txtm">内容</p>
          <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>-->
      </div>

      <!--<div class="inquiry-btn"><a href=""><p class="txtm">送信</p></a></div>-->

      <!--<div class="inquiry-btn">
      <input type="submit" name="送信" class="txtm">
      </div>-->
    </div>


  </div>
</section>











<?php get_template_part('template-parts/schedule'); ?>







<?php get_footer(); ?>