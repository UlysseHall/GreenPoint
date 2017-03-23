<?php session_start(); ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="asset/css/index.css">
        <title>GreenPoint</title>
    </head>
    
    <body>
        <div class="main-container">
            
            <?php require("view/header.php"); ?>

            <script src="asset/framwork/jquery.js"></script>
            
            <?php

                require("connectBdd.php");
                $listAction = ["home", "login", "register", "game", "unlog", "savoirUtile", "contact", "profile"];
                $action = "home";

                if(isset($_GET["action"]) && in_array($_GET["action"], $listAction)) {
                    $action = $_GET["action"];
                }

                switch($action) {
                    case "register":
                        require("controller/userController.php");
                        break;

                    case "login":
                        require("controller/userController.php");
                        break;
                        
                    case "unlog":
                        require("controller/userController.php");
                        break;

                    case "home":
                        require("controller/mainController.php");
                        break;

                    case "game":
                        require("controller/gameController.php");
                        break;
                        
                    case "savoirUtile":
                        require("controller/mainController.php");
                        break;
                        
                    case "contact":
                        require("controller/mainController.php");
                        break;
                        
                    case "profile":
                        require("controller/mainController.php");
                        break;
                }

            ?>
        </div>
    </body>
</html>