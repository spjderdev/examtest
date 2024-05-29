<?php 

Include_Once 'Models/Books.php';

class BooksController {
  public $Books;

  public function __construct() {
    $this -> Books = new Books();
  }

  public function GetAllBooks() {
    $ListBooks = $this -> Books -> GetAll();
    $Table = '';
    foreach ($ListBooks as $AllBook) {
      $Table .= "<tr>";

          $Table .= "<td>" . $AllBook['Id'] . "</td>";
          $Table .= "<td>" . $AllBook['Title'] . "</td>";
          $Table .= "<td>" . $AllBook['Cover_Image'] . "</td>";
          $Table .= "<td>" . $AllBook['Author'] . "</td>";
          $Table .= "<td>" . $AllBook['Publisher'] . "</td>";
          $Table .= "<td>" . $AllBook['Publisher_Date'] . "</td>";
          $Table .= "<td>" . "<a href='Views/Edit.php?book_id=" . $AllBook['Id'] ."'>Edit</a> <a href='Delete.php'>Delete</a>" . "</td>";
      $Table .= "</tr>";
    }
    return $Table;
  }

  public function EditBooks($Id) {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $Title = $_POST['Title'];
      $Cover_Image = $_POST['Cover_Image'];
      $Author = $_POST['Author'];
      $Publisher = $_POST['Publisher'];
      $Publisher_Date = $_POST['Publisher_Date'];
      $this -> Books -> UpdateBook($Id,$Title, $Cover_Image, $Author, $Publisher, $Publisher_Date);
    }
    else {
      $Book = $this -> Books -> GetBookById($Id);
      include_once 'Views/Edit.php';
    }
  }

  public function Home() {
    $Table = $this -> GetAllBooks();
    Include_Once 'Views/index.php';
  }
}