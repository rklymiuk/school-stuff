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
$autor = $_REQUEST['name'];
$temat = $_REQUEST['temat'];
$tresc = $_REQUEST['tresc'];
$data = date("Y-m-d");
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO wiadomosci (autor, temat, tresc)
VALUES ('John', 'Doe', 'john@example.com')";
 $sql = "INSERT INTO wiadomosci  VALUES ('$autor', 
 '$temat','$tresc','$data')";
  if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>"; 

    
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
mysqli_close($conn);
        ?>
?>
</head>
<body>
<form>
  <label for="name">autor:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="temat">temat:</label><br>
  <input type="text" id="temat" name="temat"><br>
  <label for="tresc">tresc:</label><br>
  <input type="text" id="tresc" name="tresc">
  <input type="submit" value="Submit">
  
</form> 

</body>
</html>