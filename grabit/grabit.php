<?php
function grabit_api(){
$grabip = '';
if($_SERVER[‘REMOTE_ADDR’] != '0'){
$grabip = $_SERVER[‘REMOTE_ADDR’];
}
return $grabip;
}
echo grabit_api();
echo $_SERVER[‘REMOTE_ADDR’];
?>
