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
	<h1>HOME / LEARNING CENTRE / NON TECHNICAL</h1>
	<h2 style="margin-left: 550px;">NON TECHNICAL</h2>
	<img src="img/book1.png" alt="book1" id="book-img1">
	<img src="img/book2.jpg" alt="book2" id="book-img2">
    <h2 style="margin-left: 250px;">TOP ARTS DEGREE</h2>
    <div class="container-0" id="BFA" style="height: 220px;">
		<h3 style="margin-top: 20px;">Bachelor of Fine Arts (BFA)</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">This degree focuses on developing practical artistic skills and creative expression. It often includes concentrations in areas such as painting, sculpture, photography, graphic design, and more.</h4>
			</div>
            <h5 style="margin-top: -180px;margin-left:80px">It's often done on a per-job basis.</h5>
	</div>
    <div class="container-0" id="Design">
		<h3 style="margin-top: 20px;">Graphic Design</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">A degree in graphic design prepares students for careers in visual communication, branding, advertising, and multimedia design. It blends artistic creativity with technological skills.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,00,000 - ₹4,00,000 per year</h5>
	</div>
    <div class="container-0" id="Film">
		<h3 style="margin-top: 20px;">Film and Television Production</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">This degree covers various aspects of filmmaking, including directing, producing, cinematography, editing, and screenwriting.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹3,00,000 - ₹6,00,000 per year</h5>
	</div>
    <div class="container-0" id="FashionDesign">
		<h3 style="margin-top: 20px;">Fashion Design</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Ideal for those interested in the fashion industry, this degree teaches design concepts, garment construction, and industry practices.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,50,000 - ₹5,00,000 per year</h5>
	</div>
    <h2 style="margin-left: 250px;color:#0090f9">TOP SCIENCE DEGREE</h2>
    <div class="container-0" id="Bsc.cs" style="height: 220px;">
		<h3 style="margin-top: 20px;">Bachelor of Science (BSc) in Computer Science</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">With the ever-growing demand for technology professionals, a degree in computer science opens doors to careers in software development, data science, artificial intelligence, and more.</h4>
			</div>
            <h5 style="margin-top: -180px;margin-left:80px">₹3,00,000 - ₹6,00,000 per year</h5>
	</div>
    <div class="container-0" id="Bsc.bio">
		<h3 style="margin-top: 20px;">Bachelor of Science (BSc) in Biology</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">This degree is a foundation for careers in research, healthcare, biotechnology, and environmental science.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,00,000 - ₹4,50,000 per year
</h5>
	</div>
    <div class="container-0" id="Bsc.eng" style="height: 220px;">
		<h3 style="margin-top: 20px;">Bachelor of Science (BSc) in Engineering</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Various engineering disciplines such as mechanical, electrical, civil, and chemical engineering offer excellent career prospects in industries like manufacturing, infrastructure, and technology.</h4>
			</div>
            <h5 style="margin-top: -180px;margin-left:80px">₹3,50,000 - ₹7,00,000 per year</h5>
	</div>
    <div class="container-0" id="Bsc.phy">
		<h3 style="margin-top: 20px;">Bachelor of Science (BSc) in Physics</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Physics is the foundation of many scientific fields and can lead to careers in research, academia, technology, and even finance.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,00,000 - ₹5,00,000 per year</h5>
	</div>
    <div class="container-0" id="Neuroscience">
		<h3 style="margin-top: 20px;">Bachelor of Science (BSc) in Neuroscience</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">This interdisciplinary field explores the complexities of the brain and nervous system, leading to careers in research, medicine, and mental health.</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,50,000 - ₹5,00,000 per year</h5>
	</div>
    <div class="container-0" id="EVS">
		<h3 style="margin-top: 20px;">Bachelor of Science (BSc) in Environmental Science</h3>
			<div>
				<h4 style="margin-top: -30px;width:900px;">Ideal for those passionate about the environment, this degree offers opportunities in conservation, sustainability, and policy-making</h4>
			</div>
            <h5 style="margin-top: -210px;margin-left:80px">₹2,50,000 - ₹5,00,000 per year</h5>
	</div>
</body>
<?php include 'footer.php'; ?>
</html>
