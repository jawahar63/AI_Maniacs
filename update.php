<?php
session_start();

if (isset($_POST["update_profile"])) {
    $newFirstName = $_POST["first_name"];
    $newLastName = $_POST["last_name"];
    $newCurrentPosition = $_POST["current_position"];
    $newUserType = $_POST["user_type"];
    $newEmail = $_POST["email"];
    $newPhone = $_POST["phone"];
    $newLinkedin = $_POST["linkedin"];
    $newGithub = $_POST["github"];
    $newlocation=$_POST["location"];
    $newspecialization=$_POST["specialization"];

    // Add similar lines for other updated fields

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "summa";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $loggedInUsername = $_SESSION["username"];

    // Construct the SQL update query
    $sql = "UPDATE users SET 
            first_name='$newFirstName', 
            last_name='$newLastName', 
            current_position='$newCurrentPosition',
            user_type='$newUserType',
            email='$newEmail', 
            phone='$newPhone', 
            linkedin='$newLinkedin', 
            github='$newGithub',
            location='$newlocation',
            specialization='$newspecialization'
            WHERE username='$loggedInUsername'";

    if ($conn->query($sql) === TRUE) {
        // Update successful
        header("Location: profile.php"); // Redirect to the user's profile page
        exit();
    } else {
        // Handle the case where the update fails
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
} else {
    // Handle the case where the form was not submitted
    // You can show an error message or take other appropriate actions
}
?>