<?php
// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
	<link rel="stylesheet" href="mycss/index.css">
	<?php include 'header.php'?>
		<!-- Hero-area -->
		<div class="hero-area section">
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); " ></div>

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="main.php">Home</a></li>
							<li>Prediction</li>
						</ul>
						<h1 class="white-text">Get Started</h1>

					</div>
				</div>
			</div>

		</div>
		<div class="box4">
    <div class="container2">
        <h5>FOR <br> ENGINEERING</h5>
        <a href="http://127.0.0.2:5000/"><button class="click">CLICK HERE</button></a>

    </div>
    <div class="container2">
        <h5>FOR <br> MEDICAL</h5>
        <a href="http://127.0.0.1:5000/"><button class="click">CLICK HERE</button></a>

    </div>
		<?php include 'footer.php'?>
		
</html>
