<?php
$wait = $_GET["wait"];
$check = is_numeric($wait);
if($check=="true"){
sleep($wait);
echo "[]";
}else{
echo "Error. Required parameter 'wait' missing.";
}
?>