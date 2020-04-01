<?php
session_start();
  include 'db_connection.php';
// Check connection

$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
{
 $fullname = $_SESSION["fullname"];
 $emailid = $_SESSION["emailid"];
 $dob = $_SESSION["dob"];
 $phoneno = $_SESSION["phoneno"];
   $mobileno = $_SESSION["mobileno"];
 $city = $_SESSION["city"];
// $gender = $_POST["gender"];
 $state = $_SESSION["state"];
   $country = $_SESSION["country"];

 $presentrank = $_SESSION["presentrank"];
 $appliedrank = $_SESSION["appliedrank"];
   $availablefrom = $_SESSION["availablefrom"];
 $availableto = $_SESSION["availableto"];
  $applieddate = $_SESSION["applieddate"];
 $exprank = $_SESSION["exprank"];
// $companyname = $_POST["companyname"];
   $shiptype = $_SESSION["shiptype"];
  

  $photo = $_FILES['photo']['name'];
   $temp=  $_FILES['photo']['tmp_name'];
    move_uploaded_file($temp, "upload/photo/$photo") ;
   
    $photo1 = $_FILES['photo1']['name'];
   $temp1=  $_FILES['photo1']['tmp_name'];
    move_uploaded_file($temp1, "uploadphoto/$photo1") ;
   
  
      $cdate = date('Y-m-d H:i:s');
 $status="1";
// Create connection
 $sql = "INSERT INTO addresume(fullname,emailid,dob,phoneno,mobileno,city,state,country,presentrank,appliedrank,availablefrom,availableto,applieddate,exprank,shiptype,photo,photo1,regid,cdate,status)
 VALUES ('$fullname','$emailid','$dob','$phoneno','$mobileno','$city','$state','$country','$presentrank','$appliedrank','$availablefrom','$availableto','$applieddate','$exprank',
 '$shiptype','$photo','$photo1','$reg','$cdate','$status')";
if (mysqli_query($conn, $sql)) {
$mobileno = $mobileno;
//Sender ID,While using route4 sender id should be 6 characters long.
$username = "Bridge5";
$password = "bri@123";
$type ="TEXT"; 
$senderId = "BRIDGE";
//Your message to send, Add URL encoding here.
$message = urlencode("Thank u for register with us. we will get back to u shortly.");


//Prepare you post parameters
$postData = array(
'mobileno' => $mobileno,
'message' => $message,
'senderId' => $senderId,

);
//API URL
$baseurl ="http://mobicomm.dove-sms.com//submitsms.jsp?";
$url =$baseurl."?username=".$username."&password=".$password."&type=".$type."&sendeId=".$senderId."&mobileno=".$mobileno."&message=".$message; 
// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => $postData
//,CURLOPT_FOLLOWLOCATION => true
));
//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//get response
$output = curl_exec($ch);
//Print error if any
if(curl_errno($ch))
{
echo 'error:' . curl_error($ch);
}
curl_close($ch);
header( "Location: success.php" );
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
return true;
}
else
{
echo "failure";
return false;
}
?>