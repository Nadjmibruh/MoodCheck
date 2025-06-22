<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="ifStudent.css" type="text/css" rel="stylesheet"></link>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'></link>
    
</head>

<body>
    <audio loop controls  volume="50%"> 
        <source src="The Deli - Flowers.mp3" type="audio/mp3">
        <source src="The Deli - Flower.wav" type="audio/wav">
    </audio>

    <div>
        <ul class="tabs-container">
            <li class="logo">
                <img src="utem_logo.png" alt="Logo">
            </li>
            <li>
                <p class="name">MoodCheck</p>
            </li>
            <li class="icon">
                <img src= "moodcheck_iconlogo.png" alt="MoodCheck Logo">
            </li>
        </ul>
    </div>

    <div class= "background">
        <div class="inside">
            <form id="signup">
                <table class="inside-inside">
                    <tr>
                        <td class="label">First Name</td>
                        <td><input type="text" name="firstName" placeholder=" will" required></td>
                    </tr>
                    <tr>
                        <td class="label">Last Name</td>
                        <td><input type="text" name="lastName" placeholder=" smith" required></td>
                    </tr>
                    <tr>
                        <td class="label">E-mail</td>
                        <td><input type="email" name="email" placeholder=" asdfg@gmail.com" required></td>
                    </tr>
                    <tr>
                        <td class="label">Birth Date</td>
                        <td><input type="date" name="birthDate" required></td>
                    </tr>
                    <tr>
                        <td class="label">Phone Number</td>
                        <td><input type="tel" name="phone" placeholder=" 01234567789" required></td>
                    </tr>
                    <tr>
                        <td class="label">Password</td>
                        <td>
                        <div class="password-field" style="cursor: pointer;">
                            <input type="password" name="password" required id="password">
                            <span id="eye">👁️</span>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Confirm Password</td>
                        <td>
                        <div class="password-field" style="cursor: pointer;">
                            <input type="password" name="confirmPassword" required id="confirm-password">
                        </div>
                        </td>
                    </tr>
                </table>
                <div class="role-collapse">
                    <p><strong> Are you a? </strong></p>
                    <div class="radio-group">
                        <label class="label"><input onclick="showStudentPopup()" type="radio" name="role" required> Student</label>
                        <label class="label"><input type="radio" name="role"> Clinic Staff</label>
                        <label class="label"><input type="radio" name="role"> Counsellor</label>
                    </div>
                </div>

                <button type="submit" class="signup-btn">Sign up</button>
            </form>
        </div>

    </div>
    
    <!-- Add the popup HTML -->
    <div class="popup-overlay" id="popup-overlay"></div>
    <div class="popup" id="student-popup">
        <span class="close-btn" onclick="closePopup()">×</span>
        <h3>Student Information</h3>
        <div class="student-form">
            <table>
                <thead>
                    <tr>
                        <th>Education Level</th>
                        <th>Faculty</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="radio-group">
                                <label><input type="radio" name="education" value="diploma"> Diploma</label>
                                <label><input type="radio" name="education" value="degree"> Degree</label>
                                <label><input type="radio" name="education" value="master"> Master</label>
                                <label><input type="radio" name="education" value="phd"> PhD</label>
                            </div>
                        </td>
                        <td>
                            <div class="radio-group">
                                <label><input type="radio" name="faculty" value="faix"> FAIX</label>
                                <label><input type="radio" name="faculty" value="ftke"> FTKE</label>
                                <label><input type="radio" name="faculty" value="ftkek"> FTKEK</label>
                                <label><input type="radio" name="faculty" value="ftkm"> FTKM</label>
                                <label><input type="radio" name="faculty" value="ftmk"> FTMK</label>
                                <label><input type="radio" name="faculty" value="fptt"> FPTT</label>
                            </div>
                        </td>
                        <td>
                            <div class="radio-group">
                                <label><input type="radio" name="year" value="1"> 1</label>
                                <label><input type="radio" name="year" value="2"> 2</label>
                                <label><input type="radio" name="year" value="3"> 3</label>
                                <label><input type="radio" name="year" value="4"> 4</label>
                                <label><input type="radio" name="year" value="5"> 5</label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="popup-btn" onclick="closePopup()" style="margin-top: 20px; margin-left:87%;">DONE</button>
    </div>

    

    <script>
        let eye = document.getElementById("eye");
        let password = document.getElementById("password");
        let confirmPassword = document.getElementById("confirm-password");

        eye.onclick = function() {
            if (password.type === "password") {
                password.type = "text";
                eye.textContent = "👁️";
            } else {
                password.type = "password";
                eye.textContent = "👁️";
            }
        }

        // New functions for popup handling
        function showStudentPopup() {
            document.getElementById("popup-overlay").style.display = "block";
            document.getElementById("student-popup").style.display = "block";
        }
        
        function closePopup() {
            document.getElementById("popup-overlay").style.display = "none";
            document.getElementById("student-popup").style.display = "none";
        }
        
        // Close popup when clicking outside of it
        document.getElementById("popup-overlay").addEventListener('click', closePopup);

        document.getElementById("signup-form").addEventListener("submit", function (e) {
    if (!this.checkValidity()) {
      e.preventDefault(); // Prevent form submission
      this.reportValidity(); // Show native browser messages
    } else {
      e.preventDefault(); // Prevent default for controlled redirect
      // You can perform extra checks here (e.g. password match)

      // Redirect if all valid
    window.location.href = "main.html";
    }
    });
    </script>
</body>
</html>