<?php get_header(); ?>
	<div class="middle">
	<?php
		// циклы вывода записей
		// если записи найдены
		if ( have_posts() ){
			while ( have_posts() ){
				the_post();
				echo '<h2><a href=' . get_permalink().'>'.get_the_title().'</a></h2>';
				echo 'Автор: '; the_author();
				echo ' '; the_date();
				echo ' '; the_time();
				the_category();
				the_post_thumbnail();


				the_content('Перейти к полной статье...');
			}
		}
		// елси записей не найдено
		else{
			echo ' <p>Записей нет...</p>';
		}
		?>
	</div>

	<?php get_footer(); ?>
