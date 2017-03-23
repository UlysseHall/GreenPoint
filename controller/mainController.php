<?php

switch($action) {
    case "home":
        homeAction();
        break;
        
    case "savoirUtile":
        savoirUtile();
        break;
        
    case "contact":
        contactAction();
        break;
        
    case "profile":
        profileAction();
        break;
}

function homeAction() {
    require("view/home.php");
}

function savoirUtile() {
    require("view/savoirUtile.php");
}

function contactAction() {
    require("view/contact.php");
}

function profileAction() {
    require("view/profile.php");
}

?>