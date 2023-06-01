<?php
    include __DIR__ . "/../connection.php";

    $sql = "SELECT * FROM blog_post";
    $query = mysqli_query($conn , $sql);
?>