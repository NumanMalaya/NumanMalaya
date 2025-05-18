<?php
session_start();
if (isset($_SESSION["userId"])) {
    header('location:add.php');
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
    <div class="container-fluid login">
        <form method="POST" name="LoginForm" enctype="multipart/form-data">
            <div class="row text-center r1">
                <div class="col cl1">
                    <h1 class="mb-4">Login</h1>
                    <input type="email" class="input" name="email" placeholder="Enter your email . . . " required><br>
                    <input type="text" class="input mt-3" placeholder="Enter your password . . . " name="password" required><br>
                    <span class="error text-danger"></span><br>
                    <input type="submit" class="submit" name="submit" value="Login"><br>
                </div>
            </div>
        </form>
    </div>

    <?php
    include('conn.php');
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $select = "SELECT * FROM `user_record` WHERE email='$email' and password='$password' ";
        $query = mysqli_query($conn, $select);
        $result = mysqli_fetch_array($query);
        $data = mysqli_num_rows($query);

        if ($data > 0) {
            $_SESSION["userId"] = $result['user_Id'];
            header('location:add.php');
        } else {
    ?><script>
                document.getElementsByClassName("error")[0].innerHTML = '*Wrong email or password!';
            </script><?php
                    }
                }
                        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>