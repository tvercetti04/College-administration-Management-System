<?php include "include/header.php"; 

if(!isset($_SESSION['user'])){
    $cams->redirect('login');
}

$sess = $_SESSION['user'];
$query = $cams->select("SELECT * FROM accounts WHERE email = '$sess'");
$user_id = [];
foreach($query as $q){
    $user_id = $q['id'];
}
$query3 = $cams->countData("SELECT * FROM student_apply WHERE user_id = '$user_id'");
if($query3 > 0){
    $cams->redirect('final_preview');
}


?>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-lg-4">
        
        </div>
        <div class="col-lg-8">
            <div class="card px-4 py-2 shadow border-0">
                <div class="card-body">
                <h1 class="mx-3 mb-5">Apply for Admission</h1>
                    <form action="apply.php" method="post">
                        <div class="mb-3">
                            <div class="row">
                            <?php 
                                if(isset($_SESSION['user'])):
                                    $id = $_SESSION['user'];
                                    $value = $cams->select("SELECT * FROM accounts where email = '$id'");

                                    foreach($value as $v): 
                                    ?>
                                <div class="col-6">
                                    <input type="text" name="f_name" value="<?= $v['f_name'];?>" placeholder="First Name" class="form-control">
                                </div>
                                <div class="col-6">
                                    <input type="text" name="l_name" value="<?= $v['l_name'];?>" placeholder="Last Name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="email" value="<?= $v['email'];?>" placeholder="Email Address" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <input type="text" name="contact" value="<?= $v['contact'];?>" placeholder="Contact Number" class="form-control">
                        </div>
                        <?php  endforeach; endif; ?>
                        <div class="mb-3">
                            <input type="text" name="father_name" placeholder="Father's Name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="mother_name" placeholder="Mother's Name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="address" placeholder="Enter Your Permanent Address" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="date" name="dob" class="form-control">
                        </div>
                        <div class="mb-3">
                           <div class="row">
                           <label for="">Marks Obtained in Metric :</label>
                                <div class="col-6">
                                    <input type="text" name="metric_marks" placeholder="Marks Obtained" class="form-control">
                                </div>
                                <div class="col-6">
                                    <input type="text" name="metric_fullmarks" placeholder="Total Marks" class="form-control">
                                </div>
                           </div>
                        </div>
                        <div class="mb-3">
                           <div class="row">
                           <label for="">Marks Obtained in Intermediate :</label>
                                <div class="col-6">
                                    <input type="text" name="inter_marks" placeholder="Marks Obtained" class="form-control">
                                </div>
                                <div class="col-6">
                                    <input type="text" name="inter_fullmarks" placeholder="Total Marks" class="form-control">
                                </div>
                           </div>
                        </div>
                        <div class="mb-3">
                           
                            <select id="" name="course" class="form-control">
                           

                                <option value=""selected hidden disabled>Select Course</option>
                            <?php
                                $course = $cams->select("SELECT * FROM courses");
                                foreach($course as $c):
                            ?>
                                    <option value="<?= $c['c_id'];?>"><?= $c['c_name'];?></option>
                                    <?php endforeach; ?>
                            </select>
                           
                        </div>
                        <div class="d-grid gap-2">
                            <input type="submit" value="Apply" name="apply" class="btn btn-success">
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<?php 

    if(isset($_POST['apply'])){

        $sess = $_SESSION['user'];
            $query = $cams->select("SELECT * FROM accounts WHERE email = '$sess'");
            $user_id = [];
            foreach($query as $q){
                $user_id = $q['id'];
            }

        $data = [
            's_f_name' => $_POST['f_name'],
            's_l_name' => $_POST['l_name'],
            's_email' => $_POST['email'],
            's_contact' => $_POST['contact'],
            'father_name' => $_POST['father_name'],
            'mother_name' => $_POST['mother_name'],
            's_address' => $_POST['address'],
            's_dob' => $_POST['dob'],
            'metric_marks' => $_POST['metric_marks'],
            'metric_fullmarks' => $_POST['metric_fullmarks'],
            'inter_marks' => $_POST['inter_marks'],
            'inter_fullmarks' => $_POST['inter_fullmarks'],
            's_course' => $_POST['course'],
            'form_status' => 0,
            'user_id' => $user_id
        ];

        $query = $cams->insert('student_apply', $data);
        $cams->redirect('preview');
    }

?>

<?php include "include/footer.php"; ?>