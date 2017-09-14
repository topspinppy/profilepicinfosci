<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Download Profile Picture | Support Kerala Blasters !</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet" async="async" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Kanit');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  </head>
  <body style="font-family: 'Kanit', sans-serif;">
    <div class="jumbotron">
        <div class="container">
          <center><img src="images/logo.png" class="img-responsive"></center>
          <br>
          <center><h1 class="animated slideInRight">ทำรูป Profile #TeamIS #TeamInfosci</h1></center>
        </div>
    </div>
    <center>
      <div id="content">
        <?php
        $url = htmlspecialchars($_GET["i"]);
        if(isset($_GET["i"]))
          echo "<a href='". $url ."' download='infosci_kmutnb'><img src='". $url ."' /></a>";
        else
          header("Redirect: index.php");
        ?>
        <p>
        คลิกที่รูปภาพ เพื่อดาวน์โหลด .<br/>หรือคลิกขวา (ถ้าในมือถือให้แตะค้างที่รูปภาพ และเลือก บันทึกรูปภาพ
        </p>
        <p>
          <a href="index.php"><button id="download">คลิกเพื่อกล้บไปทำรูปอื่น</button></a>
        </p>
      </div>
    </center>

  </body>
</html>
