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
            $query2 = $cams->select("SELECT * FROM student_apply WHERE user_id = '$user_id'");
            $apply_id = [];
            foreach($query2 as $q){
                $apply_id = $q['s_id'];
            }
            $query3 = $cams->countData("SELECT * FROM upload_docs WHERE s_id = '$apply_id'");
            if($query3 > 0){
                $cams->redirect('final_preview');
            }


?>

<div class="container mt-5">
    <div class="row">
    <div class="col-3"></div>
    <div class="col-9">
        <div class="card border-0 shadow px-4 py-2">
            <div class="card-body">
                <h2>Upload Documents</h2>
                
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for=""><strong>Upload Photo :</strong></label>
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for=""><strong>Upload Signature :</strong></label>
                        <input type="file" name="sign" class="form-control">
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" name="upload" value="Upload" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>

<?php 
    if(isset($_POST['upload'])){
            $photo = $_FILES['photo']['name'];
            $tmp_image1 = $_FILES['photo']['tmp_name'];

            $sign = $_FILES['sign']['name'];
            $tmp_image2 = $_FILES['sign']['tmp_name'];

            move_uploaded_file($tmp_image1,"include/images/$photo");
            move_uploaded_file($tmp_image2,"include/images/$sign");

            
        $data = [
            's_id' => $apply_id,
            'pic' => $photo,
            'sign' => $sign
        ];
        $query = $cams->insert('upload_docs', $data);
        $cams->redirect('final_preview');
    }
    ?>

<?php include "include/footer.php"; ?>