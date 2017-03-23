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

function gameOverDataAction() {
    
    $gameData = file_get_contents("../asset/json/gameData.json");
    $data = json_decode($gameData, true);
    
    $pdsPlastique = nbToPdsAction($_POST["nbPlastique"], $data["plastique"]["poids"]);
    $pdsPapier = nbToPdsAction($_POST["nbPapier"], $data["papier"]["poids"]);
    $pdsVerre = nbToPdsAction($_POST["nbVerre"], $data["verre"]["poids"]);
    $pdsOrgan = nbToPdsAction($_POST["nbOrgan"], $data["organ"]["poids"]);
    $pdsTotal = $pdsPlastique + $pdsPapier + $pdsVerre + $pdsOrgan;
    
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
    
    $returnData = ["pdsPlastique" => $pdsPlastique, "pdsPapier" => $pdsPapier, "pdsVerre" => $pdsVerre, "pdsOrgan" => $pdsOrgan, "pdsTotal" => $pdsTotal, "impcTotal" => $impcTotal, "revTotal" => $revTotal];
    
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
    require("view/game.php");
}

?>