<?php
require_once 'includes/header.php';
?>

<div>
    <div class="hero">
        <div class ="form-box">
            <h1>Register</h1>
            <p> Already have an account? <a href="login.php">Login!</a></p>

            <form class = "input-group-signup" action="includes/register-inc.php"  method="post">
                <input type="text" class="input-field" name="username" placeholder="Username">
                <input type="password" class="input-field" name="password" placeholder="Password">
                <input type="password" class="input-field" name="confirmPassword" placeholder="Confirm password">
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>

