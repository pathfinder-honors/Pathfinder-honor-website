<html>
<head>
</head>
<body>
<?php
$username = "zachary";
$password = "zjp.2002";
$database = "phd1";
$mysqli = new mysqli("localhost", $username, $password, $database);
 
$query = "SELECT * FROM honors";
echo "<b> <center>Honors</center> </b> <br> <br>";
 
if ($result = $mysqli->query($query)) {
}
    while ($row = $result->fetch_assoc()) {
        $ID = $row["ID"];
        $honor = $row["Honor"];
        echo '<b> '.$ID .'   </b>';
        echo '<b> '.$honor .'<p> </p></b></br>';
    }
/*freeresultset*/
$result->free();
?>
</body>
</html>