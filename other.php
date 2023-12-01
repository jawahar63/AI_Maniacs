<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<link rel="stylesheet" href="mycss/course.css">
<script src="myjs/course.js"></script>
<style>
    .container-0{
    width: 1000px;
    height: 200px;
    flex-shrink: 0;
    border-radius: 40px;
    border: 0.2px solid #000;
    background: #FFF;
    box-shadow: 0px 4px 10px 3px rgba(0, 0, 0, 0.25);
    margin-left: 220px;
    margin-top: 40px;
}
.container-0:hover{
    transform: scale(1.005);
    transition: all 0.2s ease-out;
    border: 0.2px solid #0090f9;
}
@media (max-width: 768px) {
.container-0 {
    width: 90%; 
    margin-left: 5%;
    height: auto;
    margin-top: 20px; 
    }
}
</style>
<body>
	<h1>HOME / LEARNING CENTRE / OTHERS</h1>
	<h2 style="margin-left: 625px;">OTHERS</h2>
	<img src="img/book1.png" alt="book1" id="book-img1">
	<img src="img/book2.jpg" alt="book2" id="book-img2">
    <div class="container-0" id="BFA" style="height: 220px;">
		<h3 style="margin-top: 20px;">Business Administration</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">This degree focuses on the management and administration of businesses, including topics such as finance, marketing, and human resources.</h4>
			</div>
            <h5 style="margin-top: -180px;margin-left:80px">It's often done on a per-job basis.</h5>
	</div>
    <div class="container-0" id="Design">
		<h3 style="margin-top: 20px;">Computer Science</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">This degree involves the study of computer programming, algorithms, software development, and other aspects of computer technology.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,00,000 - ₹4,00,000 per year</h5>
	</div>
    <div class="container-0" id="Film">
		<h3 style="margin-top: 20px;">Data Science</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">This interdisciplinary field combines statistics, computer science, and domain-specific knowledge to extract insights from data.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹3,00,000 - ₹6,00,000 per year</h5>
	</div>
    <div class="container-0" id="FashionDesign">
		<h3 style="margin-top: 20px;">Economics</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">This degree studies the production, distribution, and consumption of goods and services, as well as the behavior of individuals and organizations within economic systems.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,50,000 - ₹5,00,000 per year</h5>
	</div>
    <div class="container-0" id="Bsc.cs" style="height: 220px;">
		<h3 style="margin-top: 20px;">Environmental Science</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">This degree explores the natural world and the impact of human activities on the environment, with courses covering topics such as ecology, conservation biology, and environmental policy.</h4>
			</div>
            <h5 style="margin-top: -180px;margin-left:80px">₹3,00,000 - ₹6,00,000 per year</h5>
	</div>
    <div class="container-0" id="Bsc.bio">
		<h3 style="margin-top: 20px;">Finance</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">This degree involves the study of financial markets, institutions, and investments, with courses covering topics such as corporate finance, international finance, and financial modeling.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,00,000 - ₹4,50,000 per year
</h5>
	</div>
    <div class="container-0" id="Bsc.eng" style="height: 220px;">
		<h3 style="margin-top: 20px;">International Relations</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">This degree examines the interactions between nations and their relationships with one another, with courses covering topics such as diplomacy, global politics, and international law.</h4>
			</div>
            <h5 style="margin-top: -180px;margin-left:80px">₹3,50,000 - ₹7,00,000 per year</h5>
	</div>
    <div class="container-0" id="Bsc.phy">
		<h3 style="margin-top: 20px;">Public Health</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">This degree focuses on the prevention and treatment of diseases and injuries within populations, with courses covering topics such as epidemiology, health policy, and public health infrastructure.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,00,000 - ₹5,00,000 per year</h5>
	</div>
    <div class="container-0" id="Neuroscience">
		<h3 style="margin-top: 20px;">Social Sciences</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;"> This umbrella term encompasses a range of fields that study human behavior and society, including anthropology, psychology, sociology, and political science.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,50,000 - ₹5,00,000 per year</h5>
	</div>
</body>
<?php include 'footer.php'; ?>
</html>
