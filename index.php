<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */

get_header();

if ( have_posts() ) :
	?>
	<div class="container">
		<div uk-grid>
			<div class="uk-width-expand@m">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article class="uk-article uk-padding">
						<?php
						the_title( '<h2 class="uk-article-title">', '</h2>' );
						?>
					<p class="uk-article-meta">Written by <?php the_author(); ?><?php the_date( 'F j, Y', ' on ' ); ?>. Posted in <?php the_category( ', ' ); ?></p>
					<?php
							the_content();
					?>
					<div class="uk-grid-small uk-child-width-auto" uk-grid>
						<div>
							<a class="uk-button uk-button-text" href="<?php the_permalink(); ?>">Read more</a>
						</div>
					</div>
				</article>
				<?php
			endwhile;
			?>
			</div>
			<div class="uk-width-1-3@m uk-background-muted">
			<?php
			get_sidebar();
			?>
			</div>
		</div>
	</div>
	<?php
endif;

get_footer();
