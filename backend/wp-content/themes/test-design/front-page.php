<section class="l-mv">
  <div class="l-mv__container">
    <p class="p-mv__title">
      わたしたちの出会いは
      <br>東庄町でした。
    </p>
    <p class="p-mv__sub">
      どこに運命があるか分からない。
      <br>けど、運命を見つけに行くことはできる。
    </p>
  </div>
  <div class="p-mv__imgs">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/ill_couple.png"
      alt="<?php echo $image['alt']; ?>" class="p-mv__img01">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/ill_heart.png"
      alt="<?php echo $image['alt']; ?>" class="p-mv__img02">
    <!-- <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/ill_bird.png"
      alt="<?php echo $image['alt']; ?>" class="p-mv__img02"> -->
  </div>
</section>


<!-- <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/ill_heart.png"
      alt="<?php echo $image['alt']; ?>" class="p-mv__img02"> -->


<section class="l-news" id="news">
  <div class="c-container">
    <div class="p-news__heading">
      <p class="c-title">NEWS</p>
      <h2 class="c-title__sub">お知らせ</h2>
    </div>
    <div class="p-news__items">

    <?php
      $args = array(
          'post_type' => 'news',
          'posts_per_page' => 2
      );
      $the_query = new WP_Query( $args );
      if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="p-news__item ani-section">
        <div class="p-news__item-img">
        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/img_dummy2.png" alt="イメージ写真がありません">
                        <?php endif; ?>
        </div>
        
        <div class="p-news__item-content">
          <p class="p-news__item-date"><?php echo get_the_date('Y.m.d'); ?></p>
          <p class="p-news__item-text">
            <?php the_excerpt(); ?>
          </p>
        </div>
      </div>
<?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
      <?php else :
          echo 'データがありません。';
      endif;
      ?>

    </div>
  </div>
</section>


