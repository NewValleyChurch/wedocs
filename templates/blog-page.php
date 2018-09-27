<?php
/*
Template Name: Blog Page
*/

get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Display the Title as a link to the Post's permalink. -->

 	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

 	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

 	<div class="entry">
 		<?php the_content(); ?>
 	</div>

<?php enwhile; else :
       // end of the loop. ?>

       <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
   <?php endif; ?>

    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>