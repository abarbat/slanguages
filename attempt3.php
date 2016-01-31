<?php include 'database.php'; ?>

<div id="inner_content">
<?php

if ( isset($_POST['language']) ) {
    $language = ($_POST['language']);
    $query = "SELECT * FROM slangdata WHERE language = ?";

    if ($stmt = mysqli_prepare($conn, $query)) {

        while (mysqli_stmt_fetch($stmt)) {
            printf ("<div class='%s'>", $nsfw);
            printf ("<p><span class='word'>%s</span>",  stripslashes($word));
            printf ("<span class='pronounce'> %s </span></p>", stripslashes($pronunciation));
            printf ("<p class='translation'>%s</p>", stripslashes($translation));
            printf ("<p id='notes'>%s</p>", stripslashes($notes));
            printf ("<p id='ex'>%s</p>", stripslashes($example));
            printf ("<p class='%s'></p>", $nsfw);
        }
?>
<hr>
</div>

<?php
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
} else {

?>


    <p>UGHHH</p>


<?php
}
?>
</div>

<!--putting here for safekeeping-->
<?php while( $row = mysqli_fetch_assoc($run)) :  ?>

    <div class="<?php echo stripslashes($row['nsfw']); ?> entry <?php echo stripslashes($row['language']); ?>">
      <p><span class="word"><?php echo stripslashes($row['word']); ?></span> <span class="pronounce"> <?php echo stripslashes($row['pronunciation']); ?> </span></p>
      <p class="translation"><?php echo stripslashes($row['translation']); ?></p>
      <p id="notes"><?php echo stripslashes($row['notes']); ?></p>
      <p id="ex"><?php echo stripslashes($row['example']); ?></p>
      <p class="<?php echo stripslashes($row['nsfw']); ?>"></p>
        </div>

<?php endwhile;  ?>
