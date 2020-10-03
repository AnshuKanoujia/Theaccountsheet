<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
 <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>User Registration</b></a>
  </div>

  <div class="card">
  <form action="<?=base_url('profile_register'); ?>" method="post">
    <div class="card-body register-card-body first-form">
      <p class="login-box-msg">Register a new membership</p>
            
       <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="First Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
		
		<div class="input-group mb-3">
          <input type="text" name="last" class="form-control" placeholder="Last Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
         		
        <div class="input-group mb-3">
          <input type="text" name="mobile" class="form-control" placeholder="Mobile">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
				
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Create Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-12">
              <!--p style="font-size:14px;">
               By clicking Agree & Join, you agree to the LinkedIn <a href="#" >User Agreement</a>, <a href="#">Privacy Policy</a>, and <a href="#" >Cookie Policy</a>.
              </p-->
      
          </div>
          <button type="submit" class="btn btn-block btn-primary"><i class="mr-2"></i>Register
          </button>
          <!-- /.col -->
        </div>
      
	  <br/>
	  Already on LinkedIn? <a href="<?=base_url('profile_login');?>" class="text-center">Sign in</a>
	  
    </div><!-- End OF First  From -->
	
	</form>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/admin/');?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/admin/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin/');?>dist/js/adminlte.js"></script>

<script>

$(document).ready(function(){
	   $('.second-form').hide();
	   $('.third-form').hide();
	$('#first_btn').click(function(){
		$('.first-form').hide();
	    $('.second-form').show();
	    $('.third-form').hide();
	});
	$('#second_btn').click(function(){
		$('.first-form').hide();
	    $('.second-form').hide();
	    $('.third-form').show();
	});
});

</script>
</body>
</html>
