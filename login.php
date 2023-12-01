<?php
session_start();
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, password, role, user_type FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $role, $user_type);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["user_type"] = $user_type; // Store user_type in session

                            if ($role === "admin") {
                                // Redirect admin user to admin.php
                                header("location: admin.php");
                            } elseif ($user_type === "hire") {
                                header("location: hire.php");
                            } else {
                                // Redirect regular user to the stored last page or main.php as a fallback
                                $last_page = isset($_SESSION["last_page"]) ? $_SESSION["last_page"] : "main.php";
                                header("location: " . $last_page);
                            }
                        } else {
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else {
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/s.css"/>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap");
        *{
          font-family: 'Courier', monospace;  
        }
        body{ 
          margin:auto; 
          margin-top: 120px;
          width:500px; 

          background: -webkit-linear-gradient(to right, #007bff,#6f42c1); 
          background: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%); 
          color:white;        
        }
        .wrapper{  
          border-style: solid;
          border-color: black;
          border-radius: 30px;
          padding: 20px;  
          background-color: rgba(0, 0, 0, 0.1);
          color:black;
          font-weight:bold;
	      margin: auto auto;
	      padding: 40px;
	      border-radius: 35px;
	      position: absolute;
	      width: 500px;
        }
        .form-control{
            border-style:solid;
            border-color:white;
            border-radius:20px;
            margin: 10px 0px;
            background-color:whitesmoke;	
        }
        a{
            color:Cyan;
            margin-left:10px;
        }
        .btn-primary{
            box-shadow: 0 0 3px #000;
            background-color:#007bff87;
            margin-top:10px;
        }
        .btn-primary:hover{
            background-color:#e83e8ce3;
        }
    </style>
</head>
<body class="backimg">
    <!--Header-->
    <header id="header" class="transparent-nav" style="position: fixed; top: 0;">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="main.php" style="padding-bottom: 10px;font-family: 'Courier', monospace;">Ethics Career Co.</a>
					</div>
					<!-- /Logo -->

				</div>
			</div>
		</header>
		<!-- /Header -->

    <div class="wrapper" >
        <h2 style="color:white;margin-left:30%;">User Login</h2><br>
        <p style="font-size:16px;">Please fill in your User Credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label for="username" style="color: white;">Username:</label>
        <input type="text" name="username" id="username" placeholder="Enter Your Username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
        <span class="invalid-feedback"><?php echo $username_err; ?></span>
    </div>    
    <div class="form-group">
        <label for="password" style="color: white;">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter Your Password" class="form-control<?php echo (!empty($password_err)) ? ' is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $password_err; ?></span>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" style="width: 50%; margin-left: 25%;">Login</button>
    </div>
    <div style="display: flex; justify-content: center; align-items: center;">
        <p style="font-size: 16px; margin-right: 20px;">Don't have an account? <a href="register.php">Sign Up Now</a></p>
        <p style="font-size: 16px;">Forgot Password? <a href="reset.php">Click Here</a></p>
    </div>
</form>

    </div>
</body>
</html>


