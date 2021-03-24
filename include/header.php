<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMS</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

<style>
nav{
    background-color: cadetblue;
}
nav .navbar-brand{
    font-family: fantasy;
    padding: 0;
    margin-top: 10px;
}
nav .navbar-brand:hover{
    text-transform: 1.25;
}
nav a{
    font-weight: bold;
    padding: px;
}
nav ul li:hover{
    
}
nav ul li a:hover{
    font-size: 17px;
}
.mt-3 .col-9 p{
    font-size: 15px;
}
.second .apply:hover{
    background-color: cadetblue;
}
.container .col-8 .preview{
    background-image: url("include\images\form.jpg")
}
@-webkit-keyframes blinker{
  from { opacity: 1.0; }
  to { opacity: 0.0; }
}
.about .card{
    height: 250px;
}
.about .mission{
    height: 385px;
}

.about .mission .img-fluid{
    height: 385px;
    width: 100%;
   
    object-fit: cover;
}
.about .card img{
    height: 250px;
    width: 100%;
    object-fit: cover;
}
.card .photo .img-fluid{
    height: 100px;
    width: 120px;
}
.card .photo .sign{
    height: 40px;
    width: 120px;
    
}

.admission{
  -webkit-animation-name: blinker;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: cubic-bezier(.5, 0, 1, 1);
  -webkit-animation-duration: 1.7s;
  font-weight: bold;
  font-size: 20px;
  
}
.carousel-inner img{
    height: 450px;
}
</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow">
    <div class="container py-0">
        <a href="index.php" class="navbar-brand"><h3>CAMS</h3></a>
        <ul class="navbar-nav ms-auto py-0">
            <li class="nav-item"><a href="" class="nav-link">About</a></li>
            <li class="nav-item mx-2"><a href="courses.php" class="nav-link">Courses</a></li>
            <li class="nav-item"><a href="apply.php" class="nav-link">Admission</a></li>
            <li class="nav-item mx-2"><a href="" class="nav-link">Campus</a></li>
            <li class="nav-item"><a href="" class="nav-link">Research</a></li>
            <?php 
            if(isset($_SESSION['user'])): ?>
            <li class="nav-item dropdown ms-5">
            <a href="" class="dropdown nav-link"  role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                user_name
                
  
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="preview.php">Applied Form</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>

             </ul>
            </li>
            <?php else: ?>
            <li class="nav-item ms-5"><a href="login.php" class="nav-link">login</a></li>
            <li class="nav-item"><a href="signup.php" class="nav-link">Signup</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

    
