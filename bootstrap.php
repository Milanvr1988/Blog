<?php
session_start();
require 'Class\Connection.php';
require 'Class\QueryBuilder.php';
require 'Class\User.php';
require 'Class\Post.php';

$config = require 'config.php';

$db = Connection::con($config['database']); 

$result = new QueryBuilder($db);
$user = new User($db);
$post = new Post($db);

 ?>
