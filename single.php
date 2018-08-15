<?php

get_header();

while ( have_posts() ) :
	the_post();

	if ( has_post_thumbnail() ) :
	$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
	?>
	<div class="uk-light" uk-grid>
		<div class="uk-width-expand uk-background-cover uk-background-blend-multiply uk-background-primary uk-height-medium uk-flex uk-flex-center uk-flex-middle" style="background-image: url(<?php echo esc_html( $full_image_url[0] ); ?>);">
			<p class="uk-h1"><?php the_title(); ?></p>
		</div>
	</div>
	<?php
	endif;
	?>
	<div class="uk-container">
		<article class="uk-article uk-padding">
			<?php
			if ( ! has_post_thumbnail() ) :
				?>
				<h1 class="uk-heading-divider"><?php the_title(); ?></h1>
				<?php
			endif;
			?>
			<p class="uk-article-meta">Written by <?php the_author(); ?> <span uk-icon="pencil"></span> on <?php the_date(); ?> <span uk-icon="calendar"></span></p>
			<?php
					the_content();
			?>
		</article>
	</div>
	<?php

endwhile;

get_footer();
