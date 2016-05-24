<?php
/*
Template Name: Videos
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row clearfix">
<div id="main" role="main">
<?php

  $args = array(
      'pagename' => 'videos'
    );

  $the_query = new WP_Query( $args );

?>

<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<h1><?php the_title();?></h1>
<div class="video-intro">
<?php the_content();?>
  
<?php endwhile; endif; ?>
</div>
<?php wp_reset_query(); ?>
				    

		<?php
    global $wp_query, $paged;

    if( get_query_var('paged') ) {
        $paged = get_query_var('paged');
    }else if ( get_query_var('page') ) {
        $paged = get_query_var('page');
    }else{
        $paged = 1;
    }

    $wp_query = null;
    $args = array(
        'post_type' => 'post',
        'category_name' => 'videos',
        'orderby'=>'date',
        'order'=>'DESC',
        'posts_per_page' => 6,
        'paged' => $paged
    );
    $wp_query = new WP_Query();
    $wp_query->query( $args );

    while ($wp_query->have_posts()) : $wp_query->the_post();?>


<?php get_template_part( 'partials/loop', 'video' ); ?>



    <?php endwhile; ?>


   
  <div id="videos-footer" class="large-12 medium-12 columns" role="navigation">  
    <?php if (function_exists('joints_page_navi')) { ?>
						        <?php joints_page_navi(); ?>
					        <?php } else { ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
								        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
							        </ul>
					    	    </nav>
</div>
					        <?php } ?>

     <?php wp_reset_query(); ?>
</div> <!-- end #main -->
    				
<div id="aside" class="large-6 medium-6 columns" role="aside">
				   <h3>Latest Articles</h3>
				    <?php
       $args = array(
	'post_type' => 'post',
	'category_name' => 'articles',
	'posts_per_page' => 3);
$query = new WP_Query( $args );
     if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


<?php get_template_part( 'partials/loop', 'aside' ); ?>



    <?php endwhile; ?>


    <?php endif; ?>

    <?php wp_reset_postdata();?>
</div>
<div id="aside" class="large-6 medium-6 columns" role="aside">
    <h3>Latest Papers</h3>

     <?php
       $args = array(
	'post_type' => 'post',
	'category_name' => 'papers',
	'posts_per_page' => 3);
$query = new WP_Query( $args );
     if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


<?php get_template_part( 'partials/loop', 'aside' ); ?>



    <?php endwhile; ?>


    <?php endif; ?>

		<?php wp_reset_postdata();?>

</div>				
</div>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
