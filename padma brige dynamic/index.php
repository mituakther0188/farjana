<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padma </title>
    <?php wp_head();?>
</head>
<body>
    <!-- header part start -->
    <header class="container-fluid slider">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <?php
      $qry = new Wp_Query([
        'post_type'=>'post',
        'category_name'=>'slider'
      ]);
      ?>
  <div class="carousel-inner">
    <?php
    $x=0;
     while(have_posts()){the_post();
    $x++;
    ?>

    <div class="carousel-item <?= ($x==1)? 'active' : '' ?>">



      <?php the_post_thumbnail();?>
    </div>

        <?php }?>

    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </header>
<!-- header part end -->
<!-- logo part start -->
<section class="container-fluid logo">
    <div class="row">
        <div class="col-lg-6 logo_left">
        <?php the_custom_logo();?>

        </div>
        <div class="col-lg-6 logo_right text-end">
            <?php dynamic_sidebar('logo');?>
        </div>
    </div>
</section>
<!-- logo part end -->
<!-- menu part start -->
<section class="container menu">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
            wp_nav_menu([
              'theme_location'       => 'TM',
              'menu_class'           => 'navbar_nav top_menu',
            ]);
            ?>
      <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
     </li>
      </ul> -->
     
    </div>
  </div>
</nav>
</section>


<!-- menu part end -->
<!-- hero part start -->
<section class="hero container mt-5">
  <div class="row hero_top">
    <?php dynamic_sidebar('herotop');?>
  </div>
  <div class="row hero_bottom mt-5">
    <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
  <?php dynamic_sidebar('heroimg');?>
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
<?php dynamic_sidebar('herotitle');?>
    <!-- <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
    </div>
    <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
  <?php dynamic_sidebar('heroimg2');?>
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
<?php dynamic_sidebar('herotitle2');?>
    <!-- <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
    </div>
    <div class="col-lg-4">
    <div class="card" style="width: 18rem;">
  <?php dynamic_sidebar('heroimg3');?>
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
<?php dynamic_sidebar('herotitle3');?>
    <!-- <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
    </div>
 
  </div>
</section>
<!-- hero part end -->
<!-- photo part start -->
<section class="container photo text-center mt-5">
  <div class="row">
    <div class="col-sm-5">
      <?php dynamic_sidebar('lineleft');?>
    </div>
    <div class="col-sm-2">
       <?php dynamic_sidebar('phototitle');?>
    </div>
    <div class="col-sm-5">
       <?php dynamic_sidebar('lineright');?>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-sm-3">
    <div class="card" style="width: 16rem;">
  <?php dynamic_sidebar('photocard1');?>
  </div>
    </div>
    <div class="col-sm-3">
    <div class="card" style="width: 16rem;">
  <?php dynamic_sidebar('photocard2');?>
  </div>
    </div>
    <div class="col-sm-3">
    <div class="card" style="width: 16rem;">
  <?php dynamic_sidebar('photocard3');?>
  </div>
    </div>
    <div class="col-sm-3">
    <div class="card" style="width: 16rem;">
  <?php dynamic_sidebar('photocard4');?>
  </div>
    </div>
  </div>
</section>
<!-- photo part end -->
<!-- newes part start -->
<section class="container news ">
<div class="row text-center">
    <div class="col-sm-5">
      <?php dynamic_sidebar('lineleft');?>
    </div>
    <div class="col-sm-2">
       <?php dynamic_sidebar('newstitle');?>
    </div>
    <div class="col-sm-5">
       <?php dynamic_sidebar('lineright');?>
    </div>
  </div>
  <div class="row">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <?php
      $qry = new Wp_Query([
        'post_type'=>'post',
        'category_name'=>'slider'
      ]);
      ?>
  <div class="carousel-inner">
    <?php
    $x=0;
     while(have_posts()){the_post();
    $x++;
    ?>

    <div class="carousel-item <?= ($x==1)? 'active' : '' ?>">



      <?php the_title();?>
    </div>

        <?php }?>

    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
</section>
<!-- newes part end-->
<!-- fotar part start -->
<footer class="container-fluid footer text-center ">
  <div class="container">
  <div class="row">
    <div class="col-sm-6">
      <?php dynamic_sidebar('footerleft');?>
    </div>
    <div class="col-sm-6">
    <?php dynamic_sidebar('footerright');?>
    </div>
  </div>
  <div class="row BG">
    <div class="col-sm-6">
      <?php dynamic_sidebar('footerbottomleft');?>
    </div>
    <div class="col-sm-6">
      <?php dynamic_sidebar('footerbottomright');?>
    </div>
  </div>
  </div>
</footer>
<!-- fotar part end -->


<?php wp_footer();?>
</body>
</html>