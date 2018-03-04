<!DOCTYPE html>
<html>
<head>
<title>Host Status Tool</title>
</head>

<body>

<?php

//Create ping function
function ping($host)
{
        exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($host)), $res, $rval);
        return $rval === 0;
}



//Check if the request was emtpy
if (empty($_POST['host'])) { 

Echo "Please enter a valid host name";
Echo "<br>"."<a href=\"javascript:history.go(-1)\">Go Back</a>";

 }

else {

$host = $_POST["host"];
$up = ping($host);

print 'The host '."<strong>".$host."</strong>".' is '.($up ? 'up' : 'down').'!';

}


?>
</body>
</html>
