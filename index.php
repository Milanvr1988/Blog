<?php

require 'bootstrap.php';

$post = $result->selectall('posts');

require 'view\index.view.php';

 ?>
