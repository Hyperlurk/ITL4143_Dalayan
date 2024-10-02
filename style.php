<style type="text/css">

/*google fonts*/
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Unlock&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Unlock&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Unlock&display=swap');

body {
    font-family: Arial, sans-serif;
    background-image: url(gradientgeo.jpg);
    background-size: cover;
    background-position: center;
}

.container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 300px;
    height: 350px;
    background-color: #fff;
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.login-form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}
.login-form label {
  font-family: "Saira Condensed", sans-serif;
    font-weight: 700;
    font-style: normal;

}

.login-form input {
    
    height: 40px;
    margin-bottom: 10px;
    margin-top: 5px;
    padding: 10px;
    border: none;
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #a7a6a7;
    color: #fff;
}

.login-form .login {
    width: 5rem;
    height: 40px;
    background-color: #a7a6a7;
    color: #03040f;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    font-family: "Saira Condensed", sans-serif;
    font-weight: 700;
    font-style: normal;

}

.login-form .login:hover {
    background-color: #3e8e41;
}

/* Geometric shape */
.container::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
    clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
    z-index: -1;
}






/***** homepage design  ******/

.container2 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    max-width: 800px;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.centered-content {
    text-align: center;
    padding: 40px;
   
}
.centered-content h1{
    font-family: "Unlock", system-ui;
    font-weight: 400;
    font-style: normal;
    font-size: 70px;
    color: #fff;
    border: black;
}
.centered-content .login{
  width: 5rem;
    height: 40px;
    background-color: #a7a6a7;
    color: #03040f;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    font-family: "Saira Condensed", sans-serif;
    font-weight: 700;
    font-style: normal;
}

.container2::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(120deg, #FF0000 0%, #FF7878 100%);
    clip-path: xywh(0 120px 100% 75% round 20% 0);
    z-index: -1;
}

</style>