<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="bukanFirst-Time.css" rel="stylesheet">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <audio loop controls autoplay volume="50%"> 
        <source src="The Deli - Flowers.mp3" type="audio/mp3">
        <source src="The Deli - Flower.wav" type="audio/wav">
    </audio>

    <nav>
        <ul class="tabs-container">
            <li class="logo">
                <img src="logoMoodcheck.png" alt="Logo">
            </li>
            <li class="user">
                <p class="name">first name <br> last name</p>
                <a class= "user-logo" href="#"> <i class='bx  bx-user-circle'></i></a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <nav class="sidebar">
            <div class=menu-bar onclick="toggleSidebar()">
                <i class='bx bx-menu-wide'></i>
            </div>
        </nav>

        <div class="inside-sidebar">
            <ul>
                <li id="home">
                    <P>Home Page</P><i class='bx  bx-home-alt-2'></i> <i class='bx  bx-chevron-right'></i> </a> // Home
                </li>
                <li id="profile">
                    <p>Profile</p><i class='bx  bx-user-circle'></i> <i class='bx  bx-chevron-right'></i>  </a> // Profile
                </li>
                <li id="activity">
                    <P>Activity</P><i class='bx  bx-browser-activity'></i> <i class='bx  bx-chevron-right'></i> </a> // Activity
                </li>
                <li id="counseling-services">
                    <a href="#"><p>Counseling Services</p></a>
                </li>
                <li id="history">
                    <p>History</p><i class='bx  bx-history'  ></i> <i class='bx  bx-chevron-right'  ></i> </a>
                </li>
            </ul>
        </div>

        <div class="btn-container">
            <div class="content-text">
                <p> Welcome to MoodCheck - your personal space for mental wellness.<br><br> University life can be
                    overwhelming, with assignment, exam, and daily pressure affecting your mental health.
                    MoodCheck is safe, student-friendly platform designed to help you understand and improve
                    your emotional well-being. Through guided assessments, personalized self-care activities,
                    and easy access to UTeM's support services, MoodCheck empowers you to take control of your
                    mental health-one small step at a time. <br><br>Notifications</p>

            </div>
            <div class="btn-group">
                <button class="btn" onclick="location.href='counseling-appointment.html'">
                    <h2>
                        <strong>Counseling Appointment<br><br></strong>
                        <small>Accept or decline this appointment</small>
                    </h2>
                </button>
                <button class="btn-alphabet" onclick="location.href='alphabet.html'">
                    <h2>
                        <strong>Alphabet Game<br><br></strong>
                        <small>Click here to play the game</small>
                    </h2>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector(".sidebar");
            sidebar.classList.toggle("expanded");
        }
    </script>

    

</body>

</html>