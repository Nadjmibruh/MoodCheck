<?php
    // include ("submit_questionnaire.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Delius&family=Winky+Rough:ital,wght@0,300..900;1,300..900&family=Yatra+One&display=swap" rel="stylesheet">

    <link href="Questionaire.css" rel="stylesheet">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <audio controls volume="50%"> 
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

        <div class="sidebar" id="sidebar">
            <div class="menu-bar" onclick="toggleSidebar()">
                <p>☰</p>
            </div>
            <div class="inside-sidebar">
                <ul>
                    <li id="home" onclick="location.href='bukanFirst-Time.php'">
                        <p>Home Page🏠</p>
                    </li>
                    <li id="profile" onclick="location.href='profile.html'">
                        <p>Profile👤</p>
                    </li>
                    <li id="activity" onclick="location.href='activities.html'">
                        <p>Activity🧠</p>
                    </li>
                    <li id="counseling-services"">
                        <p>Counseling Service💬</p>
                    </li>
                    <li id="history" onclick="location.href='history.html'">
                        <p>History⏳</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="btn-container">
            <div class="content-text">
                <h2>Questionnaire<br><br>(1 = Never, 2 = Rarely, 3 = Sometimes, 4 = Often, 5 = Always)</h2>
                <!-- <form method="post" action="database"> -->
                    <div class="questionnaire">
                        <ul>
                            <p>1. I found it hard to wind down (relax)</p>
                            <li>
                                <input type="radio" name="q1" value="1">1</input>
                                <input type="radio" name="q1" value="2">2</input>
                                <input type="radio" name="q1" value="3">3</input>
                                <input type="radio" name="q1" value="4">4</input>
                                <input type="radio" name="q1" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul style="background-color:#E0F0FF ;">
                            <p>2. I was aware of dryness of my mouth</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul>
                            <p>3. I couldn’t seem to experience any positive feeling at all</p>
                            <li>
                                <input type="radio" name="q1" value="1">1</input>
                                <input type="radio" name="q1" value="2">2</input>
                                <input type="radio" name="q1" value="3">3</input>
                                <input type="radio" name="q1" value="4">4</input>
                                <input type="radio" name="q1" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul style="background-color:#E0F0FF ;">
                            <p>4. I experienced breathing difficulty (eg, excessively rapid breathing, breathlessness in the absence of physical exertion)</p>
                            <li>
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul>
                            <p>5. I found it difficult to work up the initiative to do things</p>
                            <li>
                                <input type="radio" name="q1" value="1">1</input>
                                <input type="radio" name="q1" value="2">2</input>
                                <input type="radio" name="q1" value="3">3</input>
                                <input type="radio" name="q1" value="4">4</input>
                                <input type="radio" name="q1" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul style="background-color:#E0F0FF ;">
                            <p>6. I tended to over-react to situations</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul >
                            <p>7. I experienced trembling (eg, in the hands)</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul style="background-color:#E0F0FF ;">
                            <p>8. I felt that I was using a lot of nervous energy</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul >
                            <p>9. I was worried about situations in which I might panic and make a fool of myself</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul style="background-color:#E0F0FF ;">
                            <p>10. I felt that I had nothing to look forward to</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul >
                            <p>11. I found myself getting agitated/p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul style="background-color:#E0F0FF ;">
                            <p>12. I found it difficult to relax</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul >
                            <p>13. I felt down-hearted and blue</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul style="background-color:#E0F0FF ;">
                            <p>14. I was intolerant of anything that kept me from getting on with what I was doing</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul >
                            <p>15. I felt I was close to panic</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul style="background-color:#E0F0FF ;">
                            <p>16. I was unable to become enthusiastic about anything</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul >
                            <p>17. I felt I wasn’t worth much as a person</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul style="background-color:#E0F0FF ;">
                            <p>18. I felt that I was rather touchy</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul >
                            <p>19. I was aware of the action of my heart in the absence of physical exertion (eg, sense of heart rate increase, heart missing a beat)</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul style="background-color:#E0F0FF ;">
                            <p>20. I felt scared without any good reason</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                        <br>
                        <ul >
                            <p>21. I felt that life was meaningless</p>
                            <li >
                                <input type="radio" name="q2" value="1">1</input>
                                <input type="radio" name="q2" value="2">2</input>
                                <input type="radio" name="q2" value="3">3</input>
                                <input type="radio" name="q2" value="4">4</input>
                                <input type="radio" name="q2" value="5">5</input>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            <button type="submit" onclick="location.href='questionnaireresult.html'"><strong>Submit</strong></button>
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