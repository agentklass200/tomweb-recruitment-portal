  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
      <?php
        if(isset($title) && !empty($title)){
          echo $title;
        }
        else{
          echo 'Empty';
        }
     ?>
    </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="media.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- NAVIGATION START -->

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="images/tw.png" alt="TomasinoWeb Logo" class="img-responsive"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">THE CORE GROUP</a></li>
                <li><a href="#">THE DEPARTMENTS</a></li>
                <li><a href="#">THE EXECUTIVE TEAMS</a></li>
              </ul>
            </li>
            <li><a href="#">PROJECTS</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">APPLICATION <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">THE APPLICATION PROCESS</a></li>
                <li><a href="#">APPLICATION FORM</a></li>
              </ul>
            </li>
            <li><a href="#">OFFICIAL WEBSITE</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>

    <!-- NAVIGATION END -->
    <div class="body-container">
