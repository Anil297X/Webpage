<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Heading -->
    <title>Website</title>
    <!-- Normal CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid">
        <?php 
        $header_path = 'partials/header.php';
        if (file_exists($header_path)) {
            include $header_path;
        } else {
            echo "<p>Header not found!</p>";
        }
        ?>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/img11.jpg" class="d-block w-100" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/img10.jpg" class="d-block w-100" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/img3.jpg" class="d-block w-100" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    <!-- Cards -->
     <div class="container">
      <h1 class="text-center featureTitle mb-5">Featured Stories</h1>
      <div class="row">
        <div class="col-md-4 col-sm-6 mb-5">
          <div class="card" style="width: 18rem;">
            <img src="images/img10.jpg" class="card-img-top" alt="Card Image Cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Continue Reading</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-5">
        <div class="card" style="width: 18rem;">
          <img src="images/img10.jpg" class="card-img-top" alt="Card Image Cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Continue Reading</a>
          </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-5">
        <div class="card" style="width: 18rem;">
          <img src="images/img10.jpg" class="card-img-top" alt="Card Image Cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Continue Reading</a>
          </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-5">
        <div class="card" style="width: 18rem;">
          <img src="images/img10.jpg" class="card-img-top" alt="Card Image Cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Continue Reading</a>
          </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-5">
        <div class="card" style="width: 18rem;">
          <img src="images/img10.jpg" class="card-img-top" alt="Card Image Cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Continue Reading</a>
          </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-5">
        <div class="card" style="width: 18rem;">
          <img src="images/img10.jpg" class="card-img-top" alt="Card Image Cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Continue Reading</a>
          </div>
        </div>
        </div>
      </div>
     </div> 





    <?php
    $footer_path = 'partials/footer.php';
    if (file_exists($footer_path)) {
        include $footer_path;
    } else {
        echo "<p>Footer not found!</p>";
    }
    ?>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cNcLpRdNT2MpAv8VSL8aUEOLoZMYq2ncYrj/mW6aF1lCL1uqIAE4d6Ue6Mo8E9jJ" crossorigin="anonymous"></script>
</body>
</html>