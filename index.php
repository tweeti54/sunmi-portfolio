<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Sunmi Chang</title>
</head>

<body>
    <header>
        <div class="nav-wrapper">
            <nav>
                <div class="logo"><a href="/portfolio/"><img src="assets/logo.png"></a></div>
                <ul class="menu">
                    <li><a href="works.html">works</a></li>
                    <li><a href="about.html">about</a></li>
                    <!-- <li><a href="resources.html">resources</a></li> -->
                    <li><a href="contact.html">contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <div class="hero">
                <video src="./assets/hero-logo2.mp4" autoplay muted></video>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="container">
                <h2>Works</h2>
                <p class="top_text">This section is a collection of my work. These works will give you an idea of my interests,talents, and style.</p>
                    <article>
                        <div class="img-wrapper"><img src="assets/img1.jpg" alt="A drawing for still life"></div>
                        <div class="contents">
                            <h3>Drawing and Painting</h3>
                            <p>This section showcases a collection of drawing and painting works. The drawings were created using charcoal, while the paintings are primarily oil on canvas.
                            </p>
                            <a href="drawingpainting.html">See More</a>
                        </div>
                    </article>
                    <article>
                        <div class="img-wrapper"><img src="assets/img2.jpg" alt="A Rome Travel Poster"></div>
                        <div class="contents">
                            <h3>Poster</h3>
                            <p>In this section, you can enjoy various poster works. I created posters using Adobe Photoshop, Illustrator, or hand-drawn illustrations with Procreate and watercolor. These include infographics and timelines.
                            </p>
                            <a href="poster.html">See More</a>
                        </div>
                    </article>
                    <article>
                        <div class="img-wrapper"><img src="assets/img3.jpg" alt="Halloween Animation"></div>
                        <div class="contents">
                            <h3>Animation</h3>
                            <p>This section is a collection of my various animation works. I created these using Adobe
                                Photoshop, Animate, and After Effects.</p>
                            <a href="animation.html">See More</a>
                        </div>
                    </article>
                    <article>
                        <div class="img-wrapper"><img src="assets/img4.jpg" alt="A Still Life Photo"></div>
                        <div class="contents">
                            <h3>Photography</h3>
                            <p>This section is a collection of photos taken during digital photography class. During
                                this
                                time,
                                I learned that taking pictures, such as capturing the moment and framing, is also an
                                artistic
                                act.</p>
                            <a href="photography.html">See More</a>
                        </div>
                    </article>
                    <article>
                        <div class="img-wrapper"><img src="assets/img5.jpg" alt="Website"></div>
                        <div class="contents">
                            <h3>Website</h3>
                            <p>This section showcases a variety of website designs.</p>
                            <a href="website.html">See More</a>
                        </div>
                    </article>
                    <article class="forthimg">
                        <div class="img-wrapper"><img src="assets/img6.jpg" alt="A Magazine Design"></div>
                        <div class="contents s_letter">
                            <h3>Others</h3>
                            <p>In this section, there are various works such as design for space and shape, which are
                                the
                                basics
                                of design, color wheel, collage, font design, and magazine print design. Through various
                                activities, I feel that the range of thinking about design is much wider. </p>
                            <a href="others.html">See More</a>
                        </div>
                    </article>
                </div>
        </section>
        <!-- <section class="con_resources">
            <div class="container2">
                <h2>RESOURCES</h2>
                <p class="top_text2">This is a space to share useful materials and information for design. Here are some
                    sites where you
                    can get free images or learn design inspiration or knowledge.</p>
                <div class="containerbox">
                    <article>
                        <div class="card_img"><img src="assets/img5.jpg"></div>
                        <div>
                            <h3>Behance</h3>
                            <p>Behance is a social media platform owned by Adobe that serves to showcase and discover
                                creative work. It helps to find inspiration or learn a new style through various works.
                            </p>
                            <a href="resources.html">Learn More</a>
                        </div>
                    </article>
                    <article>
                        <div class="card_img"><img src="assets/img6.jpg"></div>
                        <div>
                            <h3><span>99</span>designs</h3>
                            <p>99designs is a company that operates a freelance platform for connecting graphic
                                designers
                                with their clients. However, 99designs is a good site to learn about ...</p>
                            <a href="resources.html">Learn More</a>
                        </div>
                    </article>
                    <article>
                        <div class="card_img"><img src="assets/img7.jpg"></div>
                        <div>
                            <h3>Unsplash</h3>
                            <p>Unsplash is a website dedicated to proprietary stock photography. Since 2021, it has been
                                owned by Getty Images.Here you can get good quality images ...</p>
                            <a href="resources.html">Learn More</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>  -->
    </main>
    <footer>
        <a href="https://www.instagram.com/tweeti54/">Instagram</a>
        <p>©2023 Sunmi Chang</p>
    </footer>

    <?php
    if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    unset($_SESSION['message']);
    ?>
</body>

</html>