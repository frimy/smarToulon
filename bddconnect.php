<?php

try
{
    $dbconnexion=new PDO("mysql:host=localhost;dbname=tpmSmartCity","root","");                                      
}

catch(PDOexception $e)
{
    header('location:index.php?mess=echec+de+la+connexion');
    exit;
}
?>
