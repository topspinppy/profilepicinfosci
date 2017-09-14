<!DOCTYPE html>
<html>
  <head>
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
    <link href="css/croppie.css" rel="stylesheet" async="async" />
    <link href="css/style.css" rel="stylesheet" async="async" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="js/croppie.min.js" async="async"></script>
    <script src="js/app.js" async="async"></script>
    <script src="js/fb.js" async="async"></script>
    <style>
    .content
    {
       width:2000px;
    }
    </style>
  </head>
  <body style="font-family: 'Kanit', sans-serif;">
    <div class="jumbotron">
        <div class="container">
          <center><img src="images/logo.png" class="img-responsive"></center>
          <br>
          <center><h1 class="animated slideInRight">ทำรูป Profile #TeamIS #TeamInfosci</h1></center>
        </div>
    </div>
    <div id="content">
      <div class="row" class="animated fadeIn">
        <div class="col-md-6">
          <div id="preview">
            <div id="crop-area">
              <img src="http://demos.subinsb.com/isl-profile-pic/image/person.png" id="profile-pic" />
            </div>
            <img src="frames/frame-0.png" id="fg" data-design="0" />
          </div>
        </div>
        <div class="col-md-6">
          <h2>อัพโหลดรูปภาพ</h2>
          <input type="file" name="file" onchange="onFileChange(this)">

          <div id="status"></div>
          <h2>เลือกแบบที่ท่านต้องการ</h2>
          <div id="designs">
            <img class="design active" src="frames/frame-0.png" data-design="0" />
            <img class="design" src="frames/frame-1.png" data-design="1" />
            <img class="design" src="frames/frame-2.png" data-design="2" />
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <center>
        <p>
          <button id="download" disabled>ดาวน์โหลดรูป</button>
        </p>
      </center>
    </div>
  </body>
</html>
