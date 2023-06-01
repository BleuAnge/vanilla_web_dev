<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link   href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
                rel="stylesheet" 
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
                crossorigin="anonymous">

        
        <link   href="global.css"
                rel="stylesheet">

        <title>
            Vanilla Blog
        </title>
    </head>
    <body>
        <div class="d-inline-flex flex-column gap-2 w-100">
            <div class="d-flex flex-column gap-4 align-items-center">
                <form   class="w-50 d-flex flex-column p-4 gap-2 align-items-center bg-primary border border-dark border-4 text-light rounded"
                        method="GET">
                    <div class="w-50">
                        <label for="Post-Title">Post Title</label>
                        <input  class="form-control my-3 text-center" 
                                type="text"
                                name="post_title" 
                                id="Post-Title" 
                                placeholder="Input Title Here"
                                required>   
                    </div>
                    
                    <div class="w-50">
                        <label for="Post-Content">Post Content</label>
                        <textarea   class="form-control my-3 text-center"
                                    name="post_content"  
                                    id="Post-Content" 
                                    placeholder="What's on your mind?"
                                    required></textarea>
                    </div>      

                    <div>
                        <button class="btn btn-light text-primary"
                                name="create_post"
                        >
                            Add Post
                        </button>
                    </div>
                </form>
            </div>
            <div class="text-center">
                <a href="index.php" class="btn btn-outline-primary"> Return to Home </a>
            </div>
        </div> 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
        crossorigin="anonymous"></script>
    </body>
</html>