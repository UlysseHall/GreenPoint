<?php

switch($action) {
    case "home":
        homeAction();
        break;
        
    case "savoirUtile":
        savoirUtile($bdd);
        break;
        
    case "contact":
        contactAction();
        break;
}

function homeAction() {
    require("view/home.php");
}

function savoirUtile($bdd) {
    $savoirReq = $bdd->query("SELECT content, header FROM savoir");
    $savoirReq->execute();
    
    require("view/savoirUtile.php");
}

function contactAction() {
    require("view/contact.php");
}

?>