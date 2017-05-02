<?php 
	date_default_timezone_set("Asia/Taipei");
	$before_day = date('Y-m-d',strtotime('2017-05-01 - 3day'));
	echo $before_day;
?>