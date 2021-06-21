<?php /* Template Name: Liên hệ */ ?>
<?php get_header(); ?>

<main>
	<section class="contact">
		<div class="avarta-ctn"><img src="<?php echo get_field('banner')['url'] ?>" class="img-fluid w-100" alt=""></div>
		<div class="box-contact-info">
			<div class="container">
				<div class="contact-info">
					<div class="top text-center">
						<h1 class="f-fs text-uppercase"><?php echo the_field('title') ?></h1>
						<ul>
							<?php while ( has_sub_field('infomation' )) : ?>
								<li><?php echo get_sub_field( 'thong_tin'); ?></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<div class="frm-contact">
						<div class="item">
							<div class="row">
								<?php echo do_shortcode('[contact-form-7 id="135" title="Contact"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>