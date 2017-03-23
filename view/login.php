<link rel="stylesheet" href="asset/css/login.css">

<content>
	    <h2>CONNEXION <br> À VOTRE <br> GREEN POINT</h2>
		<form class="remplir" method="post" action="index.php?action=login">
            <?php
                if(isset($_SESSION["flashLoginError"]))
                {
                    echo($_SESSION["flashLoginError"]);
                    unset($_SESSION["flashLoginError"]);
                }
            ?>
		    <input class="saisir" type="text" name="email" placeholder="adresse mail">
		    <input class="saisir" type="password" name="password" placeholder="mot de passe">
		    <div id="cabug">
		        <a class="connect" onclick="$('form').submit();" href="#">connexion</a>
		        <div id="inscrit">
		            <a class="click" href="index.php?action=register" id="login" href="#">inscription</a>
		        </div>
		    </div>
		    <div class="gradient"></div>

		</form>
</content>