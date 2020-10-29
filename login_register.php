<?php require_once 'bootstrap.php'; ?>

<?php if (isset($_POST['register_button'])): ?>
  <?php $user->registerUser(); ?>
<?php endif; ?>

<?php if (isset($_POST['login_button'])): ?>
  <?php $user->loginUser(); ?>
<?php endif; ?>


<?php require 'view\login.register.view.php'; ?>
