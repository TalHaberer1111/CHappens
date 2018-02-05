<?php
/*
Template Name: Home Rack
*/
?>


<?php get_header(); ?>



<div class="hero-container">

<div class="container">

    <div class="row">
      <div class="col-sm hero-column">
        <h1 class="main-header">Unbounded<br> Souls</h1>
        <a class="hero-button" href="#">JOIN OUR MISSION</a>
        <!-- <img class="hero-logo" src="images/goldenowl.png"> -->
      </div>
      <div class="col-sm hero-column">
        <div class="white-message-box">
          <p class="hero-para">"An individual has not started living until he can rise above the narrow confines of his indvidualistic concerns to the broader concerns of all humanity." <br>
          <span class="lutherKing">-Martin Luther King</span></<p>
        </div>
      </div>

    </div>

  </div>

  <div class="video-container">
      <!-- <div class="filter"></div>
      <video autoplay loop>
          <source src="<?php echo get_template_directory_uri(); ?>/video/Diagonal.mp4" type="video/mp4" />
          <source src="PATH_TO_WEBM" type="video/webm" />
      </video>
      <div class="poster hidden">
          <img src="PATH_TO_JPEG" alt="">
      </div> -->
  </div>

  <!-- <img class="unbounded-image-hero" src="<?php echo get_template_directory_uri(); ?>/images/unbounded8.png" alt=""> -->

  <div class="frame">
    <div class="card"><img class="unbounded-image-hero background-img" src="<?php echo get_template_directory_uri(); ?>/images/unbounded8.png" alt=""></div>
  </div>

</div>

<article class="comic">
  <div class="panel">
    <p class="text top-left">Suddenly...</p>
    <p class="text bottom-right">...something amazing happened</p>
  </div>
  <div class="panel">
    <p class="text top-left">Try resizing...</p>
    <p class="text bottom-right">...it's responsive</p>
  </div>
  <div class="panel">
    <p class="speech">A speech bubble</p>
  </div>
  <div class="panel"></div>
  <div class="panel"></div>
  <div class="panel"></div>
  <div class="panel"></div>
  <div class="panel"></div>
  <div class="panel">
    <p class="text bottom-right">THE END</p>
  </div>
</article>


<!-- <div class="video-addition-background">
  <div class="homepage-hero-module">

  </div>
</div> -->
<div id="weather-temp"></div>
<div id="trigger1" class="section-info-boxes">
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div id="box1"  class="info-box">
          <p>An individual has not started living until he can rise above the narrow confines of his indvidualistic</p>
        </div>
      </div>
      <div class="col-sm">
        <div id="box2"  class="info-box">
          <p>An individual has not started living until he can rise above the narrow confines of his indvidualistic</p>
        </div>
      </div>
      <div class="col-sm">
        <div  id="box3" class="info-box">
          <p>An individual has not started living until he can rise above the narrow confines of his indvidualistic</p>
        </div>
      </div>

    </div>

  </div>


  <script>

      // init controller
    var controller = new ScrollMagic.Controller();

    // create a scene
    // build scene
            var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: "100%"})
            // trigger animation by adding a css class
            .setClassToggle("#box1", "fadeInUpBig",)
            .addTo(controller);

    // create a scene
    // build scene
            var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: "100%"})
            // trigger animation by adding a css class
            .setClassToggle("#box2", "fadeInUpBig2",)
            .addTo(controller);

    // create a scene
    // build scene
            var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: "100%"})
            // trigger animation by adding a css class
            .setClassToggle("#box3", "fadeInUpBig3",)
            .addTo(controller);

  </script>

