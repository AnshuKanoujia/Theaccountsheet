
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->	
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
			<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
			
              <div class="card-body box-profile" >
                <div class="text-center" style="background:url('<?php echo base_url('uploads/'.$profile['back_img']); ?>');">
				<?php  if($profile['image']!=''){ ?>
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?=base_url('uploads/'.$profile['image']); ?>"
                       alt="User profile picture" style="height:100px;"/>
				<?php } ?>	   
                </div>
                <script>
				  var profileData = <?php echo json_encode($profile); ?>;
				</script>
                <h3 class="profile-username text-center"><?= $profile['name'].' '.$profile['last']; ?></h3>
				&nbsp;<a href="javascript:void(0)" onclick="open_profile_modal(profileData)"><i class="fa fa-edit" style="float:right;"></i></a>
				  <div class="progress">
					  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
					  aria-valuemin="0" aria-valuemax="100" style="width:40%">
						40% Complete (success)
					  </div>
					</div> 
					
                <p class="text-muted text-center"><?= $profile['designation']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Name</b> <a class="float-right"><?= $profile['name'].' '.$profile['last']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?= $profile['email']; ?></a>
                  </li>
				  <li class="list-group-item">
                    <b>Phone</b> <a class="float-right"><?= $profile['mobile']; ?></a>
                  </li>
				  <li class="list-group-item">
                    <b>Company</b> <a class="float-right"><?= $profile['cmp_name']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Address</b> <a class="float-right"><?= $profile['city'].','.$profile['country']; ?></a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
           
			<div class="col-md-2" style="padding-top:90px;">
			  <div class="row" style="border:2px solid lightgray; padding:15px;">
				 <p><b><center>Complete Profile.</center></b></p>
				 <div class="col-md-2" ></div>
			     <div class="col-md-8">
					<div class="c100 p34 small">
						<span>34%</span>
						<div class="slice">
							<div class="bar"></div>
							<div class="fill"></div>
						</div>
					</div>
				 </div>
				 <div class="col-md-2" ></div>
				 <div class="col-md-12">
				    <ol class="list-group list-group-unbordered mb-3">
					  <li > <b>Name</b> <a class="float-right">25%</a></li>
					  <li> <b>Email</b> <a class="float-right">25%</a></li>
					  <li > <b>Friends</b> <a class="float-right">25%</a></li>
					  <li > <b>Friends</b> <a class="float-right">25%</a></li>
					  <li > <b>Friends</b> <a class="float-right">25%</a></li>
					  <li > <b>Friends</b> <a class="float-right">25%</a></li>
					</ol>
				 </div>
					
			     
			  </div>
			    
				
			  
			</div>
			<div class="col-md-2"></div>
            <!-- /.card -->
      </div>
            <!-- About Me Box -->
			<div class="row">
			<div class="col-md-2"></div>
			
			<div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title text-center"> <strong><i class="fas fa-book mr-1"></i> Education </strong></h3><a href="#" data-toggle="modal" data-target="#add_education"><b style="float:right; font-size: 20px;">+</b></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body education_body">
			    <?php
				if(isset($all_education) && count($all_education)){
				     foreach($all_education as $value){
				 ?>
		    	<strong><i class="fas fa-book mr-1"></i> <?=$value['school']; ?></strong>
                <p class="text-muted">
                 <span><?=$value['degree']; ?>
                </span><br/>
				<span><?=$value['start_year']; ?>-<?=$value['end_year']; ?></span><br/>
				<span><?=$value['description']; ?></span>
				</p>
                <hr/> 
                 <?php	 
					   }				 
					 }
                 ?>
              </div>
              <!-- /.card-body -->
            </div>
			</div>
			<div class="col-md-2"></div>
			
			</div>
			
			
			 <!-- About Me Box -->
			<div class="row">
			<div class="col-md-2"></div>
			
			<div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title text-center"> <strong><i class="fas fa-book mr-1"></i> Experience </strong></h3><a href="#" data-toggle="modal" data-target="#add_experience"><b style="float:right; font-size: 20px;">+</b></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body experience_body">
			    <?php
					if(isset($all_experience) && count($all_experience)){
				     foreach($all_experience as $value){
				 ?>
		    	<strong><i class="fas fa-book mr-1"></i> <?=$value['cmp_name']; ?></strong>
                <p class="text-muted">
                 <span><?=$value['designation']; ?>
                </span><br/>
				<span><?=$value['start_date']; ?>-<?=$value['end_date']; ?></span><br/>
				<span><?=$value['description']; ?></span>
				<span><?=$value['address']; ?></span>
				</p>
                <hr/> 
                 <?php	
					  }				 
					 }
                 ?>
             </div>
              <!-- /.card-body -->
            </div>
			</div>
			<div class="col-md-2"></div>
			</div>
			
			 <!-- About Me Box -->
			<div class="row">
			<div class="col-md-2"></div>
			
			<div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title text-center"> <strong><i class="fas fa-book mr-1"></i> Skills </strong></h3><a href="#" data-toggle="modal" data-target="#add_skill"><b style="float:right; font-size: 20px;">+</b></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body skill_body">
			    <?php
				if(isset($all_skill) && count($all_skill)){
				     foreach($all_skill as $value){
				 ?>
		    	<strong><i class="fas fa-book mr-1"></i> <?=$value['skill']; ?></strong>
                
                <hr/> 
                 <?php	
					   }				 
					 }
                 ?>
             </div>
              <!-- /.card-body -->
            </div>
			</div>
			<div class="col-md-2"></div>
			</div>
			
			 <!-- About Me Box -->
			<div class="row">
			<div class="col-md-2"></div>
			
			<div class="col-md-8">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title text-center"> <strong><i class="fas fa-book mr-1"></i> Other </strong></h3><a href="#" data-toggle="modal" data-target="#add_education"><b style="float:right; font-size: 20px;">+</b></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                <p class="text-muted"><?=$profile['city'].','.$profile['country']; ?></p>
                <hr/>
                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                <p class="text-muted"><?=$profile['note']; ?></p>
              </div>
              <!-- /.card-body -->
            </div>
			</div>
			<div class="col-md-2"></div>
			</div>
            <!-- /.card -->
          </div>
      
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
 <!-- Modal start --> 

  <div class="modal" id="add_education">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Education </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<form id="education" method="post">
         <div class="row">
		 
		 <div class="col-sm-12">
		 <div class="form-group">
		 <input class="form-control" type="text" name="school" id="school" required placeholder="School"/>
		 </div>
		 <div class="form-group">
		 <input class="form-control" type="text" name="degree" id="degree" required placeholder="Degree"/>
		 </div>
		 </div>
		 <div class="col-sm-6">
		 <div class="form-group">
	
		 <select name="start_year" id="start_year" class="form-control" required>
		 <option value="">--Start Year --</option>
		 <?php for($i=date('Y')-20; $i<=date('Y'); $i++ ){ ?>
		 <option><?php echo $i;?></option>
		 <?php } ?>
		 </select>
		 </div>
		 </div>
		 <div class="col-sm-6">
		 <div class="form-group">
		 <select name="end_year" id="end_year" class="form-control" required>
		 <option value="">--End Year--</option>
		 <?php for($i=date('Y')-20; $i<=date('Y'); $i++ ){ ?>
		 <option><?php echo $i;?></option>
		 <?php } ?>
		 </select>
		 </div>
		 </div>
		 <div class="col-sm-12">
		 <div class="form-group">
		 <textarea class="form-control" rows="3" name="description" id="description" placeholder="Enter Description..."></textarea>
         </div>
		 </div>
		 <div class="col-sm-6">
		  <button type="submit" class="btn btn-md btn-block btn-info">Save</button>
		  </div>
		 </div>
		 </form>
		 
        </div>
      </div>
    </div>
  </div>
  
 <!-- Modal EXPERIENCE --> 

  <div class="modal" id="add_experience">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Experience </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<form id="experience" method="post">
         <div class="row">
		 
		 <div class="col-sm-12">
		 <div class="form-group">
		 <input class="form-control" type="text" name="cmp_name" id="cmp_name" required placeholder="Company Name"/>
		 </div>
		 <div class="form-group">
		 <input class="form-control" type="text" name="designation" id="designation" required placeholder="Designation"/>
		 </div>
		 </div>
		 <div class="col-sm-6">
		 <div class="form-group">
	     <input class="form-control" type="text" name="start_date" id="start_date" onfocus="(this.type='date')"  id="start_date" required placeholder="Start Date"/>
		 
		 </div>
		 </div>
		 <div class="col-sm-6">
		 <div class="form-group">
		  <input class="form-control" type="text" name="end_date" id="end_date" onfocus="(this.type='date')" id="end_date" required placeholder="End date"/>
		 </div>
		 </div>
		 
		 <div class="col-sm-12">
		 <div class="form-group">
		 <textarea class="form-control" rows="3" name="exp_description" id="exp_description" placeholder="Enter Description..."></textarea>
		 </textarea>
		 </div>
		 <div class="form-group">
          <textarea class="form-control" rows="3" name="address" id="address" placeholder="Enter Address..."></textarea>
           </div>
		 </div>
		 
		 <div class="col-sm-6">
		  <button type="submit" class="btn btn-md btn-block btn-info">Save</button>
		  </div>
		 </div>
		 </form>
		 
        </div>
      </div>
    </div>
  </div>
  
   <!-- Modal Skill --> 

  <div class="modal" id="add_skill">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Skill </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<form id="skill_form" method="post">
         <div class="row">
		 
		 <div class="col-sm-12">
		 <div class="form-group">
		 <input class="form-control" type="text" name="skill" id="skill" required placeholder="Skill Name"/>
		 </div>
		 </div>
		  
		 <div class="col-sm-6">
		  <button type="submit" class="btn btn-md btn-block btn-info">Save</button>
		  </div>
		 </div>
		 </form>
		 
        </div>
      </div>
    </div>
  </div>

   
  <!-- Modal Address --> 

  <div class="modal" id="add_profile">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Profile </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<form id="profile_intro" method="post" enctype="multipart/form-data">  
         <div class="row">
		 
		 <div class="col-sm-12">
		 <div class="form-group">
		 <input class="form-control" type="file" name="back_img" id="back_img" required />
		 </div>
		 </div>
		 
		 <div class="col-sm-12">
		 <div class="form-group">
		 <input class="form-control" type="file" name="image" id="image" required />
		 </div>
		 </div>
		 
		 <div class="col-sm-6">
		 <div class="form-group">
		 <input class="form-control" type="text" name="name" id="name" required placeholder="First Name"/>
		 </div>
		 </div>
		 
		 <div class="col-sm-6">
		 <div class="form-group">
		 <input class="form-control" type="text" name="last" id="last" required placeholder="Last Name"/>
		 </div>
		 </div>
		 
		 <div class="col-sm-12">
		 <div class="form-group">
		 <input class="form-control" type="text" name="email" id="email" required placeholder="Email Name"/>
		 </div>
		 <div class="form-group">
		 <input class="form-control" type="text" name="mobile" id="mobile" required placeholder="Phone Name"/>
		 </div>
		 <div class="form-group">
		 <input class="form-control" type="text" name="cmp_name" id="cmp_name" required placeholder="Company Name"/>
		 </div>
		 <div class="form-group">
		 <input class="form-control" type="text" name="address" id="address" required placeholder="Address Name"/>
		 </div>
		 
		 <div class="form-group">
		 <input class="form-control" type="text" name="note" id="note" required placeholder="Note."/>
		 </div>
		 
		 </div>
			  
		 <div class="col-sm-6">
		  <button type="submit" class="btn btn-md btn-block btn-info">Save</button>
		  </div>
		 </div>
		 </form>
		 
        </div>
      </div>
    </div>
  </div>
 
 <script>
 $('#education').submit(function(e){
	e.preventDefault();
   var school = $('#school').val();	
   var  degree = $('#degree').val();	
   var start_year = $('#start_year').val();	
   var end_year = $('#end_year').val();	
   var description = $('#description').val();	
	
	$.ajax({
    type: "POST",
    url: "<?php echo base_url('add_education'); ?>",
    data: {school: school,  degree: degree, start_year: start_year, end_year: end_year, description: description},
    success: function(result) {
         
		console.log(result);
		 if(result == '200'){
			var data = '<hr/><strong><i class="fas fa-book mr-1"></i> '+school+'</strong>\
                <p class="text-muted">\
                 <span> '+degree+'\
                </span><br/>\
				<span>'+start_year+'-'+end_year+'</span>\
				</p>';
				
			$('.education_body').append(data);	
			$('#add_education').modal('toggle'); 
		 }
      }
	});
	
	
 });
 
 
 
 $('#experience').submit(function(e){
	e.preventDefault();
   var cmp_name = $('#cmp_name').val();	
   var  designation = $('#designation').val();	
   var start_date = $('#start_date').val();	
   var end_date = $('#end_date').val();	
   var description = $('#exp_description').val();	
   var address = $('#address').val();	
	
	$.ajax({
    type: "POST",
    url: "<?php echo base_url('add_experience'); ?>",
    data: {cmp_name: cmp_name,  designation: designation, start_date: start_date, end_date: end_date, description: description, address: address},
    success: function(result) {
         
		console.log(result);
		 if(result == '200'){
			var data = '<hr/><strong><i class="fas fa-book mr-1"></i> '+designation+' </strong>\
                <p class="text-muted">\
                 <span>'+cmp_name+'\
                </span><br/>\
				<span>'+start_date+'-'+end_date+'</span><br/>\
				<span>'+description+'</span>\
				</p>';
				
			$('.experience_body').append(data);	
			$('#add_experience').modal('toggle'); 
		 }
      }
	});
	
	
 });
 
 
 
  $('#skill_form').submit(function(e){
	e.preventDefault();
   var skill = $('#skill').val();	
   	
	
	$.ajax({
    type: "POST",
    url: "<?php echo base_url('add_skill'); ?>",
    data: {skill: skill },
    success: function(result) {
         
		console.log(result);
		 if(result == '200'){
			var data = '<hr/><strong><i class="fas fa-book mr-1"></i> '+skill+'</strong>';
				
			$('.skill_body').append(data);	
			$('#add_skill').modal('toggle'); 
		 }
      }
	});
	
	
 });
 
 
  $('#profile_intro').submit(function(e){
	e.preventDefault();
	
	$.ajax({
    type: "POST",
    url: "<?php echo base_url('update_intro'); ?>",
    data: new FormData(this),
	contentType: false,
	cache: false,
	processData:false,
    success: function(result) {
         
		console.log(result);
		 if(result == '200'){	
			$('#add_profile').modal('toggle'); 
		 } 
      }
	});
	
 });
 
 
 function open_profile_modal(profile)
 {
	 console.log(profile);
	 $('#profile_intro #name').val(profile.name);
	 $('#profile_intro #last').val(profile.last);
	 $('#profile_intro #email').val(profile.email);
	 $('#profile_intro #mobile').val(profile.mobile);
	 $('#profile_intro #cmp_name').val(profile.cmp_name);
	 $('#profile_intro #address').val(profile.address);
	 $('#profile_intro #note').val(profile.note);
	 //console.log($("#profile_intro").serialize());
	 $('#add_profile').modal(); 
	 
 }
 
 </script> 
  