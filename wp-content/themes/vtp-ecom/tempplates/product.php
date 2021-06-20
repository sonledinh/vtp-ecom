<?php /* Template Name: Sản phẩm */ ?>
<?php get_header(); ?>

<main>
	<section class="product">
		<div class="container">
			<div class="list-prd">
				<?php
					$args=array(
                        'post_type' => 'cpt_97',
                        'orderby'   => 'publish_date',
                        'order'     => 'DESC',
                        'posts_per_page' => 4,
                    );
                    $my_query = new wp_query($args);
				?> 
				<div class="row">
					<?php if ( $my_query->have_posts() ): ?>
	                    <?php while ($my_query->have_posts()):$my_query->the_post(); ?>

							<div class="col-md-6 col-sm-6">
								<div class="item-prd">
									<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
									<div class="info text-center">
										<h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
										<div class="desc"><?php echo the_field('numb_prd') ?></div>
									</div>
								</div>
							</div>
	                    <?php endwhile ?>
	                <?php endif;wp_reset_query(); ?>
				</div>
			</div>
			<div class="pagination w-100 text-center">
				<!-- <ul class="list-inline w-100">
					<li class="list-inline-item"><a href="" class="active">1</a></li>
					<li class="list-inline-item"><a href="">2</a></li>
					<li class="list-inline-item"><a href="">3</a></li>
					<li class="list-inline-item"><a href="">4</a></li>
				</ul> -->

				<?php 
					$total_pages = $my_query->max_num_pages;
					if ($total_pages > 1){
						$current_page = max(1, get_query_var('paged'));
						echo paginate_links(array(
							'base' => get_pagenum_link(1) . '%_%',
							'current' => $current_page,
							'total' => $total_pages,
							'prev_text' => '&laquo;',
							'next_text' => 'Next',
							'type' => 'list'
						));
					}
				?>
			</div>
		</div> 
	</section>
</main>

<?php get_footer(); ?>