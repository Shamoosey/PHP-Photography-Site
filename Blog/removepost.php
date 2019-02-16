

<?php
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if(!is_nan($id)){
        require "connect.php";
        $query = $db -> prepare("DELETE FROM `blog` WHERE `postid` = '$id'");
        $query -> execute();

        header("location:index.php");
    }
?>