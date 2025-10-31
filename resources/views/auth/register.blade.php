<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
		<link rel="stylesheet" href="{{ asset('css/style_auth.css') }}">

  </head>
    
  <body>
  <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login login-re"  method="POST" action="{{ route('register') }}">
				@csrf
				<div class="login__field login__field-re">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="name" class="login__input fl-fa " placeholder="نام کاربری">
				</div>
				<div class="login__field login__field-re">
					<i class="login__icon fas fa-envelope"></i>
					<input type="email" name="email" class="login__input fl-fa " placeholder="ایمیل">
				</div>
				<div class="login__field login__field-re">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="password" class="login__input fl-fa " placeholder="رمز">
				</div>
				<div class="login__field login__field-re">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="password_confirmation" class="login__input fl-fa" placeholder="تکرار رمز">
				</div>
				<button type="submit" class="button login__submit">
					<span class="f-fa">ثبت نام</span>
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
