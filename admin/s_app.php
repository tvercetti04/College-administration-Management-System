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
                    <input type="search" name="app_search" placeholder="Search for Course" class="form-control">
                    <button class="btn btn-dark" name="find"><i class="fa fa-search"></i></button>
                </div>
            </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>DOB</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Applied Course</th>
                            <th>Metric Marks</th>
                            <th>Inter Marks</th>
                            <th>DOA</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>   
                    </thead>
                    <?php 
                    if(isset($_GET['app_search'])):
                        $search = $_GET['app_search'];
                        $app = $cams->select("SELECT * FROM student_apply WHERE student_apply.s_f_name LIKE '%$search%'");
                    else: 
                        $app = $cams->select("SELECT * FROM student_apply");
                    endif;
                        foreach($app as $r): ?>

                        <tbody>
                            <tr>
                                <td><?= $r['s_id'];?></td>
                                <td><?= $r['s_f_name'];?> <?= $r['s_l_name'];?></td>
                                <td><?= $r['s_dob'];?></td>
                                <td><?= $r['s_contact'];?></td>
                                <td><?= $r['s_email'];?></td>
                                <td><?= $r['s_course'];?></td>
                                <td>
                                    <?php  
                                      echo  $total =  ($r['metric_marks'] / $r['metric_fullmarks']) * 100;

                                    ?>
                                </td>
                                <td>
                                <?php  
                                      echo  $total =  ($r['inter_marks'] / $r['inter_fullmarks']) * 100;

                                    ?>
                                </td>
                                <td><?= $r['date_of_apply'];?></td>
                                <td> <?php 
                                    if($r['form_status'] == 0):
                                        echo "Pending";

                                        elseif($r['form_status'] == 1):
                                            echo "Approved";
                                        else:
                                            echo "Rejected";
                                        endif;
                                ?>
                                </td>
                                <td>
                                    <a href="update_app.php?id=<?= $r['s_id']; ?>" class="btn btn-info">EDIT</a>
                                    <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach;  ?>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
<?php include "../include/footer.php"; ?>