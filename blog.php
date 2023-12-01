<!-- for knowlegde network -->
<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<?php include 'header.php'?>
		
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); " ></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row" >
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="main.html">Home</a></li>
							<li>learning Centre</li>
						</ul>
						<h1 class="white-text">learning Centre</h1>
					</div>
				</div>
				
			</div>

		</div>
		<link rel="stylesheet" href="mycss/index.css">
		<style>
        /* Hide the paragraph by default */
        .job-description p {
            display: none;
        }
        
        /* Show the paragraph when hovering over the h2 element */
        .job-description:hover p {
            display: block;
        }
		</style>

		

<h2>DEVELOP YOUR SKILL</h2>
    <div class="box4">
    <div class="container2">
        <h5>FOR <br> ENGINEERING</h5>
        <a href="engineering_course.php"><button class="click">CLICK HERE</button></a>

    </div>
    <div class="container2">
        <h5>FOR <br> MEDICAL</h5>
        <a href="medical_course.php"><button class="click">CLICK HERE</button></a>

    </div>
    <div class="container2">
        <h5>FOR <br> ARTS GROUP</h5>
        <a href="arts.php"><button class="click">CLICK HERE</button></a>

    </div>
    <div class="container2">
        <h5>FOR <br> OTHER </h5>
        <a href=""><button class="click">CLICK HERE</button></a>

    </div>
    </div>

		
		<?php include 'footer.php'?>

	</body>
</html>
