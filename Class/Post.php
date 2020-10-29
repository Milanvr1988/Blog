<?php

class Post extends QueryBuilder
{

public $addNewPost = NULL;

  public function newPost()
  {
    $title = $_GET['add_title'];
    $description = $_GET['add_description'];
    $user_id = $_SESSION['loggedUser']->id;
    $created_at = date ("Y-m-d");

    $sql = "INSERT INTO posts VALUES (NULL,?,?,?,?)";
    $query = $this->db->prepare($sql);
    $query->execute([$title,$description,$user_id,$created_at]);

if ($query) {
  $this->addNewPost = true;
}
}
}






 ?>
