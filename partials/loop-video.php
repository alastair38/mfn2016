<div class="large-4 medium-6 columns">
<article id="post-<?php the_ID(); ?>" class="videos" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
			

	

    <section class="entry-content clearfix" itemprop="articleBody">


		

<div id="video-wall">
		<?php
		the_content();
		?>
<span id="video-info"><i class="fi-info"></i></span>		
</div>

        <span id="excerpt">
<header class="article-header">
            <a href="<?php the_permalink();?>"><h5 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h5></a>
          
            </header>
 <?php
		echo wp_trim_words( get_the_excerpt(), 15 );
		?>
           
            
       
	
 
 </span>

	</section> <!-- end article section -->

	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('<i class="fi-clipboard-notes"></i>', 'jointstheme') . '</span> ', ', ', ''); ?></p>
		
		</footer> <!-- end article footer -->


</article> <!-- end article -->
</div>
