<?php
require_once('include/db_connection.php');
require_once('include/_database.php');
require_once('include/website.php');



$fname=$_POST['fname'];

$lname=$_POST['lname'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$rank=$_POST['rank'];

$crank=$_POST['crank'];

$indos=$_POST['indos'];

$iidate=$_POST['iidate'];

$iedate=$_POST['iedate'];

$passport=$_POST['passport'];

$pidate=$_POST['pidate'];

$pedate=$_POST['pedate'];

$exp=$_POST['exp'];







$sql=exe("INSERT INTO personal_details SET firstname='".$fname."',lastname='".$lname."',email='".$email."',phone='".$phone."',rank='".$rank."',crank='".$crank."',indos='".$indos."',iidate='".$iidate."',iedate='".$iedate."',passport='".$passport."',pidate='".$pidate."',pedate='".$pedate."',total_exp='".$exp."'  ");


	if($sql)
	{
		echo "<script>window.alert('data inserted');</script>";
	}

			








?>