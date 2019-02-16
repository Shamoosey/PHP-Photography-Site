<?php
    require "connect.php";

    $queryBlog = $db -> prepare("SELECT * FROM blog ORDER BY postdate DESC");
    $queryBlog -> execute();
    $posts = $queryBlog -> fetchAll();
    $rowCount = $queryBlog -> rowCount();
    $loopend = 0;
?>
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
        <a href="index.php" style="text-decoration: none;"><h1>Mooses Blog</h1></a>
        <a href="newpost.php" style="text-decoration: none;"><h3>New Post</h3></a>
        <a href="../index.php" style="text-decoration: none;"><h3>Back to Main</h3></a>
        <ul>
        <?php if($rowCount < 1) : ?>
            <h2 id="nopost">No posts to display</h2>
        <?php else: ?>
            <?php foreach($posts as $post) : 
                $short = substr($post['content'],0,200);
                $postDate = substr($post['postdate'], 0, 10);
                $postTime = date('h:i a', strtotime(substr($post['postdate'], 11, 8)));
                ?>
                <li id="post">
                <a href="seemore.php?id=<?=$post['postid']?>" style="text-decoration: none;color: #3e4444;"><h2><?= $post['title'] ?></h2></a>
                    <p style="font-size: 13px; margin: 0px 0px 10px 0px;"> <?=$postDate ?>, <?= $postTime ?> - <a href="editpost.php?id=<?=$post['postid']?>">edit</a></p>
                    <?php if (strlen($post['content']) > 200) : ?>
                         <p><?= $short ?> ....</p>
                         <p style="margin:5px 0px 0px 0px;"><a href="seemore.php?id=<?=$post['postid']?>">see more</a></p>
                    <?php else :?>
                        <p><?= $post['content'] ?></p>
            <?php endif; ?>
                    <?php 
                        if($loopend < 4){
                            $loopend ++;
                        } else {
                            break;
                        } 
                    ?>
                </li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </body>
</html>