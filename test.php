<?php include 'database.php'; ?>




<?php
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}
if ( isset($_POST['language']) ) {
?>

    <!-- write into the HTML - table headings -->
<?php
    // this calls the function above to make sure id is clean
    $language = sanitizeMySQL($conn, $_POST['language']); //ORIGINALLY SAID 'id' — SHOULD THIS BE LANGUAGE OR RESULT OR DATA-LANGUAGE??
    // get the row indicated by the id
    $query = "SELECT * FROM slangdata";
    // another if-statement inside the first one ensures that
    // code runs only if the statement was prepared
    if ($stmt = mysqli_prepare($conn, $query)) {
        // bind the id that came from inventory_update.php
        mysqli_stmt_bind_param($stmt, 's', $language); //CHANGE?!?!?!?!?!??!?!??!?!!?!?!?!?!!?
        // execute the prepared statement
        mysqli_stmt_execute($stmt);
        // next line handles the row that was selected - all fields
        // it is "_result" because it is the result of the query
        mysqli_stmt_bind_result($stmt, $id, $language, $word, $pronunciation, $translation, $notes, $example, $nsfw);
        // handle the data we fetched with the SELECT statement ...
        while (mysqli_stmt_fetch($stmt)) {
            // another way to write variables into the HTML!
            // shorter than echo in this case
            // %s for string, %d for integer,
            // %f for decimal (floating point); %.02f limits 2 decimal places

            ?>

                <div class="<?php echo stripslashes($row['nsfw']); ?> entry <?php echo stripslashes($row['language']); ?>">
                  <p><span class="word"><?php echo stripslashes($row['word']); ?></span> <span class="pronounce"> <?php echo stripslashes($row['pronunciation']); ?> </span></p>
                  <p class="translation"><?php echo stripslashes($row['translation']); ?></p>
                  <p id="notes"><?php echo stripslashes($row['notes']); ?></p>
                  <p id="ex"><?php echo stripslashes($row['example']); ?></p>
                  <p class="<?php echo stripslashes($row['nsfw']); ?>"></p>
                    </div>

            <?php endwhile;
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
} else {
    // if _id_ was NOT sent here via POST, write a message with HTML
    // break out of PHP to write HTML next ...
?>


    <p>Error</p>


<?php
// return to PHP just to close the if-statement
}  // end of if-else isset($_POST['id'])
?>
