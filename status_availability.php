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
    <h1 class="h3 mb-0 text-gray-800">JOB STATUS</h1>
</div>
</div>
<div class="container-fluid">
<form>

<div class="custom-control custom-checkbox custom-control-block">
  <input type="checkbox" class="custom-control-input" id="defaultInline1">
  <label class="custom-control-label" for="defaultInline1">ACTIVELY LOOKING FOR JOB</label>

</div>

<div class="custom-control custom-checkbox custom-control-block">
  <input type="checkbox" class="custom-control-input" id="defaultInline2">
  <label class="custom-control-label" for="defaultInline2">OPEN FOR NEW JOB OFFER</label>

</div>

<div class="custom-control custom-checkbox custom-control-block">
  <input type="checkbox" class="custom-control-input" id="defaultInline3">
  <label class="custom-control-label" for="defaultInline3">NOT LOOKING FOR JOB CHANGE</label>

</div>
<br>
<input type="submit" name="submit" value="ADD" class="btn btn-primary">
<br><br>
<h1 class="h3 mb-0 text-gray-800 ">AVAILABILITITY</h1>

<div class="row">
<div class="col-md-3">
<div class="form-group">
FROM:
<input type="date" name="fdate" class="form-control">
</div>
</div>

<div class="col-md-3">
<div class="form-group">
FROM:
<input type="date" name="fdate" class="form-control">
</div>
</div>


</div>

<input type="submit" name="save" value="SAVE" class="btn btn-primary">

</div>

</form>






  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>