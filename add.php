<?php
    session_start();

    if (!isset($_SESSION['CurrentUser']))
    {
        header("Location: " . 'index.php');
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="icon" href="./cache/favicon.ico" type="image/x-icon" >

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once('./components/header.php'); ?>

    <section id="Rent" class="container">
        <h2>Insert the new contact info: </h2>

        <form method="POST" action="controller.php" class="controller">
        <label for="name_last">Last Name:</label>
        <input contenteditable="true" type="text" name="name_last" placeholder="Insert last name here" required >
        <label for="name_first">First Name:</label>
        <input contenteditable="true" type="text" name="name_first" placeholder="Insert first name here" required >
        <label for="email">Email:</label>
        <input contenteditable="true" type="text" name="email" placeholder="Insert email here" required >
        <label for="phone">Phone:</label>
        <input contenteditable="true" type="text" name="phone" placeholder="Insert phone number here" required >
        <label for="address">Address:</label>
        <input contenteditable="true" type="text" name="address" placeholder="Insert address here" required >

        <button name="Intention" value="Add" type="submit" >Add</button>
        </form>

    </section>
</body>
</html>