<section class="l-about" id="about">
  <div class="p-about__deco"></div>
  <div class="c-container">
    <div class="p-about__heading">
      <p class="c-title ">ABOUT “TONOSHO”</p>
    </div>
    <div class="p-about__tosho ani-section">
      <h3 class="p-about__title">東庄町について</h3>
      <div class="p-about__tosho-content ani-section">
        <div class="p-about__tosho-img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/ill_strowberry.png"
            alt="<?php echo $image['alt']; ?>" class="u-srtowberry">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/img_map.png"
            alt="<?php echo $image['alt']; ?>" class="u-map">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/ill_bird.png"
            alt="<?php echo $image['alt']; ?>" class="u-bird">
        </div>
        <p class="p-about__tosho-text">
          千葉県北東部に位置する東庄町（とうのしょうまち）。
          <br>東京からは高速バスで約2時間、電車でも2時間ほどでアクセスできます。
          <br>利根川下流域の田園豊かで穏やかな町は、夏は涼しく冬は暖かく過ごしやすいのが特徴です。
          <br>そんな町で、運命の出会いをしてみませんか。
        </p>
      </div>
    </div>


    <div class="p-about__miryoku">
      <h3 class="p-about__title">東庄町の<span>魅力</span>を紹介！</h3>
      <div class="p-about__miryoku-items">
      <div class="p-about__miryoku-item ani-section">
          <div class="p-about__miryoku-item-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/img_miryoku04.png"
              alt="<?php echo $image['alt']; ?>のイメージ" width="355" height="219" loading="lazy">
          </div>
          <p class="p-about__miryoku-item-title">豊かな自然</p>
          <p class="p-about__miryoku-item-text">
          利根川沿いには希少な鳥「コジュリン」が生息。白鳥が飛来する夏目の堰などもあり、野鳥観察ができます。<br />
          さくらやつつじが有名な公園や運動場、黒部川沿いのサイクリングロードなど、豊かな自然が自慢です。<br />
          </p>
        </div>
        <div class="p-about__miryoku-item ani-section">
          <div class="p-about__miryoku-item-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/img_miryoku01.png"
              alt="<?php echo $image['alt']; ?>のイメージ" width="355" height="219" loading="lazy">
          </div>
          <p class="p-about__miryoku-item-title">子育てしやすい制度</p>
          <p class="p-about__miryoku-item-text">
            東庄町では、出生から大学進学まで子どもの成長に合わせたさまざまな支援制度を行っています。たとえば子育て応援祝金（出生10万円、小中学校入学時に5万円）の支給や高校生までの医療費0円など。<!-- <br /> -->
            <a href="https://www.town.tohnosho.chiba.jp/kosodate_kyoiku/index.html" target="_blank" rel="noopener noreferrer">詳しくはこちら</a>
          </p>
        </div>
        <div class="p-about__miryoku-item ani-section">
          <div class="p-about__miryoku-item-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/img_miryoku03.png"
              alt="<?php echo $image['alt']; ?>のイメージ" width="355" height="219" loading="lazy">
          </div>
          <p class="p-about__miryoku-item-title">おいしい食べ物たくさん</p>
          <p class="p-about__miryoku-item-text">
          東庄町の特産はいちご・豚肉・コカブ・醤油などです。<br />
          12月下旬～5月には町内観光いちご園でいちご狩りが楽しめます。<br />
          また、とんかつやカツ丼など豚肉料理を楽しめる町内飲食店も多数あります！<br />
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="l-service" id="service">
  <div class="c-container l-service__container">
    <h3 class="p-service__title">婚活サービスについて</h3>

    <div class="p-service__sche" id="event">
      <h4 class="p-service__sche-title">イベントスケジュール</h4>
      <div class="p-service__sche-items">

      <?php 
        $args = array(
            'posts_per_page' => 3,
            'orderby' => 'meta_value',
            'meta_key' => 'time',
            'order' => 'ASC',
        );

        $query = new WP_Query($args);

        if($query->have_posts()): ?>
            <?php while($query->have_posts()): $query->the_post(); ?>
                <div class="p-service__sche-item">
                    <div class="p-service__sche-img">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/img_dummy2.png" alt="イメージ写真がありません">
                        <?php endif; ?>
                    </div>

                    <div class="p-service__sche-content">
                        <span class="u-new">NEW</span>
                        <p class="u-date">開催日時：<?php the_field('time'); ?></p>
                        <p class="u-title"><?php the_title(); ?></p>
                        <div class="c-btn p-service__sche-content-btn">
                            <a href="<?php the_permalink(); ?>">イベントに参加する</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p style="text-align: center;">まだイベントがありません</p>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<section class="l-faq" id="faq">
  <div class="c-container">
    <div class="p-faq__heading">
      <p class="c-title">FAQ</p>
      <h2 class="c-title__sub">よくあるご質問</h2>
    </div>

    <ul class="p-faq__items ani-section">
      <li class="p-faq__item">
        <div class="p-faq__item-q">
          <span class="m_q">Q</span>
          <p class="p-faq__item-q-txt">東庄町以外の人でもイベントに登録できますか？</p>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/ico_arrow.svg"
            alt="<?php echo $image['alt']; ?>" class="m_open active">
        </div>
        <div class="p-faq__item-a" style="display: block;">
          <span class="m_a">A</span>
          <p class="p-faq__item-a-txt">
          もちろん登録できます！むしろ大歓迎です。<br />
          国内在住で、出会いを求めている独身男女（20～40歳）であればどなたでも参加可能です。
          </p>
        </div>
      </li>
      <li class="p-faq__item">
        <div class="p-faq__item-q">
          <span class="m_q">Q</span>
          <p class="p-faq__item-q-txt">会員登録にお金はかかりますか？</p>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/ico_arrow.svg"
            alt="<?php echo $image['alt']; ?>" class="m_open">
        </div>
        <div class="p-faq__item-a">
          <span class="m_a">A</span>
          <p class="p-faq__item-a-txt">
          登録は無料です。イベント参加時に飲食代がかかる場合があります。
          </p>
        </div>
      </li>
      <li class="p-faq__item">
        <div class="p-faq__item-q">
          <span class="m_q">Q</span>
          <p class="p-faq__item-q-txt">イベントに友人と一緒に参加することはできますか？</p>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/ico_arrow.svg"
            alt="<?php echo $image['alt']; ?>" class="m_open">
        </div>
        <div class="p-faq__item-a">
          <span class="m_a">A</span>
          <p class="p-faq__item-a-txt">
          参加可能です。ご友人さまも事前に会員登録をしていただき、イベント申し込みをお願いします。
          </p>
        </div>
      </li>
      <li class="p-faq__item">
        <div class="p-faq__item-q">
          <span class="m_q">Q</span>
          <p class="p-faq__item-q-txt">東庄町に引っ越したら何かサポートはありますか？</p>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/ico_arrow.svg"
            alt="<?php echo $image['alt']; ?>" class="m_open">
        </div>
        <div class="p-faq__item-a">
          <span class="m_a">A</span>
          <p class="p-faq__item-a-txt">
          新婚世帯へは家賃や引っ越しの補助を行っています。また、東京圏（東京都・埼玉県・神奈川県）からの移住の場合（一定条件あり）には移住支援金を交付しています。
          </p>
        </div>
      </li>

    </ul>
  </div>
</section>

<section class="l-contact">
  <div class="l-contact__container ">

    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/src/img/ill_couple.png"
      alt="<?php echo $image['alt']; ?>" class="p-contact__img">
    <p class="p-contact__text ani-section">CONTACT</p>
    <div class="c-btn p-contact__btn">
      <a href="/contactform/">お問い合わせはこちら</a>
    </div>
  </div>
</section>



<?php get_footer(); ?>