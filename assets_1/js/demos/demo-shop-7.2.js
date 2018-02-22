/*
Name: 			Shop7
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	5.7.2
*/

(function( $ ) {
	if (typeof noUiSlider === 'object') {
		var bSlider = document.getElementById('b-slider'),
			bLow 	= document.getElementById('b-range-low'),
			bHigh 	= document.getElementById('price-range-high');

		// Create Slider
		noUiSlider.create(bSlider, {
			start: [ 1 ],
			step: 1,
			range: {
				'min': [  1 ],
				'max': [ 10 ]
			}
		});

		// Update Input values
		bSlider.noUiSlider.on('update', function( values, handle ) {
			var value = values[handle];

			if ( handle ) {
				bHigh.value = Math.round(value);
			} else {
				bLow.value = Math.round(value);
			}
		});

		// when inpout values changei update slider
		bLow.addEventListener('change', function(){
			bSlider.noUiSlider.set([this.value, null]);
		});

		bHigh.addEventListener('change', function(){
			bSlider.noUiSlider.set([null, this.value]);
		});
	}

}).apply( this, [ jQuery ]);