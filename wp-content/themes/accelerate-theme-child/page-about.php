<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<section id="hero">
	<div id="primary" class="home-page hero-content">
		<div class="hero-main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<p><?php the_content(); ?></p>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>

	<section class="about">
		<div class="site-content">
			<div class="heading">
				<?php while ( have_posts() ) : the_post();
					$heading = get_field("heading");
					$our_services = get_field("our_services"); ?>
						<h4><?php echo $heading ?></h4>
						<p><?php echo $our_services ?></p>
				<?php endwhile; ?>
			</div>

			<ul class="about">
				<?php while ( have_posts() ) : the_post();
					$size = "medium";
					$image_1 = get_field('image_1');
					$content_strategy = get_field('content_strategy');
					$description_1 = get_field('description_1');
					$image_2 = get_field('image_2');
					$mapping = get_field('mapping');
					$description_2 = get_field('description_2');
					$image_3 = get_field('image_3');
					$social_media = get_field('social_media');
					$description_3 = get_field('description_3');
					$image_4 = get_field('image_4');
					$design_and_development = get_field('design_and_development');
					$description_4 = get_field('description_4'); ?>

						<li class="each-services">
							<figure>
									<?php echo wp_get_attachment_image($image_1, $size); ?>
							</figure>
							<div class="serv1">
								<h2><?php echo $content_strategy ?></h2>
								<p><?php echo $description_1 ?></p>
							</div>
						</li>

						<li class="each-services1">
							<div class="serv2">
								<h2><?php echo $mapping ?></h2>
								<p><?php echo $description_2 ?></p>
							</div>
							<figure>
									<?php echo wp_get_attachment_image($image_2, $size); ?>
							</figure>
						</li>

						<li class="each-services">
							<figure>
									<?php echo wp_get_attachment_image($image_3, $size); ?>
							</figure>
							<div class="serv1">
								<h2><?php echo $social_media ?></h2>
								<p><?php echo $description_3 ?></p>
							</div>
						</li>

						<li class="each-services1">
							<div class="serv2">
								<h2><?php echo $design_and_development ?></h2>
								<p><?php echo $description_4 ?></p>
							</div>
							<figure>
									<?php echo wp_get_attachment_image($image_4, $size); ?>
							</figure>
						</li>

						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
				</ul>
			</div>
		</section>

		<nav id="navigation" class="contact">
			<div class="container">
				<p>Interested in working with us?</p>
				<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
			</div>
		</nav>

		<?php get_footer(); ?>
