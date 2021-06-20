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
						<div class="logo"><a href=""><img src="<?php echo __BASE_URL__ ?>/images/logo.png" class="img-fluid" alt=""></a></div>
						<div class="social">
							<p>Mạng xã hội</p>
							<ul class="list-inline">
								<li class="list-inline-item"><a href="">Yt</a></li>
								<li class="list-inline-item"><a href="">Fb</a></li>
								<li class="list-inline-item"><a href="">Tw</a></li>
								<li class="list-inline-item"><a href="">Ig</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item-ft">
						<div class="link-ft">
							<ul>
								<li><a href="">Thông tin</a></li>
								<li><a href="index.php">Trang chủ</a></li>
								<li><a href="about.php">Giới thiệu</a></li>
								<li><a href="news.php">Bài viết</a></li>
								<li><a href="">Tài liệu tham khảo</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item-ft">
						<div class="info-place">
							<ul>
								<li><img src="<?php echo __BASE_URL__ ?>/images/f-1.png" class="img-fluid" alt="">9 Quan Nhân, Thanh Xuân, Hà Nội</li>
								<li><img src="<?php echo __BASE_URL__ ?>/images/f-2.png" class="img-fluid" alt="">(+1) 386-688-3295</li>
								<li><img src="<?php echo __BASE_URL__ ?>/images/f-3.png" class="img-fluid" alt="">contact@tanahair.std</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item-ft">
						<div class="maps">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9245786827278!2d106.46512091523748!3d10.817083792293976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310ad5eaee5c548f%3A0x312269c6e013cb30!2sC%C3%B4ng%20ty%20PCCC%20Kana!5e0!3m2!1svi!2s!4v1623959526282!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bott">
		<div class="container">
			@2020 VTPostek. All rights reserved.
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
 