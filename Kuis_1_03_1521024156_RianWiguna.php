<!DOCTYPE html>
<html>
<head>
	<title>AKN Bojonegoro</title>
</head>
<body>
<?php
	$kalimat = "RIAN 1521024156 WIGUNA";
	$inisial1 = substr($kalimat, 0,-21);
	$inisial2 = substr($kalimat, 17,-4);
	echo "<h4>My Full Name : $kalimat</h4>";
	echo "<h2>and You can call me : $inisial1$inisial2</h2>";
?>
</body>
</html>