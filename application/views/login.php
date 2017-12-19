<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
   <link rel="shortcut icon" href="<?php echo base_url('assets/img/denpasar.ico');?>">
   <link rel="shortcut icon" href="<?php base_url('assets/img/denpasar.ico');?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php echo base_url('assets/login/css/style.css')?>">

  
</head>

<body style="background-image: url('<?php echo base_url('assets/login/blur.jpg');?>');">
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <img src="<?php echo base_url('assets/img/logo-login.jpg');?>" alt="logo-login" style="width: 30%; height: 30%">
  <!--h1>Flat Login Form</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a href='http://andytran.me'>Andy Tran</a></span-->
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form action="<?php echo base_url().'login/akses';?>" method="post" enctype="multipart/form-data">
      <input type="text" placeholder="Username" name="username" />
      <input type="password" placeholder="Password" name="password"/>
      <button>Login</button>
    </form>
  </div>
  <!--div class="form">
    <h2>Create an account</h2>
    <form>
      <input type="text" placeholder="Username"/>
      <input type="password" placeholder="Password"/>
      <input type="email" placeholder="Email Address"/>
      <input type="tel" placeholder="Phone Number"/>
      <button>Register</button>
    </form>
  </div-->
  <!--div class="cta"><a href="http://andytran.me">Forgot your password?</a></div-->
</div-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>

    <script  src="<?php echo base_url('assets/login/js/index.js');?>"></script>

</body>
</html>
