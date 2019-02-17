<?php
    $errorFlag = false;
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    require "connect.php";
    $queryBlog = $db -> prepare("SELECT * FROM blog WHERE postid = '$id'");
    $queryBlog -> execute();
    $post = $queryBlog -> fetchAll();
    $rowCount = $queryBlog -> rowCount();
    $postDate = substr($post[0]['postdate'], 0, 10);
    $postTime = date('h:i a', strtotime(substr($post[0]['postdate'], 11, 8)));
	
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
        <a href="index.php" style="text-decoration: none;"><h1>Mooses Blog</h1></a>
        <a href="newpost.php" style="text-decoration: none;"><h3>New Post</h3></a>
        <ul>
            <div id="post">
                <h2><?= $post[0]['title'] ?></h2>
                <p style="font-size: 13px; margin: 0px 0px 10px 0px;"> <?=$postDate ?>, <?= $postTime ?> - <a href="editpost.php?id=<?=$post[0]['postid']?>">edit</a></p>
                <li><?=$post[0]['content']?></li>
            </div>
        </ul>
    </body>
</html>