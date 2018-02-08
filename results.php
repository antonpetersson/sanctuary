<?php
include "classes.php";
session_start(); 
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
<audio src='./tiger.mp3'></audio>

    <?php
        //Gör session till post bara om man skickar formulären.
        if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
            $_SESSION = $_POST;
        }
        //Kollar om något ligger i session
        
        if ($_SESSION == null){
            header('Location: http://localhost:1337/settings.php');
        }


        $monkies = $_SESSION['monkies'];
        $giraffes = $_SESSION['giraffes'];
        $tigers = $_SESSION['tigers'];
        $coconuts = $_SESSION['coconuts'];
        

        for ($i = 1; $i <= $monkies; $i++) {
            $myMonkey = new Monkey();
            $myMonkey -> draw();
        } 
        for ($i = 1; $i <= $giraffes; $i++) {
            $myGiraffe = new Giraffe();
            $myGiraffe -> draw();
        } 
        for ($i = 1; $i <= $tigers; $i++) {
            $myTiger = new Tiger();
            $myTiger -> draw();
        } 
        for ($i = 1; $i <= $coconuts; $i++) {
            $myCoconut = new Coconut();
            $myCoconut -> draw();
        } 
    ?>
    </br>
    <form action="nuke.php" method="get">
        <input type="submit" value="Bomba naturreservatet">
    </form>

    
</body>
</html>

<?php



?>