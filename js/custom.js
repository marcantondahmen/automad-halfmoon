+function () {

	const inputs = Array.prototype.slice.apply(document.querySelectorAll('[name="search"]'));

	inputs.forEach(input => {
		
		input.addEventListener('keyup', (e) => {

			// If input value is longer or equal than 2 chars, list attribute.
			if (e.target.value.length >= 2) {
				input.setAttribute('list', 'pages');
			} else {
				input.setAttribute('list', '');
			}

		});

	});
	
}();