<!doctype html>
<html lang="en" class="no-js">
<head>
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <?php include_title() ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Melissa Peh">
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
  <?php include_stylesheets() ?>
  <?php include_javascripts() ?>
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="stylesheet" media="handheld" href="/css/handheld.css">
</head>

<body>
  <div id="container">
    <header>

    </header>

    <div id="main">
      <?php echo $sf_content ?>
    </div>

    <footer>

    </footer>
  </div> <!-- end of #container -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="js/jquery-1.4.2.min.js"><\/script>')</script>
  <script src="js/plugins.js?v=1"></script>
  <script src="js/script.js?v=1"></script>

  <!--[if lt IE 7 ]>
    <script src="js/dd_belatedpng.js?v=1"></script>
  <![endif]-->

  <script src="js/profiling/yahoo-profiling.min.js?v=1"></script>
  <script src="js/profiling/config.js?v=1"></script>

  <script>
   var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
    g.async = true; g.src = '//www.google-analytics.com/ga.js'; s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>

</body>
</html>