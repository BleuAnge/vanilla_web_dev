<?php
    include __DIR__ . "/../connection.php";

    if(isset($_REQUEST["create_post"]))
    {
        $title = $_REQUEST["post_title"];
        $content = $_REQUEST["post_content"];

        $sql = "INSERT INTO blog_post (title , content) VALUES ('$title' , '$content')";

        mysqli_query($conn, $sql);

        header("Location: index.php?info=added");
        exit();
    }
?>