<html>
<title> The Account Sheet  </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?=base_url('assets/w3-cv/');?>w3.css">
<!--<link rel="stylesheet" href="<?=base_url('assets/w3-cv/');?>w3.css">-->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="<?=base_url('assets/w3-cv/font-awesome/css/');?>font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:800px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-col">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
		     <?php 
			 
			 		$path = base_url('uploads/'.$person['image']); // 
					$type = pathinfo($path, PATHINFO_EXTENSION);
					$data = file_get_contents($path);
					$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		
			 ?>
          <img src="<?=$base64?>" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?= ucfirst($person['full_name']); ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?= ucfirst($person['designation']); ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?= ucfirst($person['message']); ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $person['email']; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $person['phone']; ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          <?php 
		        if(isset($person['skills'])){
				 foreach(explode(',',$person['skills']) as $value){
		   
		  
		  ?><p><?php echo ucfirst($value); ?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">98%</div>
          </div>
		  <?php
				 }  }
          ?>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
		   <?php 
		        if(isset($person['languages'])){
				 foreach(explode(',',$person['languages']) as $values){
		   
		  ?>
          <p><?=ucfirst($values);?> </p>
          <div class="w3-light-grey w3-round-xlarge">
             <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div> 
		 <?php } } ?>
          <br>
        </div>
      </div><br>

    </div>

  </div>
  
</div>


</body>
</html>