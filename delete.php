<?php require 'bootstrap.php'; ?>

<?php if (isset($_GET['user_id'])): ?>
  <?php $user->deletePost($_GET['user_id']); ?>
<?php endif; ?>

<?php header('location:index.php'); ?>
<?php require 'view\index.view.php'; ?>
