<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    
</head>
<body>
    <header>
    <nav>
    <ul>
        <li><a href="addingpage.php">link</a></li>
        <li>cos tam</li>
        <li>cos tam</li>
        <li>cos tam</li>

    </ul>
    </nav>
</header>
<main>
<?php
$servername = "192.168.4.55";
$username = "KlymiukR";
$password = "KlymiukR";
$dbname = "KlymiukR";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM wiadomosci ORDER BY data ASC";

$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
      echo "<br>" . "autor: " . $row["autor"]. "<br>" . " temat: " . $row["temat"]. " "  ."<br>".
      "tresc: " . $row["tresc"]. "<br>" . " data dodania: " . $row["data"];

    }}
    "<hr"
    $id =$_REQUEST['id'];

    $result = mysql_query("SELECT * FROM replies WHERE id = '$id'");
    $test = mysql_fetch_array($result);
    mysqli_close($conn);
    ?>

</main>
 <hr>

</body>
</html>