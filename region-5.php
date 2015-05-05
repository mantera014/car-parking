<?php include 'main.php';?>
<?php include 'inc/dbcon.php';?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="inc/css/mystyles.css">
</head>
<body>
<section class="HomeKisii">
<img src="img/1.jpg" alt="Mountain View" style="width:604px;height:470px">
<section class="Regions">
<p>Parking Lots Status</p>
<p class="status">Red -> Reserved , Yellow -> Available</p>
<!-- Table goes in the document BODY -->
<table class="gridtable">
<?php $street ="NATIONAL BANK/LEVEL FIVE STREET"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 001'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 001</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 010'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 010</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 002'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 002</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 011'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 011</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 003'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 003</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 012'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 012</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 004'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 004</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 013'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 013</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 005'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 005</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 014'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 014</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 006'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 006</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 015'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 015</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 007'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 016'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 008'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 008</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 017'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 017</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 009'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 009</td><td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 018'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 018</td>
</tr>
</table>

</section>   
</section>               
<section class="kisii-bottom">
<p>Safe Parking, whenever you are in Kisii</p>
</section>
</body>
</html>
