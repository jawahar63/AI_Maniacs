<?php
session_start();
if (!isset($_SESSION["username"])) {
    // Redirect to the login page or handle unauthorized access
    header("Location: login.php");
    exit();
}
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "summa";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Retrieve user data from the database
    $loggedInUsername = $_SESSION["username"];
    $sql = "SELECT * FROM users WHERE username = '$loggedInUsername'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstName = $row["first_name"];
        $lastName = $row["last_name"];
        $currentPosition = $row["current_position"];
        $userType = $row["user_type"];
        $email = $row["email"];
        $phone = $row["phone"];
        $about = $row["about"];
        $linkedin = $row["linkedin"];
        $github = $row["github"];
        $location= $row["location"];
        $specialization =$row["specialization"];
    } else {
        // Handle the case where user data is not found in the database
        // You can show an error message or take other appropriate actions
    }
    $conn->close();
    ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <div class="profile">
        <?php
            echo '<h2>'. $_SESSION["username"] .'</h2>';
            ?>
            <img src="img/prot.jpg" id="photo" alt="Profile Photo">
        <div id="about"></div>

    </div>
    <div class="profile-detail">
        <h3>Details</h3>
        <form method="POST" action="update.php">

        <label class="left">Full Name *</label>
        <label class="right">Last Name *</label><br>
        <input class="left" name="first_name" value="<?php echo $firstName; ?>" ></input>
        <input class="left" name="last_name" value="<?php echo $lastName; ?>" ></input><br>
        <label class="left">Highest Qualification *</label>
        <label class="right" style="margin-left: 230px;">Hiring/Job Expecting *</label><br>
        <input class="left" name="current_position" value="<?php echo $currentPosition; ?>" ></input>
        <input class="left" name="user_type" value="<?php echo $userType; ?>" ></input><br>
        <label class="left">Email *</label>
        <label class="right" style="margin-left: 330px;">Contact Number</label><br>
        <input class="left" name="email" value="<?php echo $email; ?>" ></input>
        <input class="left" name="phone" value="<?php echo $phone; ?>" ></input><br>
        <label class="left">Linked In *</label>
        <label class="right" style="margin-left: 310px;">Git Hub *</label><br>
        <svg class="link" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
  <g clip-path="url(#clip0_91_111)">
    <path d="M15.3125 0H4.6875C2.09867 0 0 2.09867 0 4.6875V15.3125C0 17.9013 2.09867 20 4.6875 20H15.3125C17.9013 20 20 17.9013 20 15.3125V4.6875C20 2.09867 17.9013 0 15.3125 0Z" fill="white"/>
    <path d="M15.3125 0H4.6875C2.09867 0 0 2.09867 0 4.6875V15.3125C0 17.9013 2.09867 20 4.6875 20H15.3125C17.9013 20 20 17.9013 20 15.3125V4.6875C20 2.09867 17.9013 0 15.3125 0Z" fill="#0A66C2"/>
    <path d="M14.4309 17.0066H16.7176C16.8004 17.0066 16.8799 16.9737 16.9385 16.9151C16.9971 16.8565 17.0301 16.7771 17.0301 16.6942L17.0312 11.8628C17.0312 9.33758 16.4871 7.39656 13.5361 7.39656C12.4143 7.35484 11.3564 7.93312 10.7855 8.89875C10.7828 8.90344 10.7785 8.90709 10.7734 8.90914C10.7684 8.91119 10.7628 8.91152 10.7575 8.9101C10.7523 8.90867 10.7476 8.90556 10.7443 8.90124C10.7409 8.89692 10.7391 8.89163 10.7391 8.88617V7.94219C10.7391 7.85931 10.7061 7.77982 10.6475 7.72122C10.5889 7.66261 10.5094 7.62969 10.4266 7.62969H8.25648C8.1736 7.62969 8.09412 7.66261 8.03551 7.72122C7.97691 7.77982 7.94398 7.85931 7.94398 7.94219V16.6937C7.94398 16.7766 7.97691 16.8561 8.03551 16.9147C8.09412 16.9733 8.1736 17.0062 8.25648 17.0062H10.543C10.6259 17.0062 10.7054 16.9733 10.764 16.9147C10.8226 16.8561 10.8555 16.7766 10.8555 16.6937V12.3677C10.8555 11.1445 11.0876 9.95992 12.6041 9.95992C14.099 9.95992 14.1184 11.3596 14.1184 12.447V16.6941C14.1184 16.777 14.1513 16.8565 14.2099 16.9151C14.2685 16.9737 14.348 17.0066 14.4309 17.0066ZM2.96875 4.65836C2.96875 5.58531 3.7318 6.34797 4.65875 6.34797C5.58547 6.34789 6.34805 5.58477 6.34805 4.65805C6.34789 3.73133 5.58523 2.96875 4.65844 2.96875C3.73141 2.96875 2.96875 3.73148 2.96875 4.65836ZM3.51242 17.0066H5.80203C5.88491 17.0066 5.9644 16.9737 6.023 16.9151C6.08161 16.8565 6.11453 16.777 6.11453 16.6941V7.94219C6.11453 7.85931 6.08161 7.77982 6.023 7.72122C5.9644 7.66261 5.88491 7.62969 5.80203 7.62969H3.51242C3.42954 7.62969 3.35006 7.66261 3.29145 7.72122C3.23285 7.77982 3.19992 7.85931 3.19992 7.94219V16.6941C3.19992 16.777 3.23285 16.8565 3.29145 16.9151C3.35006 16.9737 3.42954 17.0066 3.51242 17.0066Z" fill="white"/>
  </g>
  <defs>
    <clipPath id="clip0_91_111">
      <rect width="20" height="20" fill="white"/>
    </clipPath>
  </defs>
