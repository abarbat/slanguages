<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Slang Around the World &mdash; Submit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/submit.js"></script>
    <style>
    #success {
      background-color: #C9C9C9;
      border-radius: 10px;
      height: 350px;
      line-height: 350px;
      text-align: center;
    }
    #success p {
      display: inline-block;
      vertical-align: middle;
      line-height: normal;
      padding: 1em;
      font-size: 1.5em;
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
            <li><a href="index.php">Slang</a></li>
            <li><a href="#">Submit</a></li>
            <!--<li><a href="contact.php">Contact</a></li>-->
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="col-md-6 col-md-offset-3">
        <h1>Slang around the world</h1>
        <h2>Submit some slang!</h2>
      </div>
      <div id="hideform">
        <form id="slangform" role="form" method="post" autocomplete="off">
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <label for="selectlanguage" class="control-label">Select a language</label><!-- add to all!--->
              <select class="form-control" name="language" id="selectlanguage" required>
                <option value="">---</option>
                <option value="arabic">Arabic</option>
                <option value="chinese">Chinese</option>
                <option value="french">French</option>
                <option value="german">German</option>
                <option value="italian">Italian</option>
                <option value="portuguese">Portuguese</option>
                <option value="russian">Russian</option>
                <option value="spanish">Spanish</option>
              </select>
            </div>
            <div class="form-group">
              <label for="slangword" class="control-label">Slang word or phrase</label>
              <input class="form-control" name="word" id="slangword" type="text" placeholder="burrito" required>
            </div>
            <div class="form-group">
              <label for="pronunciation" class="control-label">Pronunciation</label>
              <input class="form-control" name="pronunciation" id="pronunciation" type="text" placeholder="buh-REE-toh" required>
            </div>
            <div class="form-group">
              <label for="translation" class="control-label">English translation</label>
              <input class="form-control" name="translation" id="translation" type="text" placeholder="a tortilla rolled around a filling" required>
            </div>
            <div class="form-group">
              <label for="example" class="control-label">Example (optional)</label>
              <textarea class="form-control" name="example" id="example" rows="2" placeholder="Me gusta este burrito — I like this burrito"></textarea>
            </div>
            <div class="form-group">
              <label for="notes" class="control-label">Notes on connotation, origin, etc. (optional)</label>
              <textarea class="form-control" name="notes" id="notes" rows="4" placeholder="A dish from Mexico"></textarea>
            </div>
              <div class="form-group checkbox">
                <label>
                  <input id="formnsfw" name="nsfw" value="yes" type="checkbox">NSFW
                </label>
              </div>
            <div class="form-group col-md-4 col-md-offset-4">
              <button type="submit" id="submit" class="btn btn-default">Submit</button>
              <button type="reset" class="btn btn-link">Reset</button>

            </div>

          </div>
        </form>
      </div>
      <div class="clearfix"></div>
      <div id="success">
        <p>Your slang has been submitted! View it on the <a href="index.php">homepage</a> or <a href="form.php">submit another</a>.</p>
      </div>
    </div>
<!--


      $.ajax({
          type: "POST",
          url: "shoutbox.php",
          data: dataString,
          // t his takes result of the PHP script to your HTML page
          success: function(html) {
              // this jQuery replaces contents of the UL element (FOR MY SCRIPT I NEED TO ADD IT TO A DIFFERENT PAGE ALTOGETHER SO THIS WON'T DO ANYTHING)
              $('#shouts ul').html(html);
              // clears the shout input field but keeps name (THIS IS NOT NECESSARY FOR MINE I THINK BC IT CLEARS AFTER SUBMIT ANYWAY)
              $('#shout').val('');
              }
        }); // end ajax

-->


  </body>
</html>
