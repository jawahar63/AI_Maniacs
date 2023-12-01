<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="mycss/index.css">
<body>
    <h1>
    Learn your path<br>
    from AI MANIACS.<br>
    A CAREER GUIDANCE TOOL<br>
    </h1>
    <h2 style="margin-top: 112px;">DON’T KNOW ABOUT ANYTHING</h2>
    <div class="box3">
        <div class="container1">
            <p1>Get path</p1>
            <p2>Don’t know about what to do  ? Do know about trending job</p2>
            <a href="view.php?file=Tech.csv"><button class="click" style="margin-top: 45px;">CLICK HERE</button></a>
        </div>
        <div class="container1">
            <p1>TECHNICAL</p1>
            <p2>If you need to go in the line of technical field<br>example: AI,ML,Web development and etc,.</p2>
            <a href="engineering_course.php"><button class="click" style="margin-top: 45px;">CLICK HERE</button></a>

        </div>
        <div class="container1">
            <p1>NON TECHNICAL</p1>
            <p2>If you need to go in the line of non-technical field<br>example: Artist,Sale agent and etc,.</p2>
            <a href="non_tech.php"><button class="click" style="margin-top: 45px;">CLICK HERE</button></a>
        </div>
    </div>
    <h2>I KNOW LITTLE-BIT BUT I NEED CLARIFICATION</h2>
    <div class="box4">
    <div class="container2">
        <h5>FOR <br> ENGINEERING</h5>
        <a href="http://127.0.0.2:5000/"><button class="click">CLICK HERE</button></a>

    </div>
    <div class="container2">
        <h5>FOR <br> MEDICAL</h5>
        <a href="http://127.0.0.1:5000/"><button class="click">CLICK HERE</button></a>

    </div>
    <div class="container2">
        <h5>FOR <br> ARTS GROUP</h5>
        <a href="arts.php"><button class="click">CLICK HERE</button></a>

    </div>
    <div class="container2">
        <h5>FOR <br> OTHER </h5>
        <a href="other.php"><button class="click">CLICK HERE</button></a>

    </div>
    </div>
    <h2>FOR SCHOOL STUDENTS</h2>
    <div class="box4">
    <div class="container2">
        <h6>AFTER 10th JOB<br><br></h6>
        <a href="10thjob.php"><button class="click">CLICK HERE</button></a>

    </div>
    <div class="container2">
        <h6>AFTER 10th SELECT GROUP</h6>
        <a href="http://127.0.0.3:5000/"><button class="click">CLICK HERE</button></a>

    </div>
    <div class="container2">
        <h6>AFTER 12th JOB<br><br></h6>
        <a href="12thjob.php"><button class="click">CLICK HERE</button></a>

    </div>
    <div class="container2">
        <h6>AFTER 12th SELECT WHICH LINE</h6>
        <a href=""><button class="click">CLICK HERE</button></a>

    </div>
    </div>
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
        <a href="other.php"><button class="click">CLICK HERE</button></a>

    </div>
    </div>
</body>
<?php include 'footer.php'?>
</html>