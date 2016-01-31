<?php
  $query = "SELECT word, pronunciation, translation, example, notes, nsfw FROM slangdata WHERE language = ?;";
  if ( $stmt = mysqli_prepare($conn, $query) ) {
      // i - integer, s - string , d - double (decimal), b - blob
      mysqli_stmt_bind_param($stmt, 's',
      $language
      );
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
  }

  $stmt = mysqli_query($conn, $query);
?>


//	$query = "SELECT word, pronunciation, translation, example, notes, nsfw FROM slangdata WHERE language = " .  echo $language;
//then i just have to figure out how to make ? equal the selected language (also using echo prob?)
