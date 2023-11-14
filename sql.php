<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Connection failed". mysqli_connect_error());
}
echo "Connected successfully <br>";

$database = "baza1";
// $sql = "CREATE DATABASE $database";
// if (mysqli_query($conn, $sql)){
//     echo "Database created successfully <br>";
// } else {    
//     echo "Error creating database". mysqli_error($conn);
// }

if (mysqli_select_db($conn,$database)){
    echo "Database $database selected";
} else {
    echo "Error select database". mysqli_error($conn);
}

// $sql = "CREATE TABLE MyGuest(
//                                 id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                                 firstname VARCHAR(30) NOT NULL,
//                                 lastname VARCHAR(30) NOT NULL,
//                                 email VARCHAR(50),
//                                 reg_date TIMESTAMP DEFAULT
//                                         CURRENT_TIMESTAMP ON UPDATE
//                                         CURRENT_TIMESTAMP
//                                 )";
// if (mysqli_query($conn,$sql)){
//     echo "Table myguest created successfully";
// } else {
//     echo "Error creating table". mysqli_error($conn);
// }

?>