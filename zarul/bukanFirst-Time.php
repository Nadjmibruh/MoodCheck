<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bukanFirst-Time.css" rel="stylesheet">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Add these new styles */
        .sidebar {
            width: 50px;
            transition: width 0.3s ease;
            background-color: #afcde9;
            height: 100vh;
            position: fixed;
            overflow: hidden;
            z-index: 100;
        }
        
        .sidebar.expanded {
            width: 250px;
        }
        
        .inside-sidebar {
            display: none;
            padding: 20px 0;
        }
        
        .sidebar.expanded .inside-sidebar {
            display: block;
        }
        
        .inside-sidebar ul {
            list-style-type: none;
            padding-left: 15px;
        }
        
        .inside-sidebar li {
            padding: 10px 0;
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .inside-sidebar li:hover {
            background-color: #8ab7e2;
        }
        
        .inside-sidebar i {
            margin-right: 10px;
            font-size: 20px;
        }
        
        .container {
            margin-left: 50px;
            width: calc(100% - 50px);
        }
        
        .menu-bar {
            padding: 15px;
            cursor: pointer;
            font-size: 24px;
        }
        
        /* Ensure content stays fixed */
        .btn-container {
            position: relative;
            left: 0;
            width: 100%;
        }
    </style>
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
                <a class="user-logo" href="#"> <i class='bx bx-user-circle'></i></a>
            </li>
        </ul>
    </nav>

    <div class="sidebar" id="sidebar">
        <div class="menu-bar" onclick="toggleSidebar()">
            <i class='bx bx-menu-wide'></i>
        </div>
        <div class="inside-sidebar">
            <ul>
                <li id="home">
                    <i class='bx bx-home-alt-2'></i>
                    <p>Home Page</p>
                    <i class='bx bx-chevron-right'></i>
                </li>
                <li id="profile">
                    <i class='bx bx-user-circle'></i>
                    <p>Profile</p>
                    <i class='bx bx-chevron-right'></i>
                </li>
                <li id="activity">
                    <i class='bx bx-browser-activity'></i>
                    <p>Activity</p>
                    <i class='bx bx-chevron-right'></i>
                </li>
                <li id="counseling-services">
                    <i class='bx bx-conversation'></i>
                    <p>Counseling Services</p>
                    <i class='bx bx-chevron-right'></i>
                </li>
                <li id="history">
                    <i class='bx bx-history'></i>
                    <p>History</p>
                    <i class='bx bx-chevron-right'></i>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
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
                <button class="btn-alphabet" onclick="location.href='activities.html'">
                    <h2>
                        <strong>Game<br><br></strong>
                        <small>Click here to play the game</small>
                    </h2>
                </button>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("expanded");
        }
    </script>
</body>
</html>