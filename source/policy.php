<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="Description" content="default">
  <title>Privacy Policy</title>
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
          <li><a href="#" class="header__link">Privacy Policy</a></li>
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

  <div class="policy">
    <div class="wrapper__policy">
      <h2 class="policy__h2">Privacy Policy</h2>
      <p class="policy__p">“Dot VPN” (“we,” “our,” or “us”) is committed to protecting your privacy. This Privacy Policy explains how your
        personal information is collected, used, and disclosed by “Dot VPN”.<br><br>

        This Privacy Policy applies to our website, and its associated subdomains (collectively, our “Service”)
        alongside our application, “Dot VPN”. By accessing or using our Service, you signify that you have read,
        understood, and agree to our collection, storage, use, and disclosure of your personal information as described
        in this Privacy Policy and our Terms of Service.</p>
      <h3 class="policy__h3">Meanings</h3>
      <p class="policy__p">For this Privacy Policy:<br><br>

        You is referred to the person who accessed the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.<br>
        Company (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to INFORMATION SYSTEMS DIRECT LTD<br>
        Website is referred to “Dot VPN”.<br>
        Service is referred to the app.<br>
        Service Provider means any natural or legal person who processes the data on behalf of “Dot VPN”. It refers to third-party companies or individuals employed by “Dot VPN” to facilitate the Service, to provide the Service on behalf of “Dot VPN”, to perform services related to the Service or to assist “Dot VPN” in analysing how the Service is used.<br>
        Third-party Social Media Service could be any website or social network website in which a User can log in or create an account to use the Service.<br>
        Personal Data is any information that relates to an identified or identifiable individual.<br>
        Cookies are a small amount of data generated by a website and saved by your web browser. Its purpose is to remember information about you, similar to a preference file created by a software application.
        Device could be any device with internet who can access the service such as a mobile phone, a computer or a digital tablet.<br>
        Usage Data it’s referred to the data that’s been collected automatically, either generated by the use of the Service or from the Service infrastructure itself. For example, how many times the user accessed the app.</p>

      <h3 class="policy__h3">Personnel</h3>
      <p class="policy__p">If you are a “Dot VPN” worker or applicant, we collect information you voluntarily provide to us. We use the information collected for Human Resources purposes in order to administer benefits to workers and screen applicants. You may contact us in order to (1) update or correct your information, (2) change your preferences with respect to communications and other information you receive from us, or (3) receive a record of the information we have relating to you. Such updates, corrections, changes and deletions will have no effect on other information that we maintain, or information that we have provided to third parties in accordance with this Privacy Policy prior to such update, correction, change or deletion.</p>
      <h3 class="policy__h3">Sale of Business</h3>
      <p class="policy__p pb">We reserve the right to transfer information to a third party in the event of a sale, merger or other transfer of all or substantially all of the assets of “Dot VPN“ or any of its Corporate Affiliates (as defined herein), or that portion of “Dot VPN“ or any of its Corporate Affiliates to which the Service relates, or in the event that we discontinue our business or file a petition or have filed against us a petition in bankruptcy, reorganization or similar proceeding, provided that the third party agrees to adhere to the terms of this Privacy Policy.</p>
    </div>
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
</body>

</html>
