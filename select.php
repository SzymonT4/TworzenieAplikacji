<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "5ina";


//create connection
$conn = mysqli_connect($servername, $username, $password);
//connection check
if (!$conn) {
    die("Conncetion failed". mysqli_connect_error());
}
echo"Connected succesfully";


 $sql = "CREATE DATABASE $database";
 if (mysqli_multi_query($conn, $sql)) {
    echo "Database created successfully <br>";
} else {
    echo "Error creating database". mysqli_error($conn);
}


if(mysqli_select_db($conn, $database)) {
    echo "Database $database selected <br>";
} else {
    echo "Error select database". mysqli_error($conn);
}


 $sql="CREATE TABLE MyGuests (
     id INT(6) UNSIGNED AUTO_INCREMENT Primary KEY,
     firstname VARCHAR(20) NOT NULL,
     lastname Varchar(20) NOT NULL,
     email Varchar(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
 if(mysqli_query($conn, $sql)) {
 echo "Table MyGuests created successfully <br>";
 } else {
 echo"Error creating table". mysqli_error($conn);}


 $sql = "INSERT INTO MyGuests(firstname, lastname, email) Values ('Michal', 'Babacki', 'michal@example.com');";
$sql .= "INSERT INTO MyGuests(firstname, lastname, email) Values ('Adam', 'Stasik', 'stasik@example.com');";
 $sql .= "INSERT INTO MyGuests(firstname, lastname, email) Values ('Sebastian', 'Lewandowski', 'seba@example.com');";


 if(mysqli_multi_query($conn, $sql)) {
     echo "New record created successfully";
 } else {
     echo " Error: ". $sql . "<br>". mysqli_error($conn);
 }


$sql = "SELECT id, firstname, lastname FROM myGuests";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: ". $row["id"] ." name: ". $row["firstname"] ." lastname: ". $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
<?php
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0){
        //output data of each row
        while($row = mysqli_fetch_assoc($result)){
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else{
        echo "0 results";
    }

$sql = "SELECT id,firstname,lastname FROM MyGuests";
            $result= mysqli_query($conn, $sql);


            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "id: ".$row[0]."- Name:".$row[1]." ".$row[2]."<br>";
                }
        } else {echo "0 resalts";}
            ?>