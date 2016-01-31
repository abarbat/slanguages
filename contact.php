<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Slang Around the World — Submit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    html {
      overflow-y: scroll;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="name" href="index.php">slanguages</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Slang</a></li>
            <li><a href="form.php">Submit</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="col-md-6 col-md-offset-3">
        <h1>Slang around the world</h1>
        <p>Did I miss a language you want to see? Have a question, comment or correction? Send me an email!</p>
      <form class="form-horizontal" role="form" method="post" action="index.php">
      	<div class="form-group">
      		<label for="name" class="col-sm-2 control-label">Name</label>
      		<div class="col-sm-10">
      			<input type="text" class="form-control" id="name" name="name" placeholder="First &amp; Last Name" value="">
      		</div>
      	</div>
      	<div class="form-group">
      		<label for="email" class="col-sm-2 control-label">Email</label>
      		<div class="col-sm-10">
      			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
      		</div>
      	</div>
      	<div class="form-group">
      		<label for="message" class="col-sm-2 control-label">Message</label>
      		<div class="col-sm-10">
      			<textarea class="form-control" rows="4" name="message"></textarea>
      		</div>
      	</div>
      	<div class="form-group">
      		<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
      		<div class="col-sm-10">
      			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
      		</div>
      	</div>
      	<div class="form-group">
      		<div class="col-sm-10 col-sm-offset-2">
      			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
      		</div>
      	</div>
      	<div class="form-group">
      		<div class="col-sm-10 col-sm-offset-2">
      		</div>
      	</div>
      </form>
    </div>
  </div>


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
