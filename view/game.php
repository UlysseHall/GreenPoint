<link rel="stylesheet" href="asset/css/game.css">

<h1>jeu</h1>

<form>
    <input type="text" id="plastique" placeholder="Nb elem Plastique">
    <input type="text" id="papier" placeholder="Nb elem Papier">
    <input type="text" id="verre" placeholder="Nb elem Verre">
    <input type="text" id="organ" placeholder="Nb elem Organique">
</form>
<div id="showdata"></div>
<div class="submitBtn">
    <button id="valider">Valider</button>  
</div>

<script>
    $(function() {
        
        $("button#valider").click(function() {
            getGameOverData(
                $("#plastique").val(),
                $("#papier").val(),
                $("#verre").val(),
                $("#organ").val()
            );
        });
        
        function getGameOverData(nbPlastique, nbPapier, nbVerre, nbOrgan) {
            $.post("controller/gameController.php?actionajax=gameOverDataAjax", {"nbPlastique": nbPlastique, "nbPapier": nbPapier, "nbVerre": nbVerre, "nbOrgan": nbOrgan}, function(data) {
                
                var data = JSON.parse(data);
                $("div#showdata").html(
                    "<p>Masse de PLASTIQUE : <b>" + data["pdsPlastique"] + "kg</b>, PAPIER : <b>" + data["pdsPapier"] + "kg</b>, VERRE : <b>" + data["pdsVerre"] + "kg</b>, ORGANIQUE : <b>" + data["pdsOrgan"] + "kg</b></p> <p>Masse totale : <b>" + data["pdsTotal"] + "kg</b></p> <p>Bon d'achat estimé : <b>" + data["revTotal"] + "€</b></p> <p>Impact écologique : <b>" + data["impcTotal"] + " kg de CO2</b> sauvé</p>"
                );
            });
        };
        
    });
</script>