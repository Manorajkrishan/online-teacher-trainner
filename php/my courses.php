<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Courses-The Tutor-Online Teacher Traniner Institute</title>
    <link rel="stylesheet" href="../CSS/my courses.css">
</head>

<body>
    <header>
        <div class="container">
            <!-- header -->
        <div class="header">
            <h1>The Tutor</h1>
        </div>
          <div class="menu">
            <div class="logo">
                <a href="Page.html"><img src="/Images/logo1.jpg" alt="logo not found"></a>
            </div>
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="What you are looking for?">
                    <button type="submit">search</button>
                </div>
                <div class="list">
                    <ul>
                        <li><a href="Home.html">Home</a></li>
                        <li><a href="About Us.html">About Us</a></li>
                        <li><a href="Contact Us.html">Contact Us</a></li>
                        <li><a href="Helppage.html">Help</a></li>
                    </ul>
                </div>
            </div>
            <div class="profile">
                <a href="user account.html"><img src="/Images/profile.png"></a>
            </div>
            <div class="login">
                <ul>
                    <li><a href="signup.html">Log in</a>
                        <div class="in_menu">
                            <ul>
                                <li><a href="signin.html">Sign in</a></li>
                                <li><a href="signup.html">Sign up</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
            <h3>My Courses</h3>
            <h5>My Enrolled Courses</h5>

            <div class="row">
                <div class="column">
                    <div class="course">
                        <img src="/images/image11.png" alt="">
                        <div class="bar">
                            <div class="status"></div>
                        </div>
                          
                        <button onclick="increaseStatus(0)">Increase Progress</button>
                    </div>
                    <h5>Course 01</h5>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <div class="course">
                        <img src="/images/imege12.jpeg" alt="">
                        <div class="bar">
                            <div class="status"></div>
                        </div>
                          
                        <button onclick="increaseStatus(1)">Increase Progress</button>
                    </div>
                    <h5>Course 02</h5>
                </div>

                <div class="column">
                    <div class="course">
                        <img src="/images/image13.jpeg" alt="">
                        <div class="bar">
                            <div class="status"></div>
                        </div>
                          
                        <button onclick="increaseStatus(2)">Increase Progress</button>
                    </div>
                    <h5>Course 03</h5>
                </div>

                <div class="column">
                    <div class="course">
                        <img src="/images/image14.jpeg" alt="">
                        <div class="bar">
                            <div class="status"></div>
                        </div>
                          
                        <button onclick="increaseStatus(3)">Increase Progress</button>
                    </div>
                    <h5>Course 04</h5>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <div class="course">
                        <img src="/images/image15.jpg" alt="">
                        <div class="bar">
                            <div class="status"></div>
                        </div>
                          
                        <button onclick="increaseStatus(4)">Increase Progress</button>
                    </div>
                    <h5>Course 05</h5>
                </div>
            </div>

            <div class="upcoming">
                <h4>Upcoming Courses</h4>
                <img src="/images/image16.jpg" alt="" width="500">
            </div>
        </div>
    </header>
    <div class="adition">
        <div class="Page">
          <h2><a href="Payment.html" class="Page">Make Payment</a></h2>
        </div>
      </div>
      <div class="Page">
        <h1><a href="quiz.html">Go To Play Quiz</a></h1>
    </div>
    <!-- Footer start -->
    <footer>
      <div class="Main-footer">
        <div class="sub-footer1">
        <div class="logo">
          <img src="../Images/logo1.jpg" height="100px" width="100px">
        </div>
        <br>
        <h4>Terms and conditions | Cookie Settings | Privacy policy</h4>
        </div>
        <div class="sub-footer2">
        <h4>Now available in:</h4>
        <a href="https://play.google.com/store/apps/details?id=com.sliitgo.evoxlk" target="_blank"><img src="../Images/playstore.jpg" height="50px" width="170px"></a>
        <a href="https://play.google.com/store/apps/details?id=com.evoxsolutions.am_sliit" target="_blank"><img src="../Images/apple.jpg" height="50px" width="170px"></a>
        <br>
        <h4>Copyright 2023 &copy The Tutor. All Rights Reserved</h4>
        </div>
        <div class="social">
        <div class="fb">
          <a href="https://www.facebook.com/sliit.lk/" target="_blank"><img src="../Images/facebook.jpg"></a>
        </div>
        <div class="isnta">
          <a href="https://www.instagram.com/sliit.life/?hl=en" target="_blank"><img src="../Images/insta.jpg"></a>
        </div>
        <div class="gmail">
          <a href="https://www.sliit.lk/email/" target="_blank"><img src="../Images/mail.jpg"></a>
        </div>
        <div class="linkedin">
          <a href="https://lk.linkedin.com/company/fcsc-sliit" target="_blank"><img src="../Images/linkedin.jpg"></a>
        </div>
        </div>
      </div>
      </footer>
        <!-- Footer end -->
        <script src="/JS/my courses.js"></script>
</body>

</html>

<?php
include_once'config.php';
?>
<?php

$sql = "SELECT course_name, progress_status FROM tbl_courses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while ($row = $result->fetch_assoc()) {
        $courseName = $row["course_name"];
        $progressStatus = $row["progress_status"];

    
        echo "<h5>$courseName</h5>";
        echo "<div class='bar'>";
        echo "<div class='status' style='width: $progressStatus%;'></div>";
        echo "</div>";
        echo "<button onclick='increaseStatus($progressStatus)'>Increase Progress</button>";
        echo "<br>";
    }
} else {
    echo "No courses found.";
}


$conn->close();
?>