<?php /* Template Name: Giới thiệu */ ?>
<?php get_header(); ?>

<main> 
	<section class="content-detail">
		<div class="banner-about">
			<img src="<?php echo get_field('avr_banner')['url'] ?>" class="img-fluid w-100" alt="">
			<div class="info">
				<div class="container">
					<h1 class="f-fs"><?php echo the_field('title') ?></h1>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="detail">
				<div class="detail-title">
					<h1 class="f-fs"><?php echo the_field('title_post_about') ?></h1>
					<div class="date-author">
						<ul class="list-inline">
							<li class="list-inline-item">Cập nhật lần cuối:  <?php echo get_the_date('d/m/y') ?></li>
							<li class="list-inline-item">Đăng bởi: <?php echo get_the_author() ?></li>
						</ul>
					</div> 
				</div>
				<div class="the-content text-justify">
					<?php echo the_content() ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>