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
    <link rel="stylesheet" href="css/mangeMedicine.css">
    <title>Add New Medicine | Admin</title>
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
                    <li class="nav-item active">
                        <a class="nav-link active" href="Admin Home.php"><?php echo $_SESSION["name"]; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/logout.php" tabindex="-1" aria-disabled="true">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="content">
        <div class="container">
            <h2>- Add Medicine -</h2>
            <div class="new">
                <form action="pages/addMed.php" method="post">
                    <?php
                        if (isset($_GET["success"])) {
                            ?>
                            <div class="alert-success" style="padding:5px;text-align:center;font-weight:bold;font-size:20px;border-radius:10px;">
                                Drug Added
                            </div>
                            <?php
                        } elseif (isset($_GET["failed"])) {
                            ?>
                            <div class="alert-danger" style="padding:5px;text-align:center;font-weight:bold;font-size:20px;border-radius:10px;">
                                This Drug is Exist
                            </div>
                            <?php
                        }
                    ?>
                    <label for="name">
                        <b>Drug Name:</b>
                        <input type="text" name="name" id="name" placeholder="Type The Name Of New Medidines">
                    </label>
                    <label for="no">
                        <b>Number:</b>
                        <input type="number" name="no" id="no" placeholder="Number of Medicines in stock">
                    </label>
                    <label for="info">
                        <b>Info</b>
                        <textarea name="info" id="info" cols="30" rows="5" placeholder="Type Info About Drug"></textarea>
                    </label>
                    <label for="price">
                        <b>Price</b>
                        <input type="number" name="price" id="price" placeholder="Price of Medicine">
                    </label>
                    <button type="submit" name="addmed" class="btn btn-primary">Add Medicine</button>
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