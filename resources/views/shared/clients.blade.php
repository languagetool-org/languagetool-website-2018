<div class="section-clients">
	<div class="container">
		<div class="section-clients-items">
			<div id="Clients" class="glide">

	            <div class="glide__track" data-glide-el="track">
	                <ul class="glide__slides">
                        <?php
                        $clients = [
                                'Bertelsmann Stiftung' => 'bertelsmann_stiftung.png',
                                'DER SPIEGEL' => 'spiegel.png',
                                'Blinkist - Blinks Labs GmbH' => 'blinkist.png',
                                'audibene GmbH' => 'audibene.png',
                                'lokalise.co' => 'lokalise.png',
                                'Dimelo' => 'dimelo.png',
                                'maxcluster GmbH' => 'maxcluster.png',
                                'icare Sales & Services' => 'icare.png',
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