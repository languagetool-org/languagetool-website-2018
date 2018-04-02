<div class="hintbar">
	<?php
    $origLocale = App::getLocale();
    App::setLocale($defaultLang);
	?>
	<span class="hintbar-close"><i class="fa fa-close"></i></span>
	<?=__('messages.language_hint', ['lang' => __('messages.langs.'.$defaultLang)])?>
	<a href="/{{$defaultLang}}"><?=__('messages.language_link', ['lang' => $langStr])?></a>
	<?php
	App::setLocale($origLocale);
	?>
</div>

<script type="text/javascript">
	(function() {
		var storage = window.localStorage;

		if (storage.getItem('isHideHintbar')) {
			removeHintbar();
		} else {
			$('.hintbar-close').on('click', function() {
				removeHintbar();
				storage.setItem('isHideHintbar', true);
			});
		}

		function removeHintbar() {
			$('.hintbar').remove();
		}
	})();
</script>