<?php include 'php/header.php' ?>

<body>

    <?php include 'php/navbar.inc.php' ?>
    <!-- Main content of the page -->

    <main class='main-section'>
        <div class='content'>

            <!-- The header of the page -->
            <h1 class='heading'>Sign Up</h1>

            <!-- The form that will take the registration information about the user -->
            <form class="wrapper animate__animated animate__fadeIn" onsubmit="return validatereg(this)" method="post" action="php/registration.php">

                <div class="form">

                    <!-- The tittle for the form -->
                    <div class="title animate__animated animate__fadeIn animate__delay-1s">
                        Registration
                    </div>

                    <!-- The first name of the user -->
                    <div class="inputfield animate__animated animate__fadeIn animate__delay-2s">
                        <label>First Name:</label>
                        <!-- Text box for first name -->
                        <input type="text" class="input" pattern="^[a-zA-Z\s]*$" name="firstname" placeholder='First name here'>
                    </div>

                    <!-- The last name of the user -->
                    <div class="inputfield animate__animated animate__fadeIn animate__delay-2s">
                        <label>Last Name:</label>
                        <!-- Text box for last name -->
                        <input type="text" class="input" pattern="^[a-zA-Z\s]*$" name="lastname" placeholder='Last name here'>
                    </div>

                    <!-- **REQUIRED** The username of the user **REQUIRED** -->
                    <div class="inputfield animate__animated animate__fadeIn animate__delay-3s">
                        <label for="uname">Username *:</label>
                        <!-- Text box for username -->
                        <input type="text" id="uname" pattern="^[a-zA-Z\s0-9]*$" name="username" class="input" placeholder='Username here (letters, space, or numbers)' required>
                    </div>

                    <!-- **REQUIRED** The password of the user **REQUIRED** -->
                    <div class="inputfield animate__animated animate__fadeIn animate__delay-3s">
                        <label for="pass">Password *:</label>
                        <!-- Text box for password -->
                        <input type="password" id="pass" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}" class="input" placeholder='Password here (at least 1 lowercase, uppercase, number)' required>
                    </div>

                    <!-- **REQUIRED** The Email of the user **REQUIRED** -->
                    <div class="inputfield animate__animated animate__fadeIn animate__delay-4s">
                        <label for="email">Email *:</label>
                        <!-- Text box for email -->
                        <input type="email" id="email" pattern="^[^@]+@[^@]+\.[a-zA-Z]{2,}$" name="email" class="input" placeholder='Email here' required>
                    </div>

                    <!-- The terms and conditions checkbox -->
                    <div class="inputfield terms animate__animated animate__fadeIn animate__delay-4s">
                        <label class="check">
                            <input type="checkbox" id="checkbox" name="terms">
                            <span class="checkmark"></span>
                        </label>
                        <label style="width: 70%;" for="checkbox">Agreed to terms and conditions *</label>
                    </div>

                    <div class="inputfield animate__animated animate__fadeIn animate__delay-5s">
                        <label>* are the required items</label>
                    </div>

                    <!-- The submit button -->
                    <div class="inputfield animate__animated animate__fadeIn animate__delay-5s">
                        <input type="submit" value="Register" class="btn">
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>


<!-- Footer of the page -->
<?php include 'php/footer.inc.php' ?>

<!-- End of registration page -->

</html>