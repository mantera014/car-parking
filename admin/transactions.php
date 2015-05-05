
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
                                    <th>No</th>
                                    <th>Transaction Id</th>
                                    <th>Date</th>
									 <th>Amount</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                              	<?php 
								$no=0;
							$query=mysql_query("select * from transactions")or die(mysql_error());
							while($row=mysql_fetch_array($query)){
							$no=$no+1;
							?>
                                
										<tr>
										 <td><?php echo $no ?></td>
                                         <td><?php echo $row['id'] ?></td>
                                         <td><?php echo $row['d1'] ?></td>
                                         <td><?php echo $row['charge'] ?></td>
                                        
										        </tr>
                         <?php  } ?>
						 
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
