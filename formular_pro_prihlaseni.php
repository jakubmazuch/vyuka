<?php
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
?>