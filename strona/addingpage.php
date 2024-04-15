<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dodająca strona</title>
    <?php
$servername = "192.168.4.55";
$username = "KlymiukR";
$password = "KlymiukR";
$dbname = "KlymiukR";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['submit'])){
  
  $autor = $_POST['name'];
  $temat = $_POST['temat'];
  $tresc = $_POST['tresc'];
  $data = date("Y-m-d");

  $sql = "INSERT INTO wiadomosci( autor, temat, tresc,  data )  VALUES ('$autor', '$temat','$tresc','$data')";
  $resul = mysqli_query($conn, $sql);
  if ($resul) {
    echo "ADD";
  } else {
    $error = mysqli_error($conn);
  echo "Error: $error"; ;
  }
 }

        ?>

</head>
<body>
<form acction="" method="post">
  <label for="name">autor:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="temat">temat:</label><br>
  <input type="text" id="temat" name="temat"><br>
  <label for="tresc">tresc:</label><br>
  <input type="text" id="tresc" name="tresc">
  <input type="submit" value="Submit" name="submit">
  
</form> 
<a href="index.php">main page</a>
</body>
</html>