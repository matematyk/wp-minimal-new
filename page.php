<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

<div id="main-content" class="main-content">
<div class="sevencol">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <div>
           <?php the_content(); ?>
         </div>
  <?php endwhile; endif; ?>
 </div>
	

<?php
get_sidebar();
get_footer();