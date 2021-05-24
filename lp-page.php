<?php
/*
Template Name: LPテンプレート
*/

get_header();
?>
<header class="">
  <div class="cnt">
    <div class="flex justBetween alignStart headerInfoFlex">
      <div class="headerLeft">
        <h1>
          <img class="logo" src="<?= get_template_directory_uri().'/assets';?>/img/logo.png" alt="東京・新宿で脱毛ならmode Shohei">
        </h1>
      </div>
      <div class="headerRight flex justEnd">
        <div class="headerTel white text-center pc">
          <a href="tel:03-6457-4401" data-position="header" class="headerTel_link fontEn fsM2 lh_s">03-6457-4401</a>
          <p class="fsS lh_s">(営業時間10:00-22:00)</p>
        </div>
        <!--
                  <div class="menu-btn" id="js__btn">
                      <div class="menu-trigger" href="#">
                          <span></span>
                          <span></span>
                          <span></span>
                      </div>
                  </div>
                  -->
        <div class="headerContact">
          <a href="#reserve" class="white headerContact_text serif tra shadowL">無料カウンセリング予約</a>
        </div>


      </div>


    </div>
  </div>
</header>

<!--
  <div class="headerFloat fixed">
      <a href="#reserve" class="vertical white headerFloat_link serif tra shadowL">無料カウンセリング予約</a>
  </div>
  -->





<!-- モーダルメニュー -->
<nav class="overRayBox menu bgMainColor" id="js__nav">
  <ul class="overRayMenuUl white serif demiBold">
    <li>
      <a href="#message">メッセージ</a>
    </li>
    <li>
      <a href="#vs">医療脱毛とエステ脱毛について</a>
    </li>
    <li>
      <a href="#camp">キャンペーン</a>
    </li>
    <li>
      <a href="#covid">感染予防について</a>
    </li>
    <li>
      <a href="#feature">選ばれる理由</a>
    </li>
    <li>
      <a href="#price">料金表</a>
    </li>
    <li>
      <a href="#flow">脱毛までの流れ</a>
    </li>
    <li>
      <a href="#voice">お客様の声</a>
    </li>
    <li>
      <a href="#faq">よくあるご質問</a>
    </li>
    <li>
      <a href="#access">店舗案内</a>
    </li>
    <li>
      <a href="#reserve">無料カウンセリング予約</a>
    </li>
  </ul>
</nav>




<section class="footerTelSp sp">
  <ul class="flex">
    <li class="footerTelSpFlexLi text-center white bgMainColor">
      <a href="tel:03-6457-4401"><i class="fa fa-phone" aria-hidden="true"></i>
        <div class="footerTelSpText bold">電話でご予約</div>
      </a>
    </li>
    <li class="footerTelSpFlexLi text-center white bgSubColor">
      <a href="https://lin.ee/L7hN5F0" target="_blank"><i class="fab fa-line"></i>
        <div class="footerTelSpText bold">ラインでご予約</div>
      </a>
    </li>
  </ul>
</section>

