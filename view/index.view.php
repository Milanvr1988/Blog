
<?php require 'view\partials\header.php'; ?>

<nav class="navbar navbar-expend navbar-light bg-light">
<a href="index.php" class="navbar-brand">Blogger</a>
<ul class="navbar-nav ml-auto">
    <?php if (isset($_SESSION['loggedUser'])): ?>
    <li class="nav-item ml-auto">
      <a href="add_post.php" class="nav-link">Add Post</a>
    </li>
    <li class="nav-item">
      <a href="logout.php" class="nav-link">Logout</a>
    </li>
    <li class="nav-item">
      <a href="" class="btn btn-primary btn-sm"> User:<?php echo $_SESSION['loggedUser']->name ?> </a>
    </li>
  <?php else: ?>
    <li class="nav-item">
      <a href="login_register.php" class="nav-link">Login/Register</a>
    </li>
  <?php endif; ?>
  </ul>

</nav>

<div class="jumbotron text-center">
<h4>Blogger Posts</h4>
</div>

<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
      <?php foreach ($post as $po): ?>
        <div class="card mb-3">
          <div class="card-header"><?php echo "<h4>".$po->title."</h4>" ?><?php if (isset($_SESSION['loggedUser']) && $po->user_id == $_SESSION['loggedUser']->id): ?>
            <a href="delete.php?user_id=<?php echo $po->id; ?>" class="btn btn-danger btn-sm float-right">Remove</a>
          <?php endif; ?>
          </div>
          <div class="card-body"> <?php echo "<p>".$po->description."<p>" ?> </div>
          <div class="card-footer">
            <button type="button" name="button" class="btn btn-info btn-sm float-left"> <?php echo $user->getUserwithId($po->user_id)->name; ?> </button>
            <button type="button" name="button" class="btn btn-warning float-right btn-sm"> <?php  $date = date_create ($po->created_at); echo date_format ($date,"Y-m-d"); ?> </button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</div>

<?php require 'view\partials\footer.php'; ?>
