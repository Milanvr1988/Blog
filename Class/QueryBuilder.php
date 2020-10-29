<?php
class QueryBuilder {
  protected $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

  public function selectall($table)

  {
    $sql = "SELECT * FROM {$table}";
    $query = $this->db->prepare($sql);
    $query->execute();

    $result = $query->fetchall(PDO::FETCH_OBJ);
  return $result;
}

}




 ?>
