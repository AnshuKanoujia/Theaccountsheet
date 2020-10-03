<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>View Resume</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>plugins/summernote/summernote-bs4.css">
  <!-- Circe Progress-bar-->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>plugins/circle/css/circle.css">
  
  <script src="<?php echo base_url('assets/admin/');?>plugins/jquery/jquery.min.js"></script>
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
 
 <body class="hold-transition sidebar-mini">
  <div class="wrapper">
 
  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 style="text-align:center;">View Resume</h2>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->	
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-info card-outline">
			<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
			<?php
              $profile_complete = 0;
              if($user['image']!=''){$profile_complete+=25;}
              if($user['full_name']!='' && $user['email']!='' && $user['phone']!=''){$profile_complete+=30;}
              if(count($user)){$profile_complete+=15;}
              if(count($user)){$profile_complete+=15;}
              if(count($user)){$profile_complete+=15;}
			?>
              <div class="card-body box-profile" >
                <div class="text-center" style="background:url('<?php echo base_url('uploads/'.$user['back_img']); ?>');">
				<?php  if($user['image']!=''){ ?>
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?=base_url('uploads/'.$user['image']); ?>"
                       alt="User profile picture" style="height:100px;"/>
				<?php } ?>	   
                </div>
                <script>
				  var profileData = <?php echo json_encode($user); ?>;
				</script>
                <h3 class="profile-username text-center"><?= ucfirst($user['full_name']); ?></h3>
				  <div class="progress">
					  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $profile_complete; ?>"
					  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $profile_complete; ?>%">
						<?php echo $profile_complete; ?>% Complete (Profile)
					  </div>
					</div> 
					
                <p class="text-muted text-center"><?= $user['designation']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Name</b> <a class="float-right"><?= ucfirst($user['full_name']); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?= $user['email']; ?></a>
                  </li>
				  <li class="list-group-item">
                    <b>Phone</b> <a class="float-right"><?= $user['phone']; ?></a>
                  </li>
				  <li class="list-group-item">
                    <b>Designation</b> <a class="float-right"><?= $user['designation']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Date Of Birth</b> <a class="float-right"><?= $user['dob']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Gender</b> <a class="float-right"><?= $user['gender']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Address</b> <a class="float-right"><?= $user['message']; ?></a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
           
			<div class="col-md-2" style="padding-top:90px;">
			  <div class="row" style="border:2px solid lightgray; padding:15px;">
				 <p><b><center>Complete Profile.</center></b></p>
				 <div class="col-md-2" ></div>
			     <div class="col-md-8">
					<div class="c100 p<?php echo $profile_complete; ?> small">
						<span><?php echo $profile_complete; ?>%</span>
						<div class="slice">
							<div class="bar"></div>
							<div class="fill"></div>
						</div>
					</div>
				 </div>
				 <div class="col-md-2" ></div>
				 <div class="col-md-12">
				    <ol class="list-group list-group-unbordered mb-3">
					  <li> <b>Picture</b> <a class="float-right">25%</a></li>
					  <li> <b>User Detail</b> <a class="float-right">30%</a></li>
					  <li> <b>Education</b> <a class="float-right">15%</a></li>
					  <li> <b>Experience</b> <a class="float-right">15%</a></li>
					  <li> <b>Skill</b> <a class="float-right">15%</a></li>
					</ol>
				 </div>
				
			  </div>
			    
				
			  
			</div>
			<div class="col-md-2"></div>
            <!-- /.card -->
      </div>
            <!-- About Me Box -->
			<div class="row">
			<div class="col-md-2"></div>
			
			<div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <strong><i class="fas fa-book mr-1"></i> Education </strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body education_body">
			    <!--?php
				if(isset($user) && count($user)){
				     foreach($user as $value){
				 ?-->
		    	<strong><i class="fas fa-book mr-1"></i> <?=$user['education']; ?></strong>
               
				<!--<p class="text-muted">
                <span><?=$value['degree']; ?></span><br/>
				<span><?=$value['start_year']; ?>-<?=$value['end_year']; ?></span><br/>
				<span><?=$value['description']; ?></span>
				</p>-->
                <hr/> 
                 <!--?php	 
					   }				 
					 }
                 ?-->
              </div>
              <!-- /.card-body -->
            </div>
			</div>
			<div class="col-md-2"></div>
			
			</div>
			
			
			 <!-- About Me Box -->
			<div class="row">
			<div class="col-md-2"></div>
			
			<div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <strong><i class="fas fa-book mr-1"></i> Experience </strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body experience_body">
			    <!--?php
					if(isset($user) && count($user)){
				     foreach($user as $value){
				 ?-->
		    	<strong><i class="fas fa-book mr-1"></i> <?=$user['exprience']; ?></strong>
               
               <!-- <p class="text-muted">
                 <span><?=$value['designation']; ?>
                </span><br/>
				<span><?=$value['start_date']; ?>-<?=$value['end_date']; ?></span><br/>
				<span><?=$value['description']; ?></span>
				<span><?=$value['address']; ?></span>
				</p>-->
                <hr/> 
                 <!--?php	
					  }				 
					 }
                 ?-->
             </div>
              <!-- /.card-body -->
            </div>
			</div>
			<div class="col-md-2"></div>
			</div>
			
			 <!-- About Me Box -->
			<div class="row">
			<div class="col-md-2"></div>
			
			<div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <strong><i class="fas fa-book mr-1"></i> Skills </strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body skill_body">
			    <!--?php
				if(isset($user) && count($user)){
				     foreach($user as $value){
				 ?-->
		    	<strong><i class="fas fa-book mr-1"></i> <?=$user['skills']; ?></strong>
                
                <hr/> 
                 <!--?php	
					   }				 
					 }
                 ?-->
             </div>
              <!-- /.card-body -->
            </div>
			</div>
			<div class="col-md-2"></div>
			</div>
			
			 <!-- About Me Box -->
			<div class="row">
			<div class="col-md-2"></div>
			
			<div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <strong><i class="fas fa-book mr-1"></i> Hobbies </strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-file-alt mr-1"></i> Hobbies</strong>
                 
                <p class="text-muted"><?=$user['hobbies']; ?></p>
                <hr/>
                <strong><i class="far fa-file-alt mr-1"></i> Language</strong>
                  
                <p class="text-muted"><?=$user['languages']; ?></p>

              </div>
              <!-- /.card-body -->
            </div>
			</div>
			<div class="col-md-2"></div>
			</div>
            <!-- /.card -->
            
             <!-- About Me Box -->
			<div class="row">
			<div class="col-md-2"></div>
			
			<div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <strong><i class="fas fa-book mr-1"></i> Other </strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                 
                <p class="text-muted"><?=$user['message']; ?></p>
                <hr/>
                <strong><i class="far fa-file-alt mr-1"></i> Summary</strong>
                  
                <p class="text-muted"><?=$user['summary']; ?></p>

              </div>
              <!-- /.card-body -->
            </div>
			</div>
			<div class="col-md-2"></div>
			</div>
            <!-- /.card -->
            
            
          </div>
      
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  </div>
  </div>
  
    
    <script src="<?php echo base_url('assets/admins/');?>plugins/jQuery/jQuery-2.1.3.min.js"></script>
    
    <script src="<?php echo base_url('assets/admins/');?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   
    <script src="<?php echo base_url('assets/admins/');?>plugins/iCheck/icheck.min.js" type="text/javascript"></script>
   
  </body>
</html>