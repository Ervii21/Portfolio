<?php
include 'server.php'; // Include your database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST['fullName'];
    $mobileNo = $_POST['mobileNo'];
    $emailAdd = $_POST['emailAdd'];
    $emailSubj = $_POST['emailSubj'];
    $messages = $_POST['messages'];
    
    // Validate form data (you can add more validation if needed)
    if (empty($fullName) || empty($mobileNo) || empty($emailAdd)|| empty($emailSubj) || empty($messages)) {
        echo "All fields are required";
        exit;
    }

    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    // Prepare SQL query
    $sql = "INSERT INTO contact (fullName, mobileNo, emailAdd, emailSubj, messages) VALUES ('$fullName', '$mobileNo', '$emailAdd', '$emailSubj', '$messages')";

    // Execute SQL query
    if ($connect->query($sql) === TRUE) {
      echo "<div id='successMessage' class='success'>Message inserted successfully</div>";
    } else {
        echo "Error inserting message: " . $connect->error;
    }

    // Close database connection
    $connect->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio </title>

    <link rel="stylesheet" href="style.css">


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header class="header">
        <a href="#" class="logo">Ervii.</a>


        <div class="bx bx-menu" id="menu-icon"></div>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#education">Education</a>
            <a href="#skills">skills</a>
            <a href="#contact">contact</a>
        </nav>
    </header>


    <section class="home" id="home">
        <div class="home-content">
            <h1>Hi, I'm <span>Erick Vincent Rasad</span></h1>
            <div class="text-animate">
                <h3>Frontend Developer</h3>
            </div>
            <p>Step into my online portfolio—a showcase of my work, a reflection of my dedication. Explore projects that speak volumes about my skills and passion. From web designs to creative endeavors, each piece embodies my commitment to excellence. Let's connect, inspire, and create something remarkable together.</p>

            <div class="btn-box">
               <a href="" class="btn">Hire Me</a>
               <a href="" class="btn">Let's Talk</a>
            </div>
        </div>

        <div class="home-sci">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-gmail' ></i></a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
        </div>



        <div class="home-imgHover"></div>
    </section>


    <section class="about" id="about">
        <h2 class="heading">About <span>Me</span></h2>

        <div class="about-img">
            <img src="erviAboutME.jpg" alt="">
            <span class="circle-spin"></span>
        </div>

        <div class="about-content">
            <h3>Frontend Developer!</h3>
            <p>I'm a passionate creator fueled by curiosity and driven by a desire to make a positive impact. With a blend of creativity and analytical thinking, I thrive on exploring new ideas and pushing boundaries. Whether it's delving into the depths of technology, expressing myself through art, or seeking inspiration in nature, I believe in embracing every opportunity for growth and learning. Let's embark on this journey together, uncovering the endless possibilities that await us.</p>
       
            <div class="btn-box btns">
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>


    <section class="education" id="education">
        <h2 class="heading">My <span>Journey</span></h2>

        <div class="education-row">
            <div class="education-column">
                <h3 class="title">Education</h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i>2020-2024</div>
                            <h3> Bachelors Degree - Western Mindanao State University</h3>
                            <p> Western Mindanao State University (WMSU) is a prominent educational institution situated in Zamboanga City, Philippines..</p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i>2017-2019</div>
                            <h3> Senior High School - Notre Dame Of Siasi</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i>2013-2017</div>
                            <h3> Junior High School - Notre Dame Of Siasi</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="education-column">
                <h3 class="title">Experience</h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i>2020-2024</div>
                            <h3> On The Job Training - Department Of Health</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i>2017-2019</div>
                            <h3> Immersion - Rural Health Unit, Siasi, Sulu</h3>
                            <p></p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i>2013-2017</div>
                            <h3> Web-App Developer/Docs - College of Computing Studies, WMSU</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="skills" id="skills">
        <h2 class="heading">My<span>Skills</span></h2>

        <div class="skills-row">
            <div class="skills-column">
                <h3 class="title">CODING SKILLS</h3>

                <div class="skills-box">
                    <div class="skills-content">
                        <div class="progress">
                            <h3>HTML <span>70%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>CSS <span>60%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>JavaScript <span>30%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Python <span>65%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="skills-column">
                <h3 class="title">OTHER SKILLS</h3>

                <div class="skills-box">
                    <div class="skills-content">
                        <div class="progress">
                            <h3>Photo Designing and Editing <span>70%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Graphic Designing <span>60%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Microsoft Expertise <span>80%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Videography And Photograpy <span>65%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="#" method="post">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="fullName" placeholder="Full Name" required>
                    <span class="focus"></span>
                </div>

                <div class="input-field">
                    <input type="text" name="emailAdd" placeholder="Email Address" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="number" name="mobileNo" placeholder="Mobile Number" required>
                    <span class="focus"></span>
                </div>

                <div class="input-field">
                    <input type="text" name="emailSubj" placeholder="Email Subject" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="textarea-field">
                <textarea  id="" cols="30" rows="10" name="messages" placeholder="Your Message" required></textarea>
                <span class="focus"></span>
            </div>

            <div class="btn-box btns">
                <button type="submit" class="btn">Submit</button>
            </div>

            <a href="#" class="nav-link text-light" data-toggle="modal" data-target="#exampleModalCenter">Contact</a>

            
        </form>
    </section>
    <script src="js/script.js"></script>
</body>
</html>