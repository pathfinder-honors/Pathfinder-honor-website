<html>
<head>
<style>
</style>
</head>
<body>
<div class = "inline">
<form action = "post.php" method = "post">
<input type = "text" name = "firstname" placeholder = " firstname" required>
<input type = "text" name = "lastname" placeholder = " lastname" required>
<input type = "text" name = "clubname" placeholder = " clubname" required>
<input type = "text" name = "ID" placeholder = "ID" required>
<input type = "submit" onclick = "post" name = "submit" required>
</form>
</div>
<?php
$data = $_POST["firstname"];
$data1 = $_POST["lastname"];
$data2 = $_POST["clubname"];
$data3 = $_POST["ID"];
<<<<<<< HEAD

if (isset($_POST["submit"])) {
=======
$len = strlen($data) > 2;
if (isset($_POST["submit"]) + {
print("it works");
} 
    
    
/*
>>>>>>> 27cf4c60d0c488edfcc72919150bd5961d814fa1
// --post data to database--  
$servername = "localhost";
$username = "zachary";
$password = "zjp.2002";
$dbname = "phd1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (Firstname, Lastname, Clubname, ID)
VALUES('$data', '$data1', '$data2', '$data3',)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
</body>
</html>