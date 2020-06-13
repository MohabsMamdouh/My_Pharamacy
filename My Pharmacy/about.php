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
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/style.css">
    <title>About Us</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="about.php" tabindex="-1" aria-disabled="true">About us <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section>
        <div class="about_us">
            <div class="container">
                <div class=text style="margin-top:100px;">
                    <h1 class=about>About us</h1>
                    
                    <p class=p>If you want to get away for the holidays, choose our hotel. What differentiates us from others? <br>
                    A lot of things.  . The spacious rooms are decorated with traditional wooden furniture and equipped<br>
                    with free Wi-Fi access, flat-screen TVs and private bathrooms. In our city you can indulge in traditional<br>
                    afternoon tea during the day, catch up with work in the business center and taste delicious food at the best<br>
                    restaurant upon your choice in the evening.</p>

                    <p class=p>We welcome you to our hotel as you enlighten our abode with your warmth and smiley nature.<br>
                    We are truly grateful to you for your visit here and hope to have memorable moments throughout<br>
                    your visit.May I take this opportunity to reassure you that our hotel's team will continue to<br>
                    not just provide the highest standards of service and comfort you have been so accustomed to,<br>
                    bur exceeding your expectations will be our constant mission.Last but not least, while the<br>
                    entire our team remains at your disposal for any assistance or service you may need. <br>
                    Thanking you in anticipation of your patronage.</p>
                </div>  
                <div class=text>   
                    <img class=why src="img/re3.jpg">
                    <div class=my_text>
                        <h1 class=about2>Why us ?!</h1>
                        <p class=p2>Each room at our hotel is decorated with great taste. Designers'<br>
                        solutions will impress you greatly.<br>
                        Room service personnel is perfectly trained. Get away for the holidays,<br>
                        choose our hotel. Each and every trifle is here for your comfort.<br>
                        Our windows are overlooking the beautiful park. The spacious rooms are<br> 
                        decorated with traditional wooden furniture.</p>
                    </div>
                </div>
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