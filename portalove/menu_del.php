<?php
include_once "conn.php";
$db = $GLOBALS['db'];
$id = $_GET["id"];

$del = $db->deleteMenu($id);

if($del){
    echo "Success";
}else{
    echo "error";
}


?>