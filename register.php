<?php include ('include/db_connection.php');
 
 if(isset($_POST['submit']))
 {

$fname=$_POST['fname'];

$lname=$_POST['lname'];

$indos=$_POST['indos'];

$passport=$_POST['passport'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$bdate=$_POST['date'];

$password=$_POST['password'];

$repassword=$_POST['repassword'];

$sql="INSERT INTO `candidatereg` set `firstname`='".$fname."',`lastname`='".$lname."',`indos`='".$indos."',`passport`='".$passport."',`email`='".$email."',`phone`='".$phone."',`dob`='".$bdate."',`password`='".$password."',`repassword`='".$repassword."';";
if($result=mysqli_query($conn,$sql))
{
	 echo "<script type='text/javascript'>alert('Your account created successfully..'); window.location.href='login.php';</script>";

}
else
 {
	 echo "<script type='text/javascript'>alert('Your account not created ..'); window.location.href='register.php';</script>";
 }


 }















 ?>




    <?php include('includefile/header.php'); ?>
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banner/bnr2.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Register</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Register</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row">
					<div class="col-md-12 text-center">
						<h3 class="font-weight-700 m-t0 m-b20">Create An Account</h3>
					</div>
				</div>
                <div class="row">
					<div class="col-md-12 m-b30">
						<div class="p-a30 border-1  max-w500 m-auto">
							<div class="tab-content">
								<form id="login" class="tab-pane active" method="POST" action="">
									<h4 class="font-weight-700">PERSONAL INFORMATION</h4>
									<p class="font-weight-600">If you have an account with us, please log in.</p>
									<div class="form-group">
										<label class="font-weight-700">First Name *</label>
										<input name="fname" required="" class="form-control" placeholder="First Name" type="text">
									</div>
									<div class="form-group">
										<label class="font-weight-700">Last Name *</label>
										<input name="lname" required="" class="form-control" placeholder="Last Name" type="text">
									</div>
									
									<div class="form-group">
										<label class="font-weight-700">E-MAIL *</label>
										<input name="email" required="" class="form-control" placeholder="Your Email Id" type="email">
									</div>
									<div class="form-group">
										<label class="font-weight-700">PHONE NO. *</label>
										<input name="phone" required="" class="form-control" placeholder="Your phone number" type="phone" id="jquery-intl-phone" >
									</div>
									<div class="form-group">
										<label class="font-weight-700">DATE OF BIRTH *</label>
										<input name="date" required="" class="form-control" placeholder="MM/DD/YYY" type="date"  id="date">
										
									</div>
									  
									<div class="form-group">
										<label class="font-weight-700">PASSWORD *</label>
										<input name="password" required="" class="form-control " placeholder="Type Password" type="password" id="Password">
									</div>
									<div class="form-group">
										<label class="font-weight-700">RE-PASSWORD *</label>
										<input name="repassword" required="" class="form-control " placeholder="Re-Enter Password" type="password" id="ConfirmPassword">
									</div>
									<div id="msg"></div>
									</div>
									<div class="text-left">
										<button class="site-button button-lg outline outline-2" name="submit" >CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Product END -->
		</div>
		<!-- contact area  END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <?php include('includefile/footer.php'); ?>
    <!-- Footer END -->
<script>
    $(document).ready(function(){
        $("#ConfirmPassword").keyup(function(){
             if ($("#Password").val() != $("#ConfirmPassword").val()) {
                 $("#msg").html("Password do not match").css("color","red");
             }else{
                 $("#msg").html("Password matched").css("color","green");
            }
      });
});
</script> 
<script>
 
    $("#jquery-intl-phone").intlTelInput({
 
    });
 
  </script>

</body>


</html>
