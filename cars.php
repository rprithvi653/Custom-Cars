<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Cars</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php include './partials/connect.php';?>
    <?php include './partials/header.php';?>

    <!-- php code -->
    <?php
        $id = $_GET['car_id'];
        $sql = "SELECT * FROM `carinfo` WHERE car_id=$id ";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $car_image = $row['image'];
            $car_desc = $row['car_desc'];
            $mod_name = $row['model_name'];
        }

    ?>

    <!-- jumbotron -->
    <div class="container-fluid">
        <div class="jumbotron bg-secondary rounded jumbo">
            <div class="container">
                <h1 class="display-4"><?php echo $mod_name ;?></h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <button class="btn btn-dark"><a class="text-light" href="#" role="button">
                    Continue Reading
                </a></button>
                </p>
            </div>
            
        </div>
    </div>

    <div class="container-fluid slider">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/black2.jpg" class="d-block w-100" alt="Charger 1970">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="image/red_mustang.jpg" class="d-block w-100" alt="Mustang 1970">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="image/red.jpg" class="d-block w-100" alt="Toyota Corolla">
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

    <div class="container">
    <div class="jumbotron jumbotron-fluid bg-secondary rounded jumbo">
            <div class="container">
                <h1 class="display-4 text-center">Enjoy Custom Cars !!!</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deserunt tempora eligendi delectus, quo eum? Eveniet cum, natus delectus velit rerum magnam fugit quo cumque porro molestiae odit maiores esse nulla itaque nobis vel consectetur? Reiciendis accusantium voluptatem dolore quam similique consequatur expedita, neque, nulla libero atque, incidunt voluptas sed?</p>
                <button class="btn btn-dark"><a class="text-light" href="#" role="button">
                    Continue Reading
                </a></button>
                </p>
            </div>
            
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="text-center display-4 mb-4">
            Thank You For Reading 🏎️🏎️🏎️
        </h2>
    </div>

    <?php include './partials/footer.php';?>
    
</body>
</html>