<?php
include_once 'php/dbconnect.php';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    <header>
        <h1 align="center">Notes for Web Programming</h1>

        <p>Type your notes below. Click "Submit Notes" to save your notes to for future reference.</p>
        <p>* denotes a required field.</p>
        </header>

        <form name="notesForm" action="php/upload.php" onsubmit="return validation()" method="post">

            <p>
                            <input type="text" name="title" id="title" placeholder="Title">*
                        </p>

                        <p>
                            <input type="text" name="yourName" id="yourName" placeholder="Your Name">*
                        </p>

                        <p>
                            <textarea type="text" name="note" id="note" placeholder="Insert Notes Here"></textarea>
                        </p>

                        <input type ="submit" id="submitbutton" value="Submit Notes">

        </form>

        <a href="http://localhost:8888/project_2_final/php/notes.php">Go to your Notes</a>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