<main>


  <section class="topFv">
    <div class="relative">
      <div class="topFvWrap">
        <div class="mainImgBox">
          <div class="bgImg fvSlideImg mainImg" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/fv_01.jpg')"></div>
          <div class="bgImg fvSlideImg mainImg" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/fv_02.jpg')"></div>
          <div class="bgImg fvSlideImg mainImg" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/fv_03.jpg')"></div>
        </div>
        <div class="topFvTextWrap absolute white">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/logo_white.png" alt="mode shohei" class="topFv_logo">
          <h2 class="serif fsL4 ls_m movetext mb20">日本一“抜ける”と“安さ”を<br>保証する複合型エステサロンが<br>新宿御苑に誕生</h2>
          <p class="bold">※他店より１円でも高ければ、<br class="sp">遠慮なくご相談ください</p>
        </div>
      </div>
    </div>
  </section>


  <script>
    $(window).on('load resize', function () {
      //ウィンドウの高さを取得する
      var targetY = $(window).height();

      //スクロールをクリックするとウィンドウの高さ分、下にスクロールする
      $('.js_scrollDown').on('click', function () {
        $("html, body").stop().animate({
          scrollTop: targetY
        }, 500, 'swing');
        return false;
      });
    });

    $('.movetext').each(function () {
      //一文字ずつ<span>で括る
      $(this).children().addBack().contents().each(function () {
        if (this.nodeType == 3) {
          $(this).replaceWith($(this).text().replace(/(\S)/g, '<span>$1</span>'));
        }
      });

      //inviewを使って画面に表れたら起動させる
      /*
      $(this).on('inview',function(){
          //一文字ずつ順番に不透明させる
          $(this).css({'opacity':1});
          for (var i = 0; i <= $(this).children('span').length; i++) {
              //$(this).children('span').eq(i).delay(1000*i).animate({'opacity':1},800);
              //$(this).children('span').eq(i).delay(1000*i).addClass('active');
          };
      });
      */
    });
  </script>


  <section class="scrollDownSection">
    <a href="#" class="js_scrollDown scrollDown fontEnSub fsS2 ls_s lh_s">SCROLL</a>
  </section>


  <section class="topConcept relative" id="message">
    <div class="topSp">
      <div class="enVerticalWrap absolute">
        <p class="fsL3 subColor fontEn enVertical">MESSAGE</p>
      </div>
    </div>
    <div class="flex flexPc flexReverse">
      <div class="topConceptImgUnit">
        <div class="topConceptImg">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_concept_01_01.jpg" alt="あなたが理想の姿（mode）に近づくお手伝いをさせてください" class="img01 shadowM">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_concept_01_02.jpg" alt="あなたが理想の姿（mode）に近づくお手伝いをさせてください" class="img02 shadowM">
        </div>
      </div>
      <div class="topConceptTextUnit">
        <div class="topConceptTextCard">
          <div class="blockquote mb50" data-aos="fade-up">
            <h3 class="serif fsM2 ls_m mainColor demiBold">あなたが理想の姿（mode）に近づくお手伝いをさせてください</h3>
          </div>

          <p>今よりもっとキレイになりたい。<br>いつまでも若く美しくいたい。</p>
          <p>当エステサロンに興味があり今このページを見ているあなたは、理想を追い求め人生をポジティブに生きようとしている素晴らしい方です。</p>
          <p>その生き方を、美を通して応援したい。</p>
          <p>より豊かな生き方ができるような施術をお届けしたい、全ての人を【理想の姿＝mode】に変身させること、それがmode Shoheiの使命です。</p>
          <p>使命を全うするため、最高級の美容機器を最安値で提供する、史上最高の複合サロンを新宿御苑にオープンしました。</p>
          <p>皆さまのご来店、心よりお待ちしております。</p>
        </div>
      </div>
    </div>
  </section>

  <div class="text-center" data-aos="fade-up">
    <button href="" class="button buttonColorDeep serif fsM35 shadowM demiBold jsButtonAccordionOrigin">mode
      Shoheiの由来</button>
  </div>

  <section class="topConcept jsAccordionOrigin">
    <div class="flex flexPc">
      <div class="topConceptImgUnit">
        <div class="topConceptImg">
          <!--<img src="<?= get_template_directory_uri().'/assets';?>/img/top_concept_02_01.jpg" alt="mode Shoheiの由来" class="img03 shadowM">-->
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_concept_02_02.jpg" alt="mode Shoheiの由来" class="img04 shadowM pc">
        </div>
      </div>
      <div class="topConceptTextUnit relative reverse">
        <div class="topSp pc">
          <div class="enVerticalWrap absolute">
            <p class="fsL3 subColor fontEn enVertical">CHANGING</p>
          </div>
        </div>
        <div class="topConceptTextCard">
          <div class="blockquote mb50" data-aos="fade-up">
            <h3 class="serif fsM2 ls_m mainColor demiBold">mode Shoheiの由来</h3>
          </div>

          <p>複合型エステサロンをオープンするにあたり、ブランド名の決定には1年という期間がかかりました。</p>

          <div class="topConceptImg">
            <!--<img src="<?= get_template_directory_uri().'/assets';?>/img/top_concept_02_01.jpg" alt="mode Shoheiの由来" class="img03 shadowM">-->
            <img src="<?= get_template_directory_uri().'/assets';?>/img/top_concept_02_02.jpg" alt="mode Shoheiの由来" class="img04 shadowM sp">
          </div>

          <p>最終的に、私(Shohei)、が美を通してポジティブで前向きになれた経緯から、mode=理想の姿に変身しポジティブで前向きな状態と定義しました。</p>
          <p>そして、誰もが私のようにmodeな姿になり幸せな人生を歩めるように願いをこめて、mode Shoheiと名付けました。</p>

          <p>ですが、わかっております。</p>
          <p>美に対する価値観や終着点は十人十色。一色単にはできません。</p>

          <p>ですので、私たちと一緒にあなただけのmodeを探しましょう。</p>

          <p>そう、ネガティブだった私が、Modeな自分に生まれ変われたように。</p>

        </div>
      </div>
    </div>
  </section>

  <script>
    /*Q&Aの開閉*/
    $(function () {
      $(".jsButtonAccordionOrigin").on("click", function () {
        $(".jsAccordionOrigin").slideToggle();
        //$(this).find('.topQaPlusMinus').toggleClass("on");
      });
    });
  </script>

  <section class="margin" id="vs">
    <!--<div class="topFeatureBg bgImg shadowM" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_why_bg.jpg')"></div>-->
    <div class="topFeatureCatchTextCard relative white">
      <!--
      <div class="reverse pc">
          <div class="enVerticalWrap absolute">
              <p class="fsL3 subColor fontEn enVertical">FEATURE</p>
          </div>
      </div>
      -->
      <div class="text-center">
        <div class="blockquote" data-aos="fade-up">
          <h3 class="serif fsM ls_m demiBold inlineBlock">なぜmode Shoheiの<br>脱毛が選ばれるのか？</h3>
        </div>
      </div>
    </div>
  </section>

  <section class="margin text-center">
    <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_ico_question.png" alt="" class="mb10 topWhyIcoQuestion">
    <p class="bold fsM3">脱毛を検討する際に<br class="sp">こんなことを考えたことはありませんか？</p>
    <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_pop.png" alt="通い放題コースとは、光脱毛と医療脱毛どっちがいいの？" class="topWhyPopImg" data-aos="fade-up">
    <div class="topWhyReasonBg bgImg">
      <p class="bold fsM35">そんなお悩みに応えるべく、</p>
      <p class="bold subColor fsM lh_m topWhyReasonBg_text" data-aos="fade-up">①通い放題コースの闇を暴く<br>②エステ脱毛vs医療脱毛
      </p>
      <p class="bold fsM35">というお話をさせていただきます。</p>
    </div>
  </section>

  <section class="padding bgGrayColorLight">
    <div class="cnt">
      <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_1_title.png" alt="通い放題コースの闇を暴く" class="">
      <div class="cntL">
        <div class="topWhyExpoWrap bgWhite" data-aos="fade-up">
          <dl class="topWhyExpo_dl text-center">
            <dt class="white bold fsM4 bgMainColor">通い放題の特徴①</dt>
            <dd class="bold fsM35">「期間中は何度でも脱毛できます！」</dd>
          </dl>
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_triangle_not.png" alt="けどできない" class="topWhyTriangleNot">
          <div class="topWhyExpoAnswerCard">
            <h4 class="subColor bold fsM text-center mb20">回数制限があります！！</h4>
            <p>毛の周期に沿って施術を行う必要があるため、<span class="underLine">最低２週間は期間を開ける必要があります。</span>そのため3ヶ月契約であれば最大6回しか利用できません。</p>
          </div>


        </div>
        <div class="topWhyExpoWrap bgWhite" data-aos="fade-up">
          <dl class="topWhyExpo_dl text-center">
            <dt class="white bold fsM4 bgMainColor">通い放題の特徴②</dt>
            <dd class="bold fsM35">「月額◯千円から脱毛できます」</dd>
          </dl>
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_triangle_not.png" alt="けどできない" class="topWhyTriangleNot">
          <div class="topWhyExpoAnswerCard">
            <h4 class="subColor bold fsM text-center mb20">月額×36回が<br>あなたが払う金額です！！</h4>
            <p>脱毛1回あたりの金額に換算すると、某脱毛サロンのヒゲ脱毛3ヶ月通い放題の場合、<span
                class="underLine">ヒゲ脱毛1回分は2万5千円</span>にもなってしまいます。（当サロンは1回あたり8千円！）</p>
          </div>
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_text_more_triangle.png" alt="さらに" class="topWhytextMoreTriangle">
          <div class="topWhyExpoAnswerCard">
            <h4 class="subColor bold fsM text-center mb20">通い放題期間が終了しても<br>ローンが残ったままなんです！！</h4>
            <p>ローン契約なので期間終了後も支払いは続き、某脱毛サロンでは<span class="underLine">期間終了後も約１年間ローンを支払い続ける必要</span>があります。
            </p>
          </div>

        </div>
      </div>
    </div>
  </section>


  <section class="bgSubColorLight topWhyAltBg">
    <div class="cnt">
      <div class="cntS">
        <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_alt_text.png" alt="継続利用で安くなる回数コースをご用意しております" class="topWhyAltText" data-aos="fade-up">
      </div>
    </div>
  </section>
  <section class="margin">
    <div class="cnt">
      <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_compare_text.png" alt="通い放題コースと当サロンのコースを比較してみました" class="mb30">
    </div>
    <div class="cnt">

      <div class="cntM">
        <dl class="topQaUnit topWhyCompareUnit">
          <dt class=""><span class="fsM3 bold text-center">ヒゲ脱毛</span></dt>
          <dd class="">
            <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_compare_table_01.png" alt="比較表その1" class="mb30">
            <div class="text-center" data-aos="fade-up">
              <a href="#price" class="button buttonColorComp buttonRound bold fsM4 bold">詳しくはコチラ</a>
            </div>
          </dd>
        </dl>
        <dl class="topQaUnit topWhyCompareUnit">
          <dt class=""><span class="fsM3 bold text-center">VIO脱毛</span></dt>
          <dd class="">
            <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_compare_table_02.png" alt="比較表その2" class="mb30">
            <div class="text-center" data-aos="fade-up">
              <a href="#price" class="button buttonColorComp buttonRound bold fsM4 bold">詳しくはコチラ</a>
            </div>
          </dd>
        </dl>
        <dl class="topQaUnit topWhyCompareUnit">
          <dt class=""><span class="fsM3 bold text-center">全身脱毛</span></dt>
          <dd class="">
            <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_compare_table_03.png" alt="比較表その3" class="mb30">
            <div class="text-center" data-aos="fade-up">
              <a href="#price" class="button buttonColorComp buttonRound bold fsM4 bold">詳しくはコチラ</a>
            </div>
          </dd>
        </dl>

      </div>
    </div>
  </section>

  <section class="stripeSkew topWhyCompareResult">
    <div class="cnt">
      <div class="cntL">
        <div class="topWhyExpoWrap bgWhite">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_compare_table_04.png" alt="比較表まとめ" class="" data-aos="fade-up">
        </div>

      </div>
    </div>
  </section>

  <section class="padding margin bgGrayColorLight text-center">
    <div class="cnt">
      <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_2_title.png" alt="医療脱毛 vs エステ脱毛" class="mb30">
      <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_ico_question_white.png" alt="" class="mb10 topWhyIcoQuestion">
      <p class="bold fsM3 mb30">エステ脱毛VS医療脱毛、<br class="sp">どちらがいいのか悩んでいませんか？</p>
      <div class="cntS mb50 relative topWhyArrowRedSkewWrap">
        <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_vs_table_01.png" alt="比較表" class="" data-aos="fade-up">
        <img src="<?= get_template_directory_uri().'/assets';?>/img/arrow_red_skew.png" alt="" class="topWhyArrowRedSkew">

      </div>

      <p class="bold fsM3 mb30">エステ脱毛のマシンでは<br>こういったデメリットが生じてしまうのが<br>現状でした…</p>
      <img src="<?= get_template_directory_uri().'/assets';?>/img/arrow_red.png" alt="" class="topWhyArrowRed">


    </div>

  </section>

  <section class="margin bgMainColor padding white StripeSkewBothBg small">
    <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_vs_text_but.png" alt="しかし" class="topWhyVsTextBut">
    <div class="cnt">
      <p class="white fsM3 ls_s text-center lh_xl"><span
          class="bold fsM2 underLine comp">エステ脱毛のデメリットを解消</span>しながら<br><span
          class="bold fsM2 underLine comp">医療脱毛並みの効果</span>が期待できる<br>マシンをmode Shoheiでは<br class="sp">導入しております！</p>
    </div>
  </section>

  <section class="margin">
    <div class="cntL">
      <div class="topWhyTinoTextCard" data-aos="fade-up">
        <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_vs_tino_text.png" alt="最高品質のマシンtinoを導入" class="topWhyTinoText_img">
      </div>
      <div class="topWhyTino_img bgImg" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_why_vs_tino.jpg')"></div>
    </div>
  </section>

  <section class="margin">
    <h3 class="topWhySecretSection mb30 bgCompColor bold white fsM2 text-center">その秘密がこちら</h3>
    <div class="cnt">

      <div class="cntM" data-aos="fade-up">
        <dl class="topQaUnit topWhySecretUnit">
          <dt class="">
            <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_secret_title_01.png" alt="とにかく抜ける！のに痛みが激減" class="topWhySecretTitle">
          </dt>
          <dd class="">
            <p class="lh_xl">女性の産毛から男性のヒゲ脱毛まで対応しており、太い毛でも1回で効果が出ます。<br><span
                class="compColor bold underLine">もし3回通っても効果がないとご判断された場合は、全額返金保証もご案内しております。</span><br>また、照射時の痛みを大幅に軽減するため、今まで医療やニードルの痛みに耐えきれず脱毛を断念された方にもお喜びいただいております。
            </p>
          </dd>
        </dl>
        <dl class="topQaUnit topWhySecretUnit">
          <dt class="">
            <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_secret_title_02.png" alt="抜群の美肌効果" class="topWhySecretTitle">
          </dt>
          <dd class="">
            <p class="lh_xl">
              フォトフェイシャルと同じ光を浴びることができるため、脱毛をしながら美肌効果まで同時に得ることができます。<br>ヒゲ剃りやニキビなどで荒れた肌にも効果抜群です。<br>また、Tinoにはフォトフェイシャル単体のメニューも搭載しておりますので、より高い効果を得たい方には、そちらもご案内しております。
            </p>
          </dd>
        </dl>
        <dl class="topQaUnit topWhySecretUnit">
          <dt class="">
            <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_secret_title_03.png" alt="徹底した安全への配慮" class="topWhySecretTitle">
          </dt>
          <dd class="">
            <p class="lh_xl">
              安全上の理由から、照射回数が30万発に達した際に照射面の部品を新品に交換しております。<br>万が一、事故があった場合には提携先のクリニックにご案内しますが、そういった事例はこれまで1度もございません。
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </section>

  <section class="stripeSkew thin padding topWhyVsTable02">
    <div class="cnt">
      <div class="cntM">
        <h3 class="serif demiBold fsM text-center lh_xl mb30">日本一“抜けて”“安い”<br>mode Shoheiだけの脱毛技術</h3>
        <img src="<?= get_template_directory_uri().'/assets';?>/img/top_why_vs_table_02.png" alt="比較表" class="mb50" data-aos="fade-up">
        <div class="text-center" data-aos="fade-up">
          <a href="#price" class="button serif fsM35 shadowM demiBold">料金プランを見る</a>
        </div>
      </div>
    </div>
  </section>


  <section class="margin" id="camp">
    <div class="text-center" data-aos="fade-up">
      <h4 class="topCampTitleLimited bold fsM2 ls_m">先着<span class="bold fontEnSub fsL2">100</span>名様限定</h4>
    </div>
    <div class="topCampCatchUnit bgSubColorDeep white">
      <div class="text-center" data-aos="fade-up">
        <h3 class="topCampCatch_title serif fsM ls_s demiBold">２大キャンペーン</h3>
        <p class="topCampCatch_limited"><span class="title bold fsM35 ls_m">初回限定</span><span
            class="fsM bold date fontEnSub">2021.6.1 - 6.10<span></p>
        <img src="<?= get_template_directory_uri().'/assets';?>/img/top_camp_main_menu_catch_text.png" alt="2大キャンペーン" class="topCampMainMenuCatchText">
        <!--
          <div class="topCampCatch_price">
              <div class="title">
                  <div class="inner">
                      <span class="fontEnSub">ALL</span><br><span class="bold">メニュー</span>
                  </div>
              </div>
              <div class="price"><span class="fontEnSub bold">1,000</span><span class="bold jp">円</span></div>
          </div>
          -->
      </div>
    </div>
    <div class="topCampMenuUnit">
      <div class="topCampMenu_inner bgBlackTrans">
        <div class="cnt">
          <div class="cntM mb30">
            <img src="<?= get_template_directory_uri().'/assets';?>/img/top_camp_main_menu_main_text.png" alt="キャンペーン内容" class="topCampMainMenuMainText">
            <!--
                  <div class="topCampMenuMainCard flex" data-aos="fade-up">
                      <div class="topCampMenuMain_img bgImg" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_camp_01.jpg')"></div>
                      <div class="topCampMenuMain_text">
                          <div class="topCampMenuMain_title white"><span class="serif demiBold fsM2 lh_s ls_s">30分脱毛</span></div>
                          <div class="topCampMenuMain_subTitle bold fsM35 white">全身から好きな部位２つ</div>
                          <ul class="topCampMenuMain_priceUl white">
                              <li>
                                  <span class="bgSubColor bold block">通常価格</span>
                                  <span class="subColor block lineThrough"><span class="num">13,000</span><span class="jp">円/回</span></span>
                              </li>
                              <li>
                                  <span class="num">500</span><span class="jp">円</span>
                              </li>
                          </ul>
                      </div>
                  </div>
                  -->
            <h5 class="bold bgSubColorDeep white topCampOptionTitle ls_s fsM35 text-center">
              OPEN前予約でmodeだけの極上体験を。</h5>
            <img src="<?= get_template_directory_uri().'/assets';?>/img/top_camp_main_menu_descri_text.png" alt="キャンペーン内容オプション" class="topCampMainMenuDescriText">

            <!--
                  <div class="topCampOptionUnit flex">
                      <div class="topCampOptionCard">
                          <div class="topCampMenuMain_title white"><span class="lh_s ls_s fsM5 bold">史上初！特許付き<br><span class="serif demiBold fsM2">エステマシン</span></span></div>
                          <div class="topCampMenuMain_subTitle bold fsM35 white">顔/背中 １部位</div>
                          <ul class="topCampMenuMain_priceUl white">
                              <li>
                                  <span class="bgSubColor bold block">通常価格</span>
                                  <span class="subColor block lineThrough"><span class="num">13,600</span><span class="jp">円/回</span></span>
                              </li>
                              <li>
                                  <span class="jpL">無料</span>
                              </li>
                          </ul>
                      </div>
                      <div class="topCampOptionCard">
                          <div class="topCampMenuMain_title white"><span class="lh_s ls_s fsM5 bold">史上初！特許付き<br><span class="serif demiBold fsM2">エステマシン</span></span></div>
                          <div class="topCampMenuMain_subTitle bold fsM35 white">顔/背中 １部位</div>
                          <ul class="topCampMenuMain_priceUl white">
                              <li>
                                  <span class="bgSubColor bold block">通常価格</span>
                                  <span class="subColor block lineThrough"><span class="num">13,600</span><span class="jp">円/回</span></span>
                              </li>
                              <li>
                                  <span class="jpL">無料</span>
                              </li>
                          </ul>
                      </div>
                      <div class="topCampOptionCard">
                          <div class="topCampMenuMain_title white"><span class="lh_s ls_s fsM5 bold">史上初！特許付き<br><span class="serif demiBold fsM2">エステマシン</span></span></div>
                          <div class="topCampMenuMain_subTitle bold fsM35 white">顔/背中 １部位</div>
                          <ul class="topCampMenuMain_priceUl white">
                              <li>
                                  <span class="bgSubColor bold block">通常価格</span>
                                  <span class="subColor block lineThrough"><span class="num">13,600</span><span class="jp">円/回</span></span>
                              </li>
                              <li>
                                  <span class="jpL">無料</span>
                              </li>
                          </ul>
                      </div>
                      
                  </div>
                  -->
            <!--
                          <div class="text-center" data-aos="fade-up">
                              <a href="#price"
                                  class="button buttonColorDeep serif fsM35 shadowM demiBold">料金プランを見る</a>
                          </div>
                          -->
          </div>
          <div class="text-center" data-aos="fade-up">
            <a href="#price" class="button buttonColorDeep serif fsM35 shadowM demiBold">料金プランを見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="margin">
    <div class="cntS">
      <img src="<?= get_template_directory_uri().'/assets';?>/img/top_notion_text.png" alt="mode shoheiからのお知らせ" class="sp">
      <img src="<?= get_template_directory_uri().'/assets';?>/img/top_notion_text_pc.png" alt="mode shoheiからのお知らせ" class="pc">
    </div>
  </section>



  <section class="bgShadowStripeSkew" id="covid">
    <div class="topSp">
      <div class="enVerticalWrap absolute">
        <p class="fsL3 subColor fontEn enVertical">PREVENTION</p>
      </div>
    </div>
    <div class="topCovidBg bgImg" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_covid_bg.jpg')">
      <div class="topCovidWrap white">
        <div class="cnt">
          <div class="text-center mb50">
            <h3 class="serif fsM demiBold">当店の<br class="sp">感染予防対策について</h3>
          </div>
          <div class="topCovidArrowWrap text-center">
            <i class="fal fa-chevron-down fsL4 topCovidArrow"></i>
          </div>
          <div class="topCovidUnitWrap">
            <div class="flex rw flexPc topCovidUnit">
              <div class="col3 col colSp1 topCovidCard">
                <h4 class="serif fsM3 semiBold text-center text-left-sp mb30">
                  最新型特許付きスチーマー”EIEN”による室内加湿</h4>
                <p class="">室内の湿度を保つことで菌・ウイルスの繁殖防止効果が期待できるスチーマー”EIEN”をサロン内に常時設置し稼働しております。</p>
              </div>
              <div class="col3 col colSp1 topCovidCard">
                <h4 class="serif fsM3 semiBold text-center text-left-sp mb30">スタッフ全員の定期的な手洗い、マスク着用
                </h4>
                <p class="">スタッフ全員、施術前後はもちろん、その時間以外にも定期的な手洗いやアルコール消毒をしております。また、マスク着用に関しても常時徹底しております。
                </p>
              </div>
              <div class="col3 col colSp1 topCovidCard">
                <h4 class="serif fsM3 semiBold text-center text-left-sp mb30">施術台の使用後の消毒</h4>
                <p class="">使用した施術台は施術の終了後に毎回消毒をしております。</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>


  <script>
    /*Q&Aの開閉*/
    $(function () {
      $(".topCovidArrowWrap").on("click", function () {
        $(this).next().slideToggle();
        //$(this).find('.topQaPlusMinus').toggleClass("on");
      });
    });
  </script>


  <section class="marginW">
    <div class="cnt">
      <div class="text-center mb50">
        <h3 class="serif fsM demiBold">様々なメディアに<br>取り上げていただいております</h3>
      </div>
      <ul class="topMediaSlideUl">
        <li>
          <div class="topMediaSlideCard">
            <img src="<?= get_template_directory_uri().'/assets';?>/img/top_media_book_01.jpg" alt="Ray (レイ) 4月号" class="shadowM mb10">
            <p>Ray (レイ) 4月号</p>
          </div>
        </li>
        <li>
          <div class="topMediaSlideCard">
            <img src="<?= get_template_directory_uri().'/assets';?>/img/top_media_book_02.jpg" alt="ar (アール)  4月号" class="shadowM mb10">
            <p>ar (アール) 4月号</p>
          </div>
        </li>
      </ul>
      <!--
              <div class="text-center mb30">
                  <h4 class="serif fsM3 demiBold">東京MXでも紹介して頂きました</h4>
              </div>
              <img src="<?= get_template_directory_uri().'/assets';?>/img/top_media_tv.jpg" alt="東京MAX" class="topMediaTvImg shadowM mb10">
              <p class="text-center fsM4">東京MX</p>
              -->

    </div>
  </section>

  <script>
    $('.topMediaSlideUl').slick({
      autoplay: true,
      autoplaySpeed: 5000,
      dots: false,
      arrows: true,
      slidesToShow: 3,
      //slidesToShow:5,
      slidesToScroll: 1,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          //slidesToShow: 3,
          centerMode: true,
          centerPadding: '5px',
          //centerPadding: '90px',
          focusOnSelect: true,


        }
      }]
    });
  </script>

  <section class="margin" id="feature">
    <!--<div class="topFeatureBg bgImg shadowM" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_feature_bg.jpg')"></div>-->
    <div class="topFeatureCatchTextCard relative white">
      <!--
              <div class="reverse pc">
                  <div class="enVerticalWrap absolute">
                      <p class="fsL3 subColor fontEn enVertical">FEATURE</p>
                  </div>
              </div>
              -->
      <div class="text-center">
        <div class="blockquote" data-aos="fade-up">
          <h3 class="serif fsM ls_m demiBold inlineBlock">mode Shoheiが<br>選ばれる理由</h3>
        </div>
      </div>
      <!--
              <ul class="topFeatureNavUl text-center">
                  <li>
                      <a href="#quality">高品質で低価格</a>
                  </li>
                  <li>
                      <a href="#new">最新機器</a>
                  </li>
                  <li>
                      <a href="#free">完全無料メニュー</a>
                  </li>
                  <li>
                      <a href="#design">デザイン</a>
                  </li>
                  <li>
                      <a href="#counseling">無料カウンセリング</a>
                  </li>
              </ul>
              -->

    </div>
  </section>



  <section class="topFeatureMain" id="quality">
    <div class="cnt cnt-fluid-sp relative">
      <!--
              <div class="enVerticalWrap absolute">
                  <p class="fsL3 subColor fontEn enVertical">01.QUALITY</p>
              </div>
              -->
      <div class="cntL">
        <div class="topFeatureMainImg bgImg shadowL" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_feature_main_01.jpg')">
        </div>
        <div class="topFeatureMainTextCard" data-aos="fade-up">
          <h4 class="serif fsM2 subColor demiBold mb30">最高品質を業界最安値で</h4>

          <p>当サロンではより多くのお客様にmodeのサービスを体験していただく為、”業界最安値”の実現を目指しました。</p>
          <p>
            巷で流行っている”通い放題”のような不明瞭でお客様の負担金額が多いサービス体系ではなく、「通うほど安くなる回数コース」や「低額な都度払い」のみのとしておりますので、初めての方でも安心してご利用できる環境を提供しています。
          </p>



        </div>
      </div>
    </div>
  </section>
  <section class="topFeatureMain reverse" id="new">
    <div class="cnt cnt-fluid-sp relative">
      <div class="cntL"></div>
      <div class="topFeatureMainImg shadowL slickJsGif">
        <img src="<?= get_template_directory_uri().'/assets';?>/img/top_feature_gif_04.jpg" alt="脱毛機器" class="topFeatureMainImgSlickGif">
        <img src="<?= get_template_directory_uri().'/assets';?>/img/top_feature_gif_05.jpg" alt="脱毛機器" class="topFeatureMainImgSlickGif">
        <img src="<?= get_template_directory_uri().'/assets';?>/img/top_feature_gif_06.jpg" alt="脱毛機器" class="topFeatureMainImgSlickGif">
      </div>
      <div class="topFeatureMainTextCard" data-aos="fade-up">
        <h4 class="serif fsM2 subColor demiBold mb30">業界の常識を変えるビューティサロン</h4>

        <p>mode
          Shoheiでは完全なる美を皆さんに提供したい、という想いから、脱毛マシン”Tino”だけでなく、特許付き最新型美容スチーマー”EIEN”、セルフホワイトニングマシン”美歯口”、痩身マシン”ウルトランスフォーマー”を導入しております。
        </p>

      </div>
    </div>
    </div>
  </section>



  <section class="topFeatureMain" id="free">
    <div class="cnt cnt-fluid-sp relative">
      <div class="cntL">
        <div class="topFeatureMainImg shadowL slickJsGif">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_feature_gif_01.jpg" alt="施術" class="topFeatureMainImgSlickGif">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_feature_gif_02.jpg" alt="施術" class="topFeatureMainImgSlickGif">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_feature_gif_03.jpg" alt="施術" class="topFeatureMainImgSlickGif">
        </div>
        <div class="topFeatureMainTextCard" data-aos="fade-up">
          <h4 class="serif fsM2 subColor demiBold mb30">最高級を無料で</h4>
          <p>mode Shoheiでは特許を取得した『最高級エステマシン』を使用した施術や、芸能人が多数利用する『ホワイトニング』、今流行りの『筋膜リリース』のメニューも取り揃えております。</p>
          <p>OPEN限定でエステ、ホワイトニング、筋膜リリースのいずれかから一つの無料体験コースをプレゼントしていますので、この機会に是非お試しください。</p>
        </div>
      </div>
    </div>
  </section>
  <section class="topFeatureMain reverse" id="design">
    <div class="cnt cnt-fluid-sp relative">
      <div class="cntL">
        <div class="topFeatureMainImg bgImg shadowL" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_feature_main_04.jpg')">
        </div>
        <div class="topFeatureMainTextCard" data-aos="fade-up">
          <h4 class="serif fsM2 subColor demiBold mb30">洗練されたデザイン</h4>
          <p>美を追求する場所は美しくあるべきである、という考えからmode Shoheiは外観、内観ともにパリの高級お菓子屋のような洗練されたデザインとなっております。</p>
        </div>
      </div>
    </div>
  </section>

  <script>
    $('.slickJsGif').slick({
      dots: false,
      infinite: true,
      speed: 1000,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      fade: true,
      cssEase: 'linear'
    });
  </script>

  <section class="topFeatureMain" id="counseling">
    <div class="cnt relative">
      <div class="cntL">
        <div class="topFeatureMainImg bgImg shadowL" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_feature_main_05.jpg')">
        </div>
        <div class="topFeatureMainTextCard" data-aos="fade-up">
          <h4 class="serif fsM2 subColor demiBold mb30">勧誘なしの<br class="sp">無料カウンセリング</h4>

          <p>mode Shoheiではスタッフが、施術前に必ずカウンセリングを行います。</p>
          <p>当たり前のことですが、無理な勧誘は一切いたしません。</p>
          <p>脱毛のメカニズムはもちろん、脱毛でおこりうるリスクに関しても、情報開示を徹底しております。</p>
          <p>専門的な知識をわかりやすく説明させていただくのはもちろん、お客様の不安、疑問、質問すべてにお答えさせていただきます。</p>

        </div>
      </div>
    </div>
  </section>
  <!--
