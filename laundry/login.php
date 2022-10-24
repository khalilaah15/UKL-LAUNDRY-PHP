<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laundry Kilau</title>
  <link rel="stylesheet" href="assets/css/login.css">
  <script src="assets/js/login.js"></script>
</head>
<body>
<div class="wrap">
  
  <div class="flip-container" id='flippr'>
    <div class="flipper">
      <div class="front"></div>
      <div class="back"></div>
    </div>
  </div>
  <form action="proses_login.php" method="post">
  <h1 class="text" id="welcome">Selamat Datang di Laundry Kilau. <span>Silahkan Login.</span></h1>
  <br>
  <br>
  <form method='post' id="theForm">
    <input type='text' id="username" name='username' placeholder='Username'>
    <br>
  <input type='password' id='password' name='password' placeholder='Password'>
      <br>
      <br>
      <br>
    <div class='login'>
      <a href="#"><i class="icon-cog"></i></a>
      <input type='submit' value='Login'>
    </div><!-- /login -->
  </form>
</div><!-- /wrap -->
</body>
</html>