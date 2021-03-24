<?php include "../include/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
          <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<style>
.adminpanel{
    height: 75vh;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
    <a href="" class="navbar-brand">CAMS - Admin Panel</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="admin_logout.php" class="btn btn-outline-light">Logout</a></li>
        </ul>
    </div>
    </nav>
<div class="container mt-5 adminpanel">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                    <label for="">Email :</label>
                        <input type="text" name="email" placeholder="Enter Email" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label for="">Password :</label>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control">
                    </div>
                    <div class="d-grid">
                        <input type="submit" name="admin_login" value="Login" class="btn btn-danger">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    if(isset($_POST['admin_login'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $check = $cams->countData("SELECT * FROM admin_account WHERE a_email = '$email' AND a_password='$password'");

        if($check > 0){
            $_SESSION['admin'] = $email;
            $cams->redirect('index');
        }
        else{
            echo "failed";
        }
    }

?>

<?php include "../include/footer.php"; ?>