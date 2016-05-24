<p class="byline">
<?php 
$participants = get_field('participants');
?>
<?php
if( $participants ): 
?>
<ul class="resources-authors">
<?php
foreach( $participants as $participant ):?>
<li>
<?php
$arrayKeys = array_keys($participant);
$user_name = $participant[$arrayKeys[5]];
$user_id = $participant[$arrayKeys[0]]; 
$user_link = get_author_posts_url( $user_id );             
?>
<a href="<?php echo $user_link;?>" title="Visit <?php echo $user_name;?> MFN Profile"><?php echo $user_name;?></a>
</li>
<?php endforeach; ?>
</ul>
						<?php endif; ?>	 
	
<?php 
if ( in_category( 'videos' )) {
	echo '<span id="cat-icon"><i class="fi-video" title="Videos"></i></span>';
} elseif ( in_category('articles')) {
	echo '<span id="cat-icon"><i class="fi-page-edit" title="Articles"></i></span>';
} else {
	echo '<span id="cat-icon"><i class="fi-page-multiple" title="Papers"></i></span>';
}
?>


</p>
