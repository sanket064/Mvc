 <div class="Big-Wrapper">
<div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>Just begin the party</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<p>Register now to join the awaesome party</p>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
    <form action="libs/authenticate.php" method="post">
			<div class="login-show">
				<h2>LOGIN</h2>
				<input type="text" placeholder="Username" name="Username">
				<input type="password" placeholder="Password" name="Password">
				<input type="submit" value="Login">
				<a href="">Forgot password?</a>
      </div>
    </form>
    <form action="libs/register.php" method="post" autocomplete="off">
			<div class="register-show">
				<h2>REGISTER</h2>
				<input type="text" placeholder="Username" name="Username">
        <input type="password" placeholder="Password" name="Password">
        <input type="email" placeholder="Email" name="Email">
				<input type="submit" value="Register">
      </div>
    </form>
		</div>
  </div>
  </div>