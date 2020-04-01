<?php
session_start();

require_once('include/db_connection.php');


$sr=$_POST['sr'];
$shipname=$_POST['shipname'];
$rank=$_POST['rank'];
$shiptype=$_POST['shiptype'];
$grt=$_POST['grt'];
$bhp=$_POST['bhp'];
$dphours=$_POST['dphours'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];


$table="<table border='1' cellspacing='0'>
			<tr>
			<td>Sr No</td>
			<td>Ship Name</td>
			<td>Rank Name</td>
			<td>Ship Type</td>
			<td>GRT</td>
			<td>BHP</td>
			<td>DP Hours</td>
			<td>From</td>
			<td>To</td>

			</tr>";

foreach($sr  as $new => $enew){

	$table .="<tr>";

	$table .="<td>".$enew."</td>";
	$table .="<td>".$shipname[$new]."</td>";
	$table .="<td>".$rank[$new]."</td>";
	$table .="<td>".$shiptype[$new]."</td>";	
	$table .="<td>".$grt[$new]."</td>";
	$table .="<td>".$bhp[$new]."</td>";
	$table .="<td>".$dphours[$new]."</td>";
	$table .="<td>".$fromdate[$new]."</td>";
	$table .="<td>".$todate[$new]."</td>";

	$table .="</tr>";

	$insert=exe("INSERT INTO shipexperience SET 

					shipname='".$shipname[$new]."',
					rank='".$rank[$new]."',
					shiptype='".$shiptype[$new]."',
					grt='".$grt[$new]."',
					bhp='".$bhp[$new]."',
					dphours='".$dphours[$new]."',
					fromdate='".$fromdate[$new]."',
					todate='".$todate[$new]."'

				");
	if($insert){
		$_SESSION['shipe']="Ship Experinced Added";
		header('Location:./workexperience.php');
	}else{
		echo"NOT INSERTED";
	}

}

$table .="</table>";

echo $table;
?>