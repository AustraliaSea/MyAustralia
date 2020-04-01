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
    <h1 class="h3 mb-0 text-gray-800">Key skills</h1>
</div>

<div class="col-md-4" style="margin-left:200px;">
    <form method="post" id="multiple_select_form">
     <select name="framework" id="framework" class="form-control selectpicker" data-live-search="true" multiple>
      <option value="Laravel">Laravel</option>
      <option value="Symfony">Symfony</option>
      <option value="Codeigniter">Codeigniter</option>
      <option value="CakePHP">CakePHP</option>
      <option value="Zend">Zend</option>
      <option value="Yii">Yii</option>
      <option value="Slim">Slim</option>
     </select>
     <br /><br />
     <input type="hidden" name="hidden_framework" id="hidden_framework" />
     <input type="submit" name="submit" class="btn btn-info" value="Submit" />
    </form>
    <br />
    
   </div>

</div>

  <?php
include('includes/scripts.php');
include('includes/footer.php');

?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="tags.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>
    <script src="js/typeahead.tagging.js"></script>

<script>
  $(document).ready(function(){
 $('.selectpicker').selectpicker();

 $('#framework').change(function(){
  $('#hidden_framework').val($('#framework').val());
 });

 $('#multiple_select_form').on('submit', function(event){
  event.preventDefault();
  if($('#framework').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     //console.log(data);
     $('#hidden_framework').val('');
     $('.selectpicker').selectpicker('val', '');
     alert(data);
    }
   })
  }
  else
  {
   alert("Please select framework");
   return false;
  }
 });
});

</script>
<?php

if(isset($_POST['add']))
{
  $text1=$_POST['text1'];

  $text2=$_POST['text2'];

  $sql=exe("INSERT INTO skills SET skills='".$text1."',interest='".$text2."'    ");
  echo "<script>window.alert('record added succesfully');window.location.href='skills.php';</script>";
}


?>