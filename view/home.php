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
		<p class="desc">Depuis 1993, ce ne sont pas moins de 40 millions de tonnes d’emballages ménagers qui ont été recyclés par les Français. Faire le tri, c’est adopter des réflexes simples qui permettent de préserver notre planète. Vous voulez intégrer le mouvement et agir pour l’environnement ? Rien de plus simple !
        Commencez par séparer le verre du plastique, cartons, canettes, conserves mais aussi du papier.</p>
	</div>

	<div class="descContainerNone">
		<div id="tdesc1" class="txt">
			<p>Depuis 1993, ce ne sont pas moins de 40 millions de tonnes d’emballages ménagers qui ont été recyclés par les Français. Faire le tri, c’est adopter des réflexes simples qui permettent de préserver notre planète. Vous voulez intégrer le mouvement et agir pour l’environnement ? Rien de plus simple !
            Commencez par séparer le verre du plastique, cartons, canettes, conserves mais aussi du papier.</p>
		</div>
		<div id="tdesc2" class="txt">
			<p>Une fois vos trois poubelles prêtes et bien remplies, une seule destination : les magasins bio de votre ville ! (ici nos partenaires). Vous pouvez alors découvrir nos machines Green’point. Pour les utiliser, rien de plus simple ; rentrez vos identifiants de connexion du site Green’point, puis choisissez le type de déchets que vous souhaitez recycler. Insérez-les, et le tour est joué ! Soyez fier, vous avez agi pour la planète.</p>
		</div>
		<div id="tdesc3" class="txt">
			<p>Et pour vous récompenser de cette belle action, vous recevez des bons de réduction de nos entreprises partenaires ! Accumulables ou utilisables immédiatement, leur valeur varie en fonction du poids de vos déchets. Ces coupons sont valables partout en France. Rien de plus simple pour pouvoir profiter de produits 100% naturels à tout petit prix !</p>
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