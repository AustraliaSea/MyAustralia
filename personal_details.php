<?php
session_start();

require_once('include/db_connection.php');
require_once('include/_database.php');
require_once('include/website.php');
require_once('includefile/header_copy.php');
require_once('includes/header.php');
require_once('includes/navbar_cpy.php');

if(!isset($_SESSION['email'])){

  echo"<script>document.location.href='http://localhost/myaustralia/hdashboard/';</script>";

}
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 ">Personal Information</h1>
   </div>
</div>
      <form method="POST" action="">
      	      <div class="container-fluid">
      	      	<div class="box">
             <div class="row">
             <div class="col-md-4">
             	<label>First Name:</label>
      			<input type="text" class="form-control" placeholder="First name" name="fname" id="fname"value="<?php echo $_SESSION['name']; ?>" >
    		</div>
    		<div class="col-md-4">
    			<label>Last Name:</label>
      			<input type="text" class="form-control" placeholder="Last name"id="lname" name="lname">
    		</div>
  			</div>
  			<br><br>
  			<div class="row">
             <div class="col-md-4">
             	EMAIL ID:
      			<input type="text" class="form-control" placeholder="Enter email here"id="email" name="email"value="<?php echo $_SESSION['email']; ?>">
    		</div>
    		<div class="col-md-4">
    			PHONE NO:
      			<input type="text" class="form-control" placeholder="Enter phone number."id="phone" name="phone">
    		</div>
  			</div>
  			<br><br>
  			<div class="row">
             <div class="col-md-4">
             	RANK:
      			<input type="text" class="form-control" placeholder="Enter Rank"id="rank" name="rank">
    		</div>
    		<div class="col-md-4">
    			CURRENT RANK:
      			<input type="text" class="form-control" placeholder="Current Rank"id="crank" name="crank">
    		</div>
  			</div>
  			<br><br>

  			<div class="row">
             <div class="col-md-3">
             	INDOS:
      			<input type="text" class="form-control" placeholder="ENTER INDOS here.,"id="indos"name="indos">
    		</div>
    		<div class="col-md-3">
    			ISSUE DATE:
      			<input type="date" class="form-control" placeholder="Issue Date"id="iidate" name="iidate">
    		</div>
    		<div class="col-md-3">
    			EXPIRY DATE:
      			<input type="date" class="form-control" placeholder="Expiry Date"id="iedate" name="iedate">
    		</div>

  			</div>
  			<br><br>
  			<div class="row">
             <div class="col-md-3">
             	PASSPORT:
      			<input type="text" class="form-control" placeholder="Enter Passport Here.,"id="passport" name="passport">
    		</div>
    		<div class="col-md-3">
    			ISSUE DATE:
      			<input type="date" class="form-control" placeholder="Issue Date"id="pidate"name="pidate">
    		</div>
    		<div class="col-md-3">
    			EXPIRY DATE:
      			<input type="date" class="form-control" placeholder="Expiry Date"id="pedate" name="pedate">
    		</div>

  			</div>
				<br>
				<div class="row">
             <div class="col-md-4">
             	TOTAL YEAR OF EXPERIANCE:
      			<input type="number" class="form-control" placeholder="Year Of Experiance"id="exp" name="exp">
    		</div>
    	    </div>
  			<br>	
  			<!--start file uploading using drag and drop-->

  			<div class="file-upload-wrapper">
  				UPLOAD CV:
  				<br>
  			<input type="file" id="input-file-now" class="file-upload1"id="cv"name="cv" />
			</div>
			
			<!--end of file uploading using drag and drop-->
			<br>	
  			<div class="file-upload-wrapper">
  				UPLOAD IMAGE:
  				<br>
  			<input type="file" id="input-file-now-custom-2" class="file-upload" accept=".jpg,.png"id="image" name="image" />
			</div>
			<br>
			
    	    <br>
    	</div>
    


    	    <input type="submit" id="submit" name="submit" class="btn btn-primary mb-2">
    	</div>

	</form>








  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>
<style type="text/css">
.box input {
  outline: 0;
  border-width: 0 0 2px;
  background: transparent;
}
.box input:focus {
  border-color: skyblue;
}

</style>





<script type="text/javascript">
	$(document).ready(function(){
		$('#submit').on('click',function(){
			var fname=$('#fname').val();
			var lname=$('#lname').val();
			var email=$('#email').val();
			var phone=$('#phone').val();
			var rank=$('#rank').val();
      var crank=$('#crank').val();
			var indos=$('#indos').val();
			var iidate=$('#iidate').val();
			var iedate=$('#iedate').val();
			var passport=$('#passport').val();
			var pidate=$('#pidate').val();
			var pedate=$('#pedate').val();
			var cv=$('#cv').val();
			var image=$('#image').val();
			var exp=$('#exp').val();
   


      if(fname==''||lname==''||email==''||phone==''||rank==''||crank==''||indos==''||passport=='')
      {
        window.alert('please fill all fields..');

      }
      else 
      {
				$.ajax({
                     method:"POST",
                     data  :{fname:fname,lname:lname,email:email,phone:phone,rank:rank,crank:crank,indos:indos,iidate:iidate,iedate:iedate,passport:passport,pidate:pidate,pedate:pedate,exp:exp},
                     url:"personal_details_ajax.php",
                     success:function(result)
                     {
                     	window.alert(result);
                     }

				});

      }

		});


	});








</script>