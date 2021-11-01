//@format
(function($) {
  Drupal.behaviors.translate = {
    attach: function(context, settings) {
	console.log(Drupal.settings.pathPrefix);
	if ( Drupal.settings.pathPrefix = 'fr/' ) {
		$("a[title=Contact]").attr("title", "Contactez-nous");
		$("[title=Search]").attr("title", "Rechercher");
	}
    },
  };


})(jQuery);
