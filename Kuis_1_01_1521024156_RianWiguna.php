<!DOCTYPE html>
<html>
<head>
	<title>AKN Bojonegoro</title>
</head>
<body>
	<?php 
	$input = "RIAN WIGUNA"; // Variabel $input mempunyai Nilai String yaitu Rian Wiguna
	echo "<h3>MEMBALIK TULISAN - CARA 1</h3>";
	echo "<hr />";
	$count = strlen($input); // Kemudian dari Variabel $input tadi akan dihitung panjang karakter string tersebut
	?>
	<table border=2>
		<tr>
			<th>Input</th>
			<th>Output</th>
		</tr>
		<tr>
			<td><?php echo $input;?></td> <!-- Nilai dari $input ditampilkan di Kolom Input
			<td>
				<?php 
					for($i=$count; $i >=0; $i--){
						$output = substr($input, $i, 1);
						echo $output;
					}
				?>
			</td>
		</tr>
	</table>
	<br><br><br>
	<?php
	echo "<h3>MEMBALIK TULISAN - CARA 2</h3>";
	echo "<hr />"; 
	?>
	<table border=2>
		<tr>
			<th>Input</th>
			<th>Output</th>
		</tr>
		<tr>
			<td><?php echo $input;?></td>
			<td><?php echo strrev($input);?></td> // streev adalah fungsi untuk membalikan sebuah string, jadi nilai string akan dibalikan sesuai dengan dari inputan variabel $input yang sudah dideklarasikan di atas
		</tr>
	</table>
</body>
</html>