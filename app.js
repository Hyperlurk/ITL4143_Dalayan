const express = require('express');
const cors = require('cors');
const app = express();
const port = 3000;

app.use(cors());

app.use(express.urlencoded({ extended: false }));

app.post('/upload', function(req, res){

	const params = new URLSearchParams({
		secret: '6LfFtVQqAAAAALylrR93ulBaHkoe_qd1gtT78F9r',
		 response: req.body['g-recaptcha-response'],
		 remoteip: req.ip,
	}); 

	fetch('https://www.google.com/recaptcha/api/siteverify',{
		method: "POST",
		body: params,
	})
	.then(res => res.json())
	.then(data => {
		if (data.success){
			res.json({ captchaSuccess: true});
		}
		else{
			res.json({ captchaSuccess: false});
		}
	})
});

app.listen(port, () =>{
	console.log('App running on port ${port}');
});