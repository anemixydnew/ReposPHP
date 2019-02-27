<!DOCTYPE html>
<html>
<head>
	<title>PonerImagen</title>
</head>
<body>
	<?PHP
	#dos temas tentativos, y los requisitos funcionales, todavia no los no funcionales para la proxima
		function matriz($a){
			echo "<table border=1>";
			for($aa=1;$aa<=$a;$aa=$aa+1){
				echo "<TR>"; 
				for($bb=1;$bb<=$a;$bb=$bb+1){
					echo "<TD>";
					echo '<img src="https://images.vexels.com/media/users/3/143350/isolated/lists/150164edc7f28a716bfceae9dd58cf2c-coolface-trollface-meme.png">';
					echo "<br>";
					echo "</TD>";
				}
				echo "</TR>";
			}
			echo "</table>";
		}
		$num1=3;
		echo "El numero es: ".$num1;
		echo "<br>";
		echo "".matriz($num1);
		echo "<br>";
	?>
</body>
</html>
		