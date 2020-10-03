<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Login</title> 
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
   
    <link href="<?php echo base_url('assets/admins/');?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    <link href="<?php echo base_url('assets/admins/');?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
   
    <link href="<?php echo base_url('assets/admins/');?>plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url('admin');?>"><b>Admin Login</b></a>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="<?php echo base_url('admin_login');?>" method="post">
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
          </div>
        </form>
       </div>
    </div>

    <script src="<?php echo base_url('assets/admins/');?>plugins/jQuery/jQuery-2.1.3.min.js"></script>
    
    <script src="<?php echo base_url('assets/admins/');?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   
    <script src="<?php echo base_url('assets/admins/');?>plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%'
        });
      });
    </script>
  </body>
</html>