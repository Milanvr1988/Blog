<?php require 'view\partials\header.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light ">
  <a href="index.php" class="navbar-brand">Blogger</a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a href="login_register.php" class="nav-link ">Login/Register</a>
    </li>
  </ul>
</nav>

<div class="jumbotron text-center">
  <h4>Login/Register</h4>
</div>

<div class="container">
  <div class="row">
    <div class="col-6">
      <h4 class="mb-5">Login</h4><br>
      <form action="login_register.php" method="post">
        <input type="email" name="login_email" placeholder="email" class="form-control"required><br>
        <input type="password" name="login_password" placeholder="password" class="form-control" required><br>
        <button type="submit" name="login_button" class="form-control btn btn-primary">Login</button>
      </form><br>
      <?php if ($user->logged && isset($_SESSION['loggedUser'])): ?>
        <div class="alert alert-success"> Uspesno ste logovani <a href="index.php">Idite na Blog</a> </div>
      <?php elseif(isset($_POST['login_button'])):?>
        <div class="alert alert-danger"> Pogresan email ili password. Pokusajte ponovo! </div>
      <?php endif; ?>
    </div>

    <div class="col-6">
      <h4>Register</h4>
      <form action="login_register.php" method="post">
        <input type="text" name="register_name" placeholder="name" class="form-control" required><br>
        <input type="email" name="register_email" placeholder="email" class="form-control" required><br>
        <input type="password" name="register_password" placeholder="password" class="form-control" required><br>
        <button type="submit" name="register_button" class="form-control btn btn-info">Register</button>
      </form><br>
      <?php if ($user->register): ?>
        <div class="alert alert-success">Uspesno ste se registrovali!</div>
      <?php endif; ?>
    </div>
    
  </div>
</div>

<?php require 'view\partials\footer.php'; ?>
