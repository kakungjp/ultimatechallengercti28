<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/custom.css">
    <title>Littleboss</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Menu Admin</h1>
      </div>
      <div class="login-box">
        <div class="login-form">
          <h3 class="login-head"><i class=""></i>PILIH MENU</h3>
          
          <div class="btn-container">
            <a href="<?=base_url()?>Admin/databarcode" class="btn btn-primary btn-block">ADMIN &nbsp;<i class="fa fa-user fa-lg"></i></a>
          </div>
          <br>
          <div class="btn-container">
            <a href="<?=base_url()?>Admin/report1" class="btn btn-primary btn-block">REPORT &nbsp;<i class="fa fa-file-text fa-lg"></i></a>
          </div>
          <br><br><br><br>
          <div class="btn-container">
            <a href="<?=base_url()?>Admin/logout" class="btn btn-primary btn-block">LOGOUT &nbsp;<i class="fa fa-sign-out fa-lg"></i></a>
          </div>

        </div>
        
      </div>
    </section>
  </body>
  <script src="<?=base_url()?>assets/js/jquery-2.1.4.min.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/js/plugins/pace.min.js"></script>
  <script src="<?=base_url()?>assets/js/main.js"></script>
</html>