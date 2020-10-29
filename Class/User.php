<?php

class User extends QueryBuilder
{

public $register = NULL;
public $logged = NULL;

public function registerUser()
{
  $name = $_POST['register_name'];
  $email = $_POST['register_email'];
  $password = $_POST['register_password'];

$sql = "INSERT INTO users VALUES (NULL,?,?,?)";
$query = $this->db->prepare($sql);
$query->execute([$name,$email,$password]);


if ($query) {
  $this->register = true;
}
}

public function loginUser()
{

$email = $_POST['login_email'];
$password = $_POST['login_password'];

$sql = "SELECT * FROM users WHERE email = ? AND password = ? ";
$query = $this->db->prepare($sql);
$query->execute([$email,$password]);

$loggedUser = $query->fetch(PDO::FETCH_OBJ);


// var_dump($loggedUser);


if ($loggedUser) {
  $_SESSION['loggedUser'] = $loggedUser;
  $this->logged = true;
}

}
public function getUserwithId($id)
{
  $sql = "SELECT * FROM users where id = ?";
  $query = $this->db->prepare($sql);
  $query->execute([$id]);

  $todo = $query->fetch(PDO::FETCH_OBJ);
  return $todo;
}
public function deletePost($id)
{
  $sql = "DELETE FROM posts WHERE id = ?";
  $query = $this->db->prepare($sql);
  $query->execute([$id]);
}
}

 ?>
