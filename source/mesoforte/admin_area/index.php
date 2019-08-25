 <?php
include('partials/header.php')
 ?>
  <div class="Big-Wrapper">
 <div class="login">
      <h1>Login</h1>
      <form action="partials/authenticate.php" method="post">
        <label for="username">
          <i class="fas fa-user"></i>
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <label for="password">
          <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <input type="submit" value="Login">
      </form>
    </div>
  </div>
    <?php
include('partials/footer.php')
 ?>
