<?php
require_once 'includes/header.php';
?>

<div>
    <div class="hero">
        <div class ="form-box">
            <h1>Log in</h1>
            <p> No account? <a href="register.php">Register here!</a></p>

            <form action="includes/login-inc.php" method="post">
                <input type="text" class="input-field" name="username" placeholder="Username">
                <input type="password" class="input-field"name="password" placeholder="Password">
                <div class="button-box">
                    <div id="btn">
                        <button type="submit" name="submit">LOGIN</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>    
</div>
<?php
require_once 'includes/footer.php';
?>

