<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vtp-ecom
 */

get_header();
?>

<main> 
	<section class="content-detail">
		<div class="banner-post"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" style="height: 45vh;object-fit: cover;" alt=""></div>
		<div class="container">
			<div class="detail">
				<div class="detail-title">
					<h1 class="f-fs"><?php echo get_the_title() ?></h1>
					<div class="date-author">
						<ul class="list-inline">
							<li class="list-inline-item">Cập nhật lần cuối:  <?php echo get_the_date() ?></li>
							<li class="list-inline-item">Đăng bởi: <?php echo get_the_author() ?></li>
						</ul>
					</div> 
				</div>
				<div class="the-content">
					<?php echo the_content() ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>