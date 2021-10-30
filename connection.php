<?php
$link=mysqli_connect("localhost", "root","") or die(mysli_error($link));
mysqli_select_db($link,"travel_display") or die(mysli_error($link));

?>