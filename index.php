<?php include "include/header.php"; ?>

<nuv class="navbar navbar-expand-lg navbar-light shadow second">
<ul class="navbar-nav mx-auto">
            <a href="apply.php" class="nav-link text-danger admission">Notice: CAMS Admission Open 2021</a>
    </ul>
    <?php 
        if(isset($_SESSION['user'])):
            $email = $_SESSION['user'];
            $count = $cams->countData("SELECT * FROM student_apply WHERE s_email = '$email'");
            ?>

            <?php if($count > 0): ?>
                <a href="preview.php" class="btn btn-dark me-3 apply">Form Preview</a>
            <?php else: ?>   
    
            <a href="apply.php" class="btn btn-dark border float-end me-3 apply">Apply Now</a>
            <?php endif; ?>
            <?php endif; ?>
</nuv>



<div id="carouselExampleIndicators" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="4000">
      <img src="include\images\collegehd.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="text-white">CAMS UNIVERSITY</h2>
        <p class="lead">A majestic top can only be sustained if there is a sound foundation.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src=" include\images\collegehd2.webp " class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="include\images\college campus.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="include\images\collegehd3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container my-4 about">
    <h2>CAMS Deemed University</h2>
    <hr size="4" class="mb-4">

    <div class="card border-0 shadow">
        <div class="card-body p-0">
        <div class="row">
            <div class="col-7 p-4 px-5">
                <h4>Vision</h4>
                <p class="lead">To be a premier academic institution, recognized internationally for its contribution to industry and society through excellence in teaching, learning, research, internationalization, entrepreneurship and leadership.</p>
            </div>
            <div class="col-5">
                <img src="include\images\campuscar3.jpg" alt="" class="img-fluid">
            </div>
        </div>
        </div>
    </div>

    <div class="card border-0 shadow mt-5 mission">
        <div class="card-body p-0">
        <div class="row">
            <div class="col-lg-7 p-4 px-5">
                <h4>Mission</h4>
                <p class="lead"><strong>></strong> To transform education through academic rigour, practical orientation and outcome based teaching.</p>
                <p class="lead"><strong>></strong> To develop and implement a relationship of cooperation between industry and academia.</p>
                <p class="lead"><strong>></strong> To undertake impactful research addressing local, national and global challenges.</p>
                <p class="lead"><strong>></strong> To prepare graduates to be lifelong learners with strong analytical and leadership skills</p>
               
            </div>
            <div class="col-lg-5">
                <img src="include\images\lpuhd.jpg" alt="" class="img-fluid">
            </div>
        </div>
        </div>
    </div>
</div>

<div class="container-fluid my-5">
    <h2>Admission Eligibility</h2>
    <hr size="4" class="mb-4"> 

    <p class="lead"><strong>Nationality - </strong>Citizens of India will be able to apply and appear for SRMJEEE 2021. Non-Resident Indian (NRI), PIO or OCI card holders can also apply and appear for SRMJEEE 2021. Further, there will also be an option to apply to the International student category, if candidates do not wish to appear for the entrance examination.</p>
 
    <p class="lead"><strong>Age Criteria - </strong>Citizens of India will be able to apply and appear for SRMJEEE 2021. Non-Resident Indian (NRI), PIO or OCI card holders can also apply and appear for SRMJEEE 2021. Further, there will also be an option to apply to the International student category, if candidates do not wish to appear for the entrance examination.</p>
    <p class="lead"><strong>Year of Passing 10+2 (or Equivalent Exam) - </strong>Citizens of India will be able to apply and appear for SRMJEEE 2021. Non-Resident Indian (NRI), PIO or OCI card holders can also apply and appear for SRMJEEE 2021. Further, there will also be an option to apply to the International student category, if candidates do not wish to appear for the entrance examination.</p>
</div>

<?php include "include/footer.php"; ?>