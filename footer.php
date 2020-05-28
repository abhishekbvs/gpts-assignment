<footer id="footer">
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h5 class="footer-title">GPTS  e-commerce</h5>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Amrita Vishwa Vidyapeetham</a></li>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title"> _____</h3>
								<p> </p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-phone"></i>+918125307464</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>bvsabhishek@gmail.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Social</h3>
								<ul class="footer-links">
									<li><a href="https://github.com/abhishekbvs"><i class="fa fa-github"></i>Github</a></li>
									<li><a href="https://linkedin.com/in/abhishek-bvs"><i class="fa fa-linkedin"></i>Linkedin</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">____</h3>
								<ul class="footer-links">
									<li><a href="https://twitter.com/abhishekbvs"><i class="fa fa-twitter"></i>Twitter</a></li>
									<li><a href="https://www.instagram.com/abhishek_bvs/"><i class="fa fa-instagram"></i>Instagram</a></li>
									
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>
					</div>
					<div class="row text-center">
							<p>Built by <strong>Abhishek Bvs</strong> &copy;<script>document.write(new Date().getFullYear());</script></p>
					<div>
				</div>
			</div>
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    	<script src="js/script.js"></script>
		<script type="text/javascript">
			$('.block2-btn-addcart').each(function(){
				var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
				$(this).on('click', function(){
					swal(nameProduct, "is added to cart !", "success");
				});
			});
		</script>
	
