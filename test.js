//@format
(function($) {
  Drupal.behaviors.translate = {
    attach: function(context, settings) {
	console.log(Drupal.settings.pathPrefix);
	if ( Drupal.settings.pathPrefix = 'fr/' ) {
		$("a[title=Contact]").attr("title", "Contactez-nous");
		$("[title=Search]").attr("title", "Rechercher");
//		$(".advanced_search_link").text("Recherche avancée");
//		$(".section-advanced-search .content h1").text("Recherche avancée");
		$("option[value=AND]").text("ET");
		$("option[value=OR]").text("OU");
		$("option[value=NOT]").text("SAUF");
	}
    },
  };


})(jQuery);
