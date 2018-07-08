<!DOCTYPE html>
<html>
<head>
  <title>We-Conekt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ_ND4txUBunwk2ciUjc_l-F9CeICC_uI&callback=initMap">
    </script>
</head>
<style type="text/css">
  #foo{
    height: 300px;
  }
  #poo{
    height: 500px;
  }
  #din{
    height: 500px;
    width: 100%;

  }
  .card{
    box-shadow: 2px 5px 8px grey;
    padding-top: 15px;
    padding-bottom: 10px;
    background-color:lightgrey;
    align-items: center;
  }
  .btn-md,.btn-lg{
    background-color: maroon;
  }
  #cardimg{
    width: 100%;
    height: 250px;
    padding-top: 15px;
  }
  #galleryimg{
    width: 100%;
   padding-top: 15px;
    height: 200px;
  }
  label:after{
      content: "*";
      color: red;
  }
  .navbar{
    min-height: 150px;
  }
</style>

<body style="font-family:Helvetica; background-color:black; color:grey;">
<div class="container-fluid">
  <!-- this is navbar -->
<nav class="navbar row navbar-expand-sm navbar-dark">

  <div class="col-md-8"style="background-color:black;>
  <!--logo -->
  <a class="navbar-brand" href="<?php echo base_url(); ?>" style="color:red;"><img src="<?php echo base_url('images/logo.jpeg'); ?>" alt="We-Conekt Enterprises" style="max-height:80px; min-width: 00px;"></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#" style="color:white; padding:;  font-size:22px;">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" style="color:white; padding:5px; font-size:22px;">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" style="color:white; padding:5px; font-size:22px;">Contact us</a>
    </li>
  </ul>

</div>
<div class="col-md-4"style="background-color:red; font-style: italic; text-align: center;color:black; min-height: 150px; font-size:20px;">
    <span class="fa fa-phone"></span> 9538443628/68<br><span class="fa fa-envelope"></span> info@we-conekt.com
  </div>
</nav>
