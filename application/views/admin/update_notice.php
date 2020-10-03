
 <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Profile </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Profile </li>
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
            <h3 class="card-title">Update Profile</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
		  
		  <form action="<?php echo base_url('update_notice'); ?>" method="post" enctype="multipart/form-data">
          <!-- /.card-header -->
          <div class="card-body">
              
               <?php if(!empty($this->session->flashdata('success'))){?>
              <h4 class="text-info">&nbsp;&nbsp;&nbsp; <?=$this->session->flashdata('success')?> </h4>
              <?php } ?>
              
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
				  <div class="card-body">
				  
				  <input type="hidden" name="id" value="<?php echo $notice['id']; ?>" />
				  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name </label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name " value="<?php echo $notice['name']; ?>">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" value="<?php echo $notice['email']; ?>">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1"> Date Of Birth </label>
                    <input type="date" name="dob" class="form-control" id="exampleInputEmail1" placeholder="Enter Date Of Birth "value="<?php echo $notice['dob']; ?>">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Company Name </label>
                    <input type="text" name="cmp_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Name "
                    value="<?php echo $notice['cmp_name']; ?>">
                  </div>
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">Company Phone </label>
                    <input type="text" name="cmp_phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Phone "value="<?php echo $notice['cmp_phone']; ?>">
                  </div>
				  
				 <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="update" value="update">Update</button>
                </div>
				  
                </div>
				  
                </div>
                <!-- /.form-group -->
              </div>
              
			  <div class="col-md-6">
                <div class="card-body">
				
				 <div class="form-group">
                    <label for="exampleInputEmail1">Phone No.</label>
                    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone No." value="<?php echo $notice['mobile']; ?>">
                  </div>
				  
				 <div class="form-group">
                    <label for="exampleInputEmail1">Address  </label>
                 
					<textarea class="form-control" rows="3" name="address" placeholder="Enter Address"><?php echo $notice['address']; ?></textarea>
                  </div>	
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Company Email </label>
                    <input type="text" name="cmp_email" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Email "value="<?php echo $notice['cmp_email']; ?>">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Company Address </label>
                    <textarea class="form-control" rows="3" name="cmp_address" placeholder="Enter Company Address"><?php echo $notice['cmp_address']; ?></textarea>
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

 