<?php
/**
 * The template for displaying Author Archive pages
 *
 * Used to display archive-type pages for posts by an author.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */


get_header(); ?>


<div id="content">
			
	<div id="inner-content" class="row clearfix">
			


  
		<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
$user_post_count = count_user_posts( $curauth->ID);
?>

      <div class="large-12 medium-12 columns" id="biography" itemscope itemtype="http://schema.org/Person">
      <div class="large-2 medium-12 columns">
      <?php echo get_avatar( $curauth->user_email, '125' ); ?>
      
      <div >
        <ul class="socialIcons">
        
        <?php
        if($curauth->twitter_profile != '')
        								{
        									printf('<li><a href="%s">%s</a></li>', $curauth->twitter_profile, '<i class="fi-social-twitter" data-title="Follow Me On Twitter"></i>');
        								}
        ?>
        <?php
        if($curauth->linkedin_profile != '')
        								{
        									printf('<li><a href="%s">%s</a></li>', $curauth->linkedin_profile, '<i class="fi-social-linkedin" data-title="Follow Me On Linkedin"></i>');
        								}
        ?>
        <?php
        if($curauth->user_email != '')
        									{
                      									printf('<li><a href="mailto:%s" target="_blank">%s</a></li>', $curauth->user_email, '<i class="fi-mail" data-title="Email Me"></i>');
                      								}
        ?>
        <?php
        if($curauth->user_url != '')
        								{
        									printf('<li><a href="%s" target="_blank">%s</a></li>', $curauth->user_url, '<i class="fi-web" data-title="Visit My Website"></i>');
        								}
        ?>
        
        </ul>
        </div><!-- end #socialicons -->
      
					
      </div>
      <!-- end #biography -->
      <div class="large-10 medium-12 columns">
      <?php echo '<p id="author-name" itemprop="name">' . $curauth->display_name . '</p> ';?>
      
        <p><?php echo $curauth->description; ?></p>
        </div>
       
      </div><!-- end #biography -->
      
<div class="large-12 medium-12 columns">
  
<?php 
 
 

$args = array(
        'post_type' => 'post',
        'meta_query' => array(
		array(
			'key' => 'participants',
			'value' => '"' . $curauth->id . '"',
			'compare' => 'LIKE'
		)
	)
    );
    $wp_query = new WP_Query();
    $wp_query->query( $args );

    while ($wp_query->have_posts()) : $wp_query->the_post();


 get_template_part( 'partials/loop', 'resources' ); 



endwhile; 

?>

    
<? wp_reset_query();?> 

</div>
</div>

  <!-- end #main -->
				
	</div> <!-- end #inner-content -->
		
</div> <!-- end #content -->
	

<?php get_footer(); ?>