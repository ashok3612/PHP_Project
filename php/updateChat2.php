<?php

include '../dbConfig/DBFunction.php';

$msg = $_POST['msg'];

echo $msg;

$obj = DbFunction::getInstance();

$obj->updateChatSql2($msg);

?>