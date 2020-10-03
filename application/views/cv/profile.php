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
			 
			 		$path = base_url('uploads/'.$profile_person['image']); // 
					$type = pathinfo($path, PATHINFO_EXTENSION);
					$data = file_get_contents($path);
					$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		
			 ?>
          <img src="<?=$base64?>" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?=$profile_person['name']?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i> <?=$profile_person['name']?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$profile_person['email']?> </p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$profile_person['mobile']?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$profile_person['address']?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$profile_person['dob']?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Company</b></p>
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$profile_person['cmp_name']?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$profile_person['cmp_email']?> </p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$profile_person['cmp_phone']?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$profile_person['cmp_address']?></p>
		  
          <br>

        </div>
      </div><br>

    </div>

  </div>
  
</div>


</body>
</html>