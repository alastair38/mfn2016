<div class="large-12 columns show-for-medium-up">
	<div class="fixed">

		<!-- If you want to use the more traditional "fixed" navigation.
		 simply replace "sticky" with "fixed" -->

		<nav class="top-bar" data-topbar>
		
			<section class="top-bar-section">
				<?php joints_main_nav(); ?>
			</section>
		</nav>
	</div>
</div>

<div class="large-12 columns show-for-small-only">
	<div class="contain-to-grid">
		<nav class="tab-bar">
			<section class="middle tab-bar-section">
				<h1 class="title"><?php bloginfo('name'); ?></h1>
			</section>
			<section class="left-small">
				<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
			</section>
		</nav>
	</div>
</div>

<aside class="left-off-canvas-menu show-for-small-only">
	<ul class="off-canvas-list">

                <li><a href="<?php echo home_url(); ?>">Home</a></li>
			<?php joints_main_nav(); ?>
	</ul>
</aside>

<a class="exit-off-canvas"></a>
