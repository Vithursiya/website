<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?> | Vithursiya Vijayasingam</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="../public/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <style>
      .navbar .navbar-nav {
          display: inline-block;
          float: none;
          vertical-align: top;
          font-size: 30px;
          float: right;
          margin-top: 15px;
      }

      .navbar-inverse .navbar-nav li a{
          color: black;
      }

      .navbar-inverse .navbar-nav li a:hover{
          background: black ;
      }
  </style>


    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: white; height: 70px">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <?php if ($_SESSION['eingeloggt']==1) { ?>
                  <li><a href="<?=$GLOBALS['appurl']?>/user">Home</a></li>
                  <li><a href="<?=$GLOBALS['appurl']?>/Freizeit">Freizeit</a></li>
                  <li><a href="<?=$GLOBALS['appurl']?>/Projekte/"> Projekte</a></li>
                  <li><a href="<?=$GLOBALS['appurl']?>/zeugnis">Zeugnisse</a></li>
                  <li><a href="<?=$GLOBALS['appurl']?>/login/logout">Logout</a></li>
              <?php } else { ?>
            <li><a href="<?=$GLOBALS['appurl']?>/user">Home</a></li>
            <li><a href="<?=$GLOBALS['appurl']?>/Freizeit">Freizeit</a></li>
            <li><a href="<?=$GLOBALS['appurl']?>/Projekte/"> Projekte</a></li>
              <li><a href="<?=$GLOBALS['appurl']?>/Login/">Login</a></li>
              <?php } ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
    <br>
    <br>
    <h1><?= $heading ?></h1>
