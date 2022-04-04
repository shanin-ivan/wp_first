<?php get_header(); ?>
		<div class="middle">
			<?php
				if (have_posts()) {
					while (have_posts()) {
						echo '<h3><a href="'. get_permalink() .'">'. get_the_title() .'</a></h3>';
						echo get_the_excerpt();
					}
				} else {
					echo '<p>Записей нет...</p>';
				}
			?>
		</div>
		<?php get_footer(); ?>