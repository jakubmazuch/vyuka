<?php
include ("hlavicka1.php");
$nadpis = "Video";
require "pripojeni.php";
echo "<h1>$nadpis</h1>";


$vysledek3 = mysqli_query($spojeni,  
	"SELECT * FROM `videa` WHERE skola = '$nazev_robot'");
	if ($vysledek3->num_rows > 0) {	
		while ($zaznam1 = mysqli_fetch_array($vysledek3) ): 
			echo "<iframe width='";
			echo $zaznam1["sirka"];
			echo "' height='";
			echo $zaznam1["vyska"];
			echo "' src='https://www.youtube.com/embed/";
			echo $zaznam1["id_videa"];
			echo "' frameborder='1' allowfullscreen></iframe>";
		endwhile;
	}
	else {
		echo $zadna_data;
	
?>

<iframe width="280" height="157.5" src="https://www.youtube.com/embed/hXL5lIE2TFc" frameborder="1" allowfullscreen></iframe>
<iframe width="280" height="157.5" src="https://www.youtube.com/embed/hXL5lIE2TFc" frameborder="1" allowfullscreen></iframe>

<?php
include ("paticka1.php");
?>