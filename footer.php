<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
    <?php wp_footer(); ?>
<?php if(!is_page('lp')) :?>
    <section class="booking" id="about">
          <div class="section-container" data-aos="fade-up" data-aos-easing="ease-in-out">
            <div class="content">
              <div class="left">
                <div class="booking-title">BOOKING</div>
                <div class="booking-title-sub">ご予約</div>
              </div>
              <div class="right">
                <div class="booking-inf">
                  <div class="text-1">
                    ご予約はお電話・LINEにて受け付けております。<br />
                    ご不明な点やお問い合わせに関しましては、お気軽にご連絡くださいませ。
                  </div>
                  <div class="text-2">
                    営業時間は9:00～19:00となっております。<br />
                    毎週火曜日、毎月第1・第3日曜日、祝日は定休日となっておりますので、ご了承くださいませ。
                  </div>
                </div>
                <div class="booking-detaile">
                  <div class="tel"><span class="phone-icon"><i class="fas fa-phone-alt"></i></span>0120-946-000</div>
                  <a class="line-r" href="">LINE 予約はこちら<img class="arrow" src="./img/arrow.png"></a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    <footer>
      <div class="copy">
        Operating company｜BLUE株式会社<br class="sp">　Copyright © 2021 Blue
      </div>
    </footer>
    <a href="#top" id="btn-backtotop"><span class="arrow arrow_up"><img src="./img/page-top.png" alt=""></span></a>
  </div>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/script.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 400,
      delay: 100,
      duration: 750,
      easing: 'ease-in',
      once: true,
    });
  </script>
<?php endif;?>
  </body>
</html>
