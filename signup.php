<?php include "include/header.php"; ?>

<nuv class="navbar navbar-expand-lg navbar-light shadow">
<ul class="navbar-nav mx-auto">
            <a href="apply.php" class="nav-link text-danger admission">Notice: CAMS Admission Open 2021</a>
    </ul>
</nuv>

<div class="container mt-5">
    <div class="row">
    <div class="col-3"></div>
        <div class="col-6">
            <div class="card shadow px-4 py-2 border-0">
                <div class="card-body">
                <h2 class="text-center">CAMS User Signup</h2>
                <hr class="mb-5">
                    <form action="" method="post">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" placeholder="First Name" name="f_name" class="form-control" required>
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Last Name" name="l_name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Contact Number" name="contact" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Email Address" name="email" class="form-control" required>
                            
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" placeholder="Password" name="password" class="form-control" required>
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Repeat Password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-grid gap-2">
                                        <input type="submit" value="Register" name="register" class="btn btn-primary">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid gap-2">
                                        <a href="login.php" class="btn btn-danger">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="row p-0">
                                <div class="col-3">
                                    <input type="checkbox" class="form-check-input" checked required>
                                    <label for="">I Agree</label>
                                </div>
                                <div class="col-9">
                                    <p class="lead check p-0">By clicking Register, you agree in the Terms & Conditions set out by this site, including our Cookie use.</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 

    if(isset($_POST['register'])){

        $data = [
            'f_name' => $_POST['f_name'],
            'l_name' => $_POST['l_name'],
            'contact' => $_POST['contact'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        
        ];
        $query = $cams->insert('accounts', $data);
        $cams->redirect('login');

        if($query){
            redirect('login');
        }

        
}

?>

<?php include "include/footer.php"; ?>