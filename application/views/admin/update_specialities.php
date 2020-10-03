

 <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Specialities </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Specialities </li>
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
            <h3 class="card-title">Update Specialities</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
		  
		  <form action="<?php echo base_url('update_specialities'); ?>" method="post" enctype="multipart/form-data">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
				  <div class="card-body">
				  
				  <input type="hidden" name="id" value="<?php echo $specialities['id'];?>" />
				  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Specialities Title </label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Specialities Title" value="<?php echo $specialities['title'];  ?>">
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
                    <label for="exampleInputEmail1"> Specialities Description </label>
                 
					<textarea class="form-control" rows="3" name="content" placeholder="Enter Specialities Description"><?php echo $specialities['description'];  ?></textarea>
                  </div>
                  
                    <div class="form-group">
                      <img src="<?php echo base_url('uploads/'.$specialities["file"]); ?>" height='100' width='100'/>
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
 
  