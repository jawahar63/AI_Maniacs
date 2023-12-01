<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'?>

    <style>
        @keyframes moveFromLeftToRight {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        .course-wrapper {
            display: flex;
            overflow: hidden;
        }

        .course-row {
            animation: moveFromLeftToRight 20s linear infinite;
        }

        .course {
            flex: 0 0 25%;
            padding: 0 10px;
        }
    </style>
</head>
<body>
    <div class="hero-area section">
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); "></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <ul class="hero-area-tree">
                        <li><a href="main.php">Home</a></li>
                        <li>Courses</li>
                    </ul>
                    <h1 class="white-text">Get Started</h1>
                </div>
            </div>
        </div>
    </div>

    <div id="courses" class="section">
        <div class="container">
            <div class="widget tags-widget">
                <a class="tag" href="#web">Web</a>
                <!-- ... (other tags) ... -->
            </div>

            <div id="courses-wrapper" class="course-wrapper">
                <div class="row course-row">
                    <div class="col-md-3 col-sm-6 col-xs-6 course">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'?>
</body>
</html>
