<?php
    session_start();
    if (isset($_SESSION["userId"])) {
    } 
    else {
        header('location:login.php');
    }
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
    <div class="container-fluid add">
        <form method="POST" name="myForm" enctype="multipart/form-data">
            <div class="row text-center r1">
                <div class="col cl1">
                    <h1 class="mb-4">Add Media</h1>
                    <input type="text" class="input" name="name" placeholder="Enter Name . . . " required><br>
                    <input type="file" class="input" name="file" required><br>
                    <input type="submit" class="submit" name="submit" value="Add"><br>
                    <button class="submit" onclick="window.location.href='index.php';">Show Media</button><br>
                    <button class="submit" onclick="window.location.href='logout.php';">LogOut</button>
                </div>
            </div>
        </form>
    </div>

    <?php
    include('conn.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $fileName = $_FILES['file']['name'];
        $file = $_FILES['file']['tmp_name'];
        $uploadFolder = "Data/" . $fileName;
        $insert = "INSERT INTO `word_files`(`name`, `file`) VALUES ('$name','$fileName')";
        $query = mysqli_query($conn, $insert);
        if ($query) {
            move_uploaded_file($file, $uploadFolder);
            header('location:index.php');
        }
    }
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>