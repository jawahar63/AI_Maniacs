<!DOCTYPE html>
<html>
<head>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    /* Reset some default browser styles */
html, body {
    margin: 0;
    padding: 0;
}

/* Apply background color and text color */
body {
    background-color: #0090f9;
    color: #ffffff;
    font-family: Arial, sans-serif;
}

/* Style the dashboard container */
.dashboard-container {
    max-width: 600px;
    margin: 0 auto;
    margin-top: 200px;
    padding: 20px;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Style the heading */
.dashboard-container h1 {
    font-size: 24px;
}

/* Style the file upload form */
.dashboard-container form {
    margin-top: 20px;
}

/* Style the logout link */
.dashboard-container a {
    display: block;
    margin-top: 20px;
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
}

/* Style the file input and submit button */
.dashboard-container input[type="file"] {
    border: none;
    background-color: #ffffff;
    padding: 10px;
    border-radius: 5px;
}

.dashboard-container input[type="submit"] {
    background-color: #0090f9;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    margin-top: 10px;
    border-radius: 5px;
    cursor: pointer;
}

/* Hover effect for submit button */
.dashboard-container input[type="submit"]:hover {
    background-color: #0078d4;
}

</style>
<body>
    <div class="dashboard-container">
        <h1>Welcome, Admin!</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="csvFile" accept=".csv">
            <input type="submit" value="Upload">
        </form>
        <a href="logout.php">Logout</a>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>
