<?php

include('include/header_css.php');



?>



<div class="row">
 <div class="col-md-3"></div>

 <div class="col-md-6">

  <div class="card card-info">
              <div class="card-header text-center">
                <h3 class="card-title"> Admin Login </h3>
              </div>
			  <div class="message"></div>

              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="<?php echo base_url('admin_login'); ?>" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div>
                </div>
               
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-info btn-lg">Sign in</button>
                  
                </div>
                
              </form>
            </div>
         </div>
			
	 <div class="col-md-3"></div>		

</div>

