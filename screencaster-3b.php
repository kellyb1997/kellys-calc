<html>
<body>

<?php
$numbers = array("20.00", "15", "6"); 
echo "Engineer-Wairuri-Kamau " . $numbers[0] . ", " . $numbers[1] . $numbers[2] . ".";

		<title></title>
		<link href="" rel="stylesheet">
	
	
		<form id="age-frm" method="post"?>
			<h2>RAT</h2>
			<span class="txt">Input your text:</span>
			<input type="text" id="text" name="txt" required>
			<button name="submit">SUBMIT</button>
		</form>
	>
<?php

	if(isset($_POST['submit'])){
		$txt = $_POST['txt'];
		
		$res = preg_replace("/[^a-zA-Z]/", "", $txt);
		echo $res;
	}
?>


?>

</body>
</html>