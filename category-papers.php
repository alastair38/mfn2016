<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row clearfix">
<div id="main" role="main">

<h1><?php single_cat_title(); ?></h1>

				    

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
        'category_name' => 'papers',
        'orderby'=>'date',
        'order'=>'DESC',
        'posts_per_page' => 9,
        'paged' => $paged
    );
    $wp_query = new WP_Query();
    $wp_query->query( $args );

    while ($wp_query->have_posts()) : $wp_query->the_post();?>


<?php get_template_part( 'partials/loop', 'resources-category' ); ?>



    <?php endwhile; ?>


   
  <div id="papers-footer" class="large-12 medium-12 columns" role="navigation">  

    <?php if (function_exists('joints_page_navi')) { ?>
						        <?php joints_page_navi($wp_query->max_num_pages); ?>
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
    				
<div id="aside" class="large-12 medium-12 columns" role="aside">
 <?php
    // Get the ID of a given category
    $category_id = get_cat_ID( 'videos' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
?>

<!-- Print a link to this category -->
<a href="<?php echo esc_url( $category_link ); ?>" title="Latest Videos"><h3>Latest Videos</h3></a>
				    <?php
       $args = array(
	'post_type' => 'post',
	'category_name' => 'videos',
	'posts_per_page' => 6,
        'orderby' => 'rand');
$query = new WP_Query( $args );
     if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


<?php get_template_part( 'partials/loop', 'latest-video' ); ?>



    <?php endwhile; ?>


    <?php endif; ?>

    <?php wp_reset_postdata();?>
</div>

</div>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
