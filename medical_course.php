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
	<h1>HOME / LEARNING CENTRE / MEDICAL</h1>
	<h2>MEDICAL</h2>
	<img src="img/book1.png" alt="book1" id="book-img1">
	<img src="img/book2.jpg" alt="book2" id="book-img2">
	<div class="container1" id="MBBS">
		<h3>Bachelor of Medicine and<br> Bachelor of Surgery (MBBS)</h3>
		<div class="course-book1">
			<div>
				<h4 style="margin-top: 100px;">The Bachelor of Medicine and Bachelor of Surgery (MBBS) is a professional undergraduate degree awarded to individuals who have completed the necessary medical education and training. This degree equips graduates with the essential knowledge and skills to practice medicine as doctors, diagnosing and treating patients, promoting health, and contributing to medical research.</h4>
			</div>
			<div class="course-book" style="margin-top: -20px;">
			<a href="https://www.youtube.com/watch?v=ZO4lwnuGST0"><button class="course">OVERVIEW</button></a>
			<a href="https://drive.google.com/file/d/1kXasb6SgkXiqGavLQu044HYHW4wQOvUm/view"><button class="book">Book 1</button></a>
			<a href="https://drive.google.com/file/d/1JfxlLwmNlue9t2YufYjlRnnIOzBPtW9T/view"><button class="book">Book 2</button></a>
			<a href="https://drive.google.com/file/d/1xLnwHsIzDvN_f0-B-bIUYeF4mE73muF3/view"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="BDS">
		<h3>Bachelor of Dental Surgery (BDS)</h3>
		<div class="course-book1">
			<div>
				<h4>The Bachelor of Dental Surgery (BDS) is an undergraduate professional degree for individuals aspiring to become dentists. This program prepares students to diagnose and treat oral health issues, perform dental procedures, and promote dental hygiene. The curriculum encompasses dental sciences, clinical training, and hands-on experience. </h4>
			</div>
			<div class="course-book">
			<a href="https://www.youtube.com/watch?v=OO8Rf3hAjng"><button class="course">OVERVIEW</button></a>
			<a href="https://scert.kerala.gov.in/wp-content/uploads/2020/06/09-dental%20technology.pdf"><button class="book">Book 1</button></a>
			<a href="https://books-library.net/files/download-pdf-ebooks.org-1533070470Ml0P8.pdf"><button class="book">Book 2</button></a>
			<a href="https://ikdc.bmsu.ac.ir/portal/file/?334194/2019_dentallib_arthur_j_nowak_pediatric_compressed.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="BAMS">
		<h3>Bachelor of Ayurvedic Medicine<br> & Surgery (BAMS)</h3>
		<div class="course-book1" style="margin-top: -150px;">
			<div>
				<h4>The Bachelor of Ayurvedic Medicine and Surgery (BAMS) is an undergraduate degree program that focuses on traditional Indian medicine, Ayurveda. Students in this program learn about ancient healing practices, herbal remedies, holistic approaches to health, and natural therapies. BAMS graduates can diagnose, treat various ailments, and promote overall wellness using Ayurvedic principles. </h4>			
			</div>
			<div class="course-book" style="margin-top: -20px;">
			<a href="https://www.youtube.com/watch?v=BXomSYpY3e4"><button class="course">OVERVIEW</button></a>
			<a href="https://rkamc.org.in/images/Charaka-Samhita-Acharya-Charaka.pdf"><button class="book">Book 1</button></a>
			<a href="https://rarebooksocietyofindia.org/book_archive/Sushruta%20Samhita%201.pdf"><button class="book">Book 2</button></a>
			<a href="https://www.planetayurveda.com/ayurveda-ebooks/astanga-hridaya-sutrasthan-handbook.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="B-pharm">
		<h3>Bachelors in pharmacy</h3>
		<div class="course-book1">
			<div>
				<h4>A Bachelor's in Pharmacy is an undergraduate degree program that trains students in pharmaceutical sciences and medication management. The curriculum covers subjects like pharmacology, pharmaceutical chemistry, drug delivery systems, and pharmacy practice. Graduates can work as pharmacists in various settings, including community pharmacies, hospitals, pharmaceutical companies, and regulatory agencies. </h4>
						</div>
			<div class="course-book">
			<a href="https://www.youtube.com/watch?v=h44c47wIdoM"><button class="course">OVERVIEW</button></a>
			<a href="http://www.kudops.org/elearning/course_material/ebooks/pharmacology_flash_cards.pdf"><button class="book">Book 1</button></a>
			<a href="https://pharmacomedicale.org/images/cnpm/CNPM_2016/katzung-pharmacology.pdf"><button class="book">Book 2</button></a>
			<a href="http://dl.konkur.in/post/Book/MedicalScience/Trease-and-Evans-Pharmacognosy-16th-Edition-%5Bkonkur.in%5D.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="OTT">
		<h3>Bachelors of Vocational Training (OTT)</h3>
		<div class="course-book1">
			<div>
				<h4>A Bachelor's in Vocational Training (OTT) is an undergraduate program designed to provide practical skills and knowledge in a specific trade or vocational field. It emphasizes hands-on training and real-world applications. Students gain expertise in areas such as mechanics, electronics, culinary arts, or cosmetology</h4>
			</div>
			<div class="course-book">
			<a href="https://www.youtube.com/watch?v=BZkIyUuTD9U"><button class="course">OVERVIEW</button></a>
			<a href="https://main.mohfw.gov.in/sites/default/files/Model_Curriculum_Handbook_Operat.pdf"><button class="book">Book 1</button></a>
			<a href="http://horizon.hsc.edu.kw/Library/publications/pdf/Morgan.pdf"><button class="book">Book 2</button></a>
			<a href="https://www.henryschein.com/assets/Medical/1089970.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="MLT">
		<h3>Bachelors of Vocational Training (MLT)</h3>
		<div class="course-book1">
			<div>
				<h4>A Bachelor's in Vocational Training (MLT) refers to a degree program in Medical Laboratory Technology. It focuses on training students in various laboratory techniques and diagnostic procedures used in medical settings. Students learn to perform tests, analyze samples, and assist in the diagnosis of diseases.</h4>			</div>
			<div class="course-book">
			<a href="https://www.youtube.com/watch?v=vSV-pme8hNs"><button class="course">OVERVIEW</button></a>
			<a href="https://www.cartercenter.org/resources/pdfs/health/ephti/library/lecture_notes/med_lab_tech_students/medicallabtechnology.pdf"><button class="book">Book 1</button></a>
			<a href="https://www.cartercenter.org/resources/pdfs/health/ephti/library/lecture_notes/med_lab_tech_students/ln_hematology_mlt_final.pdf"><button class="book">Book 2</button></a>
			<a href="https://ttk.elte.hu/dstore/document/893/book.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="BPT">
		<h3>Bachelor of Physiotherapy (BPT)</h3>
		<div class="course-book1">
			<div>
				<h4>The Bachelor of Physiotherapy (BPT) is an undergraduate degree program that educates students in the field of physical therapy. Through this program, students learn about human anatomy, movement science, therapeutic exercises, and rehabilitation techniques. BPT graduates become skilled physiotherapists who assess and treat individuals with physical injuries, disabilities, or conditions.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.youtube.com/watch?v=pz6tn5SqR3s"><button class="course">OVERVIEW</button></a>
			<a href="https://upload.wikimedia.org/wikipedia/commons/2/24/Applied_anatomy_and_kinesiology%2C_the_mechanism_of_muscular_movement_%28IA_appliedanatomyki00bowe%29.pdf"><button class="book">Book 1</button></a>
			<a href="http://www.kudops.org/elearning/course_material/ebooks/KD-Tripathi-Essentials-of-Medical-Pharmacology-6th-Edition.compressed.pdf"><button class="book">Book 2</button></a>
			<a href="https://www.pharmaresearchlibrary.com/wp-content/uploads/2013/03/A-Textbook-of-Clinical-Pharmacology-and-Therapeutics-5th-edition.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="B.V.Sc.& AH">
		<h3>Bachelor of Veterinary Sciences &<br> Animal Husbandry (B.V.Sc. & AH)</h3>
		<div class="course-book1">
			<div>
				<h4>The Bachelor of Veterinary Sciences and Animal Husbandry (B.V.Sc. & AH) is an undergraduate program focused on veterinary medicine and animal care. Students learn about animal anatomy, diseases, surgery, and health management. Graduates become veterinarians equipped to diagnose and treat illnesses in animals, provide preventive care, and contribute to animal welfare.</h4>
						</div>
			<div class="course-book" style="margin-top: -50px;">
			<a href="https://www.youtube.com/watch?v=6nL0jnmgSUY"><button class="course">OVERVIEW</button></a>
			<a href="https://www.wur.nl/upload_mm/d/b/b/614bcc19-036f-434e-9d40-609364ab26da_Textbook%20Animal%20Breeding%20and%20Genetics-v17-20151122_1057.pdf"><button class="book">Book 1</button></a>
			<a href="https://eliasnutri.files.wordpress.com/2020/07/animal-nutrition-7th-edition.pdf"><button class="book">Book 2</button></a>
			<a href="https://swu.phinma.edu.ph/wp-content/uploads/2021/05/A-Textbook-of-Veterinary-General-Pathology-2nd-Edition-by-J.-L.-Vegad.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="B.Optom">
		<h3>Bachelor of Optometry (B.Optom)</h3>
		<div class="course-book1">
			<div>
				<h4>The Bachelor of Optometry (B.Optom) is an undergraduate degree program that trains students to become optometrists. Through this program, students learn about eye health, visual science, and vision correction. Graduates become qualified eye care professionals who conduct eye examinations, prescribe corrective lenses, diagnose visual problems, and offer solutions for various eye conditions.</h4>
			</div>
			<div class="course-book">
			<a href="https://www.youtube.com/watch?v=eAf0TBnKQAE"><button class="course">OVERVIEW</button></a>
			<a href="https://courseware.cutm.ac.in/wp-content/uploads/2023/02/Clinical-Optics-elkington-3ed.pdf"><button class="book">Book 1</button></a>
			<a href="https://www.fmhs.auckland.ac.nz/assets/fmhs/som/ophthalmology/teaching/docs/ophthalmology-iv-handout-2016-17.pdf"><button class="book">Book 2</button></a>
			<a href="https://users.physics.ox.ac.uk/~ewart/Optics%20Lectures%202007.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="Nursing">
		<h3>Bachelor of Nursing</h3>
		<div class="course-book1">
			<div>
				<h4>The Bachelor of Nursing is an undergraduate degree program that prepares students for a career in nursing. This program covers subjects like anatomy, physiology, pharmacology, and nursing theory. Graduates become registered nurses (RNs) who provide direct patient care, administer medications, and assist doctors in various healthcare settings, such as hospitals, clinics, and home healthcare. </h4>			
			</div>
			<div class="course-book">
			<a href="https://www.youtube.com/watch?v=PWZF0fNKgAM"><button class="course">OVERVIEW</button></a>
			<a href="https://repository.poltekkes-kaltim.ac.id/606/1/Fundamentals%20of%20Nursing_%20Standards%20and%20Practice%20(%20PDFDrive.com%20).pdf"><button class="book">Book 1</button></a>
			<a href="https://repository.poltekkes-kaltim.ac.id/556/1/Nurse%20Practitioners%20Clinical%20Pocket%20Guides.pdf"><button class="book">Book 2</button></a>
			<a href="https://www.pondiuni.edu.in/wp-content/uploads/2020/12/Syllabus_Affiliated_Medical_B.Sc_.Nursing2018-19.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	<div class="container1" id="Psyco">
		<h3>Bsc Psygology</h3>
		<div class="course-book1">
			<div>
				<h4>A Bachelor of Science in Psychology (BSc Psychology) is an undergraduate degree program focused on the study of human behavior and mental processes. Students learn about psychological theories, research methods, and various areas such as developmental psychology, cognitive psychology, and social psychology. Graduates can pursue careers in counseling, research, human resources, or mental health service.</h4>			</div>
			<div class="course-book">
			<a href="https://www.careers360.com/courses/bsc-in-psychology"><button class="course">OVERVIEW</button></a>
			<a href="https://www.himpub.com/documents/Chapter3448.pdf"><button class="book">Book 1</button></a>
			<a href="https://www.uobabylon.edu.iq/eprints/publication_3_13990_494.pdf"><button class="book">Book 2</button></a>
			<a href="https://www.happinesshypothesis.com/happiness-hypothesis-ch1.pdf"><button class="book">Book 3</button></a>
			</div>
		</div>
	</div>
	</div>
</body>
<?php include 'footer.php'; ?>
</html>
