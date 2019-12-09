<?php
$exerciseNb = 10;
include '../header.php';

$HDF = array (
  02 => 'Aisne',
  59 => 'Nord',
  60 => 'Oise',
  62 => 'Pas-de-Calais',
  80 => 'Somme',
);
foreach($HDF as $dptNumber => $dptName)
{
  echo 'Le département '.$dptName.' porte l\'indicatif '.$dptNumber.'.<br>';
}

include '../footer.php';
