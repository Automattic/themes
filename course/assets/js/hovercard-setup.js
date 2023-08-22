document.addEventListener('DOMContentLoaded', () => {
	const hovercards = new Gravatar.Hovercards({});

	const elements = document.getElementsByClassName('wp-block-comments');

	if (elements.length > 0) {
		hovercards.attach(elements[0]);
	}
});
