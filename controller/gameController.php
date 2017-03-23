<?php

if(isset($action)) {
    
    switch($action) {
    case "game":
        gameAction();
        break;
    }
}

if(isset($_GET["actionajax"]) && $_GET["actionajax"] == "gameOverDataAjax") {
    gameOverDataAction();
}

if(isset($_GET["actionajaxscore"]) && $_GET["actionajaxscore"] == "getHighscore") {
    getHighscoreAction();
}

function gameOverDataAction() {
    session_start();
    require("../connectBdd.php");
    
    $gameData = file_get_contents("../asset/json/gameData.json");
    $data = json_decode($gameData, true);
    
    $score = htmlentities($_POST["score"]);
    $pdsPlastique = nbToPdsAction($_POST["nbPlastique"], $data["plastique"]["poids"]);
    $pdsPapier = nbToPdsAction($_POST["nbPapier"], $data["papier"]["poids"]);
    $pdsVerre = nbToPdsAction($_POST["nbVerre"], $data["verre"]["poids"]);
    $pdsOrgan = nbToPdsAction($_POST["nbOrgan"], $data["organ"]["poids"]);
    $pdsTotal = $pdsPlastique + $pdsPapier + $pdsVerre + $pdsOrgan;

    $scoreReq = $bdd->prepare("INSERT INTO score(score, username) VALUES(:score, :username)");
    $scoreReq->execute(array(
        ":score" => $score,
        ":username" => $_SESSION["username"]
    ));
    
    $impcTotal = 
        ($pdsPlastique * $data["plastique"]["impact"]) + 
        ($pdsPapier * $data["papier"]["impact"]) + 
        ($pdsVerre * $data["verre"]["impact"]) + 
        ($pdsOrgan * $data["organ"]["impact"]);
    $impcTotal = round($impcTotal, 2);
    
    $revTotal = 
        ($pdsPlastique * $data["plastique"]["revente"]) + 
        ($pdsPapier * $data["papier"]["revente"]) + 
        ($pdsVerre * $data["verre"]["revente"]) +
        ($pdsOrgan * $data["organ"]["revente"]);
    $revTotal = round($revTotal * 0.2, 2);
    
    $returnData = ["pdsTotal" => $pdsTotal, "impcTotal" => $impcTotal, "revTotal" => $revTotal, "score" => $score];
    
    echo(json_encode($returnData));
}

function nbToPdsAction($nb, $pdsPerElem)
{
    $trueNb = floatval($nb);
    $truePdsPerElem = floatval($pdsPerElem);
    return floatval($trueNb * $truePdsPerElem);
}

function gameAction()
{
    if(isset($_SESSION["connected"])) {
        require("view/game.php");
    }
    else {
        header("Location: index.php?action=login");
        exit;
    }
}

function getHighscoreAction() {
    require("../connectBdd.php");
    $highReq = $bdd->query("SELECT score, username FROM score ORDER BY score DESC LIMIT 0,10");
    $highReq->execute();
    
    $highscore = [];
    
    while($scoreH = $highReq->fetch()) {
        array_push($highscore, array("username" => $scoreH["username"], "score" => $scoreH["score"]));
    }
    
    echo(json_encode($highscore));
}

?>