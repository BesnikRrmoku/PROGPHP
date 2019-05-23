<?php

define ('DB_NAME','projektiphp');
define ('DB_USER','root');
define ('DB_PASSWORD','');
define ('DB_HOST','localhost');

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die (mysqli_error($link));


?>