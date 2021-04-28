//ハンバーガクリック時
const navBtn = $('.nav_btn');
$(function () {
    navBtn.click(function () {
        $('body').toggleClass('nav_open');
        $('#navi').fadeToggle(300);
    });
});
// セクションスクロール
$(function () {
    $('.header-link').click(function () {
        $('body').toggleClass('nav_open');
        $('#navi').fadeToggle(300);
    });
});

// FVアニメーション
$(function () {
    //アニメーション時スクロールできないようにする $('body').css('overflow', 'hidden'); 波が名前と被らないようにする
    let waveIndex = {
        "z-index": "2"
    }
    $('#burger').hide();
    setTimeout(function () {
        $('.wave').css(waveIndex);
        $('#burger').fadeIn();
        $('.header__left').fadeIn();
        $('.scroll').fadeIn();
        $('.mv__txt').fadeIn(1400);
    }, 3800);
});
// スクロール表示を消す
$(window).scroll(function () {
    if ($(window).scrollTop() > $(window).height() / 3) {
        $('.scroll').fadeOut(1000);
    }
});
$(function () {
    var slideConts = document.querySelectorAll('.service__slide'); // スライドで表示させる要素の取得
    var slideContsRect = []; // 要素の位置を入れるための配列
    var slideContsTop = []; // 要素の位置を入れるための配列
    var windowY = window.pageYOffset; // ウィンドウのスクロール位置を取得
    var windowH = window.innerHeight; // ウィンドウの高さを取得
    var remainder = 200; // ちょっとはみ出させる部分
    // 要素の位置を取得
    for (var i = 0; i < slideConts.length; i++) {
        slideContsRect.push(slideConts[i].getBoundingClientRect());
    }
    for (var i = 0; i < slideContsRect.length; i++) {
        slideContsTop.push(slideContsRect[i].top + windowY);
    }
    // ウィンドウがリサイズされたら、ウィンドウの高さを再取得
    window.addEventListener('resize', function () {
        windowH = window.innerHeight;
    });
    // スクロールされたら
    window.addEventListener('scroll', function () {
        // スクロール位置を取得
        windowY = window.pageYOffset;

        for (var i = 0; i < slideConts.length; i++) {
            // 要素が画面の下端にかかったら
            if (windowY > slideContsTop[i] - windowH + remainder) {
                // .showを付与
                slideConts[i]
                    .classList
                    .add('show');
            } else {
                // 逆に.showを削除
                slideConts[i]
                    .classList
                    .remove('show');
            }
        }
    });

});
//service title works title固定パララックス suggestion skill fadeIn
$(window).scroll(function () {
    var serviceTop = $(".service__slide")
        .offset()
        .top; //service topの高さ
        var aboutTop = $(".about").offset().top;
        var skillTop = $(".skill").offset().top;
        var worksTop = $(".works")
        .offset()
        .top; //works topの高さ
    var windowH = $(window).scrollTop(); //スクロール量
    var H = $(window).height(); //window高さ
    if (serviceTop < windowH) {
        $('.service__title').addClass('fixed');
    }
    if (serviceTop > windowH || worksTop < windowH) {
        $('.service__title').removeClass('fixed');
    }
    //suggestionスライドイン
    if (windowH > H * 0.6) {
        $('.suggestion').addClass('slide-suggestion');
    }
    //skillスライドイン
    if (windowH > H * 1.2) {
        $('.skill').addClass('slide-skill');
    }
    //topに戻ったらスライド位置戻す
    if (windowH == 0) {
        $('.suggestion').removeClass('slide-suggestion');
        $('.skill').removeClass('slide-skill');
    }
    if (worksTop < windowH) {
        $('.works__title').addClass('fixed');
    }
    if (worksTop > windowH || aboutTop < windowH) {
        $('.works__title').removeClass('fixed');
    }
    var worksBoxTop = $('.works__box').offset().top;
    if(worksBoxTop - 300 < windowH){
        $('.works__box').addClass('works-slide');
    }
    if( skillTop > windowH){
            $('.works__box').removeClass('works-slide');
        }
});
//reloadでtopに戻る
$(function () {
    $('html,body').animate({
        scrollTop: 0
    }, '1');
});
