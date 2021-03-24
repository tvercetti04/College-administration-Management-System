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
               
                        <div class="card">
                        <?php
                    $id = $_SESSION['user'];
                    $preview = $cams->select("SELECT * FROM student_apply WHERE s_email = '$id'");
                    foreach($preview as $yo): 
                        ?>
                            <div class="card-body">
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
                            </div>   
                            <?php endforeach; ?> 
                        </div>
                        <a href="" disabled class="btn btn-info">
                        <?php 
                                    if($yo['form_status'] == 0):
                                        echo "Pending";

                                        elseif($yo['form_status'] == 1):
                                            echo "Approved";
                                        else:
                                            echo "Rejected";
                                        endif;
                                ?>
                        </a>
                        <?php 
                            if($yo['form_status']==1):

                        ?>
                        <a href="upload_docs.php" class="btn btn-success btn-lg">
                                Upload Documents
                        </a>
                        <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include "include/footer.php"; ?>