<?php
    include('partials/header.php');
  ?>
  <main>
  
  <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <h1>Sign up</h1>
          <form action="inc/register/insert.php" method="post">
            <input type="text" name="user_name" placeholder="name"><br><br>
            <input type="email" name="user_email" placeholder="email"><br><br>
            <input type="password" name="user_password" placeholder="password">
            <br>
            <br>
            <input type="submit" value="Sign up" name="add_user">
          </form>
          <br>
          <p>Already have an account? <a href="login.php"> <u> Log in </u> </a> </p>
        </div>
      </div>
    </div>
  </div>
  </main>
  <?php
    include('partials/footer.php');
  ?>