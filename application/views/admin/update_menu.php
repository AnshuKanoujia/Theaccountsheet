

 <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Menu </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Menu </li>
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
		  
		  <form action="<?php  echo base_url('update_menus');?>" method="post" enctype="multipart/form-data">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
				  <div class="card-body">
				  <h4>
                  <?php  
				    if(isset($_SESSION['msg'])){
				     echo $_SESSION['msg']; 
					 //session_unset();
					 session_destroy();
				  }
				  ?>
				  </h4>
				  <input type="hidden" name="id" value="<?php echo $menu['id']; ?>" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" value="<?php echo $menu['title']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Slug</label>
                    <input type="text" name="slug" class="form-control" id="exampleInputEmail1" placeholder="Enter Slug" value="<?php echo $menu['slug']; ?>">
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
                    <label for="exampleInputEmail1"> Description  </label>
                 
					<textarea class="form-control" rows="3" name="description" placeholder="Enter Description"><?php echo $menu['description']; ?></textarea>
                  </div>
				  
				  <label for="exampleInputFile">Banner</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="banner" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
          
                    </div>
				  
				   <div class="input-group">
				  
                      <img src="<?php echo base_url('uploads/'.$menu["banner"]); ?>" height='100' width='100'/>
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


  