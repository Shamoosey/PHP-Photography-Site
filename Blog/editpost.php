<?php
    require 'authenticate.php';
    $errorFlag = false;
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $post;
    require "connect.php";
    $queryBlog = $db -> prepare("SELECT * FROM blog WHERE postid = '$id'");
    $queryBlog -> execute();
    $post = $queryBlog -> fetchAll();
    $rowCount = $queryBlog -> rowCount();
    $postDate = substr($post[0]['postdate'], 0, 10);
    $postTime = date('h:i a', strtotime(substr($post[0]['postdate'], 11, 8)));
    $_SESSION['temp'] = $id;
    if($rowCount < 1){
        header("location:index.php");
    }
?>

<!doctype HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css.css" />
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <title>Mooses Blog</title>
    </head>
    <body>
        <a href="index.php" style="text-decoration: none;"><h1>Mooses Blog - Edit Post</h1></a>
        <a href="index.php" style="text-decoration: none;"><h3>Home</h3></a>
        <div id="form">
            <form action="update.php?id=<?= $id?>"
                id="blog"
                method="POST">
                <label for="title" id="title">Title</label>
                <input id="title" name="title" type="text" placeholder="Title" value="<?=$post[0]['title']?>" />
                <br/>
                <label for="content" name="content">Content</label>
                <textarea placeholder="Content" name="content"
                rows="10" cols="50" ><?=$post[0]['content']?></textarea>
                <br/>
                <button type="submit">Update</button>
                <button type="submit" formaction="removepost.php?id=<?=$id?>" onclick="return confirm('Are you sure you want to delete this post?');" style="text-decoration: none;">Delete</button>
            </form>
    </div>
    </body>
</html>