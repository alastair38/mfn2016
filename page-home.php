<?php
/*
Template Name: Home Page (No Sidebar)
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row clearfix">

				    <div id="main-event" class="" role="main">

				    <h1 id="title" class="screen-reader-text"><?php the_title();?></h1>

<?php

  $args = array(
      'post_type' => 'notices',
      'category_name'  => ''
    );

  $the_query = new WP_Query( $args );

?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <?php get_template_part( 'partials/loop', 'updates' ); ?>

<?php endwhile; endif; ?>

<?php wp_reset_query(); ?>


				      <div id="content1" class="" role="main">


					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    	<?php get_template_part( 'partials/loop', 'page' ); ?>

					    <?php endwhile; endif;?>

					    </div>

    				</div> <!-- end #main -->



<?php wp_reset_query(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
