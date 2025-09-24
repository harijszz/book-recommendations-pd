<?php
$fname = $lname = $levels = $name = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = htmlspecialchars($_POST["fname"]);
  $lname = htmlspecialchars($_POST["lname"]);
  $levels = htmlspecialchars($_POST["levels"]);
  $name = htmlspecialchars($_POST["name"]);
  $comment = htmlspecialchars($_POST["comment"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Vārds: <input type="text" name="fname" value="<?php echo $fname;?>">

Uzvārds: <input type="text" name="lname" value="<?php echo $lname;?>">

Līmenis: <select name="levels" value="<?php echo $levels;?>">

Nosaukums: <input type="text" name="name" value="<?php echo $name;?>">

Apraksts: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
<a href="/index.html">Atpakaļ uz sākumlapu</a>
    
</body>
</html>