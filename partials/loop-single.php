<div class="large-6 medium-12 columns">
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			

	<header class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
    </header> <!-- end article header -->

    <section class="entry-content clearfix" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>

		

<?php get_template_part( 'partials/content', 'byline' ); ?>
		<?php if ( in_category( 'videos' )) {
		the_content();
		the_excerpt();
		} else {
		  the_content();
		}
		?>

		<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo wp_filter_nohtml_kses( $content );?>&source=www.memoryfriendly.org.uk"><i class="fi-social-linkedin"></i></a>

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
