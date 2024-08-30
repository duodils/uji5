<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/reset.css">
</head>

<body>
    <div class="container" style="overflow: hidden;">
        <!-- navbar -->
        <?php require('includes/navbar.php') ?>

        <!-- home -->
        <div class="home" id="home">
            <img src="assets/images/bg.jfif" alt="" class="bg-home">
            <div class="foto-home">
                <img src="assets/images/bruno.png" alt="" class="foto-bruno">
            </div>
            <div class="content-home">
                <h2 class="subtitle">Coming soon</h2>
                <h2 class="title">Bruno On Stage</h2>
                <h4 class="location">Jakarta International Stadium</h4>
                <div class="informasi">
                    <p>Tour For The latest Album – ‘24kmagic’</p>
                    <p>Sunday, September 13th-14th, 2024</p>
                </div>
            </div>
        </div>
        <div class="c" style="background-color: white; position: relative ; padding-top: 10px;">
            <div class="subhome">
                <div class="content1">
                    <div class="deskripsi">
                        <div class="">
                            <h1>The Bruno’s Concert</h1>
                            <p>Get ready for an unforgettable night as the sensational
                                Bruno Mars takes the stage on his highly anticipated world
                                tour! Known for his electrifying performances and
                                chart-topping hits, Bruno Mars promises an evening filled
                                with energy, emotion, and extraordinary music. Join us for
                                an exhilarating journey through his greatest hits and
                                experience the magic of live music like never before.
                                This is a concert event you won’t want to miss!
                            </p>
                        </div>
                        <a href="#ticket" class="button">Get Ticket</a>
                    </div>
                    <div class="album">
                        <div class="judul-album">
                            <span>A</span>
                            <span>L</span>
                            <span>B</span>
                            <span>U</span>
                            <span>M</span>
                        </div>
                        <div class="foto-album">
                            <img src="assets/images/24k.jpg" alt="" class="satu">
                            <img src="assets/images/monyet.jpg" alt="" class="dua">
                            <img src="assets/images/roket.jpg" alt="" class="tiga">
                            <img src="assets/images/sonic.jpg" alt="" class="empat">
                        </div>
                    </div>
                </div>
                <div class="content2">
                    <div class="foto-bruno" style="margin-top: 50px; margin-left: 400px;">
                        <img src="assets/images/bruno-gitar.jpg" alt="" srcset="">
                    </div>
                    <div class="deskripsi">
                        <h3>BRUNO MARS</h3>
                        <p>is now back to entertain us with his beautiful songs on tour</p>
                        <h1>Get Your Own Ticket Now</h1>
                    </div>
                </div>
            </div>
            <hr>
            <?php require('includes/howtoorder.php') ?>
            <!-- About -->
            <?php require('includes/about.php') ?>
            <hr>
            <!-- ticket -->
            <?php include("includes/ticket.php"); ?>
            <hr>
            <!-- layout -->
            <?php include("includes/layout.php"); ?>
            <hr>
            <!-- gallery -->
            <?php include("includes/galery.php"); ?>
            <?php include("includes/footer.php"); ?>
            <?php include ("includes/merch.php"); ?>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
</body>
</html>