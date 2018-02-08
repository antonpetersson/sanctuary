<?php
include "classes.php";
session_start(); 
if ($_SESSION == null){
    header('Location: http://localhost:1337/settings.php');
}
else {
    header('Location: http://localhost:1337/results.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanctuary</title>
</head>
<body>



    
</body>
</html>