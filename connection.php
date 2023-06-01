<?php
    $conn = mysqli_connect("127.0.0.1:8001", "admin", "admin123", "tako_blog");

    if(!$conn){
        echo '
            <h3 class="text-danger text-center"> Error: Could Not Establish Connection to Database </h3>
        ';
    }

    $sql = "SELECT * FROM blog_post";
    $query = mysqli_query($conn , $sql);

    if(isset($_REQUEST["create_post"]))
    {
        $title = $_REQUEST["post_title"];
        $content = $_REQUEST["post_content"];

        $sql = "INSERT INTO blog_post (title , content) VALUES ('$title' , '$content')";

        mysqli_query($conn, $sql);

        header("Location: index.php?info=added");
        exit();
    }

    if(isset($_REQUEST["id"]))
    {
        $id = $_REQUEST["id"];

        $sql = "SELECT * FROM blog_post WHERE id = $id";
        $query = mysqli_query($conn , $sql);
    }

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

    if(isset($_REQUEST["delete_post"]))
    {
        $id = $_REQUEST["id"];

        $sql = "DELETE FROM blog_post WHERE id = $id";
        $query = mysqli_query($conn , $sql);

        header("Location: index.php?info=deleted");
        exit();
    }
?>