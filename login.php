<?php
session_start();
include ("hlavicka1.php");
$nadpis = "Příhlášení do administrace";
require "pripojeni.php";
echo "<h1>$nadpis</h1>";

if((!empty($_SESSION['prihlasen']))and($_SESSION['prihlasen']===1))
{
	echo "<div style='text-align: right'>";
	echo "<p>Jste přihlášen jako uživatel " .htmlspecialchars($_SESSION['login'], ENT_QUOTES). " | <a href='admin/index.php?odhlasit'>Odhlásit se.</a></p>";
	/*include ("admin/index.php");*/
	echo "<script>
			window.location.href='admin/index.php';
		</script>";
	echo "</div>";
}
ELSE {


echo "<form action='/admin/index.php' method='post'>";
echo "<table>";
	echo "<tr>";
		echo "<td>";
			echo "uživatelské jméno:";
		echo "</td>";
		echo "<td>";
			echo "<input type='text' name='login'>";
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
			echo "heslo:";
		echo "</td>";
		echo "<td>";
			echo "<input type='password' name='password'>";
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
			echo "<input type='submit' value='Přihlásit se'>";
		echo "</td>";
	echo "</tr>";
echo "</table>";

echo "</form>";
}
include ("paticka1.php");
?>