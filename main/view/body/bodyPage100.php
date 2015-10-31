<?php
session_start();

$action = $_REQUEST['action'];
if($action == null){
    $action = 110;

}

if($action== 110){
    include_once "bodyPage110.php";
}
else if($action==120) {
  include"bodyPage120.php";
}
else if($action==130){
    include"bodyPage130.php";
}
else if($action==140){
    include"bodyPage140.php";
}



