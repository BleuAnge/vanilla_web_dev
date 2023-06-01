<?php
    include "backend/blog_crud/get_filter.php";
    include "backend/blog_crud/delete.php";
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
            <?php foreach($query as $item){
                echo $item['title'];
            } ?>
        </title>
    </head>
    <body>
        <div class="d-flex flex-column align-items-center bd-highlight mb-3 h-100 p-2">
            <?php
                foreach($query as $item)
                {
                    ?>
                        <div class="border-bottom border-dark w-100 text-center p-2">
                            <h1> <?php echo $item['title']?> </h1>
                        </div>
                        
                        <div class="text-center p-2 bd-highlight">
                            <p> <?php echo $item['content']?> </p>
                        </div>

                        <div class="d-flex justify-content-between p-4 border-top border-dark w-100 text-center p-2">
                            <div class="d-flex justify-content-between gap-4">
                                <a href="edit.php?id=<?php echo $item['id']; ?>" class="btn btn-outline-dark" style="text-decoration: none;">
                                    <p> Edit Blog </p>
                                </a>
                                <form method="POST">
                                    <input type="text" name="id" value="<?php echo $item['id']; ?>" hidden>
                                    <button name="delete_post" class="btn btn-outline-dark">
                                        <p> Delete Blog </p>
                                    </button>
                                </form>
                                
                            </div>
                            <a href="index.php" class="btn btn-outline-dark" style="text-decoration: none;">
                                <p> Return Home </p>
                            </a>
                        </div>
                    <?php
                }
            ?>
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