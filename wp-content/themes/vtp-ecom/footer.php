<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vtp-ecom
 */

?>

<footer>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="item-ft">
						<div class="logo"><a href=""><img src="<?php echo get_field('img_logo','option')['url'] ?>" class="img-fluid" alt=""></a></div>
						<div class="social">
							<p>Mạng xã hội</p>
							<ul class="list-inline">
								<?php while ( has_sub_field('mxh','option' )) : ?>
									<li class="list-inline-item"><a href="<?php echo get_sub_field('link_mxh','option') ?>"><?php echo get_sub_field('ten_mxh','option') ?></a></li>
								<?php endwhile; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item-ft">
						<div class="link-ft">
							<ul>
								<?php while ( has_sub_field('link_footer','option' )) : ?>
									<li><a href="<?php echo get_sub_field('lien_kets','option') ?>"><?php echo get_sub_field('ten_link','option') ?></a></li>
								<?php endwhile; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3"> 
					<div class="item-ft">
						<div class="info-place">
							<ul>
								<?php while ( has_sub_field('danh_sach','option' )) : ?>
									<li><img src="<?php echo get_sub_field( 'icon_ft','option')['url']; ?>" alt=""><?php echo get_sub_field( 'text_place','option'); ?></li>
								<?php endwhile; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item-ft">
						<div class="maps">
							<?php echo the_field('maps','option') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bott">
		<div class="container">
			<?php echo the_field('text_chan_trang','option') ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
 