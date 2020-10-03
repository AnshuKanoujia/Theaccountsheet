

 <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Resume </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Resume </li>
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
            <h3 class="card-title">Update Resume</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
		  
          <form action="<?php echo base_url('update_job'); ?>" method="post" enctype="multipart/form-data">
          <!-- /.card-header -->
          <div class="card-body">
              
              <?php if(!empty($this->session->flashdata('success'))){?>
              <h4 class="text-info">&nbsp;&nbsp;&nbsp; <?=$this->session->flashdata('success')?> </h4>
              <?php } ?>
              
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
				  <div class="card-body">
				  
				  <input type="hidden" name="id" value="<?php echo $job['id']; ?>" />
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name </label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name " value="<?php echo $job['full_name']; ?>">
                  </div>
				  
				 
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" value="<?php echo $job['email']; ?>">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">DOB</label>
                    <input type="date" name="dob" class="form-control" id="exampleInputEmail1" placeholder="Enter Date Of Birth " value="<?php echo $job['dob']; ?>">
                  </div>
				  
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Address  </label>
                 
					<textarea class="form-control" rows="3" name="address" placeholder="Enter Address"><?php echo $job['message']; ?></textarea>
                  </div>	
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">Experience  </label>
                 
					<textarea class="form-control" rows="3" name="experience" placeholder="Enter Experience"><?php echo $job['exprience']; ?></textarea>
                  </div>
				  
				  
				<div class="form-group">
                    <label for="exampleInputEmail1">Skill  </label>
                 
					<textarea class="form-control" rows="3" name="skill" placeholder="Enter Skill"><?php echo $job['skills']; ?></textarea>
                  </div>
				  
                  
				  <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
          
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <div class="input-group">
                      <img src="<?php echo base_url('uploads/'.$job['image']); ?>" style="height:60px; width:110px;" />
				    </div>
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
                    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone No." value="<?php echo $job['phone']; ?>">
                  </div>
				  
				 
				  <div class="form-group">
                    <label for="exampleInputEmail1"> Designation</label>
                    <input type="text" name="designation" class="form-control" id="exampleInputEmail1" placeholder="Enter Designation" value="<?php echo $job['designation']; ?>">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Summary  </label>
                 
					<textarea class="form-control" rows="3" name="summary" placeholder="Enter Summary"><?php echo $job['summary']; ?></textarea>
                  </div>
				  
				 <div class="form-group">
                    <label for="exampleInputEmail1">Education  </label>
                 
					<textarea class="form-control" rows="3" name="education" placeholder="Enter Education"><?php echo $job['education']; ?></textarea>
                  </div>
				
				
				 <div class="row">
                  <div class="col-sm-12">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <label for="exampleInputEmail1"> Hobbies  </label><br/> 
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" name="hobbies[]" <?php if(in_array('Singing',explode(',',$job['hobbies']))){echo "checked";}?> value="Singing">
                        <label for="checkboxPrimary1">Singing
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary2" name="hobbies[]" value="Readig" <?php if(in_array('Readig',explode(',',$job['hobbies']))){echo "checked";}?>>
                        <label for="checkboxPrimary2">Readig
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary3" name="hobbies[]" value="Movie" <?php if(in_array('Movie',explode(',',$job['hobbies']))){echo "checked";}?>>
                        <label for="checkboxPrimary3">
                          Movie
                        </label>
                      </div>
					  <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary4" name="hobbies[]" value="Dancing" <?php if(in_array('Dancing',explode(',',$job['hobbies']))){echo "checked";}?>>
                        <label for="checkboxPrimary4">
                          Dancing
                        </label>
                      </div>
					  <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary5" name="hobbies[]" value="Playing" <?php if(in_array('Playing',explode(',',$job['hobbies']))){echo "checked";}?>>
                        <label for="checkboxPrimary5">
                          Playing
                        </label>
                      </div>
					  </div>
                  </div>
                </div>
				 
				 
				<div class="row">
                  <div class="col-sm-12">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <label for="exampleInputEmail1"> Language  </label><br/>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary7" name="language[]" value="Hindi" <?php if($job['languages']=="Hindi"){echo "checked";}?>>
                        <label for="checkboxPrimary7">Hindi
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary8" name="language[]" value="English" <?php if($job['languages']=="English"){echo "checked";}?>>
                        <label for="checkboxPrimary8">English
                        </label>
                      </div>
                     </div>
                  </div>
                </div>
			
			
			   <div class="row">
			     <div class="col-sm-12">
                    <!-- radio -->
                    <div class="form-group clearfix">
					 <label for="exampleInputEmail1"> Gender  </label><br>
					
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="gender"
                        <?php if($job['gender']=="male"){echo "checked";}?> value="male">
                        <label for="radioPrimary1">
						Male
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="gender" <?php if($job['gender']=="female"){echo "checked";}?> value="female">
                        <label for="radioPrimary2">
						Female
                        </label>
                      </div>
                     
                    </div>
                  </div>
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
 
  