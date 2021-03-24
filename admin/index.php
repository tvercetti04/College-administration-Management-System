<?php include "../include/config.php";

if(!isset($_SESSION['admin'])){
    $cams->redirect('admin_login');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMS-Admin Panel</title>
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
    
<div class="container-fluid mt-5 adminpanel">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
            <div class="container-fluid p-0 m-0">
                <div class="row">
                <div class="col-lg-4">
            <div class="card shadow p-4 my-2">
                <div class="row">
                    <div class="col-7 mt-2"><h5>Listed Course</h5></div>
                    <div class="col-5">
                        <img src="../include\images\profile back.png" class="img-fluid" alt="" style="height: 50px; width: auto; object-fit:cover;">
                    </div>
                </div>
                <a href="course.php" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow p-4 my-2">
                <div class="row">
                    <div class="col-7 mt-2"><h5>Registered Users</h5></div>
                    <div class="col-5">
                        <img src="../include\images\profile back.png" class="img-fluid" alt="" style="height: 50px; width: auto; object-fit:cover;">
                    </div>
                </div>
                <a href="user_record.php" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow p-4 my-2">
                <h5>Student Applications</h5>
                <a href="s_app.php" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow p-4 my-2">
                <h5>Pending Applications</h5>
                <a href="pending.php" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow p-4 my-2">
                <h5>Selected Applications</h5>
                <a href="selected.php" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow p-4 my-2">
                <h5>Rejected Applications</h5>
                <a href="rejected.php" class="stretched-link"></a>
            </div>
        </div>
        
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>