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
        <div class="col-lg-4">
        
        </div>
        <div class="col-lg-8">
            <div class="card px-4 py-2 shadow border-0">
                <div class="card-body">
                <h1 class="mx-3 mb-5">UPDATE DATA</h1>

                <?php 
                    $edit_id = $_GET['id'];
                    $calling = $cams->select("SELECT * FROM student_apply WHERE s_id='$edit_id'");
                    foreach($calling as $yo):
                ?>
                                 <p>Name : <?= $yo['s_f_name'];?> <?= $yo['s_l_name'];?></p>
                                 <p>Email : <?= $yo['s_email'];?></p>
                                 <p>Father's Name : <?= $yo['father_name'];?></p>
                                 <p>Mother's Name : <?= $yo['mother_name'];?></p>
                                 <p>Contact : <?= $yo['s_contact'];?></p>
                                 <p>Address : <?= $yo['s_address'];?></p>
                                 <p>Date of Birth : <?= $yo['s_dob'];?></p>
                                 <p>Matric Marks : <?= $yo['metric_marks'];?> / <?= $yo['metric_fullmarks'];?></p>
                                 <p>Intermediate Marks : <?= $yo['inter_marks'];?> / <?= $yo['inter_fullmarks'];?></p>
                                 <p>Course Applied : <?= $yo['s_course'];?></p>   
                   
                        <form action="" method="post">
                        <div class="mb-3">
                            <select name="form_status" class="form-control" id="" value="<?= $yo['form_status'];?>">
                                    <?php  
                                        if($yo['form_status']==0):
                                            
                                    ?>
                                    <option value="0" selected dislabled>Pending</option>
                                    <option value="1">Approved</option>
                                    <option value="2">Rejected</option>
                                    <?php elseif($yo['form_status']==1): ?>
                                        <option value="0" >Pending</option>
                                    <option value="1" selected dislabled>Approved</option>
                                    <option value="2">Rejected</option>
                                    <?php elseif($yo['form_status']==2): ?>
                                        <option value="0" >Pending</option>
                                    <option value="1" >Approved</option>
                                    <option value="2" selected dislabled>Rejected</option>
                                  
                                    <?php endif; ?>
                            </select>
                        </div>
                            <div class="d-grid gap-2">
                                <input type="submit" value="Update" name="edit_app" class="btn btn-success">
                            </div>
                        </form>
                   
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 

    if(isset($_POST['edit_app'])){
        $form_status = $_POST['form_status'];
        // $data = [
        //     'form_status' => $_POST['form_status']
        // ];
        

        $query = $cams->update('student_apply', "form_status = '$form_status'","s_id = '$edit_id'");
        $cams->redirect('s_app');
    }

?>


<?php include "../include/footer.php"; ?>