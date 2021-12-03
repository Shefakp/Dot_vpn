<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="Description" content="default">
  <title>Dot VPN</title>
  <script src="js/picturefill.min.js" async="async"></script>
  <link rel="preload" href="fonts/NovaFlat-Regular.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="fonts/Jost-VariableFont_wght.woff2" as="font" crossorigin="anonymous">

  <link rel="apple-touch-icon" sizes="76x76" href="img/catalog/fav.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/catalog/fav.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/catalog/fav.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="css/style.min.css">
</head>

<body>

  <div class="loader">
    <div class="wrapper">
      <div class="loader__content">
        <div class="loader__pic">
          <picture>
          <source type='image/webp' srcset='img/catalog/pic1.webp'>
          <img class='' width='569' height='695' src='img/catalog/pic1.png' alt=''>
          </picture>
        </div>
        <div class="loader__title">
          <h2 class="loader__title-h2">Dot VPN
            Official Website</h2>
        </div>
      </div>
    </div>
  </div>

  <header class="header">
    <div class="header__wrapper">
      <div class="header__logo">
        <a href="index.php">
          <picture>
            <source type='image/webp' srcset='img/catalog/logo.webp'>
            <img class='' width='80' height='40' src='img/catalog/logo.png' alt=''>
          </picture>
        </a>
      </div>
      <div class="header__menu">
        <ul class="header__list">
          <li><a href="#" class="header__link">About</a></li>
          <li><a href="#" class="header__link">Screenshots</a></li>
          <li><a href="policy.php" class="header__link">Privacy Policy</a></li>
          <li><a href="#" class="header__link">Terms of use</a></li>
          <li><a href="#" class="header__link">Support</a></li>
          <li><a href="#" class="header__link dwnl">Download</a></li>
        </ul>
      </div>
      <div class="header__btn">
        <button class="header__button">Download</button>
        <div class="header__burger">
          <span></span>
        </div>
      </div>
    </div>
  </header>

  <div class="block__ip">
    <div class="ip__pic">
      <picture>
        <source type='svg/webp' srcset='img/sprite/ip.webp'>
        <img class='' width='15' height='15' src='img/sprite/ip.svg' alt=''>
      </picture>
    </div>
    <p class="block__ip-p">Your IP: <span class="block__ip-ip">
        <?php
        function getIp() {
          $keys = [
            'HTTP_CLIENT_IP',
            'HTTP_X_FORWARDED_FOR',
            'REMOTE_ADDR'
          ];
          foreach ($keys as $key) {
            if (!empty($_SERVER[$key])) {
              $ip = trim(end(explode(',', $_SERVER[$key])));
              if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
              }
            }
          }
        }

        $ip = getIp();
        // выведем IP клиента на экран
        echo $ip;
      ?>
      </span> · Your status: <span class="block__ip-red">unprotected</span></p>
  </div>

  <div class="sec1">
    <div class="wrapper">
      <div class="block1">
        <div class="block1__pic">
          <picture>
            <source type='image/webp' srcset='img//catalog/pic1.webp'>
            <img class='' width='496' height='606' src='img/catalog/pic1.png' alt=''>
          </picture>
        </div>
        <div class="block1__content">
          <p class="block1__green-text">Surf anonymously with Dot VPN</p>
          <h1 class="block1__heading">Faster, Easier, More Efficient</h1>
          <p class="sec__text">Enjoy unlimited access around the world<br>
            Unlimited access to videos, music, social media, and more from anywhere in the world</p>
          <div class="block1__items">
            <div class="block1__item">
              <picture>
                <source type='svg/webp' srcset='img/app_store.webp'>
                <img class='app__pic' width='26' height='26' src='img/sprite/app_store.svg' alt=''>
              </picture>
              <p class="block1__item-text">AppStore</p>
            </div>
            <div class="block1__item">
              <picture>
                <source type='svg/webp' srcset='img/play_market.webp'>
                <img class='play__pic' width='26' height='26' src='img/sprite/play_market.svg' alt=''>
              </picture>
              <p class="block1__item-text">AppStore</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="sec2">
    <div class="wrapper">
      <div class="block2">
        <div class="block2__heading">
          <h2 class="block2__h2">What services you can use<br> with <span class="block2__green-text">DOT VPN</span></h2>
        </div>
        <div class="block2__items">
          <div class="block2__item">
            <picture>
              <source type='image/webp' srcset='img/catalog/sec2-pic1.webp'>
              <img class='sec2__pic' width='247' height='229' src='img/catalog/sec2-pic1.png' alt=''>
            </picture>
            <h3 class="block2__h3">Unlock streaming media</h3>
            <p class="sec2__text">Bypass geo-restrictions, you can watch NETFLIX, HULU, HBO, AbemaTV, Disney and other
              national streaming platforms with no problem from anywhere</p>
          </div>
          <div class="block2__item">
            <picture>
              <source type='image/webp' srcset='img/catalog/sec2-pic2.webp'>
              <img class='sec2__pic' width='247' height='229' src='img/catalog/sec2-pic2.png' alt=''>
            </picture>
            <h3 class="block2__h3">Hide your online activity anonymously</h3>
            <p class="sec2__text">Dot VPN gives you an invisibility cloak on the Internet. All your online activity is
              100% anonymous and untraceable with encrypted connections </p>
          </div>
          <div class="block2__item">
            <picture>
              <source type='image/webp' srcset='img/catalog/sec2-pic3.webp'>
              <img class='sec2__pic' width='247' height='229' src='img/catalog/sec2-pic3.png' alt=''>
            </picture>
            <h3 class="block2__h3">Encrypt all your data to protect your network connection</h3>
            <p class="sec2__text">Using public Wi-Fi, hackers can steal your password and data, threatening your account
              and property security. Dot VPN will encrypt all your data and keep it completely safe </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="sec3">
    <div class="wrapper">
      <div class="block3">
        <div class="block3__text">
          <ul class="block3__list">
            <li class="block3__heading">
              <h3 class="block3__h3">Ultrafast servers</h3>
              <p class="block3__p">All servers feature proprietary acceleration technology, and we also provide you with
                ultra-fast IPLC servers. No traffic limitation,
                no buffering, no problems</p>
            </li>
            <li class="block3__heading">
              <h3 class="block3__h3">No log policy</h3>
              <p class="block3__p">Dot VPN strictly implements a no-logging policy to ensure complete anonymity of all
                data between applications and platforms and protect your privacy online</p>
            </li>
            <li class="block3__heading">
              <h3 class="block3__h3">Secure encryption technology</h3>
              <p class="block3__p">All of your Internet access can be protected. With our highest level of secure ECC
                encryption technology,
                no one can track your data</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="sec4">
    <div class="wrapper">
      <div class="block4">
        <div class="block4__pic">
          <picture>
            <source type='image/webp' srcset='img/catalog/sec4-pic.webp'>
            <img class='' width='479' height='606' src='img/catalog/sec4-pic.png' alt=''>
          </picture>
        </div>
        <div class="block4__content">
          <h2 class="block4__h2">Enjoy fast<br>
            & stable<br> connection<br> anywhere</h2>
          <p class="block4__p">You can always find a server with high bandwidth</p>
          <div class="block4__flags">
            <picture>
              <source type='image/webp' srcset='img/catalog/flags.webp'>
              <img class='' width='290' height='119' src='img/catalog/flags.png' alt=''>
            </picture>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="sec5">
    <div class="wrapper">
      <div class="block5">
        <h2 class="block5__h2">Remove geographical<br> restrictions with<br>
          <span class="block5__green-text">DOT VPN</span></h2>
        <button class="block5__btn">Try it for free</button>
      </div>
    </div>
  </div>

  <div class="sec6">
    <div class="wrapper">
      <div class="block6">
        <div class="block6__pic">
          <picture>
            <source type='image/webp' srcset='img/catalog/sec6-pic.webp'>
            <img class='sec6-pic' width='501' height='606' src='img/catalog/sec6-pic.png' alt=''>
          </picture>
        </div>
        <div class="block6__reviews">
          <div class="block6__heading">
            <h2 class="block6__h2">People say</h2>
          </div>
          <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="square__green"></div>
                <div class="user__info">
                  <div class="user__info-h2">
                    <h2 class="user__name">Doggy</h2>
                  </div>
                  <div class="user__info-stars">
                    <picture>
                      <source type='svg/webp' srcset='img/catalog/stars4.webp'>
                      <img class='' width='85' height='13' src='img/sprite/stars4.svg' alt=''>
                    </picture>
                  </div>
                </div>
                <div class="user__text">
                  <p class="user__text-p">
                    Hello, I want to thank you for such an application. All works well, without ads and other things. Or
                    maybe there are ads, but I have not popped out. So that's a THANK YOU! And if you're not a bot, then
                    in response write the words "Come back, brother! It will be very nice. In general, thank you
                  </p>
                </div>
                <div class="swiper-button-next">
                  <span class="sw__btn-text">Next</span>
                  <picture>
                    <source type='svg/webp' srcset='img/.webp'>
                    <img class='' width='54' height='18' src='img/sprite/arrow-next.svg' alt=''>
                  </picture>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="square__yellow"></div>
                <div class="user__info">
                  <div class="user__info-h2">
                    <h2 class="user__name">Crow from the fog</h2>
                  </div>
                  <div class="user__info-stars">
                    <picture>
                      <source type='svg/webp' srcset='img/catalog/stars4.webp'>
                      <img class='' width='85' height='13' src='img/sprite/stars4.svg' alt=''>
                    </picture>
                  </div>
                </div>
                <div class="user__text">
                  <p class="user__text-p">
                    Just a vital app for me,and the only one that really works,just super!!! 10*
                  </p>
                </div>
                <div class="swiper-button-next">
                  <span class="sw__btn-text">Next</span>
                  <picture>
                    <source type='svg/webp' srcset='img/.webp'>
                    <img class='' width='54' height='18' src='img/sprite/arrow-next.svg' alt=''>
                  </picture>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="square__pink"></div>
                <div class="user__info">
                  <div class="user__info-h2">
                    <h2 class="user__name">Alien booster</h2>
                  </div>
                  <div class="user__info-stars">
                    <picture>
                      <source type='svg/webp' srcset='img/catalog/stars4.webp'>
                      <img class='' width='85' height='13' src='img/sprite/stars3.svg' alt=''>
                    </picture>
                  </div>
                </div>
                <div class="user__text">
                  <p class="user__text-p">
                    The positive and negative information is that it works without any problems, even with proxyserver
                    at work I went to the Internet for this 5 stars one hundred poodovo. The negative side is that after
                    connecting to VPN it becomes disconnected in about 30 seconds and then you will have to connect
                    again. Maybe I have not seen something or c MEIZU_M5 is not very friendly Therefore, for now 3 stars
                  </p>
                </div>
                <div class="swiper-button-next">
                  <span class="sw__btn-text">Next</span>
                  <picture>
                    <source type='svg/webp' srcset='img/.webp'>
                    <img class='' width='54' height='18' src='img/sprite/arrow-next.svg' alt=''>
                  </picture>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="square__red"></div>
                <div class="user__info">
                  <div class="user__info-h2">
                    <h2 class="user__name">Foxy Love</h2>
                  </div>
                  <div class="user__info-stars">
                    <picture>
                      <source type='svg/webp' srcset='img/catalog/stars4.webp'>
                      <img class='' width='85' height='13' src='img/sprite/stars5.svg' alt=''>
                    </picture>
                  </div>
                </div>
                <div class="user__text">
                  <p class="user__text-p">
                    Works great, looks nice! Thank you so much for your product.
                  </p>
                </div>
                <div class="swiper-button-next">
                  <span class="sw__btn-text">Next</span>
                  <picture>
                    <source type='svg/webp' srcset='img/.webp'>
                    <img class='' width='54' height='18' src='img/sprite/arrow-next.svg' alt=''>
                  </picture>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="square__blue"></div>
                <div class="user__info">
                  <div class="user__info-h2">
                    <h2 class="user__name">Santiago</h2>
                  </div>
                  <div class="user__info-stars">
                    <picture>
                      <source type='svg/webp' srcset='img/catalog/stars5.webp'>
                      <img class='' width='85' height='13' src='img/sprite/stars5.svg' alt=''>
                    </picture>
                  </div>
                </div>
                <div class="user__text">
                  <p class="user__text-p">
                    No ads, runs quickly, free servers with normal speed, the settings can be set to immediately connect
                    to a particular server automatically, ie additional clicks do not need anything, just run the
                    application and it immediately begins connecting to the server.
                  </p>
                </div>
                <div class="swiper-button-next">
                  <span class="sw__btn-text">Next</span>
                  <picture>
                    <source type='svg/webp' srcset='img/.webp'>
                    <img class='' width='54' height='18' src='img/sprite/arrow-next.svg' alt=''>
                  </picture>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="sec7">
    <div class="wrapper">
      <div class="block7">
        <div class="block7__heading">
          <h2 class="block7__h2">With premium you get more </h2>
        </div>
        <div class="block7__row">
          <ul class="block7__list">
            <li class="block7__line dot__red">Unlimited Traffic & Speed</li>
            <li class="block7__line dot__yellow">Military-grade 256-bit encryption</li>
            <li class="block7__line dot__blue">Full access to all servers</li>
            <li class="block7__line dot__pink">No ads in App</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="sec8">
    <div class="wrapper">
      <div class="block8">
        <div class="block8__mo">
          <div class="block8__mo-text">
            <h3 class="block8__h3">Montly</h3>
            <p class="block8__p">$7.99 per month with <span class="block8__green-t">3 days trial</span> . . . . . . . .
              . . . . . . . . . . .</p>
          </div>
          <button class="block8__btn">Subscribe</button>
        </div>
        <div class="block8__week">
          <div class="block8__week-text">
            <h3 class="block8__h3">Weekly</h3>
            <p class="block8__p">$3.99 per month / <span class="block8__green-t">20% off</span> . . . . . . . . . . . .
              . . . . . . . . . . .</p>
          </div>
          <button class="block8__btn">Subscribe</button>
        </div>

        <div class="block8__disc">
          <h2 class="block8__disc-h2">
            <span class="block8__disc-gt">The 20% OFF</span> discount will last
          </h2>
        </div>

        <div class="putMessage">
          <div id="CDT">
            <div id="countdown"></div>
          </div>
          <div style="margin-bottom: 11px;">
            <div class="data"><span class="clock1">Days</span><span class="clock2">Hours</span><span
                class="clock3">Minutes</span><span class="clock4">Seconds</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="sec9" name="qs">
    <div class="wrapper">
      <div class="block9">
        <div class="block9__pic">
          <picture>
            <source type='image/webp' srcset='img/catalog/bird.webp'>
            <img class='sec9__pic' width='469' height='606' src='img/catalog/bird.png' alt=''>
          </picture>
        </div>
        <div class="block9__info">
          <div class="block9__heading">
            <h2 class="block9__h2">Support</h2>
          </div>
          <form action="mail.php" id="form" class="form" method="POST">
            <input type="text" class="form__mail _req" name="email" placeholder="Your mail" required>
            <textarea name="message" class="form__msg" id="message" placeholder="Your question" required></textarea>
            <input type="submit" class="form__btn" value="Send">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="btn__up">
    <picture>
      <source type='svg/webp' srcset='img/sprite/arrow-up.webp'>
      <img class='' width='22' height='36' src='img/sprite/arrow-up.svg' alt=''>
    </picture>
  </div>

  <footer class="footer">
    <div class="footer__wrapper">
      <div class="footer__logo">
        <a href="index.php">
          <picture>
            <source type='image/webp' srcset='img/catalog/logo.webp'>
            <img class='' width='80' height='40' src='img/catalog/logo.png' alt=''>
          </picture>
        </a>
      </div>
      <div class="footer__menu">
        <ul class="footer__list">
          <li><a href="#" class="footer__link">About</a></li>
          <li><a href="#" class="footer__link">Screenshots</a></li>
          <li><a href="#" class="footer__link">Privacy Policy</a></li>
          <li><a href="#" class="footer__link">Terms of use</a></li>
          <li><a href="#" class="footer__link">Support</a></li>
        </ul>
      </div>
      <div class="footer__btn">
        <button class="footer__button">Download</button>
      </div>
    </div>
  </footer>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script src="js/jquery-3.5.1.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/jquery.cookie.js"></script>

  <script src="js/common.min.js"></script>
</body>

</html>
