<?php


    


?>

<html>
<head>
<title>HOME PAGE</title>
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../js/AllAjax.js"></script>
</head>
<body>

<div class="w3-container">
<div class="w3-container w3-half w3-section custom-left ">
<div id="user-1-container"class="w3-container custom-user1">
					



</div>
        <div class="w3-twothird custom-text-input"><input id="text_user1" class=""></div>
        <div class="w3-quarter"><span class="w3-button w3-green custom-button" onclick="SendSmsUser1(); $('#text_user1').val('');"> SEND </span></div>
</div>

<div class="w3-container w3-half w3-section custom-right">
<div id="user-2-container" class="w3-container custom-user2">


</div>
        <div class="w3-twothird custom-text-input"><input id="text_user2" class=""></div>
        <div class="w3-quarter"><span class="w3-button w3-green custom-button" onclick="SendSmsUser2(); $('#text_user2').val('');"> SEND </span></div>

</div>
</div>
</body>
</html>