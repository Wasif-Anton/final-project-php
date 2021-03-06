<!-- Header -->
<?php
$titel = 'Sign up';
require_once './includes/header.php'
?>

<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><span class="buy">Buy</span><span class="shop">Shop</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <!-- Login, Sign-up -->
            <form class="d-flex">
                <a type="button" href="./login.php" class="btn btn-outline-warning me-2">Log-in</a>
                <a type="button" href="./signup.php" class="btn btn-warning">Sign-up</a>
            </form>
        </div>
    </div>
</nav>

<br>
<h1 class="mb-1 text-center">Sign up to <span class="buy">Buy</span><span class="shop">Shop</span></h1>
<br><br>

<section class="container-fluid">
    <section class="row justify-content-center">
        <section class="col-10 col-sm-10 col-md-8 col-lg-6 col-xl-6">
            <!-- Form  -->
            <form class="signup-form-container" method="POST" action="includes/signup.inc.php">
                <!-- ID -->
                <div class="col-mb-3">
                    <label for="id" class="form-label"><strong>Identity</strong></label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="Your Identity">
                    <small id="idHelp" class="form-text text=muted"><strong>This will be your login ID</strong></small>
                </div>
                <br>
                <!-- Name -->
                <div class="col-mb-3">
                    <label for="name" class="form-label"><strong>Name</strong></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
                </div>
                <br>
                <!-- Email -->
                <div class="col-mb-3">
                    <label for="email" class="form-label"><strong>Email</strong></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
                <br>
                <!-- Password -->
                <div class="col-mb-3">
                    <label for="password" class="form-label"><strong>Password</strong></label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <span id="passwordHelpInline" class="form-text">
                        Must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </div>
                <br>
                <!-- confirm_password -->
                <div class="col-mb-3">
                    <label for="confirm_password" class="form-label"><strong>Confirm Password</strong></label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password">
                </div>
                <br>
                <!-- Phone  -->
                <div class="col-mb-3">
                    <label for="phone" class="form-label"><strong>Phone Number</strong></label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your phone number">
                </div>
                <br>
                <!-- Region  -->
                <div class="col-mb-3">
                    <label for="region" class="form-label"><strong>Region</strong></label>
                    <select id="region" class="form-select" name="region">
                        <option value="" disabled selected required>Select your region</option>
                        <option value="North">North</option>
                        <option value="Center">Center</option>
                        <option value="South">South</option>
                    </select>
                </div>
                <br><br><br><br><br>
                <!-- Sign Up  -->
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-outline-warning me-2 btn-block"><strong>Create Your Account</strong></button>
                    <p class="text-gray-soft small mb-2"><strong>Already have an account? </strong><a href="./login.php">Login</a></p>
                </div>
            </form>
        </section>
    </section>
</section>

<!-- Error Messages -->
<div>
    <?php
    // Error check, if there is an error what it the error
    if (isset($_GET["error"])) {
        // Empty input
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        // ID, invalid ID
        else if ($_GET["error"] == "invalidid") {
            echo "<p>Your ID is Invalid</p>";
        }
        // Name, invalid name
        else if ($_GET["error"] == "invalidname") {
            echo "<p>Your Name is Invalid</p>";
        }
        // Email, invalid email
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Your Email is Invalid</p>";
        }
        // Password
        else if ($_GET["error"] == "passwordnotmatch") {
            echo "<p>Your Password is not matched</p>";
        }
        // Phone
        else if ($_GET["error"] == "invalidphone") {
            echo "<p>Your Phone is in use</p>";
        }
        // User exists
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Your ID is in use</p>";
        }
        // Stmt failed
        else if ($_GET["error"] == "stmtfaild") {
            echo "<p>Something went wrong, try again!</p>";
        }
        // No Errors
        else if ($_GET["error"] == "none") {
            echo "<p>You Have Sign Up!</p>";
        }
    }
    ?>
</div>

<!-- Footer -->
<?php
require_once './includes/footer.php'
?>