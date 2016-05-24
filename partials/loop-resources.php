<div class="large-12 medium-12 columns">
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			

	<header class="article-header">

		<a href="<?php the_permalink();?>"><h3 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h3></a>

<?php get_template_part( 'partials/content', 'byline' );?>
	

    </header> <!-- end article header -->

    <section class="entry-content clearfix" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>

		
		
<?php the_content();?>
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
</div>
