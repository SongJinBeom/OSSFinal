<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=calendar;charset=utf8', 'root', '123456');
}
catch(Exception $e)
{
        echo "Fail";
        die('Erreur : '.$e->getMessage());
}
