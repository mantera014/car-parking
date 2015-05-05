<?php include 'main.php';?>
<!DOCTYPE HTML>
<html>
<head>
<script src="mootools-core.js" type="text/javascript"></script>
	<script src="mootools-more.js" type="text/javascript"></script>
	<script src="Source/Locale.en-US.DatePicker.js" type="text/javascript"></script>
	<script src="Source/Picker.js" type="text/javascript"></script>
	<script src="Source/Picker.Attach.js" type="text/javascript"></script>
	<script src="Source/Picker.Date.js" type="text/javascript"></script>


<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link href="style.css" rel="stylesheet" />
	<link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">
<script>

	window.addEvent('domready', function(){
		new Picker.Date($$('INPUT'), {
			timePicker: true,
			positionOffset: {x: 5, y: 0},
			pickerClass: 'datepicker_bootstrap',
			useFadeInOut: !Browser.ie
		});
	});

	</script>
</head>

<form class="box login" action="process-book-3.php" method="post">
	<fieldset class="boxBody">
	 <label>Specify Date and time to book</label>
	 <label>From:</label>
	<input type="text" name="from"value="02.11.2014 11:05AM">
	<label>To:</label>
	<input type="text" name="to" value="02.11.2014 12:05AM">
	  <label>Amount to be charged: Kes. 60/-</label>
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="Book" tabindex="4">
	</footer>
</form>
</html>
