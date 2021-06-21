<?php /* Template Name: Chi tiết sản phẩm */ ?>
<?php get_header(); ?>

<main class="product">
	<section class="bread">
		<div class="container">
			<ul class="list-inline f-fs ">
				<li class="list-inline-item"><a href="index.php">Sản phẩm</a></li>
				<li class="list-inline-item"><a href="javascript:void(0)"><?php echo get_the_title() ?></a></li>
			</ul>
		</div>
	</section>
	<section class="product-detail">
		<div class="container"> 
			<div class="previews">  
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="thumb-preview">
							<?php 
			        			$thuvien = get_field('album_gall');
			        		?>
							<div class="slider-for">
								<?php foreach( $thuvien as $image_id ): ?>
                                    <div class="carousel-item">
                                        <img class="" src="<?php echo esc_url($image_id['url']); ?>" class="img-fluid" width="100%" alt="<?php echo $image_id['url']; ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="slider-nav">
                            	<?php foreach( $thuvien as $image_id ): ?>
                                    <div class="clc">
                                     	<div class="item"><img class="" src="<?php echo esc_url($image_id['url']); ?>" width="100%" alt="<?php echo esc_url($image_id['url']); ?>"></div>
                                     </div>
                                <?php endforeach; ?>
                            </div>
						</div>  
					</div> 
					<div class="col-md-6 col-sm-6">
						<div class="info-preview">
							<h1 class="f-fs"><?php echo get_the_title(); ?></h1>
							<div class="desc">
								<?php echo the_content(); ?>
							</div>
							<div class="btn-main"><a href="<?php echo the_field('tim_hieu_them') ?>">Tìm hiểu thêm</a></div>
							<div class="social">
								<ul class="list-inline"> 
									<?php while ( has_sub_field('mxh_prd' )) : ?>
										<li class="list-inline-item"><a href="<?php echo get_sub_field( 'link_lien_kết' ); ?>"><img src="<?php echo get_sub_field( 'icon_lien_kết' )['url']; ?>" class="img-fluid" alt=""></a></li>
									<?php endwhile; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer() ?>    