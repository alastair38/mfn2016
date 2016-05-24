<?php
/*
Template Name: Events Page (No Sidebar)
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row clearfix">

				    <div id="main-event" class="event large-12 medium-12 columns" role="main">
				    <div id="content1" class="large-3 medium-12 columns" role="main">
				    <h1 id="title"><?php the_title();?></h1>

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

				    </div>
				      <div id="" class="large-9 medium-12 columns" section-container tabs" data-section="tabs"" role="main">


					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    	<?php get_template_part( 'partials/loop', 'page' ); ?>

					    <?php endwhile; endif;?>

<?php wp_reset_query(); ?>


					    </div>


<!-- <ul class="clearing-thumbs" data-clearing>
<h4>Photos from the June event</h4>
<?php

  //$query_images_args = array(
        // 'post_type' => 'attachment',
        // 'post_mime_type' =>'image',
        // 'category_name' => 'june-event',
        // 'post_status' => 'inherit',
        // 'posts_per_page' => -1,
//);

//$query_images = new WP_Query( $query_images_args );
//$images = array();
//foreach ( $query_images->posts as $image) {
  //echo "<li class=''><a href='" . $images[]= wp_get_attachment_url( $image->ID ) . "'><img data-caption='" . $image->post_excerpt . "' src='" . $images[]= wp_get_attachment_thumb_url( $image->ID) . "'></a></li>";
//}

?>
</ul> -->


    				</div> <!-- end #main -->









				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
