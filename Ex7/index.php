<?php
$exerciseNb = 7;
include '../header.php';

$HDF = array (
  02 => 'Aisne',
  59 => 'Nord',
  60 => 'Oise',
  62 => 'Pas-de-Calais',
  80 => 'Somme',
);
$HDF[51] = 'Marne';
echo $HDF[51];

include '../footer.php';
