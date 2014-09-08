				<div class="give entry-content">
					<div class="give-account secondary-button"><a href="#">My Account</a></div>
				</div>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the give loop. ?>

				<div class="kindred">
					<img class="kindred-bg" src="<?php echo get_stylesheet_directory_uri() . '/img/kindred-bg.png'; ?>">
					<h1>Also, with a text.</h1>
					<p>Text &quot;GIVE&quot; to 562.296.4839 to get started.</p>
				</div>

				<div class="give entry-content">
					<p>To learn more about Kindred, click <a href="https://kindrid.com/">here.</a></p>
				</div>