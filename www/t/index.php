<?php
/* INDEX */
?>
<!DOCTYPE html>
<?php // Pamiętaj zmienić schema! ?>
<html lang="pl" xmlns:og="http://opengraphprotocol.org/schema/" itemscope itemtype="http://schema.org/Article">
<head>
  <title>... Nature Crafts</title>

  <meta charset="UTF-8">
  <meta name="author" content="http://naturecrafts.eu" />
  <meta name="viewport" content="initial-scale=1.0, user-scalable=0, maximum-scale=1" />

  <?php //Facebook App ID ?>
  <meta property="fb:app_id" content="110154605804697" />
  <meta property="article:publisher" content="https://www.facebook.com/NocnaSowaPL" />
  <meta property="og:site_name" content="Twój wieczorny kurs języka norweskiego | Nocna Sowa" />

  <?php // Facebook DO uzupełnienia! ?>
  <meta property="og:image" itemprop="image" content="" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="" />

  <meta name="description" itemprop="description" content="" />

  <link rel="stylesheet" type="text/css" href="<?php autoVer('/c/s.css'); ?>" />

  <link rel="icon" href="/favicon.ico" sizes="16x16" type="image/ico" />
  <link rel="icon" href="/favicon.png" sizes="16x16" type="image/png" />

  <link href="http://naturecrafts.eu/" rel="canonical" />

  <script src="//use.edgefonts.net/abril-fatface:n4,i4:all.js"></script>


  <?php // Space for Analytics ?>
  <script>
  //(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  //(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  //m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  //})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  //ga('create', 'UA-7904644-11', 'nocnasowa.pl');
  //ga('send', 'pageview');

  //<?php // Custom function ?>
  //function recordOutgoing(link) {
  //  try { ga('send', 'event', 'Outgoing', link.href, 'Post'); }
  //  catch(err) {};
  //}
  </script>
</head>

<body>

<?php // some header here.... ?>

<main role="main" class="group">

  <div class="section-black natt" style="background-image:url('http://www.drewutniaemila.pl/wp-content/themes/drewutnia/assets/hero.jpg')">

    <header class="section-content section-8-6 centered">
      <h1 itemprop="name" class="size-6 space-x2">
        <span style="position: relative; top: 199px;font-size:8rem">Nature Crafts</span>
      </h1>
    </header>

  </div>

  <div class="section-content">
    <div class="row">
      <div class="p-10 p-center">

        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor. Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

      </div>
    </div>

    <h2 class="centered">Våre produkter</h2>

    <div class="row space">

      <?php
      $product_proxy = '
        <div class="col-5">
          <div class="pad green space-half" style="height:200px"></div>
          <p class="centered">
            Navnet<br />
            <i class="size-0">199 kr</i>
          </p>
        </div>
      ';

      $product_proxy_space = '
        <div class="col-5 l-1-32">
          <div class="pad green space-half" style="height:200px"></div>
          <p class="centered">
            Navnet<br />
            <i class="size-0">199 kr</i>
          </p>
        </div>
      ';
      ?>

      <?php

      echo $product_proxy;
      echo $product_proxy_space;
      echo $product_proxy_space;

      ?>
    </div>

    <div class="row">

      <?php

      echo $product_proxy;
      echo $product_proxy_space;
      echo $product_proxy_space;

      ?>

    </div>
  </div>

  <div class="section-content">

    <h3>Våre våndverkere</h3>

  </div>

  <div class="section-olive">
    <div class="section-content">
      <h2 class="centered">Hvordan lages håndverket?</h2>

      <div class="row">
        <div class="col-8">
          <img src="" alt="" style="width:100%;padding-bottom:50%;background:#fff" />
        </div>
        <div class="col-8">

          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor. Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

        </div>
      </div>
    </div>

</main>

<?php // some footer? ?>

<footer class="section-footer section-black">
  <div class="section-content centered">
    <p>&#169; NatureCrafts.eu<br /><i>Pisane w Oslo z pasji do języka norweskiego.</i></p>
  </div>
</footer>
<script src="/c/j-ck.js"></script>

</body>
</html>