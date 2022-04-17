<?php
include('./includes/header.php');
if (isset($_SESSION['auth'])) {

    if (!isset($_SESSION['message'])) {
        $_SESSION['message'] = "Already Logged In";
    }
    header("Location: index.php");
    exit(0);
}

?>
<link rel="stylesheet" href="assets/css/custom.css">

<center>
    <div class="test">
        <?php include('message.php'); ?>
    </div>
</center>

<div class="parent_container">
    <div class="container">
        <div class="header">
            <h2>Login</h2>
        </div>
        <form action="logincode.php" class="form" id="form" method="post">
            <div class="form-control">
                <label for="fullname">Username</label>
                <input type="text" placeholder="John Doe" id="username" name="username" autocomplete="off" />
                <i class="uis uis-check-circle"></i>
                <i class="uis uis-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" id="password" autocomplete="off" name="password" />
                <i class="uis uis-check-circle"></i>
                <i class="uis uis-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <div class="form-control">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>

            <button type="reset" class="secondary_btn">Cancel</button>
            <button type="submit" class="primary_btn" name="submit">Submit</button>
            <a href="#" id="forgot_pass">Forgot Password?</a>
        </form>
    </div>
</div>


<?php
include('./includes/footer.php');
?>