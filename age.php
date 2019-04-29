<?php
$YOB = new Datetime(1984);
$CY = new Datetime(date('m.d.y'));
$diff = $CY->diff($YOB);
printf('You are : %d years' , $diff->y);

?>