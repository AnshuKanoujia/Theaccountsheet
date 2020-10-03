<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>View Portfolio</title>
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
 <style>
     .span{
         font-size: 30px;
         
     }
 </style>
 <body class="hold-transition sidebar-mini">
  <div class="wrapper">
 
  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 style="text-align:center;">View Portfolio</h2>
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
		
            <!-- About Me Box -->
			<div class="row">
			<div class="col-md-2"></div>
			
			<div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                <h3 class="card-title"> <strong><i class="fas mr-1"></i> Protfolio </strong></h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body education_body">
			    <!--?php
				if(isset($user) && count($user)){
				     foreach($user as $value){
				 ?-->
				<img src="<?php echo base_url('uploads/'.$user_data['image']); ?>" style="height:700px; width:100%;"/>
		    	<strong class="span"><?=$user_data['title']; ?></strong>
				<p class="text-muted">
                <span class="span"><?=$user_data['sub_title']; ?></span><br/>
				<span class="span"><?=$user_data['description']; ?></span>
				</p>
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