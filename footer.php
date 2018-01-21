<footer>
	<div class="container">
		<div class="footer-top">
			<div class="footer-subscribe">
				<input type="email" name="subscribe_email" placeholder="სიახლეების გამოწერა"><i class="fa fa-angle-double-right"></i>
			</div>
			<div class="footer-menu">
				<ul>
					<li><a href="">მთავარი</a></li>
					<li><a href="aboutus.php">ჩვენ შესახებ</a></li>
					<li><a href="">ისტორია</a></li>
					<li><a href="">მართვის ცენტრი</a></li>
					<li><a href="">კონტაქტი</a></li>
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-copyright">&copy; 2017 - Privacy Policy</div>
			<div class="footer-social"><i class="fa fa-facebook-square"></i><i class="fa fa-youtube-square"></i></div>
			<div class="footer-creator">CREATED BY - <a href="http://www.lemons.ge" target="_blank">LEMONS</a></div>
		</div>
	</div>
</footer>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.header-slick').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: false,
			infinite: true,
			arrows: true,
			autoplay: true,
			autoplaySpeed: 5000,
			cssEase: 'cubic-bezier(0.950, 0.050, 0.795, 0.035)',
			pauseOnHover:false
		});
		$('.region-slick').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: false,
			infinite: true,
			arrows: true,
			autoplay: true,
			autoplaySpeed: 5000,
			cssEase: 'cubic-bezier(0.950, 0.050, 0.795, 0.035)',
			pauseOnHover:false
		});
	});
	</script>
    <script src="<?php echo URL; ?>public/js/mousewheel.js"></script>
    <script src="<?php echo URL; ?>public/js/slick.min.js"></script>
</body>
</html>