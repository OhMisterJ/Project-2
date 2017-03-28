<?php
    include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Your Notebook</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <div class="main">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
            <h1>Notebook</h1>
            <a href="../index.php">Home</a> <a href="notes.php">Notes</a>
            </header>

            <section class="note-hold">

                <?php

                    $title = mysqli_real_escape_string($db, $_POST['title']);
                    $note = mysqli_real_escape_string($db, $_POST['notes']);

                    $note_insert = "INSERT INTO entry (title, notes) VALUES ('$title', '$notes')";

                    if (mysqli_query($db, $note_insert)) {
                        echo '<br>DEBUG / Success : Notes added to database.';
                    } else {
                        echo '<br>DEBUG / Failed. Could not execute because : ' . mysqli_error($db);
                    }

                    $db -> close();


                ?>

            </section>

        </div>

    </body>
    </html>