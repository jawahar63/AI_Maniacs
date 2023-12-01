<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  //  header("location: login.php");
    //exit;
//}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $new_password = $confirm_password = "";
$username_err=$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    // Check if username is empty
    if(empty(trim($_POST["username"])))
    {
        $username_err = "Please enter username.";
    } 
    else
    {
        $username = trim($_POST["username"]);
    }

    // Validate new password
    if(empty(trim($_POST["new_password"])))
    {
        $new_password_err = "Please enter the new password.";     
    }
    elseif(strlen(trim($_POST["new_password"])) < 6)
    {
        $new_password_err = "Password must have atleast 6 characters.";
    } 
    else
    {
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"])))
    {
        $confirm_password_err = "Please confirm the password.";
    } 
    else
    {
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password))
        {
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($username_err) && empty($confirm_password_err))
    {
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql))
        {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_username);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
            {
                // Password updated successfully. Destroy the session, and redirect to login page
                // Store result
                mysqli_stmt_store_result($stmt);
                echo ('stored');
                
                // Check if username exists, if yes then verify password
                session_destroy();
                header("location: login.php");
                exit();
            }
            else
            {
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/s.css"/>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap");
        *{
          font-family: 'Nunito', sans-serif;  
          color:white;
        }
        body{ 
          margin:auto; 
          margin-top: 120px;
          width:500px; 
          background: -webkit-linear-gradient(to right, #007bff,#6f42c1); 
          background: linear-gradient(to right, #008cffba, #8d42c1); 
          color:white;        
        }
        .wrapper{  
          border-style: solid;
          border-color: white;
          border-radius: 30px;
          padding: 20px;  
          background-color: rgba(0, 0, 0, 0.1);
          color:white;
	      margin: auto auto;
	      padding: 40px;
	      border-radius: 10px;
	      box-shadow: -5px -5px 9px #aaa9a9a2,
              5px 5px 7px rgba(147, 149, 151, 0.671);
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
            color:white;
            margin-left:10px;
        }
        .btn-primary{
            box-shadow: 0 0 3px #000;
            background-color:#007bff87;
            margin-top:10px;
        }
        .btn-primary:hover{
            background-color:white;
            color:black;
        }
    </style>
</head>
<body>
    <!--Header-->
    <header id="header" class="transparent-nav" style="position: fixed;background-color: rgb(120, 70, 167); top: 0;">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="main.php" style="padding-bottom: 10px;">AI MANIACS</a>
					</div>
					<!-- /Logo -->

				</div>
			</div>
		</header>
		<!-- /Header -->

    <div class="wrapper">
        <h2 style="color:white;">Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <input type="text" name="username" placeholder="Enter Your Username" style="background-color:white;"  class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>  
            <div class="form-group">
                <input type="password" name="new_password" placeholder="Enter New Password" style="background-color:white;margin-top:15px;border-radius:5px;"  class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" placeholder="Confirm New Password" style="background-color:white;margin-top:15px;border-radius:5px;"  class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div><br>
            <div class="form-group">
                <input type="submit" style="width:70%;" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="login.php" style="color:white;">Cancel</a>
            </div>
        </form>
    </div>    
</body>

</html>


