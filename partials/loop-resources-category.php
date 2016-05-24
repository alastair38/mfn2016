<div class="large-12 medium-12 columns">
<article id="post-<?php the_ID(); ?>" class="resources" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			

	

    <section class="entry-content clearfix" itemprop="articleBody">


		

<div id="resources-content">
		
<header class="article-header">
            <a href="<?php the_permalink();?>"><h5 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h5></a>
          
            </header>
		<?php
		the_content();
		?>
		<?php get_template_part( 'partials/content', 'byline' );?>

</div>

        


	</section> <!-- end article section -->

	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('<i class="fi-clipboard-notes"></i>', 'jointstheme') . '</span> ', ', ', ''); ?></p>
		
		</footer> <!-- end article footer -->


</article> <!-- end article -->
</div>
