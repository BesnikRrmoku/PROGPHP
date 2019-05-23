<?php

function secure_data($link, $data){

$data= stripslashes($data);
$data= strip_tags($data);
$data= mysqli_real_escape_string($link, $data);

return $data;


}

?>