<?php
/*
Template Name: Display Authors
*/


<?php get_header(); ?>
			
<div id="content">
			
	<div id="inner-content" class="row clearfix">
			
		<div id="main" class="large-12 medium-12 columns" role="main">
		
			
<?php

$user_query = new WP_User_Query(array(
   'meta_key'=>'last_name',
   'orderby'=>'meta_value',
   'role' => ''
));
		foreach ( $user_query->results as $user )
		{
			?>
			
			<div id="authors-page" class="large-3 medium-6 columns" role="main">
			
  					<?php echo get_avatar( $user->user_email, '125' ); ?>
  						<h3 class="authorName"><a href="<?php echo get_author_posts_url( $user->ID ); ?>" data-title="View Profile"><?php echo $user->display_name; ?></a></h3>
			  
			  <div class="authorInfo">

					<p><?php $trimmed = wp_trim_words( get_user_meta($user->ID, 'description', true), $num_words = 20, $more = null ); ?>
					<?php echo $trimmed; ?></p>
			  </div>
			
				
					<ul class="socialIcons">
						    <?php
                if($user->user_email != '')
              								{
              									printf('<li><a href="mailto:%s" target="_blank">%s</a></li>', $user->user_email, '<i class="fi-mail" data-title="Email Me"></i>');
              								}
                ?>
							  <?php
								$website = $user->user_url;
								if($user->user_url != '')
								{
									printf('<li><a href="%s" target="_blank">%s</a></li>', $user->user_url, '<i class="fi-web" data-title="Visit My Website"></i>');
								}

								$twitter = get_user_meta($user->ID, 'twitter_profile', true);
								if($twitter != '')
								{
									printf('<li><a href="%s" target="_blank">%s</a></li>', $twitter, '<i class="fi-social-twitter" data-title="Follow Me On Twitter"></i>');
								}

								$facebook = get_user_meta($user->ID, 'facebook_profile', true);
								if($facebook != '')
								{
									printf('<li><a href="%s" target="_blank">%s</a></li>', $facebook, '<i class="fi-social-facebook" data-title="Find Me On Facebook"></i>');
								}

								$google = get_user_meta($user->ID, 'google_profile', true);
								if($google != '')
								{
									printf('<li><a href="%s" target="_blank">%s</a></li>', $google, '<i class="fi-social-google-plus" data-title="Find Me On Google+"></i>');
								}

								$linkedin = get_user_meta($user->ID, 'linkedin_profile', true);
								if($linkedin != '')
								{
									printf('<li><a href="%s" target="_blank">%s</a></li>', $linkedin, '<i class="fi-social-linkedin" data-title="Find Me On LinkedIn"></i>');
								}
							?>
					</ul>
        <!-- end #socialIcons -->
	
			</div> <!-- end #authors-page -->
		  
	<?php
		}
	?>

    </div> <!-- end #main -->
				
	</div> <!-- end #inner-content -->
		
</div> <!-- end #content -->
	
			
<?php get_footer(); ?>