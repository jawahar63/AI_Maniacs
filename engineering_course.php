<?php
// Initialize the session
session_start();
function checkLogin() {
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
}

checkLogin();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<link rel="stylesheet" href="mycss/course.css">
<script src="myjs/course.js"></script>
<body>
	<h1>HOME / LEARNING CENTRE / ENGINEERING</h1>
	<h2>ENGINEERING</h2>
	<img src="img/book1.png" alt="book1" id="book-img1">
	<img src="img/book2.jpg" alt="book2" id="book-img2">
	<div class="container1" id="ai">
		<h3>AI specialist</h3>
		<div class="course-book1">
			<div>
				<h4>They work to design intelligent algorithms and models that can learn from data and make predictions or decisions based on that learning. AI specialists typically have expertise in areas such as machine learning, deep learning, natural language processing, computer vision, and robotics.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.udemy.com/course/machinelearning/"><button class="course">Course</button></a>
			<a href="https://people.engr.tamu.edu/guni/csce421/files/AI_Russell_Norvig.pdf"><button class="book">Book 1</button></a>
			<a href="https://dorshon.com/wp-content/uploads/2017/05/superintelligence-paths-dangers-strategies-by-nick-bostrom.pdf"><button class="book">Book 2</button></a>
		
			<a href="https://www.cag.edu.tr/uploads/site/lecturer-files/max-tegmark-life-30-being-human-in-the-age-of-artificial-intelligence-alfred-a-knopf-2017-aTvn.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="api">
		<h3>API Integration Specialist</h3>
		<div class="course-book1">
			<div>
				<h4>An API Integration Specialist is a professional who specializes in connecting and coordinating different software systems by designing, implementing, and managing Application Programming Interfaces (APIs). Their role involves ensuring seamless communication and data exchange between various applications, enabling efficient and automated workflows while adhering to industry standards and security protocols.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.udemy.com/course/build-rest-apis-with-aspnet-core-web-api-entity-framework/"><button class="course">Course</button></a>
			<a href="https://cdn.zapier.com/storage/learn_ebooks/e06a35cfcf092ec6dd22670383d9fd12.pdf"><button class="book">Book 1</button></a>
			<a href="https://pepa.holla.cz/wp-content/uploads/2016/01/REST-API-Design-Rulebook.pdf"><button class="book">Book 2</button></a>
			<a href="https://www.academia.edu/43452338/Designing_Web_APIs_BUILDING_APIS_THAT_DEVELOPERS_LOVE"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="Penetration">
		<h3>Penetration Tester</h3>
		<div class="course-book1">
			<div>
				<h4>
