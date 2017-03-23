<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=greenpoint', 'root', 'kamini');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>