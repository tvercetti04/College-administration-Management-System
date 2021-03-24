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
<div class="container mt-5">
        <div class="card border-0 shadow">
            <div class="card-body">
            <form action="" method="get">
                <div class="input-group">
                    <input type="search" name="user_search" placeholder="Search for Course" class="form-control">
                    <button class="btn btn-dark" name="find"><i class="fa fa-search"></i></button>
                </div>
            </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>DOC</th>
                            <th>Action</th>
                        </tr>   
                    </thead>
                    <?php 
                        $search = $_GET['user_search'];
                        $record = $cams->select("SELECT * FROM accounts WHERE accounts.f_name LIKE '%$search%'");
                        foreach($record as $r): ?>

                        <tbody>
                            <tr>
                                <td><?= $r['id'];?></td>
                                <td><?= $r['f_name'];?> <?= $r['l_name'];?></td>
                                <td><?= $r['contact'];?></td>
                                <td><?= $r['email'];?></td>
                                <td><?= $r['doc'];?></td>
                                <td>
                                    <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<?php include "../include/footer.php"; ?>