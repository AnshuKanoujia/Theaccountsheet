
 <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Experience </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Experience </li>
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
            <h3 class="card-title">Update Experience</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
		  
		  <form action="<?php echo base_url('update_experience'); ?>" method="post">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
				  <div class="card-body">
				  
				  <input type="hidden" name="id" value="<?php echo $experience['id'];?>" />
				  
                  <div class="form-group">
                    <label for="exampleInputEmail1">School </label>
                    <input type="text" name="cmp_name" class="form-control" id="exampleInputEmail1" placeholder="Enter School" value="<?php echo $experience['cmp_name'];  ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Designation </label>
                    <input type="text" name="designation" class="form-control" id="exampleInputEmail1" placeholder="Enter Degree" value="<?php echo $experience['designation'];  ?>">
                  </div>
                 
                 <div class="form-group">
                    <label for="exampleInputEmail1">Description </label>
                    <textarea class="form-control" rows="3" name="desc" placeholder="Enter Description"><?php echo $experience['description']; ?></textarea>
                  </div>
				  
				  <div class="card-footer">
                  <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>
                </div>
				  
                </div>
				  
                </div>
                <!-- /.form-group -->
              </div>
              
			  <div class="col-md-6">
                <div class="card-body">
                  <div class="form-group">
                     <label for="exampleInputEmail1">Start Date </label>
					 <input class="form-control" type="text" name="start_date" id="start_date" onfocus="(this.type='date')"  id="start_date" required placeholder="Start Date" value="<?php echo $experience['start_date']; ?>"/>
                   </div>
                  
                   <div class="form-group">
                     <label for="exampleInputEmail1">End Date </label>
                     <input class="form-control" type="text" name="end_date" id="end_date" onfocus="(this.type='date')" id="end_date" required placeholder="End date" value="<?php echo $experience['end_date']; ?>"/>
                    </div> 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Address </label>
                    <textarea class="form-control" rows="3" name="address" placeholder="Enter Address"><?php echo $experience['address']; ?></textarea>
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

 