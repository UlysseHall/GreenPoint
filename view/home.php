<link rel="stylesheet" href="asset/css/home.css">


<main>
    <div class="concept-description">
			<div class="title">
				<div class="nbr">
					<p class="titlenbr">1</p>
				</div>
				<h1 class="title">faire <br>le tri</h1>
			</div>

			<div class="titleContainerNone">
				<div id="title1" class="txt">
					<h1 class="title">faire <br>le tri</h1>
				</div>
				<div id="title2" class="txt">
					<h1 class="title">re- <br>cycler</h1>
				</div>
				<div id="title3" class="txt">
					<h1 class="title">et... <br>gagner!</h1>
				</div>
			</div>

			<div class="nbrContainerNone">
				<div id="nbr1">
					<p class="nbr1">1</p>
				</div>
				<div id="nbr2">
					<p class="nbr2">2</p>
				</div>
				<div id="nbr3">
					<p class="nbr3">3</p>
				</div>
			</div>


	<div class="desc">
		<p class="desc">Du positif : le système fonctionne plutôt bien. En France, on a calculé que la collecte de déchets a six fois plus de succès quand une récompense est associée. recyclage du plastique bouteilles consigne Du négatif : l’association aux supermarchés est une solution, mais elle ne conviendra pas à tous, puisque tout le monde n’y va pas.</p>
	</div>

	<div class="descContainerNone">
		<div id="tdesc1" class="txt">
			<p>Du positif : le système fonctionne plutôt bien. En France, on a calculé que la collecte de déchets a six fois plus de succès quand une récompense est associée. recyclage du plastique bouteilles consigne Du négatif : l’association aux supermarchés est une solution, mais elle ne conviendra pas à tous, puisque tout le monde n’y va pas.</p>
		</div>
		<div id="tdesc2" class="txt">
			<p>Trier est un geste facile au quotidien pour préserver les ressources naturelles et faire barrière à la pollution. Pas de panique pour faire le tri. Quelques réflexes vous aideront à devenir incollable et à faire de ce geste un réflexe pour vous et pour votre famille.</p>
		</div>
		<div id="tdesc3" class="txt">
			<p>Que faire de vos emballages, piles, médicaments, pots de peinture, jouets et autres textiles ? Un doute sur la couleur du bac de recyclage...</p>
		</div>
	</div>
	</div>

<div class="rond">

	<div class="smallrond">
		<div class="small1 small"></div>
		<div class="small1 smallsup small"></div>

		<div class="small2 small"></div>
		<div class="small2 smallsup small"></div>

		<div class="small3 small"></div>
		<div class="small3 smallsup small"></div>

		</div>
			<div class="rond1">
				<div class="rond2">
					<div class="rond3"></div>
				</div>
			</div>
		</div>
	</main>

	<script type="text/javascript">
	$(function() {

	var textdesc1 = $("#tdesc1 p").html(),
    textdesc2 = $("#tdesc2 p").html(),
    textdesc3 = $("#tdesc3 p").html(),
	title1 = $("#title1 h1").html(),
	title2 = $("#title2 h1").html(),
	title3 = $("#title3 h1").html(),
	nbr1 = $("#nbr1 p").html(),
	nbr2 = $("#nbr2 p").html(),
	nbr3 = $("#nbr3 p").html();

	var rond = $('.rond'),
	    body = $(document),
	    bodyHeight = body.height();


	$(window).scroll(function(yoyo) {
		var degres = body.scrollTop() / bodyHeight * 100;
		var opacity;
			if(degres <= 25) {
				opacity = (degres * 4) / 100;
				$(".small1.smallsup").css("opacity", 1 - opacity);
				$(".small2.smallsup").css("opacity", opacity);
				$(".desc p").html(textdesc1);
				$(".title h1").html(title1);
				$(".nbr p").html(nbr1);

			} else if (degres > 25 && degres < 50) {
				opacity = (degres * 4) / 100 - 1;
				$(".small2.smallsup").css("opacity", 1 - opacity);
				$(".small3.smallsup").css("opacity", opacity);
			    $(".desc p").html(textdesc2);
				$(".title h1").html(title2);
				$(".nbr p").html(nbr2);

			} else if (degres > 50) {
		        $(".desc p").html(textdesc3);
				$(".title h1").html(title3);
				$(".nbr p").html(nbr3);
			};
	});
});

</script>