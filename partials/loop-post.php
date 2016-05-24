<div id="main" class="large-8 medium-8 columns first clearfix" role="main">
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			<?php get_template_part( 'partials/content', 'byline' ); ?>

	<header class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
    </header> <!-- end article header -->

    <section class="entry-content clearfix" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>

		<?php $content = get_the_content();?>


		<?php if ( in_category( 'videos' )) {
		the_content();
		the_excerpt();
		} else {
		  the_content();
		}
		?>

		<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo wp_filter_nohtml_kses( $content );?>&source=www.memoryfriendly.org.uk"><i class="fi-social-linkedin"></i></a>

<a href="mailto:?subject=I wanted to share this post with you from <?php bloginfo('name'); ?>&body=<?php the_title('','',true); ?>&#32;&#32;<?php the_permalink(); ?>" title="Email to a friend/colleague" target="_blank">Share via email</a>

	</section> <!-- end article section -->

	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('<i class="fi-clipboard-notes"></i>', 'jointstheme') . '</span> ', ', ', ''); ?></p>
		<?php
	 $document = get_field( 'files' );
	    if($document){
      echo 'Shared Files: <a href="' . $document["url"] . '"><i class="fi-page-doc"></i></a>';
	    }?>
		</footer> <!-- end article footer -->


</article> <!-- end article -->
</div> <!-- end #main -->

   <div class="large-4 medium-4 columns" role="aside">
         <div id="aside" class="">

 	<?php echo get_avatar( get_the_author_meta( 'ID' ), '125' ); ?>
  			<h3>	<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?></a></h3>
  			
  			<p><?php echo get_the_author_meta('work_title');?>
  			<?php $trimmed = wp_trim_words( get_user_meta($user->ID, 'description', false), $num_words = 15, $more = null ); ?>
					<?php echo $trimmed; ?></p>


<div >
        	<ul class="post-socialIcons">

<?php
                                $email = get_the_author_meta('user_email');
                                if($email != '')
              								{
              									printf('<li><a href="mailto:%s" target="_blank">%s</a></li>', $email, '<i class="fi-mail" data-title="Email Me"></i>');
              								}
               
								$website = get_the_author_meta('user_url');
								if($website != '')
								{
									printf('<li><a href="%s" target="_blank">%s</a></li>', $website, '<i class="fi-web" data-title="Visit My Website"></i>');
								}

								$twitter = get_the_author_meta('twitter_profile');
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

								$linkedin = get_the_author_meta('linkedin_profile');
								if($linkedin != '')
								{
									printf('<li><a href="%s" target="_blank">%s</a></li>', $linkedin, '<i class="fi-social-linkedin" data-title="Find Me On LinkedIn"></i>');
								}
							?>
					</ul>
       
        </div><!-- end #socialicons -->



					<?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
echo 'Related Posts';
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>5,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>

<?php get_template_part( 'partials/loop', 'aside' ); ?>

<?php
endwhile;
}
wp_reset_query();
}
?>
    </div>
</div>
