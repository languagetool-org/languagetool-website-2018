<div class="hintbar">
	<?php
    $origLocale = App::getLocale();
    App::setLocale($hintbarLang);
	?>
	<span class="hintbar-close"><i class="fa fa-close"></i></span>
	<?=__('messages.language_hint', ['lang' => __('messages.langs.'.$hintbarLang)])?>
	<a href="/{{$hintbarLang}}/"><?=__('messages.language_link')?></a>
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
			document.querySelector('.hintbar-close').addEventListener('click', function() {
				removeHintbar();
				storage.setItem('isHideHintbar', true);
			});
		}

		function removeHintbar() {
			document.querySelector('.hintbar').remove();
		}
	})();
</script>