<?php

    session_start();
    if (isset($_SESSION['uid'])) 
    {
    header("Location: home.php");
    }
?>
<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="land.css">
</head>
<body>
    <form action="login.php"><input  type="submit" value="Login" ></form>
    <form action="signup.php"><input  type="submit" value="signup" ></form>
<br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
<div>
<div id="pic">
<div="slide">
        
        <div class="css-slideshow">
    <figure>
        <img src="mit1.jpeg" width="495" height="370">
    </figure>
    <figure>
        <img src="mit2.jpg" width="495" height="370">
    </figure>
    <figure>
       <img src="mit3.jpg" width="495" height="370">
    </figure>
    <figure>
        <img src="mit4.jpg" width="495" height="370">
    </figure>
    <figure>
        <img src="mit5.jpg" width="495" height="370">
    </figure>
    <figure>
        <img src="mit6.jpg" width="495" height="370">
    </figure>
    <figure>
        <img src="mit7.jpeg" width="495" height="370">
    </figure>
    <figure>
        <img src="mit8.jpg" width="495" height="370">
    </figure>
  </div>
</div>

<div id="content">
 <h2>ABOUT US</h2>
<p>
The Maharashtra Academy of Engineering & Education Research (MAEER), Pune established in 1983 is a well-known educational trust having registered office in Pune. It has 63 Institutions imparting quality education upto PhD in different fields. The MAEER is a multi-campus and multi-disciplinary organization conducting AICTE / MCI / University approved academic programs in Engineering, Management, Pharmacy and Medicine.</p><p>
The MIT Academy of Engineering was established in the year 1999. It is affiliated to the University of Pune and is approved and accredited by AICTE. The MIT Academy of Engineering offers University approved UG and PG Programmes in engineering and management.</p><p>
The college has modern, state-of-the-art infrastructure appropriate to conduct to engineering education. The college has qualified and experienced faculty engaged in teaching and research. Developed by the faculty, College laboratories have modern equipment and experimental setups. The campus is Wi-Fi with 18 mbps dedicated internet lease line and around 800 computers with latest configuration and fully networked. The laboratories are well equipped and duly staffed.</p><p>
Besides conventional teaching, MIT AOE puts special emphasis on e-based learning, subject-oriented advanced inputs, experimental and industry oriented project work. The College has an established system of feedback from the students, parents and industry. The Departmental Advisory Committees consisting of well known academicians from IITs and experts from industry guide the departments in their academic activities. The students’ chapters established in the Departments provide professional touch to the education.
</p>
</div>
<div id="footer">
    THANK YOU

</div>
</div>


</body>
</html>
