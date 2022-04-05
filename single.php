<?php get_header(); ?>
		<div class="middle">
			<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						
						echo '<h1>'. get_the_title() .'</h3>';
						echo get_the_content();
					}
				} else {
					echo '<p>Такой записи не существует...</p>';
				}
			?>
		</div>
        <?php get_footer(); ?>