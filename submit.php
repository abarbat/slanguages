<!--HANDLES FORM SUBMISSION-->
<?php include 'database.php'; ?>

<?php

if (isset($_POST['language']) && isset($_POST['word'])) {

    $language = sanitizeMySQL($conn, $_POST['language']);
    $word = sanitizeMySQL($conn, $_POST['word']);
    $pronunciation = sanitizeMySQL($conn, $_POST['pronunciation']);
    $translation = sanitizeMySQL($conn, $_POST['translation']);
    $example = sanitizeMySQL($conn, $_POST['example']);
    $notes = sanitizeMySQL($conn, $_POST['notes']);
    $nsfw = sanitizeMySQL($conn, $_POST['nsfw']);



    $query = "INSERT INTO slangdata (language, word, pronunciation, translation, example, notes, nsfw)
    VALUES (?, ?, ?, ?, ?, ?, ?)";
    if ( $stmt = mysqli_prepare($conn, $query) ) {
        // i - integer, s - string , d - double (decimal), b - blob
        mysqli_stmt_bind_param($stmt, 'sssssss',
        $language,
        $word,
        $pronunciation,
        $translation,
        $example,
        $notes,
        $nsfw
        );
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
} else {
    echo "Failed to submit!";
}

function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

?>
