<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #ffffff;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 20px;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 14px;
    margin: 10px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 10px;
	border: 1px solid #192A56;
	background-color: #192A56;
    align-items: right;
	color: #FFFFFF;
    margin-top: 40px;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}
button:hover{
    background-color: #FF4B2B;
    border: 1px solid #FF4B2B;
    cursor: pointer;

}

form {
	background-color: #FFFFFF;
	display: flex;
	/* align-items: center; */
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 16px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 500px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
}

.log-in-container {
	width: 100%;
	z-index: 2;
}
    </style>
	<title>User login</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="#">
				<h1>LOGIN</h1>	
				<span>Please enter your credential to proceed.</span>
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
				<button>Log In</button>
				<a href="#">Forgot your password?</a>
				<a href="/register">Not registered yet?</a>

			</form>
		</div>
	</div>
</body>
</html>