<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/CSS/header.css">
    <link rel="stylesheet" type="text/css" href="/CSS/mainpage.css">
    <link rel="stylesheet" type="text/css" href="/CSS/About.css">
    <link rel="icon" href="/IMAGES/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>

<body class="body">
    <div class="nevbar text-primary">
        <!-- AVTAR -->
        <div>
            <img src="/IMAGES/Sayeed1.jpg" class="avtar">
        </div>
        <!-- SAYEED TEXT -->
        <a href="/Main.php">
            <svg>
                <text y="80%">SAYEED</text>
            </svg>
        </a>

        <!-- MOBILE NAVIGATION BAR -->
        <div class="mobile_navbar">
            <div class="mobile_navbar_item">
                <img src="/IMAGES/menu.png">
                <div class="mobile_navbar_dropdown">

                    <ul>
                        <li><a href="/Main.php">Home</a></li>
                        <li><a href="/About.php">About</a></li>
                        <li>Data</li>
                        <li><a href="/contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- DESKTOP NAVIGATION BAR -->
        <div class="links">
            <a href="/Main.php">Home</a>
            <a href="/About.php">About</a>
            <a href="">Shop</a>
            <a href="/contact.php">Contact</a>
        </div>

    </div>
</body>

</html>