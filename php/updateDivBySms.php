<?php

include '../dbConfig/DBFunction.php';

$obj = DbFunction::getInstance();

$resultString = "";

$result = $obj->getChatContent();

while ($row = mysqli_fetch_row($result)) {
    
    
    $resultString = $resultString . "<span class=''>" . $row['0'] .  "</span><br>";
    }
    echo $resultString;

?>