
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Payment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payment</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
		
		<div class="card">
              <div class="card-header">
                <h3 class="card-title">All Payment List</h3>
				
				<h4>
                  <?php  
				    if(isset($_SESSION['message'])){
				     echo $_SESSION['message']; 
					 //session_unset();
					 session_destroy();
				  }
				   
				  ?>
				  </h4>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr.No.</th>
                    <th>Paytm</th>
                    <th>Phone Pe</th>
                    <th>Google Pay</th>
                    <th>Bank Name</th>
                    <th>IFSC Code</th>
                    <th>Account Holder</th>
                    <th>Account Number</th>
                    <th>Account Type</th>
         
					<th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php 
				  
				      $count = 1;
				      if(count($all_payment)){
						  foreach($all_payment as $row){	  
					?>
					<tr>
				    <td><?php echo $count; ?></td>
				    <td><?php echo $row['paytm_no']; ?></td>
				    <td><?php echo $row['phone_pe']; ?></td>
				    <td><?php echo $row['google_pay']; ?></td>
				    <td><?php echo $row['bank_name']; ?></td>
				    <td><?php echo $row['ifsc_code']; ?></td>
				    <td><?php echo $row['account_holder']; ?></td>
				    <td><?php echo $row['account_number']; ?></td>
				    <td><?php echo $row['account_type']; ?></td>
				   
				     
				    <td><a href="<?php echo base_url()?>edit_payment/<?php echo $row['id'];?>" class="fa fa-edit text-success"></a> &nbsp;&nbsp;&nbsp; </td>
                    </tr>
                    <?php	
                         $count++;					
						}
					  }
				     ?>
					
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Sr.No.</th>
                    <th>Paytm</th>
                    <th>Phone Pe</th>
                    <th>Google Pay</th>
                    <th>Bank Name</th>
                    <th>IFSC Code</th>
                    <th>Account Holder</th>
                    <th>Account Number</th>
                    <th>Account Type</th>
                   
					<th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div> 
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
	
  