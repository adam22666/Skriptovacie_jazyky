  
  <?php
    include('partials/header.php');
  ?>
  <main>
  
  <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Log in</h1>
            <form action="inc/login/login.php" method="post">
            <input type="email" name="user_email" placeholder="email"><br><br>
            <input type="password" name="user_password" placeholder="password"><br>
            <br>
            <input type="submit" value="Log in" name="log_user">
          </form>
          <br>
          <p>Don't have an account yet? <a href="register.php"> <u> Sign up </u></a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php
    include('partials/footer.php');
  ?>