<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
		<!-- <meta name="viewport" content="width=400, user-scalable=0"> -->
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
		<!-- <link rel="stylesheet" href="./style_auth.css"> -->
		<link rel="stylesheet" href="{{ asset('css/style_auth.css') }}">

  </head>
    
  <body>
  <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login"  method="POST" action="{{ route('login') }}">
				@csrf
				<div class="login__field">
					<i class="login__icon fas fa-envelope"></i>
					<input name="email" type="text" class="login__input fl-fa " placeholder="ایمیل">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input name="password" type="password" class="login__input fl-fa" placeholder="رمز ورود">
				</div>
				<button type="submit" class="button login__submit">
					<span class="f-fa">ورود</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
    
  </body>
  
</html>
