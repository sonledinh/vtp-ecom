<?php /* Template Name: Trang chủ */ ?>
<?php get_header(); ?>
<main>
	<section class="box-banner">
		<div class="swiper-container">
		    <div class="swiper-wrapper">
		    	<?php while ( has_sub_field('slide_banner' )) : ?>
					<div class="swiper-slide">
			        	<div class="item-banner">
							<div class="avarta"><img src="<?php echo get_sub_field( 'avar_banner' )['url']; ?>" class="img-fluid w-100" alt=""></div>
							<div class="caption f-fs">
								<div class="info">
									<div class="date-banner"><?php echo get_sub_field( 'title_bn_1'); ?></div>
									<h2><?php echo get_sub_field( 'title_bn_2'); ?></h2>
								</div>
							</div>
						</div>
			        </div>
				<?php endwhile; ?>
		    </div>

			<div class="swiper-button-prev ar-swip"><i class="fa fa-angle-left"></i></div> 
		    <div class="swiper-button-next ar-swip"><i class="fa fa-angle-right"></i></div> 

		</div>
	</section>
	<section class="box-about" style="background: url('<?php echo get_field('banner_about')['url'] ?>') no-repeat center;background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="txt-about">
						<h1 class="f-fs"><?php echo the_field('title_about') ?></h1>
						<div class="desc">
							<?php echo the_field('sort_about') ?>
						</div>
						<div class="btn-main"><a href="<?php echo the_field('link_about') ?>">Xem thêm</a></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="avr-about text-center"><img src="<?php echo get_field('avarta_about')['url'] ?>" class="img-fluid" alt=""></div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-prd" style="background: #FFF4F7">
		<div class="container">
			<div class="title f-fs">
				<div class="row align-items-center">
					<div class="col-md-6">
						<h2><?php echo the_field('title_prd') ?></h2>
					</div>
					<div class="col-md-6 text-right">
						<a href="<?php echo the_field('link_prd') ?>">Xem tất cả</a>
					</div>
				</div>
			</div>
			<div class="list-prd">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="item-prd">
							<div class="avarta"><a href="product-detail.php"><img src="<?php echo __BASE_URL__ ?>/images/prd-1.png" class="img-fluid w-100" alt=""></a></div>
							<div class="info text-center">
								<h3><a href="product-detail.php">Thương mại</a></h3>
								<div class="desc">3000+ sản phẩm</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="item-prd">
							<div class="avarta"><a href="product-detail.php"><img src="<?php echo __BASE_URL__ ?>/images/prd-2.png" class="img-fluid w-100" alt=""></a></div>
							<div class="info text-center">
								<h3><a href="product-detail.php">Vé máy bay</a></h3>
								<div class="desc">3000+ sản phẩm</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="item-prd">
							<div class="avarta"><a href="product-detail.php"><img src="<?php echo __BASE_URL__ ?>/images/prd-3.png" class="img-fluid w-100" alt=""></a></div>
							<div class="info text-center">
								<h3><a href="product-detail.php">Văn phòng phẩm</a></h3>
								<div class="desc">3000+ sản phẩm</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-video">
		<div class="container">
			<div class="title text-center f-fs text-uppercase">
				<h2><?php echo the_field('title_video') ?></h2>
			</div>
		</div>
		<div class="info-video text-center">
			<div class="avarta"><img src="<?php echo get_field('banner_video')['url'] ?>" class="img-fluid w-100" alt=""></div>
			<div class="play-video"><a href="javascript:void(0)"><img src="<?php echo __BASE_URL__ ?>/images/play.png" class="img-fluid" alt="" data-toggle="modal" data-target="#myModal"></a></div>
		</div>

		<div class="modal fade" id="myModal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-body">
		        <div class="content-popup">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		        	<?php echo the_field('iframe_video') ?>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</section>
	<section class="box-news">
		<div class="container">
			<div class="title">
				<div class="row align-items-center">
					<div class="col-md-6">
						<h2 class="f-fs"><?php echo the_field('title_news') ?></h2>
					</div>
					<div class="col-md-6 text-right">
						<a href="<?php echo the_field('link_news') ?>" class="title-news">Xem thêm <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="slide-news">
				<?php 
                    $args_nb=array(
                        'post_type' => 'post',
                        'orderby'   => 'publish_date',
                        'order'     => 'DESC',
                        'posts_per_page' => 10,
                    );   
                    $my_query_nb = new wp_query($args_nb);
                ?>
                <?php if ( $my_query_nb->have_posts() ): ?>
                    <?php while ($my_query_nb->have_posts()):$my_query_nb->the_post(); ?>
						<div class="item-slide">
							<div class="item-new-home">
								<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
								<div class="info">
									<div class="date-home"><span>TIPS</span><label><?php echo get_the_date() ?></label></div>
									<h3><a href="<?php echo get_the_permalink() ?>" class="f-fs"><?php echo get_the_title(); ?></a></h3>
									<div class="more-n">
										<a href="<?php echo get_the_permalink() ?>">Read more</a>
									</div>
								</div>
							</div>
						</div>
                    <?php endwhile ?>
                <?php endif;wp_reset_query(); ?>
			</div>
		</div>
	</section>
	<section class="contact-home" style="background: url('<?php echo get_field('banner_ctn')['url'] ?>') no-repeat center; background-size:cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="left">
						<h2 class="f-fs"><?php echo the_field('title_ctn') ?></h2>
						<div class="form-ctn-home">
							<div class="item"><input type="text" class="txt-inp" placeholder="Tên (*)"></div>
							<div class="item"><input type="text" class="txt-inp" placeholder="SĐT (*)"></div>
							<div class="item"><input type="text" class="txt-inp" placeholder="Email (*)"></div>
							<div class="item"><textarea placeholder="Nội dung (*)"></textarea></div>
							<div class="item">
								<p>Chúng tôi cam kết mọi thông tin của bạn đều được bảo mật</p>
							</div>
							<div class="item"><input type="submit" class="btn-ctc" value="Gửi"></div>
						</div>
					</div>
				</div>
				<div class="col-md-8 text-right">
					<div class="avarta"><img src="<?php echo get_field('avar_ctn')['url'] ?>" class="img-fluid" alt=""></div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>