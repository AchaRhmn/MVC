<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $data['title']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">

</head>
<body>
<div class="container ">
<nav class="navbar navbar-expand-lg ">
    
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL;?>">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= BASEURL;?>">Home</a>
        <a class="nav-link" href="<?= BASEURL;?>/User">User</a>
        <a class="nav-link" href="<?= BASEURL;?>/blog">Blog</a>
        <a class="nav-link" href="<?= BASEURL;?>/User/login">Login</a>
        </div>
      </div>
    </div>
 
</nav>
</div>