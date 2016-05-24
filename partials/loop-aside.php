<article class="large-6 medium-6 columns" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
            <a href="<?php the_permalink();?>"><h5 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h5></a>
          
            </header>
 

    <section class="aside-content clearfix" itemprop="articleBody">
                <?php the_content(); ?>
		

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
