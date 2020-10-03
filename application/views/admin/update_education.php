
 <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Education </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Education </li>
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
            <h3 class="card-title">Update Education</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
		  
		  <form action="<?php echo base_url('update_education'); ?>" method="post">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
				  <div class="card-body">
				  
				  <input type="hidden" name="id" value="<?php echo $education['id'];?>" />
				  
                  <div class="form-group">
                    <label for="exampleInputEmail1">School </label>
                    <input type="text" name="school" class="form-control" id="exampleInputEmail1" placeholder="Enter School" value="<?php echo $education['school'];  ?>">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Degree </label>
                    <input type="text" name="degree" class="form-control" id="exampleInputEmail1" placeholder="Enter Degree" value="<?php echo $education['degree'];  ?>">
                  </div>
                 
                 <div class="form-group">
                    <label for="exampleInputEmail1">Description </label>
                    <textarea class="form-control" rows="3" name="desc" placeholder="Enter Description"><?php echo $education['description']; ?></textarea>
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
                     <label for="exampleInputEmail1">Start Year </label>
					 <select name="start_year" id="start_year" class="form-control" required>
					 <option value="">--Start Year --</option>
					 <?php for($i=date('Y')-20; $i<=date('Y'); $i++ ){ ?>
					 <option <?php if($education['start_year']==$i)echo 'selected';?>><?php echo $i;?></option>
					 <?php } ?>
					 </select>
                   </div>
                  
                   <div class="form-group">
                     <label for="exampleInputEmail1">End Year </label>
                     <select name="end_year" id="end_year" class="form-control" required>
					 <option value="">--End Year--</option>
					 <?php for($i=date('Y')-20; $i<=date('Y'); $i++ ){ ?>
					 <option <?php if($education['end_year']==$i)echo 'selected';?>><?php echo $i;?></option>
					 <?php } ?>
					 </select>
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

 