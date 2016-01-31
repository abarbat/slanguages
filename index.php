<?php include 'database.php'; ?>
<?php
  $query = "SELECT * FROM slangdata";
  $run = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Slang Around the World</title>
  	<link rel="stylesheet" href="css/bootstrap.min.css">
    <style>

    .lang {
    	padding: 20px 20px;
    	font-size: 3em;
      background: #897C7C;
      border-radius: 10px;
      color: #FFF;
      text-align: center;
    }
    html {
      overflow-y: scroll;
    }
    #space {
      margin-bottom: 2em;
      /*padding-left: 0;*/
    }
    .word {
      font-size: 2.5em;
      font-family: serif;
    }
    .pronounce {
      font-size: 1.1em;
      letter-spacing: 2px;
      padding-left: 1em;
    }

    p.yes {
      font-size: .8em;
      font-weight: bold;
      padding-top: 1em;
      text-align: center;
    }

    #notes, .translation, #ex {
      padding-left: 20px;
      border-left: 2px solid;
      border-left-color: #C9C9C9;
      margin-bottom: 0;
      padding-bottom: .4em;

    }

    .translation {
      font-size: 1.5em;
      margin-bottom: 0;
      padding-bottom: .4em;
    }

    #ex {
      font-style: italic;
     }
     .clearfix {
       clear: both;
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
            <li><a href="#">Slang</a></li>
            <li><a href="form.php">Submit</a></li>
            <!--<li><a href="contact.php">Contact</a></li>-->
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

        <?php while( $row = mysqli_fetch_assoc($run)) :  ?>

            <div class="<?php echo stripslashes($row['nsfw']); ?> entry <?php echo stripslashes($row['language']); ?>">
              <p><span class="word"><?php echo stripslashes($row['word']); ?></span> <span class="pronounce"> <?php echo stripslashes($row['pronunciation']); ?> </span></p>
              <p class="translation"><?php echo stripslashes($row['translation']); ?></p>
              <p id="notes"><?php echo stripslashes($row['notes']); ?></p>
              <p id="ex"><?php echo stripslashes($row['example']); ?></p>
              <p class="<?php echo stripslashes($row['nsfw']); ?>"></p>
                </div>

        <?php endwhile;  ?>

      </div>
    </div>
  </div>


    <script src="js/jquery-2.1.4.min.js"></script>
    <script>
    $(document).ready(function() {
      $("p.yes").text(
        "This word is NSFW"
      );
      $("div.yes").hide();
      $("#hideme").hide();


      $('#nsfwtoggle').click(function() {
        var toggle = $(this).text();
        if (toggle == "Show NSFW words") {
          $(this).text(
            "Hide NSFW words");
          $(".yes").show();
        } else {
          $(this).text(
            "Show NSFW words");
          $(".yes").hide();
        }
      });



      $(".selectlang").click(function() {
        var language = $(this).data('language'); //this gets the selected language from the dropdown. I want to use this var in the PHP to complete the query "SELECT * FROM slangdata WHERE language = ?"
        $("#hideme").show();


        $.ajax({
          url: "test.php",
          type: "post",
          data: language//,
          //success: function() {
            //$("#fill").load("test.php");
          //}
        });
      });


    }); //end document ready


    </script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
