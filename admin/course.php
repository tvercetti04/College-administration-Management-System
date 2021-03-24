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
    <title>Document</title>
          <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

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
    
<div class="container-fluid mt-5">
        <div class="row">
            <div class="col-3">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="">Course Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Course Description</label>
                            <textarea name="desc" id="" cols="30" rows="5" class="form-control"></textarea>        
                         </div>
                   
                    <div class="mb-3">
                        <label for="">Course Duration</label>
                        <input type="text" name="duration" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Total Fee</label>
                        <input type="number" name="fee" class="form-control">
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" name="add_course" class="btn btn-success">
                    </div>
                </form>
            </div>
            <div class="col-9">
            <form action="" method="get">
                <div class="input-group">
                    <input type="search" name="c_search" placeholder="Search for Course" class="form-control">
                    <button class="btn btn-dark" name="find"><i class="fa fa-search"></i></button>
                </div>
            </form>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course</th>
                        <th>Description</th>
                        <th>Duration</th>
                        <th>Fee Structure</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <?php
                        $c_search = $_GET['c_search'];
                        $course = $cams->select("SELECT * FROM courses WHERE courses.c_name LIKE '%$c_search%'");
                        foreach($course as $c):
                    ?>
                       <tbody>
                       <tr>
                            <td><?= $c['c_id'];?></td>
                            <td><?= $c['c_name'];?></td>
                            <td><?= $c['c_desc'];?></td>
                            <td><?= $c['c_duration'];?></td>
                            <td><?= $c['c_fee'];?></td>
                            <td>
                                <a href="" class="btn btn-info">Edit</a>
                                <a href="" class="btn btn-danger">X</a>
                            </td>
                        </tr>
                       </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <?php 

        if(isset($_POST['add_course'])){
            $data = [
                'c_name' => $_POST['name'],
                'c_desc' => $_POST['desc'],
                'c_duration' => $_POST['duration'],
                'c_fee' => $_POST['fee']
            ];

            $query = $cams->insert('courses', $data);
        }

    ?>

<?php include "../include/footer.php"; ?>