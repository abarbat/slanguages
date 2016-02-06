<?php include 'database.php'; ?>

<!DOCTYPE html>

<!-- View the github repo here: https://github.com/abarbat/slanguages -->

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Slang Around the World</title>
  	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
            <li><a href="#">Slang</a></li>
            <li><a href="form.php">Submit</a></li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="container">
    <div class="col-md-6 col-md-offset-3">

    	<h1>Slang around the world</h1>

      <p>Textbooks can only teach you so much. If you want to cozy up to a language, slang is your blanket and Netflix. Choose a language to learn some slang, or add your own words or phrases!</p>

      <div id="space" class="col-xs-6 btn-group">

        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
          Select a language <span class="caret"></span>
        </button>


        <ul class="dropdown-menu">
          <li><a class="selectlang" id="arabic" data-language="arabic" href="#">Arabic</a></li>
          <li><a class="selectlang" id="chinese" data-language="chinese" href="#">Chinese</a></li>
          <li><a class="selectlang" id="french" data-language="french" href="#">French</a></li>
          <li><a class="selectlang" id="german" data-language="german" href="#">German</a></li>
          <li><a class="selectlang" id="italian" data-language="italian" href="#">Italian</a></li>
          <li><a class="selectlang" id="portuguese" data-language="portuguese" href="#">Portuguese</a></li>
          <li><a class="selectlang" id="russian" data-language="russian" href="#">Russian</a></li>
          <li><a class="selectlang" id="spanish" data-language="spanish" href="#">Spanish</a></li>
        </ul>
      </div>

      <div id="hideme" class="col-xs-6">
        <button class="btn btn-default" onclick="this.blur();" id="nsfwtoggle" type="button">Show NSFW words</button> <!--included onclick="this.blur();" because button stayed focused after click... not sure why-->
      </div>

      <div class="clearfix"></div>

      <div id="fill">


      </div>
    </div>
  </div>


    <script src="js/jquery-2.1.4.min.js"></script>
    <script>
    $(document).ready(function() {
      $("#hideme").hide();

      $('#nsfwtoggle').click(function() {
        var textToggle = $(this).text();
        if (textToggle == "Show NSFW words") {
          $(this).text(
            "Hide NSFW words");
          $(".yes").show();
        } else {
          $(this).text(
            "Show NSFW words");
          $(".yes").hide();
        }
      });

      $("#space").on("click", ".selectlang", function() {
        var whichlang = $(this).data('language');
        $("#hideme").show();

        $.ajax({
          type: "POST",
          url: "filter.php",
          data: { language : whichlang },
          success: function(response) {
            $("#fill").html(response);
            $("div.yes").hide();
            $("p.yes").text(
              "This word is NSFW"
            );
          }
        });
      });
    }); //end document ready


    </script>
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>
