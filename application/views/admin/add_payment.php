

 <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Payment </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Payment </li>
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
		  
		  <form action="<?php echo base_url('update_payment'); ?>" method="post" enctype="multipart/form-data">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  
				  <div class="card-body">
				  
				
                   <input type="text" name="id" value="<?php echo $payment['id'];?>" />
				  
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Paytm Number </label>
                    <input type="text" name="paytm" class="form-control" value="<?php echo $payment['paytm_no']; ?>">
                  </div>
				
				  <div class="form-group">
                    <label for="exampleInputEmail1"> Google Pay Number </label>
                    <input type="text" name="googlepay" class="form-control" value="<?php echo $payment['google_pay']; ?>">
                  </div>
				
				 <div class="form-group">
                    <label for="exampleInputEmail1"> IFSC code </label>
                    <input type="text" name="ifsc" class="form-control" value="<?php echo $payment['ifsc_code']; ?>">
                  </div>
				
				<div class="form-group">
                    <label for="exampleInputEmail1"> Account Type </label>
                    <input type="text" name="account_type" class="form-control" value="<?php echo $payment['account_type']; ?>">
                  </div>
				  
				  <div class="card-footer">
                  <button type="submit" name="update"  value="update" class="btn btn-primary">Update</button>
                </div>
				  
                </div>
				  
                </div>
                <!-- /.form-group -->
              </div>
              
			  <div class="col-md-6">
                <div class="card-body">
				
				  <div class="form-group">
                    <label for="exampleInputEmail1"> Phone Pe Number </label>
                    <input type="text" name="phone_pe" class="form-control" value="<?php echo $payment['phone_pe']; ?>">
                  </div>
				  
				 <div class="form-group">
                    <label for="exampleInputEmail1"> Bank Name </label>
                    <input type="text" name="bank" class="form-control" value="<?php echo $payment['bank_name']; ?>">
                  </div>
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1"> Account Holder Name </label>
                    <input type="text" name="account_holder" class="form-control" value="<?php echo $payment['account_holder']; ?>">
                  </div>
				
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Account Number </label>
                    <input type="text" name="account_number" class="form-control" value="<?php echo $payment['account_number']; ?>">
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

