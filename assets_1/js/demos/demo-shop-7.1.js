/*
Name: 			Shop7
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	5.7.2
*/

(function( $ ) {
	if (typeof noUiSlider === 'object') {
		var priceSlider = document.getElementById('price-slider'),
			priceLow 	= document.getElementById('price-range-low'),
			priceHigh 	= document.getElementById('price-range-high');

		// Create Slider
		noUiSlider.create(priceSlider, {
			start: [ 1 ],
			step: 1,
			range: {
				'min': [  1 ],
				'max': [ 10 ]
			}
		});

		// Update Input values
		priceSlider.noUiSlider.on('update', function( values, handle ) {
			var value = values[handle];

			if ( handle ) {
				priceHigh.value = Math.round(value);
			} else {
				priceLow.value = Math.round(value);
			}
		});

		// when inpout values changei update slider
		priceLow.addEventListener('change', function(){
			priceSlider.noUiSlider.set([this.value, null]);
		});

		priceHigh.addEventListener('change', function(){
			priceSlider.noUiSlider.set([null, this.value]);
		});
	}

}).apply( this, [ jQuery ]);