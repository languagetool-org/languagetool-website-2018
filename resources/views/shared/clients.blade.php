<div class="section-clients">
	<div class="container">
		<div class="section-clients-items">
			<div id="Clients" class="glide">

	            <div class="glide__track" data-glide-el="track">
	                <ul class="glide__slides">
                        <?php
                        $clients = [
                                'lokalise.co' => 'lokalise.png',
                                'ABACUS Business Software' => 'abacus.png',
                                'Dimelo' => 'dimelo.png',
                                'translate5.net' => 'translate5.png',
                                'korrekturen.de' => 'korrekturen_de.png',
                                'Papyrus Autor' => 'papyrus.png',
                                'rechtschreibpruefung24.de' => 'rsp24.png',
                                'IServ GmbH' => 'iserv.png',
                                'brandwatch' => 'brandwatch.png',
                                'INVARIS Informationssysteme GmbH' => 'invaris.png',
                        ];
                        shuffle($clients);
                        foreach ($clients as $name => $image) {
                            ?>
                            <div class="section-clients-item glide__slide">
                                <img src="/images/references/{{$image}}" alt="{{$name}}">
                            </div>
                        <?php
                        }
                        ?>
	                </ul>
	            </div>
			</div>

			<button class="section-clients-items-control section-clients-items-control-left" data-glide-dir="<">
				<i class="fa fa-angle-left"></i>
			</button>
			<button class="section-clients-items-control section-clients-items-control-right" data-glide-dir=">">
				<i class="fa fa-angle-right"></i>
			</button>
		</div>
		<div class="section-clients-description">
            <?=__('messages.used_by')?>
		</div>
	</div>
</div>