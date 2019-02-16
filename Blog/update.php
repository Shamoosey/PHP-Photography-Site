<?php
    $errorFlag = false;
    if($_POST["title"] && $_POST['content']){
        $title = filter_input(INPUT_POST,"title",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $content = filter_input(INPUT_POST,"content",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        require("connect.php");
        $update = "UPDATE `blog` SET `title` = '$title', `content` = '$content' WHERE `postid` = '$id'";
        $put = $db -> prepare($update);
        $put -> execute();

        header('location: index.php');
    } else {
        header("location:index.php");
    }
?>
<?php if($errorFlag): ?>
<!doctype HTML>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css.css" />
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <title>Mooses Blog</title>
    </head>
    <body>
        <h1>An error occured while processing your post</h1>
        <div id="error">
            <p>Both title and content must have atleast one character</p>
            <a href="index.php" style="text-decoration: none;"><h3>Return home</h3></a>
        </div>
    </body>
</html>
<?php
    endif;
    exit;
?>