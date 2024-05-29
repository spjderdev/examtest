

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
  
?>
<?php if(isset($Book)):?>
<form method="POST" action="../Controllers/Edit.php">
    <input type="hidden" name="book_id" value="<?php echo $Book['Id']; ?>">
    <label for="Title">Title:</label><br>
    <input type="text" id="Title" name="Title" value="<?php echo $Book['Title']; ?>"><br>
    <label for="Cover_Image">Cover Image:</label><br>
    <input type="text" id="Cover_Image" name="Cover_Image" value="<?php echo $Book['Cover_Image']; ?>"><br>
    <label for="Author">Author:</label><br>
    <input type="text" id="Author" name="Author" value="<?php echo $Book['Author']; ?>"><br>
    <label for="Publisher">Publisher:</label><br>
    <input type="text" id="Publisher" name="Publisher" value="<?php echo $Book['Publisher']; ?>"><br>
    <label for="Publisher_Date">Publisher Date:</label><br>
    <input type="text" id="Publisher_Date" name="Publisher_Date" value="<?php echo $Book['Publisher_Date']; ?>"><br>
    <input type="submit" value="Submit">
</form>
<?php else: ?>
  <p>Not found</p>
<?php endif; ?>
</body>
</html>