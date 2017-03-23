<?php

switch($action) {
    case "register":
        registerAction($bdd);
        break;
        
    case "registerSuccess":
        registerSuccessAction();
        break;
        
    case "login":
        loginAction($bdd);
        break;
        
    case "unlog":
        unlogAction();
        break;
}

function registerAction($bdd) {
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $username = htmlentities($_POST["username"]);
        $email = htmlentities($_POST["email"]);
        $password = htmlentities($_POST["password"]);
        
        if($username == "" || $email == "" || $password = "")
        {
            $_SESSION["flashRegisterError"] = "Veillez remplir tous les champs";
            header("Location: index.php?action=register");
            exit;
        }
        
        $sameEmailReq = $bdd->prepare("SELECT COUNT(*) user FROM user WHERE email = :email");
        $sameEmailReq->bindValue(":email", $email);
        $sameEmailReq->execute();
        $nbSame = $sameEmailReq->fetchColumn();
        
        if($nbSame >= 1) {
            $_SESSION["flashRegisterError"] = "L'adresse e-mail est déjà utilisée";
            header("Location: index.php?action=register");
            exit;
        }
        
        $newUserReq = $bdd->prepare("INSERT INTO user(username, email, password, registration_date, reduction) VALUES(:username, :email, :password, NOW(), :reduction)");
        
        if($newUserReq->execute(array(
            ":username" => $username,
            ":email" => $email,
            ":password" => sha1($password),
            ":reduction" => 0
        ))) {
            
            $_SESSION["connected"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $email;
            $_SESSION["reduction"] = 0;
            header("Location: index.php?action=home");
            exit;
        }
        else {
            $_SESSION["flashRegisterError"] = "Une erreur s'est produite lors de l'inscription";
            header("Location: index.php?action=register");
            exit;
        }
        
    }
    else {
        require("view/register.php");
    }
}

function registerSuccessAction() {
    require("view/registerSuccess.php");
}

function loginAction($bdd) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $email = htmlentities($_POST["email"]);
        $password = sha1(htmlentities($_POST["password"]));
        
        $loginReq = $bdd->prepare("SELECT username, email, reduction FROM user WHERE email = :email AND password = :password");
        $loginReq->execute(array(
            ":email" => $email,
            ":password" => $password
        ));
        
        if($loginReq->rowCount() >= 1) {
            $user = $loginReq->fetch();
            
            $_SESSION["connected"] = true;
            $_SESSION["username"] = $user["username"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["reduction"] = $user["reduction"];
            header("Location: index.php?action=home");
            exit;
        }
        else
        {
            $_SESSION["flashLoginError"] = "Les identifiants sont invalides";
            header("Location: index.php?action=login");
            exit;
        }
    }
    else {
        require("view/login.php");
    }
}

function unlogAction() {
    session_destroy();
    header("Location: index.php?action=home");
}

?>