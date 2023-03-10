<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo $title ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
<style>
  a, .nav-link,.navbar-brand {
    color: white;
}
    </style>
</head>
<body>
  <div class="container" >
    <div class="row">
  <nav class="navbar navbar-expand-lg" style="background-color: rgb(65, 7, 109);" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Luke</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="http://localhost:81/Thanh_Trinh_tasks/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:81/Thanh_Trinh_tasks/inclass/ex1.php">Exercise 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:81/Thanh_Trinh_tasks/inclass/variable.php">Exercise 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:81/Thanh_Trinh_tasks/inclass/controlflow.php">Exercise 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:81/Thanh_Trinh_tasks/inclass/array.php">Exercise 5</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div> 
  <div class="row" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px;">
    <div class="col-sm-3" style="background-color: rgba(228, 235, 194, 0.353);">
      <h4>List of Tasks</h4>
      <div>
          <a class="sidebar-link" href="http://localhost:81/Thanh_Trinh_tasks/inclass/aboutus.php" style="background-color: rgb(65, 7, 109);"> About Me </a>
      </div>
      <div>
          <a class="sidebar-link" href="http://localhost:81/Thanh_Trinh_tasks/inclass/contactus.php" style="background-color: rgb(65, 7, 109);"> Contact Me </a>
      </div>
      <div>
          <a class="sidebar-link" href="http://localhost:81/Thanh_Trinh_tasks/inclass/sinput.php" style="background-color: rgb(65, 7, 109);"> Simple Input </a>
      </div>
      <div>
          <a class="sidebar-link" href="http://localhost:81/Thanh_Trinh_tasks/inclass/browser.php" style="background-color: rgb(65, 7, 109);"> Detect Browser </a>
      </div>
      <div>
          <a class="sidebar-link" href="http://localhost:81/Thanh_Trinh_tasks/inclass/array_exercise21.php" style="background-color: rgb(65, 7, 109);"> Array Ex21 </a>
      </div>
      <h4> Simple CRUD APP </h4>
      <div>
        <a class="sidebar-link" href="http://localhost:81/Thanh_Trinh_tasks/crud1/create.php" style="background-color: rgb(65, 7, 109);"> Crud app </a>
      </div>
      <div>
        <a class="sidebar-link" href="http://localhost:81/Thanh_Trinh_tasks/crud1/read.php" style="background-color: rgb(65, 7, 109);"> Read </a>
      </div>
      <div>
        <a class="sidebar-link" href="http://localhost:81/Thanh_Trinh_tasks/crud1/updatesingle.php" style="background-color: rgb(65, 7, 109);"> Update info </a>
      </div>
    </div>
    <div class="col-sm-9">