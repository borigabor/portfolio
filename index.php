<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Personal Portfolio</title>

 <!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

<!-- aos css link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

<div id="menu-btn" class="fas fa-bars"></div>

<a href="#home" class="logo">portfolio</a>

<nav class="navbar">
    <a href="#home">home</a>
    <a href="#about">about</a>
    <a href="#portfolio">portfolio</a>
</nav>

<div class="share">
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-twitter"></a>
    <a href="#" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-linkedin"></a>
    <a href="#" class="fab fa-github"></a>
</div>

</header>
<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="flex">

        <div class="image" data-aos = "fade-right">
            <img src="./images/user-img2.jpg" alt="">
        </div>

        <div class="content">
            <h3 data-aos="fade-up">Hi, im Bori Gábor</h3>
            <span data-aos="fade-up">web designer & developer</span>
            <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis at neque consequatur. Eligendi, voluptatem sunt.</p>
            <a data-aos="fade-up" href="#about" class="btn">about me</a>
        </div>

    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="title" data-aos="fade-up"><span>about me</span></h1>

<p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil qui harum, deserunt
     suscipit accusamus asperiores fugiat repellat minima soluta sit?</p>

     <div class="skills" data-aos="fade-up">

    <h1 class="title"><span>skills</span></h1>

    <div class="progress">
        <div class="bar" data-aos="fade-left"><h3><span>HTML</span><span>95%</span></h3></div>
        <div class="bar" data-aos="fade-right"><h3><span>CSS</span><span>80%</span></h3></div>
        <div class="bar" data-aos="fade-left"><h3><span>JavaScript</span><span>65%</span></h3></div>
        <div class="bar" data-aos="fade-right"><h3><span>PHP</span><span>80%</span></h3></div>
    </div>

     </div>

     <div class="education" data-aos="fade-up">

<h1 class="title" data-aos="fade-up"><span>education</span></h1>

<div class="box-container">

<div class="box" data-aos="fade-right">
    <span>(2014 - 2017)</span>
    <h3>Programtervező informatikus-asszisztens</h3>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae
         reprehenderit distinctio omnis labore nesciunt officia.</p>
</div>

<div class="box" data-aos="fade-left">
    <span>(2020 - 2021)</span>
    <h3>CodeBerry School (Weboldal készítés tanfolyam)</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis ipsa sit alias nostrum totam magnam.</p>
</div>

</div>

</div>

</section>

<section class="portfolio" id="portfolio">

<h1 class="title"><span>portfolio</span></h1>

<div class="box-container">

    <a href="https://borigabor.github.io/cosmetics_website/" class="box" data-aos="zoom-in">
            <div class="image">
                <img src="./images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>
    </a>

    <a href="https://borigabor.github.io/event_organiser/" class="box" data-aos="zoom-in">
            <div class="image">
                <img src="./images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>
    </a>
    
    <a href="https://borigabor.github.io/adventure-website/" class="box" data-aos="zoom-in"">
            <div class="image">
                <img src="./images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>
    </a>

    <a href="https://borigabor.github.io/Build_website/index.html" class="box" data-aos="zoom-in">
            <div class="image">
                <img src="./images/img-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>
    </a>

    <a href="https://borigabor.github.io/Educa_website/home.html" class="box" data-aos="zoom-in">
            <div class="image">
                <img src="./images/img-5.jpg" alt="">
            </div>
            <div class="content">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>
    </a>

    <a href="https://borigabor.github.io/test-travel/" class="box" data-aos="zoom-in">
            <div class="image">
                <img src="./images/img-6.jpg" alt="">
            </div>
            <div class="content">
                <h3>web development</h3>
                <span>(2020 - 2022)</span>
            </div>
    </a>

</div>

<div class="more-btn" style="margin-top: 3rem;"><a href="#" class="btn">more project</a></div>

</section>

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Bori Gábor</span> </div>


<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>    
</body>
</html>