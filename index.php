<?php
    session_start();
    
    // require_once("./connexion.php");

    // var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="icon" href="./cache/favicon.ico" type="image/x-icon" >

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once('./components/header.php'); ?>

    <section id="FrontPage" class="container">
        <?php
            $GreetingName = (session_id() != "" && isset($_SESSION['CurrentUser'])) ? $_SESSION['CurrentUser'] : "Guest";

            echo "<h1>Hello " . $GreetingName . "</h1>";

            if (isset($_SESSION['CurrentUser']))
            {
                echo '<h2>See the add page to add a new contact.</h2>';
            }
            else
            {
                echo '<p>This application helps you to manage the contacts of the enterprise. You need to be logged in first.</p>';
            }
        ?>
        
    </section>


</body>
</html>
