<link rel="stylesheet" href="asset/css/savoirUtile.css">

<div id="makeMeScrollable">
	<div>
		<h3>345</h3>
		<p>C’est le nombre en millions de tonnes
	de déchets produits en France en 2012</p>
	<div class="rond"></div>
	</div>

	<div>
		<h3>37.7</h3>
		<p>C’est le nombre en millions de tonnes
	de déchets ménagers ont été collectés par le service public de gestion des déchets en 2013</p>
	<div class="rond"></div>
	</div>

	<div>
		<h3>48</h3>
		<p>C’est le nombre en millions de tonnes
	de déchets ont été envoyés vers les installations de traitement des déchets ménagers, en 2014</p>
	<div class="rond"></div>
	</div>


	<div>
		<h3>127</h3>
		<p>C’est le nombre en milliers d’emplois liés aux activités de gestion des déchets ou de dépollution en 2014</p>
		<div class="rond"></div>
	</div>

	<div>
		<h3>5</h3>
		<p>C’est le nombre de canettes en aluminium recyclées pour créer un aérosol.</p> 
		<div class="rond"></div>
	</div>

	<div>
		<h3>15</h3>
		<p>C’est le nombre de bouteilles de lait en plastique recyclées peuvent pour un arrosoir</p>
		<div class="rond"></div>
	</div>

	<div>
		<h3>1992</h3>
		<p>C’est date à partir de laquelle la collecte sélective, le tri et le recyclage des emballages ont permis la création de 28 000 emplois directs</p>
		<div class="rond"></div>
	</div>

	<div>
		<h3>450</h3>
		<p>C'est le nombre en kilo de déchat produit par an et par habitant</p>
		<div class="rond"></div>
	</div>


	<div>
		<h3>21</h3>
		<p>C’est la quantité de millions de tonnes d’émissions de CO2 qui ont été évitées grâce au recyclage en 2014</p>
		<div class="rond"></div>
	</div>

	<div>
		<h3>1500</h3>
		<p>C'est la température en degré à laquelle le verre brut est débarrassé de ses impuretés puis fondu</p>
		<div class="rond"></div>
	</div>
</div>

<script>
(function() {
function scrollHorizontally(e) {
    e = window.event || e;
    var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
    document.documentElement.scrollLeft -= (delta*40);
    document.body.scrollLeft -= (delta*100);
    e.preventDefault();
}
if (window.addEventListener) {
    window.addEventListener("mousewheel", scrollHorizontally, false);
    window.addEventListener("DOMMouseScroll", scrollHorizontally, false);
} else {
    window.attachEvent("onmousewheel", scrollHorizontally);
}
})();
</script>