<?php
    include("pages/access.php");
    $admin = 0;
    if ($_SESSION["name"] === "admin") {
        $admin = 1;
    } else {
        header("Location: Doctor Home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/icon-pharmacy-8.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/delMedicine.css">
    <title>Delete Doctor | Admin</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="Admin Home.php">My Pharmacy</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Admin Home.php"><?php echo $_SESSION["name"]; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="content">
        <div class="container">
            <h2>- Delete Doctor -</h2>
            <div class="new">
                <form action="pages/delDR.php" method="post">
                    <?php
                        if (isset($_GET["success"])) {
                            ?>
                            <div class="alert-danger" style="padding:5px;text-align:center;font-weight:bold;font-size:20px;border-radius:10px;">
                                Doctor Deleted
                            </div>
                            <?php
                        }
                    ?>
                    <label for="name">
                        <b>Doctor Name:</b>
                        <input type="text" name="name" id="name" placeholder="Type Doctor Name">
                    </label>
                    <button type="submit" name="del" class="btn btn-danger">Delete Doctor</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>Created By Our Team &copy; copyright all right reserved</p>
    </footer>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/script.js"></script>
</body>
</html>