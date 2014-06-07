<?php
/*
Template Name: DJ Lineup
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

        <div id="container">
            <div id="content">
				
				<ul class="dj-grid">
			<?php
			$type = 'harvest_dj';
			$args=array(
			  'post_type' => $type,
			  'post_status' => 'publish',
			  'posts_per_page' => -1,
			  'caller_get_posts'=> 1);

			$my_query = null;
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
			  while ($my_query->have_posts()) : $my_query->the_post(); ?>
			  
			    <li>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<?php echo get_the_post_thumbnail($post_id, 'thumbnail'); ?>
						<h2><?php the_title(); ?></h2>
						<h3><?php the_field('from'); ?></h3>
						<h4 class="<?php echo str_replace('é','e',str_replace(' ','',get_field('where')))?>"><?php the_field('where'); ?></h4>
					</a>
				</li>

			    <?php
			  endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
			?>
		</ul>
		<div class="clear"></div>
            </div><!-- #content -->
        </div><!-- #container -->
		


<?php // get_sidebar(); ?>
<?php // get_footer(); ?>