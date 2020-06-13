<?php
    include("pages/access.php");
    if ($_SESSION["name"] === "admin") {
        header("Location: Admin Home.php");
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
    <link rel="stylesheet" href="css/Doctor Home.css">
    <title>Home | Doctor</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="Doctor Home.php">My Pharmacy</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active" href="Doctor Home.php"><?php echo $_SESSION["name"]; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/logout.php" tabindex="-1" aria-disabled="true">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="info_Dr">
        <div class="container">
            <div class="info">
                <span class="name">
                    <b>Doctor Name: </b>
                    <?php
                        echo $_SESSION["name"];
                    ?>
                </span>
                <span class="phone">
                    <b>Doctor Phone: </b>
                    <?php
                        echo $_SESSION["phone"];
                    ?>
                </span>
                <span class="national_ID">
                    <b>Doctor National ID: </b>
                    <?php
                        echo $_SESSION["national_ID"];
                    ?>
                </span>
                <span class="shifts">
                    <b>Doctor Shifts: </b>
                    <?php
                        echo $_SESSION["shifts"];
                    ?>
                </span>
                <span class="no_order">
                    <b>Nummber of Finished Order: </b>
                    <?php
                        echo $_SESSION["no_order"];
                    ?>
                </span>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container">
            <div class="content_order">
                <a href="order.php">
                    <div class="orders">
                        <p>Orders</p>
                    </div>
                </a>
                <a href="finshedOrder.php">
                    <div class="finshed-order">
                        <p>Finished Order</p>
                    </div>
                </a>
                <a href="sendReport.php">
                    <div class="report">
                        <p>Send Report To Manger</p>
                    </div>
                </a>
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