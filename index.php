<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Docker Simple Web Example</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  <body>

    <div class="container">
      <div class="row marketing">
        <img src="images/f8f_logo.png" alt="Forty8Fifty Labs">
      </div>
      <div class="header clearfix">
        <h3 class="text-muted">Simple Docker Web Example</h3>
      </div>

      <div class="jumbotron">
        <h1>Hello, Docker!</h1>
        <p class="lead">This is a simple web application to showcase how containers work in a scalable environment.</p>
        <p>This docker hostname is:
        <strong><?php echo gethostname(); ?></strong>
    </p>
      </div>



      <footer class="footer">
        <p>&copy; 2017 Forty8Fifty Labs, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
 
</html>


