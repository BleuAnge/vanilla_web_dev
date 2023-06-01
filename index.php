<?php
    include "backend/blog_crud/get_all.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script defer src="scripts/components/test.js"></script>

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
    <body class="d-inline-flex flex-column gap-2 w-100 border p-4">

        <?php
            if(isset($_REQUEST['info']))
            {
                if($_REQUEST['info'] == 'added')
                {
                    ?>
                        <div class="alert alert-success w-50 position absolute left-50 start-50 translate-middle-x m-1" role="alert">
                            Post Has Been Added!
                        </div>
                    <?php
                }
                    
                if($_REQUEST['info'] == 'updated')
                {
                    ?>
                        <div class="alert alert-success w-50 position absolute left-50 start-50 translate-middle-x m-1" role="alert">
                            Post Has Been Updated!
                        </div>
                    <?php
                }

                if($_REQUEST['info'] == 'deleted')
                {
                    ?>
                        <div class="alert alert-success w-50 position absolute left-50 start-50 translate-middle-x m-1" role="alert">
                            Post Has Been Deleted!
                        </div>
                    <?php
                }
            }
        ?>

        <div class="d-inline-flex flex-column gap-2 w-100 border">
            <div class="container p-4">
                <div class="text-center">
                    <test-item>Ohalo AAA</test-item>
                    <a href="create.php" class="btn btn-outline-dark"> Create A New Post </a>
                </div>
            </div>
        </div> 

        <div class="row">
            <?php 
                foreach($query as $item){
                    ?>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <div class="card text-white bg-primary w-50 mt-5">
                                <a href="blog_page.php?id=<?php echo $item['id']; ?>" class="text-light" style="text-decoration: none;">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?php echo $item['title']; ?>
                                        </h5>
                                        <div class="card-text">
                                            <?php echo $item['content']; ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
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