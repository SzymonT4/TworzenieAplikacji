Welcome <?php echo $_GET["name"]; ?><br>
Your email adress is: <?php echo $_GET["email"]; ?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "formularz";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection FAILED: ". mysqli_connect_error());
    }
    echo "Connected succesfully!";

    $sql = "INSERT INTO users (Firstname, Surname, email) VALUES ('$_GET[name]', '$_GET[surname]', '$_GET[email]');";

    if (mysqli_multi_query($conn, $sql)) {
        echo "New record created successfully!";
    } else {
        echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
    }

?>