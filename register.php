<?php
include('./includes/header.php');
if (isset($_SESSION['auth'])) {
    $_SESSION['message'] = "Already Logged In";
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
            <h2>Create Account</h2>
        </div>
        <form action="registercode.php" method="POST" class="form" id="form">
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" placeholder="John Doe" id="username" name="username" autocomplete="off" />
                <i class="uis uis-check-circle"></i>
                <i class="uis uis-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" placeholder="johndoe@mail.com" id="email" name="email" autocomplete="off" />
                <i class="uis uis-check-circle"></i>
                <i class="uis uis-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" id="password" name="password" autocomplete="off" />
                <i class="uis uis-check-circle"></i>
                <i class="uis uis-exclamation-circle"></i>
                <small>Error Message</small>
            </div>

            <div class="form-control">
                <label for="password2">Check Password</label>
                <input type="password" placeholder="Check Password" id="password2" name="password2" autocomplete="off" />
                <i class="uis uis-check-circle"></i>
                <i class="uis uis-exclamation-circle"></i>
                <small>Error Message</small>
            </div>
            <button type="reset" class="secondary_btn">Cancel</button>
            <button type="submit" name="submit" class="primary_btn">Submit</button>
        </form>
    </div>

</div>

<?php
include('./includes/footer.php');
?>