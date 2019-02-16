<?php 
    require 'authenticate.php';
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
        <a href="index.php" style="text-decoration: none;"><h3>Home</h3></a>
        <div id="form">
            <form action="insert.php"
                id="blog"
                method="POST">
                <label for="title" id="title">Title</label>
                <input id="title" name="title" type="text" placeholder="Title" />
                <br/>
                <label for="content" name="content">Content</label>
                <textarea placeholder="Content" name="content"
                rows="4" cols="50"></textarea>
                <br/>
                <button type="submit">Publish</button>
            </form>
    </div>
    </body>
</html>