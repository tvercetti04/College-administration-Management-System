<?php include "include/header.php";


if(!isset($_SESSION['user'])){
    $cams->redirect('login');
}

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="container-fluid preview">
               
                        <div class="card p-4 shadow border-0">
                        <?php
                    $id = $_SESSION['user'];
                    $preview = $cams->select("SELECT * FROM student_apply JOIN upload_docs ON student_apply.s_id = upload_docs.s_id WHERE s_email = '$id'");
                    foreach($preview as $yo): 
                        ?>
                            <div class="card-body">
                                <div class="row">
                                <div class="col-9">
                                 <p class="lead"><strong>Name :</strong> <?= $yo['s_f_name'];?> <?= $yo['s_l_name'];?></p>
                                 <p class="lead"><strong>Email :</strong> <?= $yo['s_email'];?></p>
                                 <p class="lead"><strong>Father's Name :</strong> <?= $yo['father_name'];?></p>
                                 <p class="lead"><strong>Mother's Name :</strong> <?= $yo['mother_name'];?></p>
                                 <p class="lead"><strong>Contact :</strong> <?= $yo['s_contact'];?></p>
                                 <p class="lead"><strong>Address :</strong> <?= $yo['s_address'];?></p>
                                 <p class="lead"><strong>Date of Birth :</strong> <?= $yo['s_dob'];?></p>
                                 <p class="lead"><strong>Matric Marks :</strong> <?= $yo['metric_marks'];?> / <?= $yo['metric_fullmarks'];?></p>
                                 <p class="lead"><strong>Intermediate Marks :</strong> <?= $yo['inter_marks'];?> / <?= $yo['inter_fullmarks'];?></p>
                                 <p class="lead"><strong>Course Applied :</strong> <?= $yo['s_course'];?></p>
                                 </div>

                                 <div class="col-3 photo">
                                   <img src="include/images/<?= $yo['pic'];?>" class="img-fluid" alt="">
                                   <img src="include/images/<?= $yo['sign'];?>" class="sign my-2" alt="">
                                 </div>
                                </div>
                            </div>   
                            <?php endforeach; ?> 
                        </div>
            </div>
        </div>
    </div>
</div>

<?php include "include/footer.php"; ?>