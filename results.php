<!DOCTYPE html>
<html lang="en">
<head>
<?php
include "classes.php";

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanctuary</title>
</head>
<body>
<audio src='./tiger.mp3'></audio>

    <?php
        $myMonkey = new Monkey();
        $myMonkey -> draw();
        $myGiraffe = new Giraffe();
        $myGiraffe -> draw();
        $myTiger = new Tiger();
        $myTiger -> draw();
        $myCoconut = new Coconut();
        $myCoconut -> draw();

    ?>

    
</body>
</html>

<?php



?>