</div>

  <div id="section-one" class="section-one">

    <?php if( have_rows('section_one') ): ?>

    	<div class="section-one-container container">
        <div class="row text-center">
              <div class="col">

    	<?php while( have_rows('section_one') ): the_row();

      $image = get_sub_field('section_one_image');
      $info = get_sub_field('section_one_info');
      $name = get_sub_field('header_name');
      $gallery = get_sub_field('gallery');

    		?>

    	   <h1 class="main-header text-center"><?php echo $name; ?></h1>
    		 <img class="image-center-one" src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" />
         <div class="section-one-info info-section">

          <?php echo $info; ?>

         </div>


    	<?php endwhile; ?>

      </div>
    </div>
  </div>

    <?php endif; ?>

  </div>

  <div id="section-two" class="section-two">

    <?php if( have_rows('section_two') ): ?>

      <div class="section-two-container container">
        <div class="row">
          <div class="col">


          <?php while( have_rows('section_two') ): the_row();

          $image2 = get_sub_field('section_two_image');
          $info = get_sub_field('section_two_info');
          $name = get_sub_field('section_two_header');
          $link = get_sub_field('section_two_link');
          $extra = get_sub_field('section_two_extra_content');

          ?>

         <h1 class="main-header text-center"></h1>
         <a href="<?php echo $link; ?>"><img class="image-center" src="<?php echo $image2; ?>" alt="<?php echo $image2['alt'] ?>" /></a>
         <div class="section-two-info info-section">

          <?php echo $info; ?>

         </div>


      <?php endwhile; ?>

      </div>
    </div>
  </div>

    <?php endif; ?>

  </div>

  <div id="trigger3" class="section-cards">
    <div class="container">

    <div class="card-group">
      <div id="card1" class="card">
        <div class="card-body">
          <h4 class="card-title">Our Vision</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Join our mission to help humanity!</small>
        </div>
      </div>
      <div id="card2" class="card">
        <div class="card-body">
          <h4 class="card-title">Our Mission</h4>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Join our mission to help humanity!</small>
        </div>
      </div>
      <div id="card3" class="card">
        <div class="card-body">
          <h4 class="card-title">Our Principles</h4>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Join our mission to help humanity!</small>
        </div>
      </div>
    </div>
  </div>

  <script>

      // init controller
    var controller = new ScrollMagic.Controller();

    // create a scene
    // build scene
						var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: "100%"})
						// trigger animation by adding a css class
						.setClassToggle("#card1", "fadeInRight",)
						.addTo(controller);

    // create a scene
    // build scene
            var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: "100%"})
            // trigger animation by adding a css class
            .setClassToggle("#card2", "fadeInRight2",)
            .addTo(controller);

    // create a scene
    // build scene
            var scene = new ScrollMagic.Scene({triggerElement: "#trigger3", duration: "100%"})
            // trigger animation by adding a css class
            .setClassToggle("#card3", "fadeInRight3",)
            .addTo(controller);

  </script>





  </div>

  <div id="section-three" class="section-three gallery-section">
    <div class="container home-gallery home-page-slider">
        <div class="home-gallery-image">


      <?php

      $images = get_field('home_gallery');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)

      if( $images ): ?>
          <ul class="gallery-image-container">
              <?php foreach( $images as $image ): ?>
                <a><li id="image1" class="single-gallery-image">
                  <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                  </li></a>
              <?php endforeach; ?>
          </ul>
      <?php endif; ?>

      </div>
    </div>

    <script>

        // init controller
      var controller = new ScrollMagic.Controller();

      // create a scene
      // build scene
              var scene = new ScrollMagic.Scene({triggerElement: "#section-three", duration: 0,})
              // trigger animation by adding a css class
              .setClassToggle("#image1", "fadeInRight",)
              .addTo(controller);

    </script>


  </div>

  <div id="section-four" class="section-four">
    <div class="container">


          <?php if( have_rows('section_four') ): ?>

        	<ul class="slides">

        	<?php while( have_rows('section_four') ): the_row();

        		// vars
        		$image = get_sub_field('section_image');
        		$content = get_sub_field('section_content');

        		?>

        		<div id="sectionFour" class="section-four-box">
              <div class="row">
                <div class="col-sm">
                  <?php echo $content; ?>
                </div>
                <div class="col-sm">
                  <img class="section-four-image single-image" src="<?php echo $image; ?>" alt="<?php echo $image; ?>">
                  <button type="button" class="btn btn-primary mission-button" data-toggle="modal" data-target="#mission-modal">
                    Our Mission
                  </button>
                </div>
              </div>


        		</div>

          <?php endwhile; ?>

          </ul>

        <?php endif; ?>

    </div>

  </div>

    <div class="section-five">


      <div class="modal" id="mission-modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Our Mission</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>

    </div>

    <div class="section-six contact-section">
      <div class="container">
        <div class="row">
          <div class="col">
              <h1 class="contact-header">Contact Us</h1>
          </div>
        </div>
          <div class="contact-box">
             <?php the_field('contact_us_section'); ?>
        </div>
      </div>
    </div>


    <script>

      $( document ).ready(function() {

        "use strict";

        var MAX_ROT = 30;
        var ANIM_SPEED = 0.075;

        var frame = void 0,
            card = void 0,
            img = void 0,
            mouse = void 0,
            userPos = void 0,
            hover = void 0,
            padding = void 0,
            center = void 0;

        function lerp(n1, n2, speed) {
        	return (1 - speed) * n1 + speed * n2;
        }

        Array.prototype.lerp = function (target, speed) {
        	var _this = this;

        	this.forEach(function (n, i) {
        		return _this[i] = lerp(n, target[i], speed);
        	});
        };

        function resize() {
        	var rect = card.getBoundingClientRect();
        	center = [0.5 * card.clientWidth + rect.left, 0.5 * card.clientHeight + rect.top];
        	userPos = [center[0], center[1]];
        }

        function loop() {
        	var xPosNorm = void 0,
        	    yPosNorm = void 0,
        	    mouseDistNorm = void 0,
        	    theta = void 0,
        	    xRot = void 0,
        	    yRot = void 0,
        	    imgX = void 0,
        	    imgY = void 0;

        	userPos.lerp(hover ? mouse : center, ANIM_SPEED);

        	xPosNorm = (center[0] - userPos[0]) / center[0];
        	yPosNorm = (center[1] - userPos[1]) / center[1];

        	imgX = xPosNorm * padding[0];
        	imgY = yPosNorm * padding[1];

        	mouseDistNorm = Math.sqrt(xPosNorm * xPosNorm + yPosNorm * yPosNorm);
        	theta = Math.atan2(userPos[1] - center[1], userPos[0] - center[0]);

        	xRot = Math.sin(-theta) * MAX_ROT * mouseDistNorm; //card x-axis rotation based on mouse y-axis position
        	yRot = Math.cos(theta) * MAX_ROT * mouseDistNorm;

        	card.style.transform = "rotateX(" + xRot + "deg) rotateY(" + yRot + "deg)";
        	img.style.transform = "translateX(" + imgX + "px) translateY(" + imgY + "px)";
        	window.requestAnimationFrame(loop);
        }

        function init() {
        	frame = document.querySelector(".frame");
        	card = document.querySelector(".card");
        	img = document.querySelector(".background-img");
        	mouse = [0, 0];
        	hover = false;
        	padding = [0.5 * (img.clientWidth - card.clientWidth), 0.5 * (img.clientHeight - card.clientHeight)];

        	resize();

        	frame.addEventListener("mousemove", function (e) {
        		mouse[0] = e.clientX;
        		mouse[1] = e.clientY;
        		hover = true;
        	});

        	frame.addEventListener("mouseleave", function () {
        		hover = false;
        	});
        	loop();
        }

        window.onresize = resize;
        window.onload = init;
    });


    </script>




  <?php get_footer(); ?>
