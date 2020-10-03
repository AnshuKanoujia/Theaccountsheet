<?php include('header.php'); ?>	
	
			<!-- //navigation -->
			<div class="banner-w3text w3layouts">
				<div class="container">
					<h2></h2> 
				</div> 
			</div> 
		</div>
	</div>
	<!-- //banner --> 
	<!-- gallery -->
	<!---<div class="gallery">
		<div class="container">  
			
			<div class="gallery-grids-top">
				<h3 class="w3ls-title">Our Resume List </h3> 
				<div class="gallery-grids">
			
				<?php  
				    if($all_data){
					  foreach($all_data as $value){
				?>
					<div class="col-md-3 col-sm-3 col-xs-4 gallery-grid-img"> 
						<a class="example-image-link w3-agilepic" href="<?php echo base_url('new_pdf/'.$value['id']);?>" data-lightbox="example-set" data-title="" target="_blank" >
							<img class="example-image img-responsive" src="<?php echo base_url('assets/front/images/pdf.png'); ?>" alt="" style="height: 250px;;" /> 
							<div class="w3ls-overlay">
								<p><?php echo $value['full_name']; ?></p>
								<p><?php echo $value['email']; ?></p>
								
							</div> 
						</a> 
					</div>  
					<?php } } ?> 
					
					<div class="clearfix"> </div>	
						
				</div> 
				
				
				</div>
					<script src="js/lightbox-plus-jquery.min.js"></script>	
			
			</div> 
		</div>  --->
		
		
		<!-- //gallery -->    

  <!---	<div class="gallery">
		<div class="container">  
			
			<div class="gallery-grids-top">
				<h3 class="w3ls-title">Our Portfolio List </h3> 
				<div class="gallery-grids">
			
				<?php  
				
				    if($all_portfolio){
					  foreach($all_portfolio as $values){
				?>
					<div class="col-md-3 col-sm-3 col-xs-4 gallery-grid-img"> 
						<a class="example-image-link w3-agilepic" href="<?php echo base_url('new_protfolio/'.$values['id']);?>" data-lightbox="example-set" data-title="" target="_blank" >
							<img class="example-image img-responsive" src="<?php echo base_url('assets/front/images/pdf.png'); ?>" alt="" style="height: 250px;;" /> 
							<div class="w3ls-overlay">
								<p><?php echo $values['title']; ?></p>
								<p><?php echo $values['sub_title']; ?></p>
								
							</div> 
						</a> 
					</div>  
					<?php } } ?>
					
					
					<div class="clearfix"> </div>	
				
					
				</div> 
				
				
				</div>
					<script src="js/lightbox-plus-jquery.min.js"></script>	
			
			</div> 
		</div>  --->
	
	<!-- gallery -->
	
	<!--<div class="gallery">
		<div class="container">  
			
			<div class="gallery-grids-top">
				<h3 class="w3ls-title">Our Profile List </h3> 
				<div class="gallery-grids">
			
				<?php  
				
				    if($all_profile){
					  foreach($all_profile as $values){
				?>
					<div class="col-md-3 col-sm-3 col-xs-4 gallery-grid-img"> 
					  <a class="example-image-link w3-agilepic" href="<?php echo base_url('new_profile/'.$values['id']);?>" data-lightbox="example-set" data-title="" target="_blank" >
							<img class="example-image img-responsive" src="<?php echo base_url('assets/front/images/pdf.png'); ?>" alt="" style="height: 250px;;" /> 
							<div class="w3ls-overlay">
								<p><?php echo $values['name']; ?></p>
								<p><?php echo $values['email']; ?></p>
							</div> 
						</a> 
					</div>  
					<?php } } ?>
					
					<div class="clearfix"> </div>	
				
					
				</div> 
				
				
				</div>
					<script src="js/lightbox-plus-jquery.min.js"></script>	
			
			</div> 
				
		</div> --->
		
		
	
	   <div class="banner_img">  
			  <!--h3 class="w3ls-title">Our Profile List </h3--> 
				 <img src="uploads/preview.png" style="height: auto; width: 100%;"/> 
		</div>
		
	</div>
	<!-- //gallery -->    


<div id="myDiv"></div>
	
<script type="text/javascript">
/*  $('#myDiv').floatingWhatsApp({
    phone: '5491133359850',
    popupMessage: 'Hello, how can we help you?',
    showPopup: true
}); */
 $(function () {
           /*$('#myDiv').floatingWhatsApp({
               phone: '9794635811', //WhatsApp Business phone number
               //headerTitle: 'Chat with us on WhatsApp!', //Popup Title
               //popupMessage: 'Hello, how can we help you?', //Popup Message
               showPopup: true, //Enables popup display
               
               //headerColor: 'crimson', //Custom header color
               //backgroundColor: 'crimson', //Custom background button color
               position: "left" //Position: left | right

           });*/
       });
</script>
	<?php include('footer.php'); ?>	

	