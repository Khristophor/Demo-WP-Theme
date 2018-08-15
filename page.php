<?php

get_header();

while ( have_posts() ) :
	the_post();

	?>

	<article class="uk-article uk-padding">
			<?php
			the_title( '<h1 class="uk-article-title">', '</h1>' );
			?>
		<p class="uk-article-meta">Written by <?php the_author(); ?> on <?php the_date(); ?></p>
		<?php
				the_content();
		?>
	</article>

	<?php

endwhile;

get_footer();
