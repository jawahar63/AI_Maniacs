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
	<h1>HOME / LEARNING CENTRE / NON TECHNICAL</h1>
	<h2 style="margin-left: 550px;">NON TECHNICAL</h2>
	<img src="img/book1.png" alt="book1" id="book-img1">
	<img src="img/book2.jpg" alt="book2" id="book-img2">
	<div class="container-0" id="Salesrep">
		<h3 style="margin-top: 20px;">Sales Representative</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Sales representatives work to sell products or services to customers. They may work in a variety of industries, from pharmaceuticals to technology.</h4>
            </div>
            <h5 style="margin-top: -210px;margin-left:80px">₹3,00,000 - ₹6,00,000 per year</h5>
	</div>
    <div class="container-0" id="Customerser">
		<h3 style="margin-top: 20px;">Customer Service Representative</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Customer service representatives help customers with inquiries, complaints, and product information. They often work in call centers or interact with customers online.</h4>
            </div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,00,000 - ₹4,00,000 per year</h5>
	</div>
    <div class="container-0" id="HRS">
		<h3 style="margin-top: 20px;">Human Resources Specialist</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">HR specialists manage various aspects of an organization's workforce, including hiring, training, benefits administration, and employee relations.</h4>
            </div>
            <h5 style="margin-top: -210px;margin-left:80px">₹3,00,000 - ₹6,00,000 per year</h5>
	</div>
    <div class="container-0" id="MarketCoo">
		<h3 style="margin-top: 20px;">Marketing Coordinator</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Marketing coordinators assist in the planning and execution of marketing campaigns, including social media management, event planning, and content creation.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px"> ₹2,50,000 - ₹5,00,000 per year</h5>
	</div>
    <div class="container-0" id="PRS">
		<h3 style="margin-top: 20px;">Public Relations Specialist</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">PR specialists manage an organization's public image by developing and maintaining relationships with media, writing press releases, and managing communication during crises.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹3,00,000 - ₹6,00,000 per year</h5>
	</div>
    <div class="container-0" id="Adminassis">
		<h3 style="margin-top: 20px;">Administrative Assistant</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Administrative assistants provide support to executives and teams by managing schedules, organizing meetings, and handling office tasks.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,00,000 - ₹4,00,000 per year</h5>
	</div>
    <div class="container-0" id="EventPlanner">
		<h3 style="margin-top: 20px;">Event Planner</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Event planners coordinate and organize events such as weddings, conferences, and parties, managing logistics, budgets, and vendor relationships.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,50,000 - ₹5,00,000 per year</h5>
	</div>
    <div class="container-0" id="FinAna">
		<h3 style="margin-top: 20px;">Financial Analyst</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Financial analysts assess financial data and trends to provide insights that inform investment decisions, budgeting, and strategic planning.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹4,00,000 - ₹8,00,000 per year</h5>
	</div>
    <div class="container-0" id="ContentWriter">
		<h3 style="margin-top: 20px;">Content Writer</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Content writers create written content for websites, blogs, articles, and marketing materials, often requiring strong writing and research skills.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹4,00,000 - ₹8,00,000 per year</h5>
	</div>
    <div class="container-0" id="Trans">
		<h3 style="margin-top: 20px;">Translator/Interpreter</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Translators convert written text or spoken language from one language to another, while interpreters provide real-time translation during conversations or events.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,50,000 - ₹5,00,000 per year</h5>
	</div>
    <div class="container-0" id="Lib">
		<h3 style="margin-top: 20px;">Librarian</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Librarians manage and organize library resources, assist patrons with finding information, and promote reading and learning.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,50,000 - ₹5,00,000 per year</h5>
	</div>
    <div class="container-0" id="RetailManager">
		<h3 style="margin-top: 20px;">Retail Manager</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Retail managers oversee the operations of stores, including staffing, inventory management, customer service, and sales.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹3,00,000 - ₹6,00,000 per year</h5>
	</div>
    <div class="container-0" id="SocialWorker">
		<h3 style="margin-top: 20px;">Social Worker</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Social workers provide support and advocacy to individuals and families facing various challenges, such as poverty, abuse, or mental health issues</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,50,000 - ₹5,00,000 per year</h5>
	</div>
    <div class="container-0" id="Counselor">
		<h3 style="margin-top: 20px;">Counselor</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Counselors offer guidance and support to individuals dealing with personal, emotional, or psychological issues.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹3,00,000 - ₹6,00,000 per year</h5>
	</div>
    <div class="container-0" id="Journalist">
		<h3 style="margin-top: 20px;">Journalist</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Journalists research, write, and present news stories to inform the public about current events and issues.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,50,000 - ₹5,00,000 per year</h5>
	</div>
    <div class="container-0" id="FitnessTrainer">
		<h3 style="margin-top: 20px;">Fitness Trainer</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Fitness trainers design exercise programs, lead fitness classes, and provide motivation and guidance to clients pursuing health and fitness goals.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,00,000 - ₹4,00,000 per year</h5>
	</div>
    <div class="container-0" id="Artist">
		<h3 style="margin-top: 20px;">Artist</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Artists create visual or performing art, including paintings, sculptures, music, dance, and more.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">Salaries can vary widely based on recognition and demand for their work.</h5>
	</div>
    <div class="container-0" id="ExecutiveAssis">
		<h3 style="margin-top: 20px;">Executive Assistant</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Executive assistants provide high-level administrative support to top executives, often handling sensitive information and managing complex tasks.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹3,00,000 - ₹6,00,000 per year</h5>
	</div>
    <div class="container-0" id="PersonalAssis">
		<h3 style="margin-top: 20px;">Personal Assistant</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Personal assistants provide administrative and logistical support to individuals, helping with tasks such as scheduling, travel arrangements, and errands.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,00,000 - ₹4,00,000 per year</h5>
	</div>
    <div class="container-0" id="">
		<h3 style="margin-top: 20px;"></h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;"></h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px"></h5>
	</div>
</body>
<?php include 'footer.php'; ?>
</html>
