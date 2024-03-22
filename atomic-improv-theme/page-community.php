<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Atomic_Improv
 */

get_header();
?>


<main id="primary" class="site-main">
  <section>
    <div class="container">

      <h1>
        <?php echo get_the_title(); ?>
      </h1>

      <p>Social Media page</p>
      <!-- start loop -->
      <?php
      $args = array(
        "post_type" => "post",
        "category_name" => "facebook, instagram, youtube",
        "posts_per_page" => 10
      );
      $the_query = new WP_Query($args);
      // Tests if there even are any posts
      if ($the_query->have_posts()):
        // As long as there are new posts...
        while ($the_query->have_posts()):
          // Select the next post
          $the_query->the_post();
          ?>
          <h2>
              <?php the_title(); ?>
          </h2>
          <?php the_content(); ?>

        <?php endwhile; ?>
        <!-- end loop -->
      <?php
      endif;
      wp_reset_postdata();
      ?>

    </div><!-- .container -->
  </section>
</main><!-- #main -->

<?php
get_footer();
