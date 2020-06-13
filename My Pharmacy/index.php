<?php
    include("pages/accesslog.php");
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
    <title>My Pharmacy</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">My Pharmacy</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php" tabindex="-1" aria-disabled="true">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="banner">
        <p class="content">
            Write your medicines and you will get them as soon as possible.
        </p>
    </section>

    <h3>Your Medicine Is close To You, Order it And we will send it to you.</h3>

    <section class="medicines">
        <form method="post" action="pages/setOrder.php">
            <header class="title">- Fill This Form -</header>
            <?php
                if (isset($_GET["success"])) {
                    ?>
                    <div class="alert-success" style="padding:5px;text-align:center;font-weight:bold;font-size:20px;border-radius:10px;">
                        Order Sent, that'll cost you <?php echo $_GET["success"]; ?> Pounds
                    </div>
                    <?php
                }
            ?>
            
            <label for="name">
                Username:
                <input type="text" placeholder="Your Name" name="name" id="name" required>
            </label>
            <label for="address">
                Address:
                <input type="text" placeholder="Your Address" name="address" id="address" required>
            </label>
            <label for="age">
                Age:
                <input type="number" placeholder="Patient Age" name="age" id="age" required>
            </label>
            <label for="gender">
                Patient Gender:<br>
                <label for="male" style="display:inline;margin-left:60px;">
                    <input type="radio" name="gender" id="male" value="Male" style="width:10%;display:inline;" required><span>Male</span>
                </label>
                <label for="female" style="display:inline;margin-left:60px;">
                    <input type="radio" name="gender" id="female" value="Female" style="width:10%;display:inline;" required><span>Female</span>
                </label>
            </label>
            <label for="my-medicine">
                Type Your Medicine Here:
                <textarea name="medicines" id="my-medicine" rows="auto" placeholder="Type Your Medicine and Please Seprate a Medicines with - and don't use spaces e.g(parstemol-metformin)" required></textarea>
            </label>
            <button type="submit" class="btn btn-primary btn-block" name="get-medicine">Get Medicine</button>
        </form>
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