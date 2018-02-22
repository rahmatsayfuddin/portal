/*
Name: 			Shop7
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	5.7.2
*/

(function( $ ) {
	if (typeof noUiSlider === 'object') {
		var cSlider = document.getElementById('c-slider'),
			cLow 	= document.getElementById('c-range-low'),
			cHigh 	= document.getElementById('price-range-high');

		// Create Slider
		noUiSlider.create(cSlider, {
			start: [ 1 ],
			step: 1,
			range: {
				'min': [  1 ],
				'max': [ 10 ]
			}
		});

		// Update Input values
		cSlider.noUiSlider.on('update', function( values, handle ) {
			var value = values[handle];

			if ( handle ) {
				cHigh.value = Math.round(value);
			} else {
				cLow.value = Math.round(value);
			}
		});

		// when inpout values changei update slider
		cLow.addEventListener('change', function(){
			cSlider.noUiSlider.set([this.value, null]);
		});

		cHigh.addEventListener('change', function(){
			cSlider.noUiSlider.set([null, this.value]);
		});
	}

}).apply( this, [ jQuery ]);