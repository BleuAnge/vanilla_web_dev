<?php
    include __DIR__ . "/../connection.php";

    if(isset($_REQUEST["id"]))
    {
        $id = $_REQUEST["id"];

        $sql = "SELECT * FROM blog_post WHERE id = $id";
        $query = mysqli_query($conn , $sql);
    }
?>