
<?php get_header(); ?>








<!-- main -->

<section class="main">
  <div class="inner">
    <div class="main1 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s"><img src="<?php echo get_template_directory_uri() ?>/img/main1.png" alt="メインのタイトル"></div>
    <div class="main2 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".8s">
      <img src="<?php echo get_template_directory_uri() ?>/img/main2.png" alt="メインのサブタイトル" >
        <p class="txts">小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。
          いよいよその集大成である完全版マハーバーラタの公演が決定！！<br><br>アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ
          向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！</p>
    </div>
    <div class="main-btn">
      <a href="<?php if( get_field('reserv') ) { ?>
      <?php the_field('reserv'); ?>
      <?php } ?>">
<p class="txts">チケット予約サイトへ</p></a></div>

  </div>
</section>



<!-- intro -->

<section class="intro">
  <div class="inner wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="200">
       <h2 class="title">INTRODUCTION</h2>
       <p class="txtxl">なぜ今「マハーバーラタ」なのか？</p>
    <div class="intro-content">
      <p class="txtxs">「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
        それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>
        平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。</p>

      <p class="txtxs">現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
        神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
        非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。</p>       
    </div>
    <img src="<?php echo get_template_directory_uri() ?>/img/left.png" alt="写真">

  </div>
</section>





<!-- カスタムフィールドでのyoutube埋め込み -->



<section class="youtube wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="200">

<?php if( get_field('youtube_url') ): ?>
  <div class="Box">
    <?php echo $embed_code = wp_oembed_get( get_field('youtube_url') ); ?>
  </div>
<?php endif; ?>

</section>









<!-- news -->

<section class="news">
  <div class="inner wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".0s" data-wow-offset="200">
    <h2 class="title">NEWS</h2>
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
<?php wp_reset_postdata(); ?>



 </div>
</section>






<!-- story -->

<section class="story wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="100">
<div class="inner">
  <h2 class="title">STORY</h2>
  <div class="story-content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="100">
    <p class="txtxs">
      マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。
      神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
      世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、
      全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
    </p>
  </div>
  <div class="story-btn"><a href="story">もっと詳しく</a></div>
</div>
</section>












<!-- comments -->

<section class="comments wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="200">
<div class="inner">
  <h2 class="comments-title title">COMMENTS</h2>
  <p class="txtl">舞台関係者のみならず各界著名人からコメントが届いています！</p>
  <div class="comments-area">
    <div class="comments-name wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="200">
      <p class="person-name">京都佛立ミュージアム館長 <span>長松清潤</span></p>
      <p class="txts">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
        まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
    </div>
  </div>
  <div class="comments-btn"><a href="comments">もっと見る</a></div>
  <h2 class="cast-title title">CAST</h2>
</div>
</section>








<!-- cast -->

<section class="cast">
<div class="inner">


<div class="casters wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="200">


    <div class="caster">
      <img src="<?php echo get_template_directory_uri() ?>/img/cast1.png" alt="キャストの顔写真" class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="200">
       <div class="cast-menu1 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="200">
          <p class="p1">作・演出・振付・構成</p>
          <p class="txtm p2">小池博史</p>
       </div>
      <p class="txtxs cast-content wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="200">茨城県日立市出身。一橋大学卒業。<br>
        演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。<br>
        1982年「パパ・タラフマラ」設立。<br>
        演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。<br>
        3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。<br>
        著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。</p>
    </div>

    <div class="caster">
      <img src="<?php echo get_template_directory_uri() ?>/img/cast2.png" alt="キャストの顔写真" class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="200">
       <div class="cast-menu2 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="200">
          <p class="p1">演出</p>
          <p class="txtm p2">白井さち子</p>
          <p class="txtxs p3">バレエ、コンテンポラリーダンス</p>
       </div>
      <p class="txtxs cast-content wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="200">茨城県日立市出身。一橋大学卒業。<br>
      東海大学音楽学課程在学中よりサウンドスケープ研究の傍らバリ舞踊を始める。 1995年よりインドネシア政府給費留学生としてインドネシア国立芸術高等学院に留学。<br>
        1982年「パパ・タラフマラ」設立。<br>
        学外でも現代バリ舞踊界最高の舞踊家達に師事し、舞踊技術と同時に精神的哲学的影響も強く受ける。 2006年、Asian Cultural Councilの助成によりアメリカに滞在。<br>
        パパ・タラフマラ作品では「ガリバー＆スウィフト」「パンク・ドンキホーテ」「白雪姫」に、小池博史ブリッジプロジェクトでは「注文の多い料理店」「風の又三郎」に出演。</p>
    </div>

    <div class="caster">
      <img src="<?php echo get_template_directory_uri() ?>/img/cast3.png" alt="キャストの顔写真" class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="200">
       <div class="cast-menu3 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="200">
          <p class="p1">出演</p>
          <p class="txtm p2">小谷野哲郎</p>
          <p class="txtm p3">バリ舞踏</p>
       </div>
      <p class="txtxs cast-content wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s" data-wow-offset="200">茨城県日立市出身。一橋大学卒業。<br>
      東海大学音楽学課程在学中よりサウンドスケープ研究の傍らバリ舞踊を始める。<br>
      1995年よりインドネシア政府給費留学生としてインドネシア国立芸術高等学院に留学。<br>
      学外でも現代バリ舞踊界最高の舞踊家達に師事し、舞踊技術と同時に精神的哲学的影響も強く受ける。 2006年、Asian Cultural Councilの助成によりアメリカに滞在。<br>
      パパ・タラフマラ作品では「ガリバー＆スウィフト」「パンク・ドンキホーテ」「白雪姫」に、小池博史ブリッジプロジェクトでは「注文の多い料理店」「風の又三郎」に出演。</p>
    </div>


  </div>

  <div class="cast-btn"><a href="cast">もっと見る</a></div>

</div>
</section>








<?php get_template_part('template-parts/schedule'); ?>








<?php get_footer(); ?>