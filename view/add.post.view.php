<?php require 'view\partials\header.php'; ?>
<nav class="navbar navbar-expand navbar-light bg-light">
  <a href="index.php" class="navbar-brand">Blogger</a>
  <ul class="navbar-nav ml-auto">
    <?php if (isset($_SESSION['loggedUser'])): ?>
      <li class="nav-item">
        <a href="index.php" class="nav-link">Back to Blog</a>
      </li>
      <li class="nav-item">
        <a href="logout.php" class="nav-link">Logout</a>
      </li>
    <?php else:?>
      <?php header('location:index.php') ?>
    <?php endif; ?>

  </ul>
</nav>

<div class="jumbotron text-center">
  <h4>Add Post</h4>
</div>

<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
      <?php if ($post->addNewPost): ?>
        <div class="alert alert-success"> Novi post je dodat. </div>
      <?php endif; ?>
      <form  action="add_post.php" method="get">
        <input type="text" name="add_title" placeholder="title" class="form-control" required><br>
        <textarea name="add_description" rows="8" cols="30" class="form-control" placeholder="description" required></textarea><br>
        <button type="submit" name="add_button" class="form-control btn btn-success">Send</button>
      </form>
    </div>
  </div>

</div>



<?php require 'view\partials\footer.php'; ?>
