<?php get_header();?>
<section class="mv">
    <!-- タイトル -->
    <div class="animate two">
        <div class="animate__box">
            <span>K</span><span>e</span><span>n</span><span>t</span><span>a</span>
            <span></span><br class="animate__br">
            <span>Y</span><span>a</span><span>m</span><span>a</span><span>m</span><span>o</span><span>t</span><span>o</span>
        </div>
    </div>
    <p class="mv__txt">-あなたに寄り添ったWeb制作を-</p>
    <!-- スクロール表記 -->
    <a href="#service" class="scroll">
        <span></span>
        <span></span>
        <span></span>Scroll</a>
</section>
<section class="service" id="service">
    <div class="service__slide"></div>
    <h2 class="service__title">Service</h2>
    <table class="service__table suggestion">
        <tr class="service__head-row">
            <th class="service__head">
                <i class="fas fa-pencil-ruler service__icon"></i>Suggestion</th>
        </tr>
        <tr class="service__row">
            <th class="service__data">
                デザイン</th>
            <td class="service__txt">お客様の要望に合わせてデザイン・設計をします<button>
                    <a
                        class="hear-sheet"
                        href="https://docs.google.com/forms/d/e/1FAIpQLSfN6sD3UINkyLXV2JZzeoHzUeWrTq3KQslG3mNPtjBH-6fedA/viewform"
                        target="_blank">ヒアリングシートはこちら</a>
                </button>
            </td>
        </tr>
        <tr class="service__row">
            <th class="service__data">
                LP(ランディングページ)制作</th>
            <td class="service__txt">商品やサービスに特化したWebページを制作します</td>
        </tr>
        <tr class="service__row">
            <th class="service__data">
                コーポレイト制作</th>
            <td class="service__txt">企業の公式プロフィールサイトを制作します</td>
        </tr>
        <tr class="service__row">
            <th class="service__data">
                Wordpress,Shopify導入</th>
            <td class="service__txt">動的なサイト、ECサイトを構築します</td>
        </tr>
        <tr class="service__row">
            <th class="service__data">その他</th>
            <td class="service__txt">Webページ修正、新機能実装などご要望にあわせてご対応させていただきます</td>
        </tr>
    </table>
    <table class=" service__table skill">
        <tr class="service__head-row">
            <th class="service__head">
                <i class="fas fa-tools service__icon"></i>Skill</th>
        </tr>
        <tr class="service__row">
            <th class="service__data">
                デザインツール</th>
            <td class="service__txt">Adobe XD, Photoshop, Illustrator</td>
        </tr>
        <tr class="service__row">
            <th class="service__data">
                プログラミング</th>
            <td class="service__txt">HTML, CSS, JS(Jquery), Wordpress,,Shopify,Git</td>
        </tr>
        <tr class="service__row">
            <th class="service__data">
                その他</th>
            <td class="service__txt">SCSS, BEM, FLOCSS, 吉本式BEM設計, 英語翻訳, Github, SEO対策</td>
        </tr>
    </table>
</section>
<section class="works" id="works">
    <h2 class="works__title">Works</h2>
    <div class="works__container">
        <div class="works__box">
            <img
                class="works__picture"
                src="<?php echo get_template_directory_uri(); ?>/img/hitokado.png"
                alt="">
            <a
                class="works__link"
                href="http://nakaspo.com/hitokado/"
                target="_blank">
                <div class="works-content">
                    <h3 class="works-content__title">株式会社中山スポーツのコワーキングスペース</h3>
                    <p class="works-content__skill">使用スキル</p>
                    <ul class="works-content__list">
                        <li class="works-content__item">HTML/CSS/JS/Wordpress/design</li>
                        <li class="works-content__item">詳しく見る</li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="works__box">
            <img
                class="works__picture"
                src="<?php echo get_template_directory_uri(); ?>/img/koko-state.png"
                alt="">
            <a
                class="works__link"
                href="https://cocostate.jp/index.html"
                target="_blank">
                <div class="works-content">
                    <h3 class="works-content__title">株式会社ココステートのwebサイト</h3>
                    <p class="works-content__skill">使用スキル</p>
                    <ul class="works-content__list">
                        <li class="works-content__item">HTML/CSS/JS/Wordpress/design</li>
                        <li class="works-content__item">詳しく見る</li>
                    </ul>
                </div>
            </a>
        </div>
    </div>
</section>
<section id="about" class="about">
    <p class="label">About</p>
    <div class="about-flex">
        <img src="<?php echo get_template_directory_uri(); ?>/img/picture.png" alt=""/>
        <div class="author">
            <p class="author_name">山本健太</p>
            <p class="author_txt">・滋賀県生まれ。滋賀県育ち。<br>
                ・2019年龍谷大学経済学部入学。<br>
                ・2020年12月webサイト制作を始める。<br>
                ・2021年3月にwordpress修正案件,地方スポーツ会社からwebサイト制作案件を受注<br>
                ・現在(2021年)は大学を休学し、Web制作を中心に活動中。</p>
            <p class="author_txt author_txt--border">アニメーションを取り入れたサイト、動的なサイト、管理のしやすいサイトの制作を得意としています。</p>
            <a href="https://twitter.com/kenta_zzzaaa" target="_blank">Twitter</a>
            <span class="slush">/</span>
            <a href="https://www.instagram.com/kenkenta0227/?hl=ja">Instagram</a>

        </div>
    </div>
</section>
<?php get_footer();?>