</svg><svg class="git" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <g clip-path="url(#clip0_93_123)">
    <rect width="16" height="16" fill="white"/>
    <path d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C12.1382 15.054 13.5183 14.0333 14.496 12.6718C15.4737 11.3102 15.9997 9.67624 16 8C16 3.58 12.42 0 8 0Z" fill="black"/>
  </g>
  <defs>
    <clipPath id="clip0_93_123">
      <rect width="16" height="16" fill="white"/>
    </clipPath>
  </defs>
</svg>
    <input class="left" name="linkedin" value="<?php echo $linkedin; ?>">
    <input class="left" name="github" value="<?php echo $github; ?>"><br>
    <label class="left">Location *</label>
    <label class="right" style="margin-left: 310px;">specialization *</label><br>
    <input class="left" name="location" value="<?php echo $location; ?>">
    <input class="left" name="specialization" placeholder="Data science" value="<?php echo $specialization; ?>"><br>
    <input class="button" type="submit" name="update_profile" value="Update Profile">
        </form>
    </div>
    
</body>
<style>
    /* for leftsize */
    body{
        background-color: #CBCEDA;
    }
    .profile{
        background-color: #fff;
        margin-left: 63px;
        margin-top: 60px;
        width: 436px;
        height: 610px;
        border-radius: 10px;
        box-shadow: 0px 3px 10px 2px rgba(0, 0, 0, 0.25);
    }
    .profile h2{
        font-family: Inter;
        text-align: center;
        padding-top: 30px;
    }
    .profile #photo{
        width: 100px;
        height: 100px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
    }
    .profile-detail .button{
        font-family: Inter;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        width: 265px;
        height: 55px;
        flex-shrink: 0;
        border-radius: 8px;
        background: var(--lightblue1, #0090F9);
        color: #FFF;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .profile-detail .button:hover{
        font-family: Inter;
        color: #0090F9;
        background-color: #FFF;
        border: 1px solid #0090F9;
    }
    .profile #about{
        font-family: Inter;
        display: block;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        width: 313px;
        height: 400px;
        flex-shrink: 0;
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, 0.50);
        background: #FFF;
    }
    /* for rightsize */
    .profile-detail{
        margin-top: -610px;
        margin-left: 530px;
        width: 854px;
        height: 610px;
        flex-shrink: 0;
        background-color: #fff;
        border-radius: 8px;
        backdrop-filter: blur(3px);
    }
    .profile-detail h3{
        padding-top: 40px;
        padding-left: 70px;
        font-family: Inter;
        margin: auto;
    }
    .profile-detail label{
        color: #0d0d0d;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .profile-detail .left{
        margin-left: 74px;
        margin-top: 10px;
    }
    .profile-detail input{
        width: 313px;
        height: 40px;
        flex-shrink: 0;
        border-radius: 8px;
        border: 1px solid rgba(0, 0, 0, 0.70);
        background: #FFF;
        color: #a0a0a0;
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        padding-left: 10px;
    }
    .profile-detail .right{
        margin-left: 300px;
        margin-top: 10px;
    }
    .profile-detail .last{
        margin-left: 74px;
    }
    .link{
        margin-left: 74px;
    }
    .git{
        margin-left: 370px;
    }
</style>
</html>