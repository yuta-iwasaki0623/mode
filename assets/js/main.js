$(function () {
    speed = 1000;
    easing = "easeInOutCubic";
    // タグ生成
    $(".mask").wrap("<div class='maskWrap'>");
    $(".mask").append("<div class='maskBg'></div>");
    $('.mask').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {

            $(this).stop().animate({ "left": "0%" }, function () {
                $(this).find(".maskBg").stop().animate({ "left": "100%" });
            });
        }
    });
});


$(function () {
    AOS.init({
        placement: "bottom-top",
        duration: 1000
    });
});

//rellax.js
/*
document.addEventListener(
    'DOMContentLoaded', //①
    function(ev){
        window.addEventListener(
            'resize', //②
            (function on_resize(ev){ //③
                if(window.matchMedia('(max-width: 767px)').matches){ //④
                    //スマホ向けの処理
                }
                else{
                    //PC、タブレット向けの処理
                    $(function(){
                        var rellax = new Rellax('.rellax', {
                            speed: 2, //速度
                            center: true,
                            vertical: true, //縦パララックス
                            horizontal: false //横パララックス        
                        });        
                    });
                }
                return on_resize; //⑤
            })(), //③
            false
        );
    },
    false
);
*/





/*高さ合わせる*/
$(function () {
    $('.matchHeight').matchHeight();
});


$(function () {
    var $body = $('body');

    //開閉用ボタンをクリックでクラスの切替え
    $('#js__btn').on('click', function () {
        $body.toggleClass('open');
        $('.menu-trigger').toggleClass('active');

    });

    //メニュー名以外の部分をクリックで閉じる
    $('#js__nav').on('click', function () {
        $body.removeClass('open');
        $('.menu-trigger').removeClass('active');
    });
});


/*バナー追従コンタクト*/
$(function () {
    var fixBar = $('.fixBar');
    $(window).scroll(function () {
        var sc = $(window).scrollTop();
        if (sc > 300) {
            fixBar.slideDown();
        } else {
            fixBar.slideUp();
        }
    });
    var pagetop = $('.fixBarTop');
    pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });
});



/*Q&Aの開閉*/
$(function () {
    $(".topQaUnit dt").on("click", function () {
        $(this).next().slideToggle();
        $(this).find('.topQaPlusMinus').toggleClass("on");
    });
});

/*ハンバーガーメニューページ内遷移でも消滅*/
$(function () {
    $('#js__nav a[href*="#"]').click(function () {
        $('body').removeClass("open");
        $('.menu-trigger').removeClass("active");
    });
});



//スムーズスクロール
$(function () {
    // スクロールのオフセット値
    var offsetY = -10;
    // スクロールにかかる時間
    var time = 500;

    // ページ内リンクのみを取得
    $('a[href*="#"]').click(function () {
        // 移動先となる要素を取得
        var target = $(this.hash);
        if (!target.length) return;
        // 移動先となる値
        var targetY = target.offset().top + offsetY;
        // スクロールアニメーション
        $('html,body').animate({ scrollTop: targetY }, time, 'swing');
        // ハッシュ書き換えとく
        window.history.pushState(null, null, this.hash);
        // デフォルトの処理はキャンセル
        return false;
    });
});

