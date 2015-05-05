
<?php
session_start();
if( isset( $_SESSION['email'] ) )
     {
	 }
	else{
	 exit;
  }
   ?>
<?php include 'admin-main.php';?>
<?php 
include('inc/dbcon.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="css/mystyles.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/css/dt_bootstrap.css">

</head>
<body>
<section class="HomeKisii">
<img src="" alt="" style="width:954px;height:470px">


<div class="cont">
<br>
<br>
<form action="edit.php" method="post">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Zone Name</th>
                                    <th>Parking Lots</th>
									 <th>Attendant on Duty</th>
                                    <th>Attendant Phone</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
										 <td>1</td>
                                         <td>OGEMBO STREET</td>
                                         <td>18</td>
                                         <td>James B. K</td>
                                         <td>0708222536</td>
										
                            </tr>
						 <tr>
										 <td>2</td>
                                         <td>ZONIC STREET</td>
                                         <td>18</td>
                                         <td>Jane B. K</td>
                                         <td>0708222536</td>
										
                            </tr>
                            </tbody>
                        </table>
						
</form>



</div>


</section>
<section class="kisii-bottom">
<p>Safe Parking, whenever you are in Kisii</p>
</section>
</body>
</html>
