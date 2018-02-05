<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>
<link href="css/lightbox.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<link href="<?php bloginfo('template_directory'); ?>/carousel.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Buenard:400,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Acme|Cairo:300,400|Catamaran:300,400,500,600|Inconsolata:400,700|Josefin+Sans:100i,300,400|Nosifer|Pacifico|Raleway:100,300,400|Ribeye+Marrow|Ubuntu:300,400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
    /*
     *  Add this to support sites with sites with threaded comments enabled.
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    wp_get_archives('type=monthly&format=link');

    wp_head();
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="mainLogo" src="<?php echo get_template_directory_uri(); ?>/images/logo-e.png" alt="main site logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="toggler-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/line-menu.png" alt=""></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#section-one">About Us<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section-two">Our Mission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section-three">Image Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#section-four">Learn More</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>

<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>
</body>



  </body>
