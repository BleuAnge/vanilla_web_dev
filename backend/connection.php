<?php
    $conn = mysqli_connect("127.0.0.1:8001", "admin", "admin123", "tako_blog");

    if(!$conn){
        echo '
            <h3 class="text-danger text-center"> Error: Could Not Establish Connection to Database </h3>
        ';
    }
?>