<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style.css">
  <title>Tracker</title>
</head><?php

  require_once("../App/Controller/check_session.php");
  require_once("../App/Controller/login_control.php");
  require_once("../App/Controller/register.php");
  require_once("../App/View/check_image.php");
 ?>
<body class="bg-light">
  
    <header id="header-id">
      <div
        class=""
        style="
          background: center/cover
            url('https://cdn.pixabay.com/photo/2016/07/29/19/19/railway-1555348_960_720.jpg');
        "
      >
        <div class="container-fluid p-5 text-center">
          <nav class="navbar navbar-expand-md navbar-light">
            <div
              class="
                navbar-collapse
                collapse
                w-100
                order-1 order-md-0
                dual-collapse2
              "
            >
            </div>
            <div class="mx-auto order-0">
              <button
                class="navbar-toggler bg-light"
                type="button"
                data-toggle="collapse"
                data-target=".dual-collapse2"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
              <ul class="navbar-nav ml-auto">
              <?php include("../App/View/header_display.php");?>
              <li class="nav-item"><?php require_once("../App/View/logout_message.php");?></li>
            </ul>
          </div>
        </nav>
        <h1 id="title" class="display-4">Tracker</h1>
      </div>
    </div>
    </header>

<main class="mx-5">


  <div class="container-fluid" id="main-container">
  <div class="container-fluid" id="breadcrumb">
  <nav class="" aria-label="breadcrumb">
    <ol class="breadcrumb bread-style align-text-bottom">
      <li class="breadcrumb-item bread-item">
        <a href="index.php" class="text-decoration-none text-dark"
          ><i class="fas fa-home"></i>Home</a>
      </li>
      <li class="breadcrumb-item bread-item active" aria-current="page">
        Board index
      </li>
    </ol>
  </nav>
      </div>
      <div class="row">
        <div class="col-md-9 col-sm col-lg-9">
          <div class="container pt-5 bg-light d-flex flex-wrap">
            <?php require("../App/View/board_display.php");?>
          </div>
        </div>
        <div class="col-md-3 col-lg-3 px-5">
          <?php include("../App/View/reduced_profile.php"); ?>
           <!-- Search Bar -->
         <form action="topics.php" method="GET" id="search-bar" class="form-inline flex-nowrap">
          <input name="search" class="form-control w-100" type="search"
          placeholder="Search" aria-label="Search">
          <button class="btn btn-
          info" type="submit"><i class="fas fa-search"></i>
        </button>
        <button class="btn btn-
          info" type="submit"><i class="fas fa-cog"></i>
        </button>
          </form> 
          <hr>
          <?php include("../App/View/form_display.php") ?>
          <div class="table-responsive mt-5">
            <table id="table-side" class="table">
              <thead class="thead">
                <tr>
                  <th scope="col" class="h3">Last posts</th>
                </tr>
              </thead>
              <tbody class="bg-light d-flex justify-content-center">
                <tr>
                  <?php require("../App/View/last_posts.php"); ?>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="table-responsive mt-5">
            <table id="table-side" class="table">
              <thead class="thead">
                <tr>
                  <th scope="col" class="h3">Last active user</th>
                </tr>
              </thead>
              <tbody class="bg-light">
                <tr class="d-flex justify-content-center flex-wrap">
                 <?php require("../App/View/last_active_display.php"); ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
  <div class="container-fluid" id="social-media">
        <ul class="d-flex justify-content-center py-5 flex-wrap">
            <li class="p-3 mr-4"><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
        <li class="p-3 mr-4"><a href="#"><i class="fab fa-facebook-f text-white"></i></a></li>
        <li class="p-3 mr-4"><a href="#"><i class="fab fa-apple text-white"></i></a></li>
        <li class="p-3 mr-4"><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
        <li class="p-3 mr-4"><a href="#"><i class="fab fa-youtube text-white"></i></a></li>
        <li class="p-3 mr-4"><a href="#"><i class="fab fa-github text-white"></i></a></li>
        <li class="p-3 mr-4"><a href="#"><i class="fab fa-whatsapp text-white"></i></a></li>
      </ul>
    </div>
    <div class="container-fluid bg-dark my-n3">
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3">
          <nav class="" aria-label="breadcrumb">
            <ol class="breadcrumb bread-foot bg-dark align-text-bottom justify-content-xs-center">
              <li class="breadcrumb-item bread-foot__item">
                <a href="#" class="text-decoration-none">Home</a>
              </li>
              <li class="breadcrumb-item bread-foot__item" aria-current="page">Board index</li>
            </ol>
          </nav>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-9">
        <ul class="list-bottom d-flex justify-content-end align-items-center mt-2 flex-wrap justify-content-xs-center ">
            <li class="mr-3"><a href="#" class="text-nowrap "><i class="p-2 fas fa-envelope"></i>Contact us</a></li>
            <li class="mr-3"><a href="#" class="text-nowrap "><i class="p-2 fas fa-shield-alt"></i>The team</a></li>
            <li class="mr-3"><a href="#" class="text-nowrap "><i class="p-2 fas fa-check"></i>Terms</a></li>
            <li class="mr-3"><a href="#" class="text-nowrap "><i class="p-2 fas fa-lock"></i>Privacy</a></li>
            <li class="mr-3"><a href="#" class="text-nowrap "><i class="p-2 fas fa-users"></i>Members</a></li>
            <li class="mr-3"><a href="#" class="text-nowrap "><i class="p-2 fas fa-trash-alt"></i>Delete cookies</a></li>
            <li class=""><a href="#" class="text-nowrap list-dark">All times are UTC</a></li>
          </ul>
          <a id="btn-back-to-top" class="btn btn-floating btn-lg" href="#header-id"></a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>