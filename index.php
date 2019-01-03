<?php
include ("hlavicka1.php");
if (!isset($_GET['s'])) {
	include ("soubory/uvod.php");
}
else {
	include ("soubory/hodina.php");
}
include ("paticka1.php");
?>