<section class="topFeatureMain reverse" id="surgeon">
  <div class="cnt cnt-fluid-sp relative">
      <div class="enVerticalWrap absolute">
          <p class="fsL3 subColor fontEn enVertical">06.SURGEON</p>
      </div>
      <div class="cntL">
          <div class="topFeatureMainImg bgImg shadowL" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_feature_main_06.jpg')"></div>
          <div class="topFeatureMainTextCard" data-aos="fade-up">
              <h4 class="serif fsM2 demiBold mb30">専門医師が脱毛の効果を徹底保証</h4>

              <p>脱毛後の肌の仕上がりは、機器の性能はもちろん施術するスタッフの知識や技術力にも大きく左右されます。</p>
              <p>一人一人の毛質や肌質に合わせ照射レベルの調整するので高い脱毛効果と美肌まで得ることができます。</p>
              <p>ヒゲ剃りやニキビなどで荒れた肌にも効果的で肌への負担を軽減してくれるので温かく感じる程度で少ない痛みでストレスのない脱毛を行っております。</p>

          </div>
      </div>
  </div>
</section>
-->



  <section class="margin" id="price">
    <div class="text-center">
      <h3 class="serif fsM demiBold ls_m">料金表</h3>
    </div>
    <div class="margin padding bgMainColor white relative">
      <div class="top">
        <div class="enVerticalWrap absolute">
          <p class="fsL3 subColor fontEn enVertical">BEARD</p>
        </div>
      </div>
      <div class="cnt">
        <div class="text-center mb50">
          <h3 class="serif fsM demiBold ls_m">メンズ脱毛</h3>
        </div>
        <div class="topPriceUnit flex flexPc">
          <div class="col colSp1 col3">
            <img src="<?= get_template_directory_uri().'/assets';?>/img/top_price_01.png" alt="脱毛料金" class="topPrice_img">
          </div>
          <div class="col colSp1 col-3">

            <div class="topPrice_text">

              <div class="tableScroll js_table">

                <h4 class="serif fsM3 demiBold ls_m mb10">顔・ヒゲ（全6部位）</h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th>
                        部位
                      </th>
                      <th>
                        都度払い
                      </th>
                      <th>
                        5回コース
                      </th>
                      <th>
                        10回コース
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>
                        両ほほ
                      </th>
                      <td>
                        3,780円
                      </td>
                      <td>
                        15,120円
                      </td>
                      <td>
                        25,200円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        両もみあげ
                      </th>
                      <td>
                        3,780円
                      </td>
                      <td>
                        15,120円
                      </td>
                      <td>
                        25,200円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        鼻下
                      </th>
                      <td>
                        3,780円
                      </td>
                      <td>
                        15,120円
                      </td>
                      <td>
                        25,200円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        口下
                      </th>
                      <td>
                        2,835円
                      </td>
                      <td>
                        11,340円
                      </td>
                      <td>
                        22,230円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        あご
                      </th>
                      <td>
                        3,780円
                      </td>
                      <td>
                        15,120円
                      </td>
                      <td>
                        25,200円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        あご下・首
                      </th>
                      <td>
                        4,635円
                      </td>
                      <td>
                        18,900円
                      </td>
                      <td>
                        34,200円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        顔全体
                      </th>
                      <td>
                        9,800円
                      </td>
                      <td>
                        34,300円
                      </td>
                      <td>
                        54,880円
                      </td>
                    </tr>
                  </tbody>
                </table>

                <h4 class="serif fsM3 demiBold ls_m mb10">ボディ（全16部位）</h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th>
                        部位
                      </th>
                      <th>
                        都度払い
                      </th>
                      <th>
                        5回コース
                      </th>
                      <th>
                        10回コース
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>
                        両手の指
                      </th>
                      <td>
                        3,420円
                      </td>
                      <td>
                        11,813円
                      </td>
                      <td>
                        23,625円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        両手の甲
                      </th>
                      <td>
                        4,140円
                      </td>
                      <td>
                        17,100円
                      </td>
                      <td>
                        34,200円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        両ひじ上
                      </th>
                      <td>
                        11,340円
                      </td>
                      <td>
                        42,750円
                      </td>
                      <td>
                        85,500円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        両ひじ下
                      </th>
                      <td>
                        11,340円
                      </td>
                      <td>
                        42,750円
                      </td>
                      <td>
                        85,500円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        両わき
                      </th>
                      <td>
                        7,560円
                      </td>
                      <td>
                        29,250円
                      </td>
                      <td>
                        58,500円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        両肩
                      </th>
                      <td>
                        7,560円
                      </td>
                      <td>
                        29,250円
                      </td>
                      <td>
                        58,500円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        背中上
                      </th>
                      <td>
                        9,450円
                      </td>
                      <td>
                        35,438円
                      </td>
                      <td>
                        70,875円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        背中下
                      </th>
                      <td>
                        9,450円
                      </td>
                      <td>
                        35,438円
                      </td>
                      <td>
                        70,875円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        乳輪周り
                      </th>
                      <td>
                        7,560円
                      </td>
                      <td>
                        29,250円
                      </td>
                      <td>
                        58,500円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        胸元全体
                      </th>
                      <td>
                        13,230円
                      </td>
                      <td>
                        47,250円
                      </td>
                      <td>
                        94,500円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        へそ周り
                      </th>
                      <td>
                        7,560円
                      </td>
                      <td>
                        29,250円
                      </td>
                      <td>
                        58,500円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        腹部全体
                      </th>
                      <td>
                        13,230円
                      </td>
                      <td>
                        47,250円
                      </td>
                      <td>
                        94,500円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        両足の指
                      </th>
                      <td>
                        3,420円
                      </td>
                      <td>
                        11,813円
                      </td>
                      <td>
                        23,625円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        両足の甲
                      </th>
                      <td>
                        4,140円
                      </td>
                      <td>
                        17,100円
                      </td>
                      <td>
                        34,200円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        両ひざ上
                      </th>
                      <td>
                        14,220円
                      </td>
                      <td>
                        51,750円
                      </td>
                      <td>
                        103,500円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        両ひざ下
                      </th>
                      <td>
                        14,220円
                      </td>
                      <td>
                        51,750円
                      </td>
                      <td>
                        103,500円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        全身（顔なし、VIOなし）
                      </th>
                      <td>
                        36,000円
                      </td>
                      <td>
                        126,000円
                      </td>
                      <td>
                        200,000円
                      </td>
                    </tr>
                  </tbody>
                </table>

                <h4 class="serif fsM3 demiBold ls_m mb10">VIO（全4部位）</h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th>
                        部位
                      </th>
                      <th>
                        都度払い
                      </th>
                      <th>
                        5回コース
                      </th>
                      <th>
                        10回コース
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>
                        Vライン
                      </th>
                      <td>
                        13,230円
                      </td>
                      <td>
                        51,750円
                      </td>
                      <td>
                        103,500円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Iライン
                      </th>
                      <td>
                        13,230円
                      </td>
                      <td>
                        51,750円
                      </td>
                      <td>
                        103,500円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Oライン
                      </th>
                      <td>
                        13,230円
                      </td>
                      <td>
                        51,750円
                      </td>
                      <td>
                        103,500円
                      </td>
                    </tr>
                    <tr>
                      <th>
                        お尻
                      </th>
                      <td>
                        13,230円
                      </td>
                      <td>
                        51,750円
                      </td>
                      <td>
                        103,500円
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>




              <span class="sp button buttonTrans serif fsM35 shadowM demiBold js_tableButton mb30">各部位料金を見る</span>
              <div class="mb30">

              </div>
              <p class="bold text-center">当サロンではお求めしやすい回数コースを<br>ご案内しております。</p>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    $(function () {

      $('.js_tableButton').on('click', function () {
        //$('.js_table').not($($(this).attr('href'))).hide();

        // フェードイン・アウトのアニメーション付で、表示・非表示を交互に実行する
        //$($(this).attr('href')).fadeToggle(1000);

        // show を使うと、表示するだけ （ 同じボタンを何回押しても変わらない ）
        //$($(this).attr('href')).show();
        $($(this).prev()).fadeIn(1000);
        $($(this)).fadeOut(1000);
      });
    });
  </script>
  <section class="margin relative">
    <div class="cnt cnt-fluid-sp">
      <div class="cntL relative">
        <div class="topFlowIntroUnit">
          <div class="topFlowIntro_text">
            <div class="blockquote">
              <h3 class="serif fsM ls_m mainColor demiBold">ご予約から脱毛までの流れ</h3>
            </div>
          </div>
          <div class="topFlowIntro_img">
            <!--
                          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_flow_intro_01.jpg" alt="" class="img01 shadowM">
                          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_flow_intro_02.jpg" alt="" class="img02 shadowM">
                          -->
            <img src="<?= get_template_directory_uri().'/assets';?>/img/top_flow_intro_03.jpg" alt="" class="img03 shadowM">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="margin" id="flow">
    <div class="cnt">
      <div class="cntM">
        <div class="flex topFlowUnit">
          <div class="topFlowNumCard">
            <p class="topFlowNum_num fontEn subColor shadowM ls_s">01</p>
          </div>
          <div class="topFlowTextCard">
            <h4 class="fsM3 serif mb20 demiBold">ご予約</h4>
            <p>mode Shoheiのご予約は、お電話・LINEにて承っております。</p>
            <div class="topFlowText_img bgImg shadowM" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_flow_01.jpg')"></div>
          </div>
        </div>
        <div class="flex topFlowUnit">
          <div class="topFlowNumCard">
            <p class="topFlowNum_num fontEn subColor shadowM ls_s">02</p>
          </div>
          <div class="topFlowTextCard">
            <h4 class="fsM3 serif mb20 demiBold">サロンへご来店</h4>
            <p>ご来店は予約時間の5分前を目安にお越し下さい。<br>道に迷われた場合や遅刻する場合は、お気軽にお電話をいただけますと幸いです。</p>
            <div class="topFlowText_img bgImg shadowM" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_flow_02.jpg')"></div>
          </div>
        </div>
        <div class="flex topFlowUnit">
          <div class="topFlowNumCard">
            <p class="topFlowNum_num fontEn subColor shadowM ls_s">03</p>
          </div>
          <div class="topFlowTextCard">
            <h4 class="fsM3 serif mb20 demiBold">無料カウンセリング</h4>
            <p>ご来店後、スタッフによるカウンセリングを行ないます。<br>その後、脱毛方法や流れのご説明のを行い、お客様1人1人のお肌に合わせた、最適なプランを一緒にお考えいたします。</p>
            <div class="topFlowText_img bgImg shadowM" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_flow_03.jpg')"></div>
          </div>
        </div>
        <div class="flex topFlowUnit">
          <div class="topFlowNumCard">
            <p class="topFlowNum_num fontEn subColor shadowM ls_s">04</p>
          </div>
          <div class="topFlowTextCard">
            <h4 class="fsM3 serif mb20 demiBold">お肌のチェック〜脱毛施術</h4>
            <p>脱毛施術時の肌へのご負担やお痛みがご心配な方、敏感肌の方には無料のパッチテストを行なっておりますので、お気軽にご相談ください。</p>
            <div class="topFlowText_img bgImg shadowM" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_flow_04.jpg')"></div>
          </div>
        </div>
        <div class="flex topFlowUnit">
          <div class="topFlowNumCard">
            <p class="topFlowNum_num fontEn subColor shadowM ls_s">05</p>
          </div>
          <div class="topFlowTextCard">
            <h4 class="fsM3 serif mb20 demiBold">アフターカウンセリング</h4>
            <p>脱毛施術後に毛状態・肌状態を診て、ケア方法やご来店ペースをアドバイス致します。<br>その際にご要望や疑問点等がございましたら、担当のスタッフにお気軽にお伝えください。<br>mode
              Shoheiはお客様の脱毛を万全の体制でサポートいたします。</p>
            <div class="topFlowText_img bgImg shadowM" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_flow_05.jpg')"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="marginW bgMainColor padding white StripeSkewBothBg topVoice" id="voice">
    <div class="reverse top">
      <div class="enVerticalWrap absolute">
        <p class="fsL3 subColor fontEn enVertical">VOICE</p>
      </div>
    </div>
    <div class="text-center mb50">
      <h3 class="serif fsM demiBold ls_m">多くのお客様に喜ばれています</h3>
    </div>
    <ul class="topVoiceSlideUl">
      <li>
        <div class="topVoiceSlideCard">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_voice_01.jpg" alt="ビフォーアフターその1" class="mb20">
          <p class="fsM4">数回の施術でここまでヒゲが薄くなるとは正直思いませんでした。</p>
          <p class="text-right">会社員　A様(28)</p>
        </div>
      </li>
      <li>
        <div class="topVoiceSlideCard">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_voice_02.jpg" alt="ビフォーアフターその2" class="mb20">
          <p class="fsM4">数回の施術でここまでヒゲが薄くなるとは正直思いませんでした。</p>
          <p class="text-right">会社員　A様(28)</p>
        </div>
      </li>
      <li>
        <div class="topVoiceSlideCard">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_voice_03.jpg" alt="ビフォーアフターその3" class="mb20">
          <p class="fsM4">数回の施術でここまでヒゲが薄くなるとは正直思いませんでした。</p>
          <p class="text-right">会社員　A様(28)</p>
        </div>
      </li>
      <li>
        <div class="topVoiceSlideCard">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_voice_04.jpg" alt="ビフォーアフターその4" class="mb20">
          <p class="fsM4">数回の施術でここまでヒゲが薄くなるとは正直思いませんでした。</p>
          <p class="text-right">会社員　A様(28)</p>
        </div>
      </li>
    </ul>
    <ul class="topVoiceSlideThumbUl">
      <li>
        <div class="topVoiceSlideThumbCard">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_voice_01.jpg" alt="ビフォーアフターその1" class="">
        </div>
      </li>
      <li>
        <div class="topVoiceSlideThumbCard">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_voice_02.jpg" alt="ビフォーアフターその2" class="">
        </div>
      </li>
      <li>
        <div class="topVoiceSlideThumbCard">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_voice_03.jpg" alt="ビフォーアフターその3" class="">
        </div>
      </li>
      <li>
        <div class="topVoiceSlideThumbCard">
          <img src="<?= get_template_directory_uri().'/assets';?>/img/top_voice_04.jpg" alt="ビフォーアフターその4" class="">
        </div>
      </li>
    </ul>
  </section>




  <script>
    $('.topVoiceSlideUl').slick({
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: true,
      slidesToShow: 1,
      centerMode: true,
      centerPadding: '200px',
      focusOnSelect: true,
      asNavFor: '.topVoiceSlideThumbUl',
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '40px',
          focusOnSelect: true,
        }
      }]
    });
    $('.topVoiceSlideThumbUl').slick({
      infinite: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      arrows: false,
      asNavFor: '.topVoiceSlideUl', //スライダー本体のクラス名
      focusOnSelect: true,
      responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        }
      }]

    });
  </script>


  <section class="margin relative" id="faq">
    <div class="top">
      <div class="enVerticalWrap absolute">
        <p class="fsL3 subColor fontEn enVertical">Q&amp;A</p>
      </div>
    </div>
    <div class="cnt">
      <div class="text-center mb50">
        <h3 class="serif fsM demiBold ls_m">よくある質問</h3>
      </div>
      <div class="cntM">
        <dl class="topQaUnit">
          <dt class=""><span class="fsM3 bold">痛みは強いですか？</span></dt>
          <dd class="bgMainColor white">
            <span>-7℃の照射面で脱毛箇所を冷やしながら施術できるので、痛みが激減します。<br>施術中に眠られる方も多くいらっしゃいます。</span>
          </dd>
        </dl>
        <dl class="topQaUnit">
          <dt class=""><span class="fsM3 bold">ヒゲの脱毛は何回くらいかかりますか？</span></dt>
          <dd class="bgMainColor white"><span>一般的には3回通っていただくと自己処理が減ってくると言われています。</span></dd>
        </dl>
        <dl class="topQaUnit">
          <dt class=""><span class="fsM3 bold">キャンセル料はかかりますか？</span></dt>
          <dd class="bgMainColor white"><span>いいえ、ご予約のキャンセル料はかかりません。キャンセル,ご変更の際には店舗にご連絡をお願いいたします。</span>
          </dd>
        </dl>
        <dl class="topQaUnit">
          <dt class=""><span class="fsM3 bold">スタッフを選ぶことはできますか？</span></dt>
          <dd class="bgMainColor white"><span>はい。Mode
              Shoheiではスタッフを男女両方揃えておりますので、お客様のご希望に合わせてお選びいただけます。<br>※部位によっては女性スタッフが施術できない場合がございます。</span>
          </dd>
        </dl>
        <dl class="topQaUnit">
          <dt class=""><span class="fsM3 bold">カウンセリングのみの来店でも大丈夫ですか？</span></dt>
          <dd class="bgMainColor white"><span>はい、大丈夫です。その際の料金は一切頂きませんのでご安心ください。</span></dd>
        </dl>
        <dl class="topQaUnit">
          <dt class=""><span class="fsM3 bold">来店毎の都度払いは可能ですか？</span></dt>
          <dd class="bgMainColor white"><span>はい、mode Shoheiではご来店毎の都度払いが可能です。</span></dd>
        </dl>
        <dl class="topQaUnit">
          <dt class=""><span class="fsM3 bold">アクセスは良いですか？</span></dt>
          <dd class="bgMainColor white"><span>Mode
              Shoheiは新宿御苑駅から徒歩2分、新宿伊勢丹から徒歩10分、新宿駅からも徒歩圏内の大通りに面しており、迷うことなくお越しいただくことができます。</span></dd>
        </dl>
        <dl class="topQaUnit">
          <dt class=""><span class="fsM3 bold">なぜ業界最安値で施術を提供できるのですか？</span></dt>
          <dd class="bgMainColor white">
            <span>modeを運営する弊社(※Blue株式会社)はWebマーケティング事業を強みとして、業績を伸ばしてまいりました。<br>より多くのお客様にmodeのサービスを体験していただく為、弊社の強みを生かし、広告費用を最小限に抑えた運営を行っております。</span>
          </dd>
        </dl>
      </div>
    </div>
  </section>


  <section class="margin relative" id="access">
    <div class="reverse top">
      <div class="enVerticalWrap absolute">
        <p class="fsL3 subColor fontEn enVertical">STORE</p>
      </div>
    </div>
    <div class="topStoreBg">
      <div class="topStoreBg_inner bgBlackTrans">
        <div class="white">
          <h3 class="serif fsM demiBold ls_m">店舗案内</h3>
        </div>
      </div>
    </div>
    <div class="topStoreInfoUnit flex flexPc flexReverse">
      <div class="topStoreInfoTextCard col2 colSp1">
        <ul>
          <li><span>所在地</span></li>
          <li><span>東京都新宿区新宿1-10-2</span></li>
        </ul>
        <ul>
          <li><span>営業時間</span></li>
          <li><span>10時〜22時</span></li>
        </ul>
        <ul>
          <li><span>電話番号</span></li>
          <li><span>03-6457-4401</span></li>
        </ul>
        <ul>
          <li><span>アクセス</span></li>
          <li><span>東京メトロ丸の内線 新宿御苑前駅 2番出口徒歩3分<br>都営バス 新宿一丁目下車 徒歩1分</span></li>
        </ul>

      </div>
      <div class="topStoreInfoImgCard col2 colSp1">
        <div class="topStoreInfoImg_img bgImg shadowM" style="background-image:url('<?= get_template_directory_uri();?>/assets/img/top_access_01.jpg')"></div>
      </div>
    </div>
  </section>

  <section class="margin">
    <a href="https://lin.ee/L7hN5F0" target="_blank">
      <div class="topCampFirstImgWrap" data-aos="fade-up">
        <img src="<?= get_template_directory_uri().'/assets';?>/img/top_camp_first_pc.jpg" alt="2大特典が先着100名様限定" class="pc">
        <img src="<?= get_template_directory_uri().'/assets';?>/img/top_camp_first_sp.jpg" alt="2大特典が先着100名様限定" class="sp">
      </div>
    </a>
  </section>

  <section class="topContact relative" id="reserve">
    <div class="topContact_inner">
      <div class="bgWhite topContactCnt">
        <div class="text-center mb30">
          <h3 class="serif fsM demiBold ls_m mb30">無料カウンセリング<br>ご予約はこちらから</h3>
          <p>少しでも気になることがございましたら、お気軽にご予約・ご相談ください。<br>LINE、またはお電話でお問い合わせください。</p>

        </div>
        <div class="mb30">
          <a class="lh_s fontEnSub subColor fsL4 text-center block telA" href="tel:03-6457-4401"><i
              class="fas fa-phone-alt fsM2 verticalMiddle"></i><span
              class="verticalMiddle lh_s">03-6457-4401</span></a>
          <p class="subColor bold text-center">(10:00-22:00)</p>
        </div>
        <div class="text-center" data-aos="fade-up">
          <a href="https://lin.ee/L7hN5F0" target="_blank" class="button serif fsM35 shadowM demiBold">LINE予約</a>
        </div>
      </div>
    </div>
  </section>

</main>

<footer class="">
  <div class="cnt">
    <ul class="footerSnsUl flex mb30 justCenter">
      <li>
        <a href="https://instagram.com/mode_shohei?utm_medium=copy_link" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li>
        <a href="https://lin.ee/L7hN5F0" target="_blank">
          <i class="fab fa-line"></i>
        </a>
      </li>
    </ul>
    <ul class="footerLinkUl flex justCenter mb30 fsS">
      <li>
        <a href="">会社概要</a>
      </li>
      <li>
        <a href="">プライバシーポリシー</a>
      </li>
    </ul>
    <div class="footerLogoWrap">
      <img class="logo" src="<?= get_template_directory_uri().'/assets';?>/img/logo.png" alt="mode shohei">
    </div>
    <div class="wrapper_copy">
      <div class="cnt">
        <p class="text-center fontEn fsS grayColorLight mb0">copyright© 2021 mode shohei all rights
          reserved.</p>
      </div>
    </div>
  </div>
</footer>
<?php
get_footer();