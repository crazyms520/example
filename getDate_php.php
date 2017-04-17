<?php
    date_default_timezone_set("Asia/Taipei");
    $sdate = date('Y-m-d');
    $edate = date('Y-m-d',strtotime($sdate."+5day"));
    echo $sdate.'</br>';
    echo $edate.'</br>';
    exit();
?>