<?php session_start();?>

<html>
<head>
  <?php include 'includes/Links/mainLinks.php'?>
  <?php include 'includes/Links/indexLinks.php'?>
</head>
<body>

  <?php include 'includes/HTMLcontents/header.php'?>

  <div class = "container">
    <div class = "row">
      <?php
        if(isset($_SESSION['User'])){
          include 'includes/HTMLcontents/navigationAfterLogin.php';
        }else{
          include 'includes/HTMLcontents/navigationBeforeLogin.php';
        }
      ?>
    </div>

    <div class= "row">

      <div class = "col-md-8">
          <?php include "includes/getUserInfo.inc.php"; ?>
          <?php include "includes/HTMLcontents/showUserInfo.php"; ?>
          <br>
	  <?php include 'includes/HTMLcontents/footer.php'?>
	  </div>
      <?php  include 'includes/HTMLcontents/rightSideWidget.php'?>

    </div>
  </div>


</body>
</html>
