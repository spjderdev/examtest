<?php 
Include_Once 'Includes/config.php';

class Books {
  public $Db;

  public function __construct() {
    $this -> Db = ConnectDatabase();
  }

  public function GetAll() {
    $query = "SELECT * FROM books";
    $stmt = $this -> Db -> prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
  }
  
  public function GetBookById($Id) {
    $query = "SELECT * FROM books WHERE Id = ?";
    $stmt = $this -> Db -> prepare($query);
    $stmt->execute([$Id]);
    return $stmt->fetch();
  }

  public function UpdateBook($Id, $Title, $Cover_Image, $Author, $Publisher, $Publisher_Date) {
    $query = "UPDATE books SET Title = ?, Cover_Image = ?, Author = ?,Publisher = ?, Publisher_Date = ?";
    $stmt = $this -> Db -> prepare($query);
    $stmt->execute([$Title, $Cover_Image, $Author, $Publisher, $Publisher_Date]);
  }
}