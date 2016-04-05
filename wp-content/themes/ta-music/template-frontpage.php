<?php
/**
 * Template Name: FrontPage
 *
 * @package TA Music
 */

get_header(); ?>

	<!-- breadcrumbs -->
	<section id="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
		<div class="container">
		<?php ta_breadcrumbs(); ?>
		</div>
	</section><!-- #breadcrumbs -->

	<?php if ( ta_option( 'disable_features') == '1' ) : ?>
	<!-- features area -->
	<section id="features">
		<div class="container">
			<!-- welcome message -->
			<div class="welcome-message">
				<h2><?php if ( ta_option( 'features_title' ) != '' ) { echo ta_option( 'features_title' ); } ?></h2>
				<p>We are a Flannelcore band originated from Bridgewater NJ. There is nothing more that we love to do than to play amazing music and drink draft beer.</p>
			</div><!-- end welcome message -->

			<!-- features -->
			<!-- <div class="features">
				<div class="row">
				<?php
					if ( ta_option( 'features_slider' ) != '') :
					foreach( $ta_option['features_slider'] as $features_slide ) :
				?>
					<div class="col-sm-4 feature">
						<div class="feature-icon">
							<a href="<?php echo $features_slide['url']; ?>"><i class="feature-icon fa <?php echo $features_slide['facode']; ?>"></i></a>
						</div>
						<a href="<?php echo $features_slide['url']; ?>"><h3><?php echo $features_slide['title']; ?></h3></a>
						<p><?php echo $features_slide['description']; ?></p>
					</div><!-- .feature -->
				<?php
					endforeach;
					endif;
				?>
				</div>
			</div><!-- .features -->
		</div>
	</section>
	<?php endif; ?>

	<!-- main content area -->
	<main>
		<section id="events">
			<div class="container">
				<div class="row">
					<!-- upcoming events --> 
					<div class="col-md-6 upcoming-events">
						<h2><?php _e( 'Upcoming', 'ta-music' ); ?> <span>
							<?php _e( 'Events', 'ta-music' ); ?></span> 
							<a href="<?php echo get_post_type_archive_link( 'event' ); ?>" class="view-all">
								<span><?php _e( 'View All', 'ta-music' ); ?></span> 
								<i class="fa fa-angle-double-right view-all-icon"></i></a></h2>
						<div class="event">
						<?php
							$the_query = new WP_Query( array( 'post_type' => 'event', 'showposts' => 1, 'post_status' => 'publish', 'has_password' => false ) );
							if ( $the_query->have_posts() ) :
							// the loop
							while ( $the_query->have_posts() ) : $the_query->the_post();
						?>
							<div class="event-image">
								<div class="event-date">
									<span class="day-of-month"><?php echo date( 'd', strtotime( get_post_meta( $post->ID, '_cmb_event_date', true ) ) ); ?></span>
									<span class="day-of-week"><?php echo date( 'D', strtotime( get_post_meta( $post->ID, '_cmb_event_date', true ) ) ); ?></span>
								</div>
								<?php if ( has_post_thumbnail() ) : ?>
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?></a>
								<?php endif; ?>
							</div>

							<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>

							<div class="event-location">
							<?php if ( get_post_meta( $post->ID, '_cmb_event_location', true ) != '' ) { ?>
								<span class="location"><i class="fa fa-map-marker"></i><?php echo get_post_meta( $post->ID, '_cmb_event_location', true ); ?></span>
							<?php } ?>
							<?php if ( get_post_meta( $post->ID, '_cmb_event_time', true ) != '' ) { ?>
								<span class="time"><i class="fa fa-clock-o"></i><?php echo get_post_meta( $post->ID, '_cmb_event_time', true ); ?></span>
							</div>
							<?php } ?>

							<?php if( has_excerpt() ) {
								the_excerpt();
							} else {
								echo '<p>' . trim_characters( get_the_content() ) . '</p>';
							} ?>
							<a href="<?php echo get_permalink(); ?>" class="learn-more"><?php _e( 'Learn More', 'ta-music' ); ?></a>
						<?php
							endwhile;
							// end of the loop
							wp_reset_postdata();
							endif;
						?>
						</div>

						<div class="row">
						<?php
							$the_query = new WP_Query( array( 'post_type' => 'event', 'showposts' => 2, 'offset' => 1, 'post_status' => 'publish', 'has_password' => false ) );
							if ( $the_query->have_posts() ) :
							// the loop
							while ( $the_query->have_posts() ) : $the_query->the_post();
						?>
							<div class="col-sm-6 event">
								<div class="event-image">
									<div class="event-date">
										<span class="day-of-month"><?php echo date( 'd', strtotime( get_post_meta( $post->ID, '_cmb_event_date', true ) ) ); ?></span>
										<span class="day-of-week"><?php echo date( 'D', strtotime( get_post_meta( $post->ID, '_cmb_event_date', true ) ) ); ?></span>
									</div>
								<?php if ( has_post_thumbnail() ) : ?>
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?></a>
								<?php endif; ?>
								</div>

								<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>

								<div class="event-location">
								<?php if ( get_post_meta( $post->ID, '_cmb_event_location', true ) != '' ) { ?>
									<span class="location"><i class="fa fa-map-marker"></i><?php echo get_post_meta( $post->ID, '_cmb_event_location', true ); ?></span>
								<?php } ?>
								<?php if ( get_post_meta( $post->ID, '_cmb_event_time', true ) != '' ) { ?>
									<span class="time"><i class="fa fa-clock-o"></i><?php echo get_post_meta( $post->ID, '_cmb_event_time', true ); ?></span>
								</div>
								<?php } ?>

								<?php if( has_excerpt() ) {
									the_excerpt();
								} else {
									echo '<p>' . trim_characters( get_the_content() ) . '</p>';
								} ?>
								<a href="<?php echo get_permalink(); ?>" class="learn-more"><?php _e( 'Learn More', 'ta-music' ); ?></a>
							</div>
						<?php
							endwhile;
							// end of the loop
							wp_reset_postdata();
							endif;
						?>
						</div>
					</div>

					<!-- from the blog -->
					<div class="col-md-14 recent-blog">
						<h2><?php _e( 'From', 'ta-music' ); ?>
							<span><?php _e( 'The Blog', 'ta-music' ); ?></span> 
							<a href="<?php if( get_option( 'show_on_front' ) == 'page' ) echo get_permalink( get_option( 'page_for_posts' ) ); else echo esc_url( home_url( '/' ) ); ?>" class="view-all">
							<span><?php _e( 'View All', 'ta-music' ); ?></span> 
							<i class="fa fa-angle-double-right view-all-icon"></i></a></h2>

						<?php
							$the_query = new WP_Query( array( 'posts_per_page' => -1, 'post_status' => 'publish', 'ignore_sticky_posts' => 1, 'has_password' => false ) );
							if ( $the_query->have_posts() ) :
							$i = 1;
							// the loop
							while ( $the_query->have_posts() ) : $the_query->the_post();
							if ( $i <= 4 && !get_post_format() ) :
						?>
						<div class="row recent-post">
							<!-- <div class="col-sm-6 post-image">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?></a>
							<?php endif; ?>
							</div> -->
							<!-- col-sm-6 -->
							<div class=" post-content">
								<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>

								<div class="post-meta">
									<span class="date"><i class="fa fa-calendar"></i><?php echo get_the_date( 'M j' ); ?></span>
									<?php
										if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
											echo '<span class="comments"><i class="fa fa-comments"></i>';
											comments_popup_link( __( 'No Comment', 'ta-music' ), __( '1 Comment', 'ta-music' ), __( '% Comments', 'ta-music' ) );
											echo '</span>';
										}
									?>
									<?php $category = get_the_category(); ?>
									<span class="tags"><i class="fa fa-tag"></i><a href="<?php echo get_category_link( $category[0]->term_id ); ?>"><?php echo $category[0]->cat_name; ?></a></span>
								</div>

								<?php if( has_excerpt() ) {
									the_excerpt();
								} else {
									echo '<p>' . trim_characters( get_the_content() ) . '</p>';
								} ?>
								<a href="<?php echo get_permalink(); ?>" class="read-more"><?php _e( 'Read More', 'ta-music' ); ?></a><i class="fa fa-angle-double-right read-more-icon"></i>
							</div>
						</div><!-- .recent-post -->
						<?php
							$i++;
							endif;
							endwhile;
							// end of the loop
							wp_reset_postdata();
							endif;
						?>
					</div><!-- .recent-blog -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section>
						?>
</main><!-- end main content area -->

<?php get_footer(); ?>