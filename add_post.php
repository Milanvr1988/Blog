<?php require 'bootstrap.php'; ?>

<?php if (isset($_GET['add_button'])): ?>
  <?php $post->newPost(); ?>
<?php endif; ?>

<?php require 'view\add.post.view.php'; ?>
