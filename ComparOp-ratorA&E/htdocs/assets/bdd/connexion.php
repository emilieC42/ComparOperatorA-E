<?php
session_start();
try
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=ComparOperatorA&E;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
