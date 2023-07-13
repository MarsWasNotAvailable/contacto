<?php
    session_start();

    // var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="icon" href="./cache/favicon.ico" type="image/x-icon" >

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once('./components/header.php'); ?>

    <section class="container">
        <p>This is the list of contacts:</p>
    </section>

    <section id="ShowingContact" class="gridlayout">

        <?php
            if (isset($_SESSION['CurrentUser']))
            {
                include_once("./connexion.php");

                $NewConnection = new MaConnexion("contacto", "root", "", "localhost");
                // var_dump($NewConnection);

                if ($_SESSION['UserRole'] == 'Admin')
                {
                    $Result = $NewConnection->select("contacts", "*");

                    foreach ($Result as $Key => $Value)
                    {
                        echo '<form method="POST" action="controller.php" class="controller">';

                        echo '<input name="idContact" value="' . $Value['idContact'] .'" type="hidden"></input>';
                        
                        echo '<h2>' . $Value['name_last'] . '</h2>';
                        echo '<h3>' . $Value['name_first'] . '</h3>';

                        echo '<label for="name_last">Last Name:</label>';
                        echo '<input contenteditable="true" type="text" name="name_last" value="' . $Value['name_last'] . '" >';

                        echo '<label for="name_first">First Name:</label>';
                        echo '<input contenteditable="true" type="text" name="name_first" value="' . $Value['name_first'] . '" >';

                        echo '<label for="email">Email:</label>';
                        echo '<input contenteditable="true" type="text" name="email" value="' . $Value['email'] . '" >';

                        echo '<label for="phone">Phone:</label>';
                        echo '<input contenteditable="true" type="text" name="phone" value="' . $Value['phone'] . '" >';

                        echo '<label for="address">Address:</label>';
                        echo '<input contenteditable="true" type="text" name="address" value="' . $Value['address'] . '" >';

                        echo '<span>';
                        echo '<button name="Intention" value="Update" type="submit" >Update</button>';
                        echo '<button name="Intention" value="Remove" type="submit" >Remove</button>';
                        echo '</span>';


                        echo '</form>';
                    }
                    

                    // var_dump($Result);
                }

            }
        ?>
    </section>
</body>
</html>
