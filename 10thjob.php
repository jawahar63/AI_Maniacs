<?php
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
	<h1>HOME / AFTER 10TH JOBS</h1>
	<h2 style="margin-left: 500px;">AFTER 10TH JOBS</h2>
	<img src="img/book1.png" alt="book1" id="book-img1">
	<img src="img/book2.jpg" alt="book2" id="book-img2">
    <div class="container-0" id="RetailJobs">
		<h3 style="margin-top: 20px;">Retail Jobs</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">You can work as a cashier, salesperson, or store assistant in retail stores, supermarkets, or malls.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹8,000 to ₹15,000 per month</h5>
	</div>
    <div class="container-0" id="FoodService">
		<h3 style="margin-top: 20px;">Food Service</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Jobs like waitstaff, cashier, or kitchen help in restaurants, fast-food chains, cafes, or food trucks.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹7,000 to ₹12,000 per month</h5>
	</div>
    <div class="container-0" id="Courier">
		<h3 style="margin-top: 20px;">Delivery Driver or Courier</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">If you have a valid driver's license and access to a vehicle, you could work as a delivery driver for local businesses or courier services.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹10,000 to ₹20,000 per month</h5>
	</div>
    <div class="container-0" id="DataEntry">
		<h3 style="margin-top: 20px;">Data Entry</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Many companies hire data entry operators to input information into computer systems.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹8,000 to ₹12,000 per month.</h5>
	</div>
    <div class="container-0" id="CSR">
		<h3 style="margin-top: 20px;">Customer Service Representative</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">You can work in customer support roles, helping customers over the phone, through chat, or in person</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹10,000 to ₹20,000 per month</h5>
	</div>
    <div class="container-0" id="OfficeAssis">
		<h3 style="margin-top: 20px;">Office Assistant</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Basic administrative tasks like filing, answering phones, and managing appointments can be done as an office assistant.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹8,000 to ₹15,000 per month.</h5>
	</div>
    <div class="container-0" id="Call">
		<h3 style="margin-top: 20px;">Telemarketing or Call Center Agent</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">You might work in outbound or inbound call centers, selling products or services, or providing information to customers</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹8,000 to ₹15,000 per month.</h5>
	</div>
    <div class="container-0" id="petsitting">
		<h3 style="margin-top: 20px;">Pet or House Sitting</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">If you're responsible and love animals, you could offer your services as a pet sitter or house sitter.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px"> It's often done on a per-job basis.</h5>
	</div>
    <div class="container-0" id="Tutoring">
		<h3 style="margin-top: 20px;">Tutoring</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">If you excel in certain subjects, you could offer tutoring services to younger students.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹100 to ₹500 or more per hour</h5>
	</div>
    <div class="container-0" id="Freelance">
		<h3 style="margin-top: 20px;">Freelance Work</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Depending on your skills, you might find freelance opportunities like graphic design, writing, or social media management.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹500 to ₹5,000 or more per project.</h5>
	</div>
    <div class="container-0" id="Helper">
		<h3 style="margin-top: 20px;">Laborer or Helper</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Construction sites, factories, and manual labor jobs might hire entry-level workers.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹8,000 to ₹12,000 per month.</h5>
	</div>
    <div class="container-0" id="Gardening">
		<h3 style="margin-top: 20px;">Gardening and Landscaping</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;"> If you enjoy working outdoors, you could offer gardening or landscaping services in your community.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">They might be charged per project or based on the size of the garden.</h5>
	</div>
    <div class="container-0" id="Hair">
		<h3 style="margin-top: 20px;">Assistant in Beauty or Hair Salons</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Basic tasks like cleaning, assisting clients, and maintaining the salon's appearance.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px"> ₹8,000 to ₹15,000 per month.</h5>
	</div>
    <div class="container-0" id="CarWash">
		<h3 style="margin-top: 20px;">Car Wash Attendant</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Working at a car wash, cleaning and detailing vehicles.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px"> ₹7,000 to ₹12,000 per month</h5>
	</div>
    <div class="container-0" id="Internships">
		<h3 style="margin-top: 20px;">Internships or Apprenticeships</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Some companies offer entry-level internships or apprenticeships to help you gain practical experience and learn on the job.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹5,000 to ₹15,000 or more per month.</h5>
	</div>
</body>
<?php include 'footer.php'; ?>
</html>
