<?php
include 'header.php';

?>

<meta charset="UTF-8">
  <meta name="description" content="Download Your Favourite Movie with Movie Web with Dual Audio and High Defination with One click and 'No pop-up Ads' ">
  <meta name="keywords" content="movie,MovieWeb,movies,hd movies,download movies,hindi movies,latest movies,tamil movies,hindi dubbed movies,dual audio movies">
  <meta name="author" content="Amit yadaav">
<!--slider -->
<div class="container" >
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Marvals.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="EndGame.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Salaar.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<p><br>
<button name="submit" class="btn btn-" style="float: left;margin-top: -20px; margin-left: 16px;background-color:#726297;color:#fff">Featured</button>
<button name="submit" class="btn btn-" style="float: right;margin-top: -20px; margin-right: 2px;background-color:#726297;color:#fff">View More</button>
</p>



<div class="content">
    <div class="row">
    <meta name="description" content="Dpwnload All Movie From MovieWeb with direct Link." > 
    <title>MovieWeb</title>
    <?php 

    $query = "SELECT * FROM movie";
    $run = mysqli_query($con,$query);
    if ($run) {

        while($row = mysqli_fetch_assoc($run)){
            ?>

<div class="col">
    <div class="card" style="width: 16rem;text-align: center;">
  <img class="card-img-top" height="300px" width="100px" src="thumb/<?php echo$row['img']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo$row['mv_name']; ?></h5>
    <p class="card-text"><?php echo$row['director']."<br>".$row['date']; ?></p>
    <?php 

    $id = $row['id'];
    $cal = (($id*123456789*54321)/956783);
    $url = "download.php?id=".urlencode(base64_encode($cal));
     ?>
    <a href="<?php echo$url; ?>" class="btn btn-" style="background-color:#726297; color: #fff;">Download</a>
  </div>
</div>
</div>

            <?php

        }

    }

     ?>
</div>
</div>

<?php  include 'ft.php'; ?>