<?php
/* MENU */
require "pripojeni.php";

$vysledek = mysqli_query($spojeni,  
"SELECT * FROM `hodiny` WHERE `visible` ORDER BY `hodiny`.`poradi` ASC");
/* Konec přímé práce s databází. */

echo "<div id='menu'>";
echo "<ul>";
echo "<a href='index.php'><div class='menuLink'>Domů</div></a>";

while ($zaznam = mysqli_fetch_array($vysledek) ): 

echo "<a href='index.php?s=";
echo $zaznam["id"];
echo "'><div class='menuLink'>";
echo $zaznam["predmet"];
echo "- <br>";
echo $zaznam["skola"];
echo " <br>";
echo $zaznam["cas"];
echo "</div></a>";
endwhile;
echo "</ul>";
?>
   <hr>

 </div>
   
