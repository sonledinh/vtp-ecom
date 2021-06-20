<?php /* Template Name: Tin tức */ ?>
<?php get_header(); ?>

<main> 
	<section class="news">
		<div class="container">
			<div class="list-news">
				<div class="row">
					<?php 
                        $args=array(
                            'post_type' => 'post',
                            'orderby'   => 'publish_date',
                            'order'     => 'DESC',
                            'paged'     => get_query_var('paged') ? get_query_var('paged') : 1,
                            'posts_per_page' => 8,
                        );
                        $my_query = new wp_query($args);
                        $max_num_pages = $my_query->max_num_pages;
                    ?>
                    <?php $i = 0; ?>
                    <?php if ( $my_query->have_posts() ): ?>
                        <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
                            <?php $i++ ?>
                            <?php if ($i == 1): ?>
                            	<div class="col-md-8">
									<div class="new-bigs">
										<div class="avarta">
											<a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a>
											<div class="date"><span>25</span><label class="text-uppercase">AUG</label></div>
										</div>
										<div class="info">
											<h1><a href="<?php echo get_the_permalink() ?>" class="f-fs"><?php echo get_the_title(); ?></a></h1>
											<div class="desc">
												<?php echo get_the_excerpt(); ?>
											</div>
										</div>
									</div>
								</div>
                            <?php else: ?>
                            	<div class="col-md-4 col-sm-4">
									<div class="item-news">
										<div class="avarta">
											<a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a>
											<div class="date"><span>25</span><label class="text-uppercase">AUG</label></div>
										</div>
										<div class="info">
											<h3><a href="<?php echo get_the_permalink() ?>" calss="f-fs"><?php echo get_the_title(); ?></a></h3>
											<div class="desc">
												<?php echo get_the_excerpt(); ?>
											</div>
										</div>
									</div>
								</div>
                            <?php endif ?>
                        <?php endwhile ?>
                    <?php endif;wp_reset_query(); ?>

					<div class="col-md-12">
						<div class="pagination-news text-center">
							<!-- <ul class="list-inline">
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
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>