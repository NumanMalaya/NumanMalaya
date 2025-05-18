<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private Media</title>
    <link rel="shortcut icon" type="x-icon" href="Data/profilePic.jpeg">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <?php
    include('conn.php');
    $select = "SELECT * FROM `word_files`";
    $query = mysqli_query($conn, $select);
    ?>

    <div class="container-fluid p-4 top" id="top">
        <div class="row r1 text-center">
            <?php
            while ($result = mysqli_fetch_array($query)) {
                $mediaId = $result['word_files_Id']; 
                $modalId = "deleteModal" . $mediaId; 
            ?>
                <div class="col-lg-4 col-sm-6 col-12 cl1">
                    <div class="child py-5 px-2 mb-4">
                        <h4><?php echo $result['name']; ?></h4>
                        <a class="mt-5" href="Data/<?php echo $result['file']; ?>" download="">Download</a>
                        <?php if (isset($_SESSION["userId"])) { ?>
                            <a class="mt-2 border-danger" data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>">Delete</a>
                            <!-- Modal -->
                            <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-labelledby="<?php echo $modalId; ?>Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="<?php echo $modalId; ?>Label">Are you sure?</h5>
                                            <div class="ms-auto d-flex">
                                                <button type="button" class="border-secondary btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                                                <a class="border-danger btn btn-danger" href="delete.php?mediaId=<?php echo $mediaId; ?>">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <button style="width: 35%; margin:auto" onclick="window.location.href='add.php';">Add Media</button>
        </div>
    </div>


    <a href="#top"><i class="p-2 fa-solid fa-arrow-up arrow"></i></a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>