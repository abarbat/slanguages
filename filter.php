<?php include 'database.php'; ?>

<?php
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}
if ( isset($_POST['language']) ) {



    $language = sanitizeMySQL($conn, $_POST['language']);
    $query = "SELECT * FROM slangdata WHERE language = ?";
    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, 's', $language);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $id, $language, $word, $pronunciation, $translation, $example, $notes, $nsfw);


        while (mysqli_stmt_fetch($stmt)) {

          printf ("<div class='%s'>", $nsfw);
          printf ("<p><span class='word'>%s</span>",  stripslashes($word));
          printf ("<span class='pronounce'> %s </span></p>", stripslashes($pronunciation));
          printf ("<p class='translation'>%s</p>", stripslashes($translation));
          printf ("<p id='notes'>%s</p>", stripslashes($notes));
          printf ("<p id='ex'>%s</p>", stripslashes($example));
          printf ("<p class='%s'></p></div>", $nsfw);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);


    }

} else {
    // if language was NOT sent here via POST, write a message with HTML
?>
    <p>Error!</p>
<?php
}
?>
