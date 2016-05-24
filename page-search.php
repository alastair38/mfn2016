<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>
	
<?php
			
$args = array();
$args['wp_query'] = array('post_type' => 'post',
                          'category_name' => 'videos, papers, articles',
                          'posts_per_page' => 10,
                          'orderby' => 'date'
                          );
$args['fields'][] = array('type' => 'search',
                          'placeholder' => 'Enter your search terms here',
                          'title' => 'Search',
                          'label' => 'Keywords',
                          'value' => '');
$args['fields'][] = array('type' => 'author',
                          'title' => 'Author',
                          'label' => 'Author',
                          'exclude' => array('1'),
                          'format' => 'select',
                          'allow_null' => 'SELECT AN AUTHOR :');
$args['fields'][] = array('type' => 'taxonomy', 
                          'taxonomy' => 'category',
                          'operator' => 'IN',
                          'label' => 'Category',
                          'values' => array('papers' => 'Papers', 'videos' => 'Videos'),
                          'default_all' => true,
                          'format' => 'checkbox');

$args['fields'][] = array('type' => 'submit',
                          'value' => 'Search');
                          
                          
$my_search = new WP_Advanced_Search($args);
			
?>
			
			
			<div id="content">

				<div id="inner-content" class="row clearfix">
                    <div id="search" class="large-4 medium-8 columns " role="aside">
   

<h1>Search Resources</h1>

                    <?php $my_search->the_form(); ?>
<div class="wpas-reset"><a href="http://memoryfriendly.org.uk/search-resources/">Reset</a></div>
<div id="search-text">By default, all resources are displayed. Select from the above options to filter your search results</div>
                    </div>    
					<div id="main" class="large-8 medium-8 columns first clearfix" role="main">
						
						<?php


$my_search = new WP_Advanced_Search($args);
$temp_query = $wp_query;
$wp_query = $my_search->query();?>
<h1 class="archive-title"><span><?php echo 'Displaying results ' . $my_search->results_range() . ' of ' . $wp_query->found_posts;?></span></h1>
<?php	
if ( have_posts() ): 
    while ( have_posts() ): the_post(); ?>
    
 <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="article-header">

									<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
										<?php get_template_part( 'partials/content', 'byline' ); ?>

								</header> <!-- end article header -->

								<section class="entry-content">
								   <?php if ( in_category( 'videos' )) {
		the_content();
		the_excerpt();
		} else {
		  the_content();
		}
		?>

								</section> <!-- end article section -->

								<footer class="article-footer">

								</footer> <!-- end article footer -->

							</article> <!-- end article -->
							
 
<?php    endwhile;

$my_search->pagination(array('prev_text' => '«','next_text' => '»'));

endif;
wp_reset_query();
$wp_query = $temp_query;
?>

					

				    </div> <!-- end #main -->


    			</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>