<?php
$exerciseNb = 9;
include '../header.php';

$HDF = array (
  02 => 'Aisne',
  59 => 'Nord',
  60 => 'Oise',
  62 => 'Pas-de-Calais',
  80 => 'Somme',
);
foreach($HDF as $dptName)
{
  echo $dptName.'<br>';
}

include '../footer.php';
