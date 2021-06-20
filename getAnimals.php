<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    $dbh = new PDO('sqlite:animals');
    $legs = $_GET["legs"];
    $size = $_GET["size"];
    $diet = $_GET["diet"];

    $sql = 'SELECT name FROM animal WHERE legs ='. intval($legs) .' AND size="'. strtolower($size) .'" AND diet="'. strtolower($diet) .'";';
    $results = $dbh->prepare($sql);
    $results->execute();
    $send = $results->fetch();

    if(isset($send[0])){
        echo '<p>' . $send[0] . '</p>';
    }else{
        echo '<p>No animal found</p>';
    }
?>