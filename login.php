<?php
session_start();

if(isset($_SESSION['auth'])){
    $_SESSION['message'] = 'You have already logged in!';
    header('Location: index.php');
    exit();
}

include('includes/header.php');
?>

<div class="container login-margin">
    <div class="row justify-content-center">
        <div class="row justify-content-center">
            <?php if (isset($_SESSION['message']) && $_SESSION['message'] != "") {
            ?>
                <div class="col-md-6 alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?= $_SESSION['message'] ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            <?php
                unset($_SESSION['message']);
            }
            ?>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Login Form
                </div>
                <div class="card-body">
                    <form action="./functions/authcode.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password">
                        </div>
                        <div class="row">
                            <div class="col-md-1"><button type="submit" name="login_btn" class="btn btn-primary">Login</button></div>
                            <div class="col-md-11 text-end my-auto">Doesn't have an account <a href="register.php">Click hear</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('./includes/footer.php');
?>