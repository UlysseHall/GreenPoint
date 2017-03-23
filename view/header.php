<header>
    <div class="header-logo">
        <a href="index.php?action=home">
            <img src="asset/img-layout/logo.png">
        </a>
    </div>

    <div class="header-link">
        <ul>
            <li>
                <a href="index.php?action=home">Concept</a>
            </li>
            <li>
                <a href="index.php?action=game">Jouer</a>
            </li>
            <li>
                <a href="index.php?action=savoirUtile">Savoir utile</a>
            </li>
            <li>
                <a href="index.php?action=contact">Nous trouver</a>
            </li>
        </ul>
    </div>
                
    <div class="header-account">
        <?php
            if(isset($_SESSION["connected"]) && $_SESSION["connected"]) {
        ?>
                        
            <img src="asset/img-layout/power.png" alt="power">
            <a href="index.php?action=unlog">Déconnexion</a>
                        
        <?php } else { ?>
                       
            <a href="index.php?action=login">Connexion</a>
            <a href="index.php?action=register">Inscription</a>
                        
        <?php } ?>
    </div>
</header>