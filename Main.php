<?php
include "Include/Header.php";
?>

<body>
    <header>
        <img src="/IMAGES/display.webp">
        <h1>MENTORSHIP</h1>
        <h3>by SAYEED AJMAL</h3>
    </header>

    <section>
        <!-- SOME PARAGRAPH -->
        <div class="container">
            <text>Hi Devs, I'm Sayeed Ajmal. I am Front-End & Back-End Developer. Here's My All Projects.</text>
        </div>

        <div class="center">
            <div class="first_product">
                <h1>01</h1>
                <p>BANKING SYSTEM</p>
                <i class="far fa-circle" id="circle"></i>

            </div>
            <div class="second_product">
                <h1>02</h1>
                <p>BIODATA</p>
                <i class="far fa-heart" id="circle"></i>

            </div>
            <div class="third_product">
                <h1>03</h1>
                <p>PERFECTION JAVA</p>
                <i class="far fa-square" id="circle"></i>

            </div>

        </div>

        <div class="hill">
            <img src="/IMAGES/gitback.png" />
            <h1>You Can Contribute in My Project.</h1>
            <h4>Genius Developers Contribute in Projects. Because Contributing In Projects Make You Perfect. .</h4>
            <input type="button" value="Connect With Me" />
        </div>
        <div class="shop_product">
            <h5>Developer's List</h5>
            <h2>Connect with Devs</h2>
        </div>
        <div class="clothes">
            <div class="cloth_names">
                <img src="/IMAGES/coat.png">
                <h4>Coat</h4>
                <input type="button" value="Details" />
            </div>

            <div class="cloth_names">
                <img src="/IMAGES/geans.jpg">
                <h4>Geans</h4>
                <input type="button" value="Details" />
            </div>

            <div class="cloth_names">
                <img src="/IMAGES/white.png">
                <h4>T-Shirt</h4>
                <input type="button" value="Details" />
            </div>
        </div>
        <input class="all_products" type="button" value="View All Products" />
        <img class="my_pic" src="/IMAGES/sayeed.png">
        <div class="shop_container">
            <div class="shop_local">
                <h1>SHOP LOCAL</h1>
                <p>We know that during COVID-19, a lot of folks around the city and state are feeling uneasy about the future - we’re not sure what the future holds either.</p>
                <p>That said: we know that we love making sure you have the gear you need for your adventures, and we’re going to keep doing that - with our team - until the city tells us we can’t.</p>
                <p>But as long as folks like yourself support small businesses around the city, then we’ll be here — every day, making sure your orders arrive on time.</p>
                <text class="name">Sayeed Ajmal</text>
                <p>Special For SomeOne</p>
            </div>
        </div>
    </section>
    <?php
    require "Include/Footer.php";
    ?>
</body>