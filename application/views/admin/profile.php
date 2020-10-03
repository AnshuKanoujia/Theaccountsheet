<?php

include('include/header_css.php');
include('include/header_nav.php');
include('include/header_aside.php');

?> 

 <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid"> 
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Profile </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Profile </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
		  
		  <form action="<?php echo base_url('profile'); ?>" method="post" enctype="multipart/form-data">
          <!-- /.card-header -->
          <div class="card-body">
               <?php if(!empty($this->session->flashdata('success'))){?>
              <h4 class="text-info">&nbsp;&nbsp;&nbsp; <?=$this->session->flashdata('success')?> </h4>
              <?php } ?>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
				  <div class="card-body">
				  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name </label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name ">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1"> Date Of Birth </label>
                    <input type="date" name="dob" class="form-control" id="exampleInputEmail1" placeholder="Enter Date Of Birth ">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Company Name </label>
                    <input type="text" name="cmp_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Name ">
                  </div>
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">Company Phone </label>
                    <input type="text" name="cmp_phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Phone ">
                  </div>
				  
				 <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
				  
                </div>
				  
                </div>
                <!-- /.form-group -->
              </div>
              
			  <div class="col-md-6">
                <div class="card-body">
				
				 <div class="form-group">
                    <label for="exampleInputEmail1">Phone No.</label>
                    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone No.">
                  </div>
				  
				 <div class="form-group">
                    <label for="exampleInputEmail1">Address  </label>
                 
					<textarea class="form-control" rows="3" name="address" placeholder="Enter Address"></textarea>
                  </div>	
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Company Email </label>
                    <input type="text" name="cmp_email" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Email ">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Company Address </label>
                    <textarea class="form-control" rows="3" name="cmp_address" placeholder="Enter Company Address"></textarea>
				  </div>
				  
			
	             </div>
              </div>
			  
			  
			  
            </div>
          </div>
		 </form>
		  
          
          
        </div>
        
      </div>
    </section>
    
  </div>

 <?php include('include/footer.php'); ?>   
  