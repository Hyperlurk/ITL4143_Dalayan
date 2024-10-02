const form = document.querySelector('form');

form.addEventListener('submit', (e) => {
	e.preventDefault();

	const captchaResponse = grecaptcha.getResponse();

	if(!captchaResponse.length > 0){
		throw new Error("captcha not complete");
	}

	const fd = new FormData(e.target);
	const params = new URLSearchParams(fd);

	fetch('http://localhost:3000/upload',{
		method: "POST",
		body: params,

	})
	.then(res => res.json())
	.then(data => {
		if(data.captchaSuccess){
			console.log("Validation succesful");
		}
		else{
			console.error("Validation failed");
		}
	})
	.catch(err => console.error(err))

})