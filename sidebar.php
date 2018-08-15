<?php

$author_id = 1; // Chris

$popular_articles = new WP_Query(
	array(
		'post_status'    => 'publish',
		'post_type'      => 'post',
		'posts_per_page' => 5,
		'author'         => $author_id,
	)
);

if ( $popular_articles->have_posts() ) {
	?>
	<h3 class="uk-heading-divider uk-margin-top">Popular Articles by <?php echo esc_html( get_the_author_meta( 'display_name', $author_id ) ); ?></h3>
	<?php
	while ( $popular_articles->have_posts() ) {
		$popular_articles->the_post();
		?>
		<div class="uk-card uk-card-default uk-card-hover uk-card-body uk-margin-bottom">
			<a href="<?php the_permalink(); ?>">
				<h3 class="uk-card-title"><?php the_title(); ?></h3>
				<p class="uk-text-meta">Written by <?php the_author(); ?></p>
				<p><?php the_excerpt(); ?></p>
			</a>
		</div>
		<?php
	}
	// Restore original Post Data
	wp_reset_postdata();
}
