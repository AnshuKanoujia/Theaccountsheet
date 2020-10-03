<!-- features -->
	<div class="features about">
		<div class="container">   
			<div class="wthree-features-row">
				<div class="col-md-4 features-w3grid">
					<div class="col-xs-3 features-w3lleft">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 features-w3lright"> 
						<h4>CONTACT</h4>
						<!--p>+91 9044888111</p-->
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 features-w3grid">
					<div class="col-xs-3 features-w3lleft">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 features-w3lright"> 
						<h4>LOCATION</h4>
						<!--p>UGF 1, SUMAN APARTMENT.INDRA NAGAR 226 016</p-->
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 features-w3grid">
					<div class="col-xs-3 features-w3lleft">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 features-w3lright"> 
						<h4>EMAIL</h4>
						<p><a href="mailto:info@theaccountsheet.com">info@theaccountsheet.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //features -->
	<!-- footer -->
	<div class="footer w3layouts">
		<div class="container">
			<div class="footer-agileinfo">
				<div class="col-md-4 col-sm-6 footer-grid">
					<h3>About Us</h3>
					<p>The Account Sheet</p> 
				</div> 
				<div class="col-md-4 col-sm-6 footer-grid footer-tags">
					<h3>Navigation</h3>
					<ul>
						<li><a href="#"><i class="fa fa-angle-right"></i> Home</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i> About</a></li> 
						<li><a href="#"><i class="fa fa-angle-right"></i> Gallery</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i> Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-6 footer-grid w3social">
					<h3>Media</h3>
					<ul>
						<li><a href="#"><i class="fa fa-google-plus"></i>Google-plus</a></li>
						<li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
						<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i>Dribbble</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div>
	<div class="copy-right wthree"> 
		<div class="container">
			<p>© 2020 All rights reserved <a href="https://theaccountsheet.com/"> TheAccountSheet.com</a></p>
		</div>
	</div>  
	<!-- //footer -->
	<!-- modal-about -->
	<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body modal-spa">
					<img src="images/img2.jpg" class="img-responsive" alt=""/>
					<h4>Cras rutrum iaculis enim</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius miet congue consectetur adipiscing. <br>Uisque molestie cursus miet congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in. Fusce lacus purus, pulvinar ut lacinia id, sagittis eu mi. Vestibulum eleifend massa sem, eget dapibus turpis efficitur at. </p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal-about -->     
	<!-- start-smooth-scrolling -->
	<script src="<?php echo base_url('assets/front/');?>js/SmoothScroll.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url('assets/front/');?>js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/front/');?>js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({s	crollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <script src="<?php echo base_url('assets/front/');?>js/bootstrap.js"></script>
</body>
</html>