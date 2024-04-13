<?php

// This is the template for displaying the custom landing page.

// @package Atomic_Improv

get_header();
?>
<main id="primary" class="site-main">
  <section class="frontpage-top">
    <!-- background video -->
    <div class="full-screen-video-container">
      <!-- bg content -->
      <div class="hero-card">
        <div class="full-screen-video-content">
          <div class="title-container">
            <img
              src="http://sparada1.dmitstudent.ca/dmit2590/wp-content/themes/atomic-improv-sara/atomic-improv-theme/images/AIC.png"
              alt="">
          </div>

          <div class="leaf">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="-2015 -2000 4030 4030">
              <title>maple leaf from the flag of Canada</title>
              <path fill="#f00"
                d="m-90 2030 45-863a95 95 0 0 0-111-98l-859 151 116-320a65 65 0 0 0-20-73l-941-762 212-99a65 65 0 0 0 34-79l-186-572 542 115a65 65 0 0 0 73-38l105-247 423 454a65 65 0 0 0 111-57l-204-1052 327 189a65 65 0 0 0 91-27l332-652 332 652a65 65 0 0 0 91 27l327-189-204 1052a65 65 0 0 0 111 57l423-454 105 247a65 65 0 0 0 73 38l542-115-186 572a65 65 0 0 0 34 79l212 99-941 762a65 65 0 0 0-20 73l116 320-859-151a95 95 0 0 0-111 98l45 863z" />
            </svg>
            <p>Improv comedy duo</p>
          </div>


          <a href="contact-us">Book Now</a>
        </div>
      </div>
    </div>
  </section><!-- end of bg-video -->


  <!-- What We Do  -->
  <section class="what-we-do">
    <div class="container">
      <!-- what we do flex container -->
      <div class="events">
        <!-- poster -->



        <div class="poster">
          <!-- css background -->
          <div class="section-flex">
            <div class="section-title">
              <h2>What We Do</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <h3>Customized shows for your events</h3>
          <p>Atomic Improv is Canada's Premier two man Improv troupe that has been
            creating comedy on the spot based entirely on audience suggestion since 1990.</p>
          <p>These 3 time World Improv champions and main stage performer at Montreal's just for laughs can help turn
            your event from humdrum to hilarious!</p>
          <a href="what-we-do" class="button-style">Learn More</a>
        </div>
      </div><!-- end of events section -->
      <!-- Power Of Yes -->
      <div class="power-of-yes">
        <!-- Power of Yes poster-->
        <h3>Corporate Workshops</h3>
        <img
          src="http://sparada1.dmitstudent.ca/dmit2590/wp-content/themes/atomic-improv-sara/atomic-improv-theme/images/poy-donovan-grant-md.webp"
          alt="">
        <div class="section-flex">
          <div class="pos-section-content">
            <p>Unlock your teams full potential with the <span class="pos">Power of Yes!</span> our customizable
              corporate workshop that can help teams
              boost their creativity and communication skills.</p>
            <a href="power-of-yes" class="button-style">Learn More</a>
          </div>
        </div>
      </div><!-- end of Power of Yes -->
    </div><!-- end of flex container -->
    </div> <!-- end of container -->
  </section><!-- end of What We Do section -->

  <!-- About -->
  <section class="about-atomic-improv">
    <div class="container">
      <!-- About poster -->
      <div class="about">
        <div class="about-poster">
          <!-- css background -->
          <div class="section-flex">
            <div class="section-title">
              <h2>Who We Are</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <p>Atomic Improv is Canada's premier two man improv troupe that has been
            creating comedy on the spot based entirely on audience suggestion since 1990.</p>
          <p>These 3-time World Improv Champions and main stage performer at Montreal's Just For Laughs can help turn
            your event from humdrum to hilarious!</p>
          <a href="who-we-are" class="button-style">More About Us</a>
        </div>
      </div><!-- end of about section -->

    </div><!-- end of container -->
  </section><!-- end of About section -->


  <!-- social media -->
  <section class="socialmedia">
    <div class="social-container">
      <!-- social media title -->
      <div class="social-media-title-container">
        <div class="social-media-title">
          <!-- <h2>#atomicimprov</h2> -->
        </div>
      </div>

      <h4>The Latest from...</h4>
      <div class="socialflex">
        <section>
          <div class="social-content">
            <h3>Instagram</h3>
            <?php
            echo do_shortcode("[instagram-feed feed=1]")
              ?>
          </div>

        </section>
        <section>
          <div class="social-content">
            <h3>Facebook</h3>
          </div>

        </section>
        <section>
          <div class="social-content">
            <h3>Youtube</h3>
            <?php
            echo do_shortcode("[youtube-feed feed=3]")
              ?>
          </div>

        </section>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();


