<?php
    include "backend/connection.php";

    if(isset($_REQUEST["delete_post"]))
    {
        $id = $_REQUEST["id"];

        $sql = "DELETE FROM blog_post WHERE id = $id";
        $query = mysqli_query($conn , $sql);

        header("Location: index.php?info=deleted");
        exit();
    }
?>