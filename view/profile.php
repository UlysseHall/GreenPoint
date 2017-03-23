<link rel="stylesheet" href="asset/css/profile.css">


<main>
            <div class="gradient"></div>

            <div class="maincontainer">
                <div class="openingcontent">
                    <div class="hello">
                        <h1><span>Bonjour</span><br><?php echo($_SESSION["username"]); ?>!</h1>
                    </div>
                    <div class="pHello">
                        <p>Grâce au tri sélectif vous avez généré <b>14.32€</b> !</p>
                    </div>
                </div>
                <div class="sidecontent">
                    <div class="title">
                        <h2>Récupérez votre bon</h2>
                        <hr>
                    </div>
                    <div class="btnreceive draw">
                        <a href="#">Recevoir par mail</a>
                    </div>
                    <div class="btnfind draw">
                        <a href="index.php?action=contact">Trouver en magasin</a>
                    </div>
                </div>
            </div>
        </main>