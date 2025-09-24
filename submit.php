<?php
$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$dbname = "book_review_24092025";

$fname = $lname = $levels = $name = $comment = "";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("INSERT INTO book_review (full_name, book_title, review_text, rating)
  VALUES (:fname :lname, :name, :comment, :levels)");
  $stmt->bindParam(':fname', $fname);
  $stmt->bindParam(':lname', $lastname);
  $stmt->bindParam(':levels', $levels);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':comment', $comment);
  $stmt->execute();
  echo "New record created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = htmlspecialchars($_POST["fname"]);
  $lname = htmlspecialchars($_POST["lname"]);
  $levels = htmlspecialchars($_POST["levels"]);
  $name = htmlspecialchars($_POST["name"]);
  $comment = htmlspecialchars($_POST["comment"]);
}
$conn = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>Vārds: <input type="text" name="fname" value="<?php echo $fname;?>"><br>

<br>Uzvārds: <input type="text" name="lname" value="<?php echo $lname;?>"><br>

<br>Līmenis: <select name="levels" value="<?php echo $levels;?>"><br>

<br>Nosaukums: <input type="text" name="name" value="<?php echo $name;?>"><br>

<br>Apraksts: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea><br>
<a href="/index.html">Atpakaļ uz sākumlapu</a>
    
</body>
</html>