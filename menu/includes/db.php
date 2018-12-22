<?php

function db_con(){
$co = mysqli_connect("localhost","root","");
$db = mysqli_select_db($co,"e-menu");
return $co;
}


function getTableContent($co, $cat_id){
	$sql= "select * from food WHERE cat_id=$cat_id ";
  $result = mysqli_query($co, $sql);
  return $result;
}
