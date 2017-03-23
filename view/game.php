<link rel="stylesheet" href="asset/css/game.css">

<div class="content">
    <div id="unityPlayer">
        <div class="missing">
            <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
				<img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
            </a>
        </div>
        <div class="broken">
            <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now! Restart your browser after install.">
                <img alt="Unity Web Player. Install now! Restart your browser after install." src="http://webplayer.unity3d.com/installation/getunityrestart.png" width="193" height="63" />
            </a>
        </div>
    </div>
</div>

<div class="game-infos">
    <div class="gi-highscore">
        <p class="gi-header">Meilleurs scores</p>
        <ul class="gi-list-scores">
        </ul>
    </div>
    
    <div class="gi-info-perso">
        <div class="bon-d-achat">
            <p class="gi-header">Montant du bon d'achat estimé</p>
            <p class="gi-bon info-fin-partie"></p>
        </div>
        
        <p class="gi-header">Bilan de votre partie</p>
        <p class="gi-score info-fin-partie"></p>
        <p class="gi-masse info-fin-partie"></p>
        <p class="gi-eco info-fin-partie"></p>
    </div>
</div>

<div id="showdata"></div>

<script type="text/javascript">
		<!--
		var unityObjectUrl = "http://webplayer.unity3d.com/download_webplayer-3.x/3.0/uo/UnityObject2.js";
		if (document.location.protocol == 'https:')
			unityObjectUrl = unityObjectUrl.replace("http://", "https://ssl-");
		document.write('<script type="text\/javascript" src="' + unityObjectUrl + '"><\/script>');
		-->
</script>

<script type="text/javascript">
		<!--
			var config = {
				width: 960, 
				height: 600,
				params: { enableDebugging:"0" }
				
			};
			var u = new UnityObject2(config);

			jQuery(function() {

				var $missingScreen = jQuery("#unityPlayer").find(".missing");
				var $brokenScreen = jQuery("#unityPlayer").find(".broken");
				$missingScreen.hide();
				$brokenScreen.hide();
				
				u.observeProgress(function (progress) {
					switch(progress.pluginStatus) {
						case "broken":
							$brokenScreen.find("a").click(function (e) {
								e.stopPropagation();
								e.preventDefault();
								u.installPlugin();
								return false;
							});
							$brokenScreen.show();
						break;
						case "missing":
							$missingScreen.find("a").click(function (e) {
								e.stopPropagation();
								e.preventDefault();
								u.installPlugin();
								return false;
							});
							$missingScreen.show();
						break;
						case "installed":
							$missingScreen.remove();
						break;
						case "first":
						break;
					}
				});
				u.initPlugin(jQuery("#unityPlayer")[0], "game.unity3d");
			});
		-->
</script>

<script>
        function getGameOverData(nbPlastique, nbPapier, nbVerre, nbOrgan, score) {
            var txtMasse = "Masse de déchets recyclés : ";
            var txtBon = "Montant du <b>bon d'achat</b> estimé : ";
            var txtEco = "Masse de CO2 préservée : ";
            var txtScore = "Score : ";
            
            $.post("controller/gameController.php?actionajax=gameOverDataAjax", {"nbPlastique": nbPlastique, "nbPapier": nbPapier, "nbVerre": nbVerre, "nbOrgan": nbOrgan, "score" : score}, function(data) {
                
                $(".gi-info-perso").css("display", "block");
                
                getHighscore();
                
                var data = JSON.parse(data);
                
                $(".gi-masse").html(txtMasse + "<b>" + data["pdsTotal"] + "kg </b>");
                $(".gi-bon").html(data["revTotal"] + "€");
                $(".gi-eco").html(txtEco + "<b>" + data["impcTotal"] + "kg </b>");
                $(".gi-score").html(txtScore + "<b>" + data["score"] + "</b>");
            });
        };
    
        function getHighscore() {
            $.post("controller/gameController.php?actionajaxscore=getHighscore", function(data) {
                
                var highscore = JSON.parse(data);
                $("ul.gi-list-scores").html("");
                
                for(var i = 0; i < highscore.length; i++) {
                    $("ul.gi-list-scores").append("<li><b>" + highscore[i]["username"] + "</b> : " + highscore[i]["score"] + " points" +"</li>");
                }
            });
        }
    
        getHighscore();
</script>