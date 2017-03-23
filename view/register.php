<link rel="stylesheet" href="asset/css/register.css">

<content>
        <h2>INSCRIPTION <br> À VOTRE <br> GREEN POINT</h2>
        <form class="remplir" method="post" action="index.php?action=register">
            <?php
                if(isset($_SESSION["flashRegisterError"]))
                {
                    echo($_SESSION["flashRegisterError"]);
                    unset($_SESSION["flashRegisterError"]);
                }
            ?>
            <input class="saisir" type="text" name="email" placeholder="adresse mail" required>
            <input class="saisir" type="password" name="password" placeholder="mot de passe" required>
            <div id="deuxboutons">
                <input class="connect" type="text" name="username" placeholder="pseudo" required>
                <div id="inscrit">
                    <a class="click" onclick="$('form.remplir').submit();" id="login" href="#">inscription</a>
                </div>
            </div>
            <div class="gradient"></div>

        </form>
    </content>