It is a cybersecurity professional who simulates cyberattacks on computer systems, networks, and applications to identify vulnerabilities and weaknesses. Their role involves using various tools and techniques to assess the security measures of an organization's digital infrastructure. By exploiting these vulnerabilities, they provide valuable insights to help organizations strengthen their defenses and protect against real malicious attacks.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.udemy.com/course/complete-cyber-security-course/"><button class="course">Course</button></a>
			<a href="https://repo.zenk-security.com/Magazine%20E-book/Penetration%20Testing%20-%20A%20hands-on%20introduction%20to%20Hacking.pdf"><button class="book">Book 1</button></a>
			<a href="https://ns2.elhacker.net/descargas/manuales/Hacking%20y%20Seguridad%20informatica/advancedpenetrationtesting.pdf"><button class="book">Book 2</button></a>
			<a href="https://olinux.net/wp-content/uploads/2019/01/Metasploit-The-Penetration-Tester-s-Guide.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="Application">
		<h3>Application support engineer</h3>
		<div class="course-book1">
			<div>
				<h4>An Application Support Engineer is a professional responsible for ensuring the smooth functioning of software applications. They diagnose and resolve technical issues, provide customer support, and collaborate with developers to enhance application performance and user experience.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.coursera.org/professional-certificates/google-it-support"><button class="course">Course</button></a>
			<a href="https://www.cin.ufpe.br/~cavmj/104The%20Pragmatic%20Programmer,%20From%20Journeyman%20To%20Master%20-%20Andrew%20Hunt,%20David%20Thomas%20-%20Addison%20Wesley%20-%201999.pdf"><button class="book">Book 1</button></a>
			<a href="https://edisciplinas.usp.br/pluginfile.php/5922722/mod_resource/content/1/2013%20-%20Book%20-%20Bass%20%20Kazman-Software%20Architecture%20in%20Practice%20%281%29.pdf"><button class="book">Book 2</button></a>
			<a href="https://thixalongmy.haugiang.gov.vn/media/1175/clean_code.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="business">
		<h3>Business analysts</h3>
		<div class="course-book1">
			<div>
				<h4>A Business Analyst is a role focused on analyzing an organization's processes, systems, and data to identify opportunities for improvement. They gather and document requirements, facilitate communication between stakeholders, and assist in making informed business decisions.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.udemy.com/course/business-analysis-ba/"><button class="course">Course</button></a>
			<a href="https://accgroup4u.yolasite.com/resources/BAnalysis.pdf"><button class="book">Book 1</button></a>
			<a href="https://nibmehub.com/opac-service/pdf/read/Business%20Analysis.pdf"><button class="book">Book 2</button></a>
			<a href="http://www.business-analysis-excellence.com/wp-content/uploads/2014/11/eBook.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="CSE">
		<h3>Customer service executive</h3>
		<div class="course-book1">
			<div>
				<h4>A Customer Service Executive is a professional who interacts with customers on behalf of a company, addressing inquiries, resolving issues, and providing assistance. They play a vital role in maintaining positive customer relationships and ensuring satisfaction.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.linkedin.com/learning/customer-service-mastery-delight-every-customer"><button class="course">Course</button></a>
			<a href="https://writerjournalist.files.wordpress.com/2013/10/the-thank-you-economy-gary-vaynerchuk.pdf"><button class="book">Book 1</button></a>
			<a href="https://www.process.st/wp-content/uploads/2016/07/The-Complete-Guide-to-Customer-Success-for-SaaS-Companies.pdf"><button class="book">Book 2</button></a>
			<a href="https://hyken.com/wp-content/uploads/preview-of-amazement-revolution.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="Cyber">
		<h3>Cyber security</h3>
		<div class="course-book1">
			<div>
				<h4> Cybersecurity involves practices, technologies, and processes designed to protect digital systems, networks, and data from unauthorized access, cyberattacks, and breaches. It encompasses various measures such as encryption, intrusion detection, and risk assessment to ensure online safety.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.coursera.org/specializations/intro-cyber-security"><button class="course">Course</button></a>
			<a href="https://theswissbay.ch/pdf/Books/Computer%20science/socialengineering_thescienceofhumanhacking_2ndedition.pdf"><button class="book">Book 1</button></a>
			<a href="https://heimdalsecurity.com/pdf/cyber_security_for_beginners_ebook.pdf"><button class="book">Book 2</button></a>
			<a href="https://wcu.edu.az/uploads/files/Cyber%20Security%20Essentials%20(%20PDFDrive%20).pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="DBMS">
		<h3>Database management</h3>
		<div class="course-book1">
			<div>
				<h4>Database management refers to the systematic organization, storage, retrieval, and maintenance of structured data. It involves designing, implementing, and administering databases to ensure data integrity, security, and efficient querying for various applications.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.udemy.com/course/database-design/"><button class="course">Course</button></a>
			<a href="https://ai12labs.files.wordpress.com/2013/04/dba-the-complete-guide-to-practices-and-procedures.pdf"><button class="book">Book 1</button></a>
			<a href="https://ptgmedia.pearsoncmg.com/images/9780135561089/samplepages/9780135561089_Sample.pdf"><button class="book">Book 2</button></a>
			<a href="https://ikamy.ch/public/img/books//Expert+SQL+Server+Transactions+and+Locki.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="Data">
		<h3>Data Scientist</h3>
		<div class="course-book1">
			<div>
				<h4>A Data Scientist is a professional who employs statistical analysis, machine learning, and data mining techniques to derive insights and knowledge from complex data sets. They play a crucial role in making data-driven decisions and solving business problems.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.coursera.org/specializations/jhu-data-science"><button class="course">Course</button></a>
			<a href="http://leilei.ink/wp-content/uploads/2020/03/Python_Data_Science_Handbook.pdf"><button class="book">Book 1</button></a>
			<a href="https://download.bibis.ir/Books/Mathematics/2022/Essential-Math-for-Data-Science-by-Thomas-Nield_bibis.ir.pdf"><button class="book">Book 2</button></a>
			<a href="https://www.foo.be/cours/dess-20122013/b/Natural%20Language%20Processing%20with%20Python%20-%20O'Reilly2009.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="Hardware">
		<h3>Hardware Engineer</h3>
		<div class="course-book1">
			<div>
				<h4> A Hardware Engineer is a specialist who designs, develops, and tests computer hardware components and systems. They work on the physical aspects of technology, including circuitry, processors, memory, and other electronic components.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.udemy.com/course/computer-organization-and-architecture-course-masterclass/"><button class="course">Course</button></a>
			<a href="http://www.sunburst-design.com/papers/CummingsSNUG2019SV_FSM1.pdf"><button class="book">Book 1</button></a>
			<a href="http://www.iqytechnicalcollege.com/Computer%20Network%20Software%20and%20Hardware%20Engineering%20with%20Applications.pdf"><button class="book">Book 2</button></a>
			<a href="https://www.vssut.ac.in/lecture_notes/lecture1423813120.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="InfoSe">
		<h3>Information security</h3>
		<div class="course-book1">
			<div>
				<h4>Information security involves strategies, practices, and technologies designed to protect sensitive information from unauthorized access, disclosure, alteration, and destruction. It encompasses various measures such as encryption, access controls, and risk assessment to ensure the confidentiality, integrity, and availability of data.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.udemy.com/course/information-security-a-z-bootcamp/"><button class="course">Course</button></a>
			<a href="http://almuhammadi.com/sultan/sec_books/Whitman.pdf"><button class="book">Book 1</button></a>
			<a href="https://theswissbay.ch/pdf/Books/Computer%20science/socialengineering_thescienceofhumanhacking_2ndedition.pdf"><button class="book">Book 2</button></a>
			<a href="https://ia800807.us.archive.org/29/items/hacking-the-art-of-exploitation/hacking-the-art-of-exploitation.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="Network">
		<h3>Networking engineering</h3>
		<div class="course-book1">
			<div>
				<h4>Networking engineering is the field focused on designing, implementing, and managing computer networks. Networking engineers work on the configuration, maintenance, and optimization of network infrastructure, including routers, switches, and protocols, to ensure reliable communication and data transfer.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.udemy.com/course/fundamentals-of-networking-for-effective-backend-design/"><button class="course">Course</button></a>
			<a href="https://vintageapple.org/macbooks/pdf/Networking_A_Beginners_Guide_2000.pdf"><button class="book">Book 1</button></a>
			<a href="https://library.samdu.uz/files/f5e1707dae3f615be54a06710495af18_Mastering%20Python%20Networking.pdf"><button class="book">Book 2</button></a>
			<a href="https://theswissbay.ch/pdf/Gentoomen%20Library/Networking/O%27Reilly%20Network%20Warrior.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div><div class="container1" id="Project">
		<h3>Project Manager </h3>
		<div class="course-book1">
			<div>
				<h4>A Project Manager is a professional responsible for planning, executing, and overseeing projects to achieve specific goals within defined constraints. They manage resources, timelines, budgets, and teams, ensuring successful project completion and alignment with organizational objectives.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.udemy.com/course/project-management-professional-pmp-certification/"><button class="course">Course</button></a>
			<a href="https://www.works.gov.bh/English/ourstrategy/Project%20Management/Documents/Other%20PM%20Resources/PMBOKGuideFourthEdition_protected.pdf"><button class="book">Book 1</button></a>
			<a href="https://core.ac.uk/download/pdf/37369444.pdf"><button class="book">Book 2</button></a>
			<a href="https://ugcollege.ge/storage/books/June2021/rDuZFLMTq8TPMzG8ebzi.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="SoftDev">
		<h3>Software Developer</h3>
		<div class="course-book1">
			<div>
				<h4>A Software Developer is an individual who designs, develops, tests, and maintains software applications. They write code in programming languages, collaborate with teams, and follow software development methodologies to create functional and efficient software solutions.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.udemy.com/course/the-complete-web-developer-course-2/"><button class="course">Course</button></a>
			<a href="https://thixalongmy.haugiang.gov.vn/media/1175/clean_code.pdf"><button class="book">Book 1</button></a>
			<a href="https://thixalongmy.haugiang.gov.vn/media/1175/clean_code.pdf"><button class="book">Book 2</button></a>
			<a href="https://thixalongmy.haugiang.gov.vn/media/1175/clean_code.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="SoftTest">
		<h3>Software Testing</h3>
		<div class="course-book1">
			<div>
				<h4>Software testing is a process of evaluating a software application to identify defects, errors, and issues in its functionality, performance, and usability. Testers use various techniques and tools to ensure that the software meets quality standards before release.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.udemy.com/course/testerbootcamp/"><button class="course">Course</button></a>
			<a href="https://scrummalaysia.com/media/attachments/2020/03/18/agile_testing_-_a_practical_guide_for_testers_and_agile_teams.pdf"><button class="book">Book 1</button></a>
			<a href="https://www.utcluj.ro/media/page_document/78/Foundations%20of%20software%20testing%20-%20ISTQB%20Certification.pdf"><button class="book">Book 2</button></a>
			<a href="https://download.e-bookshelf.de/download/0000/5928/29/L-G-0000592829-0002363038.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="TechTest">
		<h3>Technical Testing</h3>
		<div class="course-book1">
			<div>
				<h4>Technical testing is a subset of software testing that focuses on verifying the technical aspects of a software application. It involves assessing components like code quality, performance, security, compatibility, and other technical attributes to ensure the software meets technical requirements.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.udemy.com/course/technical-web-testing-101/"><button class="course">Course</button></a>
			<a href="http://site.iugaza.edu.ps/mahir/files/2017/01/Handbook-of-Technical-Writing-9th-Edition.pdf"><button class="book">Book 1</button></a>
			<a href="https://web.uettaxila.edu.pk/CMS/UG/CK-MCT-125/notes/TRW-%207th%20edition.pdf"><button class="book">Book 2</button></a>
			<a href="https://web.mit.edu/me-ugoffice/communication/technical-writing.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="Graphic">
		<h3>Graphic Design</h3>
		<div class="course-book1">
			<div>
				<h4>Graphic design involves creating visual content using elements such as typography, images, and illustrations to communicate messages and ideas effectively. Graphic designers use software tools to design layouts for print, web, or other digital media.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.udemy.com/course/graphic-design-masterclass-everything-you-need-to-know/"><button class="course">Course</button></a>
			<a href="https://monoskop.org/images/a/a4/Mueller-Brockmann_Josef_Grid_Systems_in_Graphic_Design_Raster_Systeme_fuer_die_Visuele_Gestaltung_English_German_no_OCR.pdf"><button class="book">Book 1</button></a>
			<a href="https://gd1typography.files.wordpress.com/2015/09/graphicdesignthinking.pdf"><button class="book">Book 2</button></a>
			<a href="https://download.e-bookshelf.de/download/0004/0349/99/L-G-0004034999-0002588475.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
</body>
<?php include 'footer.php'; ?>
</html>
