<?php
    $title = "MentorShip|| MainPage";
    include "Include/Header.php";
?>

<body>
    <header>
        <img src="/IMAGES/display.webp">
        <h1>MENTORSHIP</h1>
        <h3>by SAYEED AJMAL</h3>
    </header>

    <section>
        <div class="container">
            <text>Hi Devs, I'm Sayeed Ajmal. I am Front-End & Back-End Developer. Here's My All Projects.</text>
        </div>

        <div class="center">

            <a href="" target="blank">
                <div class="first_application">
                    <h1>01</h1>
                    <p>BANKING SYSTEM</p>
                    <i class="far fa-circle" id="circle"></i>
                </div>
            </a>

            <a href="https://github.com/sayeedajmal/BioData" target="blank">
                <div class="second_application">
                    <h1>02</h1>
                    <p>BIODATA</p>
                    <i class="far fa-heart" id="circle"></i>
                </div>
            </a>

            <a href="https://github.com/sayeedajmal/PerfectionJava" target="blank">
                <div class="third_application">
                    <h1>03</h1>
                    <p>PERFECTION JAVA</p>
                    <i class="far fa-square" id="circle"></i>
                </div>
            </a>
        </div>

        <div class="gitback">
            <img src="/IMAGES/gitback.png" />
            <h1>You Can Contribute in My Project.</h1>
            <h4>Genius Developers Contribute in Projects. Because Contributing In Projects Make You Perfect. .</h4>
            <a style="text-decoration: none;" href="https://sayeedajmal.github.io/cards/" target="blank">
                <input type="button" value="Connect With Me" />
            </a>
        </div>
        <div class="devs_list">
            <h5>Developer's List</h5>
            <h2>Connect with Devs</h2>
        </div>
        <div class="devs">
            <div class="devs_information">
                <img src="/IMAGES/avtar.jpg">
                <h4>Sayeed Ajmal</h4>
                <a style="text-decoration: none;" href="https://github.com/sayeedajmal" target="blank">
                    <input type="button" value="Connect" />
                </a>
            </div>

            <div class="devs_information">
                <img src="/IMAGES/geans.jpg">
                <h4>Hansy Gill</h4>
                <a style="text-decoration: none;" href="https://github.com/Hansy9193" target="blank">
                    <input type="button" value="Connect" />
                </a>
            </div>

            <div class="devs_information">
                <img src="/IMAGES/white.png">
                <h4>Md Imdadullah</h4>
                <a style="text-decoration: none;" href="" target="blank">
                    <input type="button" value="Connect" />
                </a>
            </div>
        </div>
        <img src="arrow" src="/IMAGES/arrow.png">
        <input class="all_devs" type="button" value="Legends Are Here!" />
        <img class="my_pic" src="/IMAGES/sayeed.png">
        <div class="running_project">
            <div class="working_project">
                <!-- <h1>PERFECTION IN JAVA</h1>
                <p>We know that during COVID-19, a lot of folks around the city and state are feeling uneasy about the future - we’re not sure what the future holds either.</p>
                 <p>That said: we know that we love making sure you have the gear you need for your adventures, and we’re going to keep doing that - with our team - until the city tells us we can’t.</p>
                <p>But as long as folks like yourself support small skillses around the city, then we’ll be here — every day, making sure your orders arrive on time.</p> 
                <text class="name">Sayeed Ajmal</text>
                <p>Special For Devs.</p> -->
                <img src="/IMAGES/dashboard.png">
            </div>
        </div>
    </section>
    <?php
    require "Include/Footer.php";
    ?>
</body>