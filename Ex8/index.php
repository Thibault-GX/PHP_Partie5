<?php
$exerciseNb = 8;
include '../header.php';

$months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
foreach($months as $monthName)
{
    echo $monthName.'<br />';
}

include '../footer.php';
