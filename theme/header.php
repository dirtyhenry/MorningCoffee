<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php bloginfo('language'); ?>"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('name'); ?>">
  <meta name="viewport" content="width=device-width">
  
  <!-- Twitter bootstrap -->
  <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory'); ?>/css/docs.css" rel="stylesheet">
  <link href="<?php bloginfo('template_directory'); ?>/js/google-code-prettify/prettify.css" rel="stylesheet">
  <!-- End Twitter bootstrap -->
  
  <link href="//get.pictos.cc/fonts/1342/1" rel="stylesheet" type="text/css">
  
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.5.3.min.js"></script>
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">

  <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="http://www.deadrooster.org">Dead Rooster</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="http://www.deadrooster.org">Dead Rooster</a>
              </li>
              <li class="active">
                <a href="/">Morning Coffee</a>
              </li>
            </ul>
          </div>
          <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>" class="navbar-search pull-left">
            <input type="text" name="s" id="s" class="search-query" placeholder="Search">
          </form>
        </div>
      </div>
    </div>

        <div class="container">

    <!-- Masthead
    ================================================== -->
    <header class="jumbotron masthead" id="overview">
        <h1><span class="pictoscc">%</span> Morning Coffee</h1>
        <p>
        <div class="pagination-centered">
          <ul class="categorynav">
            <li class="pictoscc music"><a href="#">V</a></li>
            <li class="pictoscc sport"><a href="#">B</a></li>
            <li class="pictoscc movie"><a href="#">M</a></li>
            <li class="pictoscc geek"><a href="#">I</a></li>
            <li class="pictoscc funny"><a href="#">F</a></li>
            <li class="pictoscc rss"><a href="#">R</a></li>
          </ul>
        </div>
    </header>
