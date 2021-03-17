<?php
require(__DIR__ . '../../models/cityoftournament.php');
if (isset($_POST['zipCode']))
{
    $city = new Cityoftournament;
    $zipCodeList = $city->zipCodeList($_POST['zipCode']);
    echo json_encode($zipCodeList);
    
}