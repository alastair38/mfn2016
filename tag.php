<?php get_header(); ?>
			
			<div id="content">
		
				<div id="inner-content" class="row clearfix">
				
				    <div id="main" class="large-8 medium-8 columns first clearfix" role="main">
				
					   <p>Tag: <?php single_tag_title(); ?></p>
					   
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'single' ); ?>
					
					    <?php endwhile; ?>
					
					        <?php if (function_exists('joints_page_navi')) { ?>
						        <?php joints_page_navi(); ?>
					        <?php } else { ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
								        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
							        </ul>
					    	    </nav>
					        <?php } ?>
					
					    <?php else : ?>
					
    						<?php get_template_part( 'partials/content', 'missing' ); ?>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    
	 	   <div id="aside" class="large-4 medium-4 columns" role="aside">
				   
				   <h3>Latest Articles</h3>
				    <?php
       $args = array(
	'post_type' => 'post',
	'category_name' => 'articles',
	'posts_per_page' => 5);
$query = new WP_Query( $args );
     if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


<?php get_template_part( 'partials/loop', 'aside' ); ?>



    <?php endwhile; ?>


    <?php endif; ?>
    
    <?php wp_reset_postdata();?>
    
    <h3>Latest Papers</h3>
    
     <?php
       $args = array(
	'post_type' => 'post',
	'category_name' => 'papers',
	'posts_per_page' => 5);
$query = new WP_Query( $args );
     if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


<?php get_template_part( 'partials/loop', 'aside' ); ?>



    <?php endwhile; ?>


    <?php endif; ?>
				   
		<?php wp_reset_postdata();?>
				   
				   </div>
                
                </div> <!-- end #inner-content -->
                
			</div> <!-- end #content -->

<?php get_footer(); ?>