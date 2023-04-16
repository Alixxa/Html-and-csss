<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<link rel="stylesheet" type="text/css" href="login-style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,300;1,300&display=swap" rel="stylesheet">


	<title>Login</title>
</head>

<body>
	<div class="center">
		<h1>Login</h1>

		<form>




		<div class="form">
			<input type="text" name="username" class="textfiled" placeholder="Username">
			<input type="password" name="password" class="textfiled" placeholder="Password"><br><br>

			
				  <input type="checkbox" id="Recaptcha"  value="Im not a Robot">
                  <label for="Recaptcha"> Recaptcha </label><br>
			      </form>

			

			<input type="submit" name="login" value="Login" class="btn">

			<div class="forgotpass"><a href="#" class="link" onclick="message()" >Forgot Password? </a></div><br>


			<div class="signup">New Customer?<br><br><a href="#" class="link">Register Now</a></div></div>
	</div>
</form>

<script>
	function message()
	{
		alert("Please contact BrewBasket at brewbasket@gmail.com")
	}
</script>


</body>
</html>





