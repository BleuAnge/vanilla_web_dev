<?php
    include __DIR__ . "/../connection.php";

    if(isset($_REQUEST["update_post"]))
    {
        $id = $_REQUEST["id"];

        $title = $_REQUEST["post_title"];
        $content = $_REQUEST["post_content"];

        $sql = "UPDATE blog_post SET title = '$title' , content = '$content' WHERE id = '$id'";

        mysqli_query($conn, $sql);

        header("Location: index.php?info=updated");
        exit();
    }
?>