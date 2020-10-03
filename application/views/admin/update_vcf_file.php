
 <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Update Setting </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Setting </li>
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
		  
		  <form action="<?php echo base_url('update_setting');?>" method="post" enctype="multipart/form-data">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
				  <div class="card-body">
				  
				  <input type="hidden" name="id" value="<?php echo $setting[0]['id']; ?>"/>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name Company</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Company" value="<?php echo $setting[0]['company']; ?>">
                  </div>
				 
				
				
                </div>
				  
                </div>
                <!-- /.form-group -->
              </div>
              
			  <div class="col-md-6">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Address </label>
					<textarea class="form-control" rows="3" name="address" placeholder="Enter Address"><?php echo $setting[0]['address']; ?></textarea>
                  </div>
				
				  
				 <div class="card-footer">
                  <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>
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
