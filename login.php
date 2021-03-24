<?php include "include/header.php"; ?>

<nuv class="navbar navbar-expand-lg navbar-light shadow">
<ul class="navbar-nav mx-auto">
            <a href="apply.php" class="nav-link text-danger admission">Notice: CAMS Admission Open 2021</a>
    </ul>
</nuv>
<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card border-0 px-4 py-2 shadow">
                <div class="card-body">
                <h2 class="text-center">CAMS Login</h2>
                <hr class="mb-5">
                
                    <form action="" method="post">
                        <div class="mb-3">
                            <input type="text" name="email" placeholder="Registered Email or Contact Number" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <a href="signup.php" class="btn btn-primary w-100">Register</a>
                                    <a href="">Forgot password?</a>
                                </div>
                                <div class="col-6">
                                    <input type="submit" name="login" value="Login" class="btn btn-danger w-100">
                                </div>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>


<?php

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check = $cams->countData("SELECT * FROM accounts WHERE email='$email' AND password='$password'");

        if($check > 0){
            $_SESSION['user'] = $email;
            $cams->redirect('index');
        }
        else{
            echo "Login Failed";
        }
    }

?>

<?php include "include/footer.php"; ?>