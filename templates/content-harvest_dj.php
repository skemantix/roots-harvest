<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
  	<div class="djList">
  		<h2>Full 2013 Lineup</h2>
  		<ul>
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
  					<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
  						<?php the_title(); ?>
  					</a>
  				</li>
		
  			<?php endwhile; }
  		wp_reset_query();
  		?>
  		</ul>
  	</div>	  
	<div class="djLeft">
		<div class="djPhoto">
			<?php echo get_the_post_thumbnail($post_id, 'thumbnail'); ?>
		    <header>
		      <h1 class="entry-title"><?php the_title(); ?></h1>
		    </header>
		</div>
		<div class="djDetails">
		    <div class="entry-content">
		      <?php the_content(); ?>
		    </div>
		</div>
	
		
	</div>
	<div class="clear"></div>
    <?php //comments_template('/templates/comments.php'); ?>
	
  </article>
<?php endwhile; ?>
