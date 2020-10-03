
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
              <a class="btn btn-md btn-info" href="#" data-toggle="modal" data-target="#add_social">Add Social Media</a>
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
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1"> User Name </label>
                    <input type="text" name="user" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value="<?php echo $setting[0]['user_name']; ?>">
                  </div>
				  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" value="<?php echo $setting[0]['email']; ?>">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone" value="<?php echo $setting[0]['phone']; ?>">
                  </div>
				
				<div class="form-group">
                    <label for="exampleInputEmail1">Website Url</label>
                    <input type="text" name="web_url" class="form-control" id="exampleInputEmail1" placeholder="Enter Website Url" value="<?php echo $setting[0]['website']; ?>">
                  </div>
				     
					 
				<div class="form-group">
                    <label for="exampleInputEmail1">About Company</label>
                   <textarea class="form-control" rows="3" name="about" placeholder="About Company"><?php echo $setting[0]['about_company']; ?></textarea>
                  </div>
				
				<!--div class="form-group">
                    <label for="exampleInputEmail1"> Theme Color </label>
                    <input type="color" name="theme_color" class="form-control" value="<?php echo $setting[0]['theme_color']; ?>">
                  </div-->
				
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
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Whatsapp</label>
                    <input type="text" name="whatsapp" class="form-control" id="exampleInputEmail1" placeholder="Enter Whatsapp" value="<?php echo $setting[0]['whatsapp']; ?>">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Google Address</label>
                    <input type="text" name="google" class="form-control" id="exampleInputEmail1" placeholder="Enter Google Address" value="<?php echo $setting[0]['direction']; ?>">
                  </div>
				  
				  <label for="exampleInputFile">Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="logo" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
          
                    </div>
				  
				  
				    <div class="input-group">
                      <img src="<?php echo base_url('uploads/'.$setting[0]['logo']); ?>" height='100' width='100'/>
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
  
  
  
  <div class="modal fade" id="add_social" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		 <h4 class="modal-title">Add Social Media Icon</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
		<form  action="javascript:void(0)" id="social" method="post" enctype="multipart/form-data">
        <div class="modal-body">
        <div class="row">
          <div class="col-md-12 form-group" >
	        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
          </div>
		  <div class="col-md-12 form-group">
	        <input type="text" name="url" class="form-control" id="url" placeholder="Enter Link">
          </div>
		  <div class="col-md-12 form-group">
	        <input type="file" name="file" class="form-control">
          </div>
        </div>
		   <button type="submit" class="btn btn-info" >Submit</button>
        </div>
       <form>
      </div>
    </div>
  </div>
 
<script>
$('#social').submit(function(e){
		e.preventDefault();
		
	 $.ajax({
		 type: "POST",
		 url : "<?php echo base_url('add_social_media'); ?>", 
		 data: new FormData(this),
		 contentType: false,
	     cache: false,
	     processData:false,
		 success: function(result){
			console.log(result); 
	    if(result == '200'){
			//var data = '<hr/><strong><i class="fas fa-book mr-1"></i> '+title+'</strong>';
				
			//$('.modal-body').append(data);	
			$('#add_social').modal('toggle');   
		  }
		}
	  });
})
</script>
  
