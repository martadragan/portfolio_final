<?php

include_once 'form.php'; 
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="css/index.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <title>Marta Dragan Portfolio</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ABOUT ME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">MY SKILLS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PROJECTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACT</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- header -->
<div class="header">
    <div class="headerContent">
  <h1 data-aos="fade-right" data-aos-duration="3000">MARTA DRAGAN</h1>
  <h2 data-aos="fade-left" data-aos-duration="3000">FULL-STACK DEVELOPER</h2>
</div>
</div>
<div class="headerContentScroll">
  <div class="headerText">
    <h4>Cat ipsum dolor sit amet, lick sellotape so meow all night having their mate disturbing sleeping humans. Human give me attention meow making sure that fluff gets into the owner's eyes for hide from vacuum cleaner. </h4>
  </div>
  <div class="advText">
    <div class="advPart1">
      <div class="adv">
        <h3 class="highlight">DESIGN</h3>
          <p>Cat ipsum dolor sit amet, lick sellotape so meow all night having their mate disturbing sleeping humans.
          </p>
      </div>
      <div class="adv2">
        <h3 class="highlight">DESIGN</h3>
          <p>Cat ipsum dolor sit amet, lick sellotape so meow all night having their mate disturbing sleeping humans.
          </p>
      </div>
      </div>
      <div class="advPart2">
        <div class="adv3">
          <h3 class="highlight">DESIGN</h3>
            <p>Cat ipsum dolor sit amet, lick sellotape so meow all night having their mate disturbing sleeping humans.
            </p></div>
        <div class="adv4">
          <h3 class="highlight">DESIGN</h3>
            <p>Cat ipsum dolor sit amet, lick sellotape so meow all night having their mate disturbing sleeping humans.
            </p>
        </div>
      </div>
      </div>
  </div>

<!-- about me -->

<section id="about" class="aboutMe">

  <div class="flexAbout">
     <div class="backgroundAbout">
     </div>
    <div class="aboutMeBox">
       <h2>ABOUT ME</h2> 
        <div class="aboutMeImg">
        </div>
        <div class="aboutMeText">
        <p>Cat ipsum dolor sit amet, lick sellotape so meow all night having their mate disturbing sleeping humans. Human give me attention meow making sure that fluff gets into the owner's eyes for hide from vacuum cleaner. <br> Cough hairball on conveniently placed pants. <br> <br>  Flex claws on the human's belly and purr like a lawnmower more napping, more napping all the napping is exhausting or meow meow mama.<br><br> Cough hairball on conveniently placed pants.  </p>
        </div>
    </div>
  </div>
</section>
<!-- koniec about me -->
<!-- skills -->

<section id="skills" class="mySkills">
    <div class="skills">
        <h2>MY SKILLS</h2>
        <li>
            <h3>HTML 5</h3><span class="bar"><span class="html" data-aos="fade-right" data-aos-duration="3000" data-aos-easing="ease-in-sine"></span></span>
        </li>
        <li>
            <h3>CSS, SASS</h3><span class="bar"><span class="css" data-aos="fade-right" data-aos-duration="3000" data-aos-easing="ease-in-sine"></span></span>
        </li>
        <li>
            <h3>JAVASCRIPT</h3><span class="bar"><span class="javascript" data-aos="fade-right" data-aos-duration="3000" data-aos-easing="ease-in-sine"></span></span>
        </li>
        <li>
            <h3>REACT</h3><span class="bar"><span class="react" data-aos="fade-right" data-aos-duration="3000" data-aos-easing="ease-in-sine"></span></span>
        </li>
        <li>
            <h3>JQUERY</h3><span class="bar"><span class="jquery" data-aos="fade-right" data-aos-duration="3000" data-aos-easing="ease-in-sine"></span></span>
        </li>
        <li>
            <h3>PHP</h3><span class="bar"><span class="php" data-aos="fade-right" data-aos-duration="3000" data-aos-easing="ease-in-sine"></span></span>
        </li>
        <li>
            <h3>LARAVEL</h3><span class="bar"><span class="laravel" data-aos="fade-right" data-aos-duration="3000" data-aos-easing="ease-in-sine"></span></span>
        </li>
        <li>
            <h3>UX</h3><span class="bar"><span class="ux" data-aos="fade-right" data-aos-duration="3000"  data-aos-easing="ease-in-sine"></span></span>
        </li>
    </div>
    <div class="skillsBackground"></div>
</section>

<!-- koniec sekcji skills -->

<!-- projects -->
<div id="projects" class="portfolio">
    <h2>MY PORTFOLIO</h2>
        <div class="container">
                <div class="box">
                    <div class="imgBox">
                        <img src="img/img.png" alt="project1">
                        <div class="details">
                            <div class="contentBox">
                            <h2>CAT IPSUM</h2>
                            <p>Cat ipsum dolor sit amet, lick sellotape so meow all night having their mate disturbing sleeping humans. Human give me attention meow making.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBox">
                        <img src="img/img.png" alt="project2">
                        <div class="details">
                            <div class="contentBox">
                            <h2>CAT IPSUM</h2>
                            <p>Cat ipsum dolor sit amet, lick sellotape so meow all night having their mate disturbing sleeping humans. Human give me attention meow making.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBox">
                        <img src="img/img.png" alt="project3">
                        <div class="details">
                            <div class="contentBox">
                            <h2>CAT IPSUM</h2>
                            <p>Cat ipsum dolor sit amet, lick sellotape so meow all night having their mate disturbing sleeping humans. Human give me attention meow making.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBox">
                        <img src="img/img.png" alt="project4">
                        <div class="details">
                            <div class="contentBox">
                            <h2>CAT IPSUM</h2>
                            <p>Cat ipsum dolor sit amet, lick sellotape so meow all night having their mate disturbing sleeping humans. Human give me attention meow making.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBox">
                        <img src="img/img.png" alt="prpject5">
                        <div class="details">
                            <div class="contentBox">
                            <h2>CAT IPSUM</h2>
                            <p>Cat ipsum dolor sit amet, lick sellotape so meow all night having their mate disturbing sleeping humans. Human give me attention meow making.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="imgBox">
                        <img src="img/img.png" alt="project6">
                        <div class="details">
                            <div class="contentBox">
                            <h2>CAT IPSUM</h2>
                            <p>Cat ipsum dolor sit amet, lick sellotape so meow all night having their mate disturbing sleeping humans. Human give me attention meow making.</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
</div>

  <!-- fine me here -->
    <div id="contact" class="socialMediaLinks">
        <h2>FIND ME</h2>
             <div class="findMeIcons"  >
                 <div class="icon"><a href="https://github.com/"><i class="fab fa-github fa-10x"></i></a></div>
                 <div class="icon"><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in fa-10x"></i></a></div>
                 <div class="icon"><a href="https://www.instagram.com/"><i class="fab fa-instagram fa-10x"></i></a></div>
             </div>
    </div>
    <!-- koniec find me -->

<!-- contact section -->
<div class="contactH2">
  <h2 class="contactH2">CONTACT</h2></div>
<section class="contact"> 
  <div class="backgroundContact"></div>
    <div class="contactForm">
        <form method="post">
            <div class="nameContact">
                <label for="firstname"><h2 class="contH2">First name</h2></label>
                <input type="text" id="firstname" name="firstname" required>
                <label for="lastname"><h2 class="contH2">Last name</h2></label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="emailContact">
                <label for="email"><h2 class="contH2">E-mail</h2></label>
                <input type="email" id="email" name="email" required>
                <label for="phone"><h2 class="contH2">Phone</h2></label>
                <input type="number" id="phone" name="phone" required>
            </div>
            <div class="messageContact">
                <h2 class="contH2">Message</h2>
                <textarea name="text" rows="10" cols="40">
                </textarea><br>
                <input class="btnSub" type="submit" name="submit" value="Submit">
            </div>
        </form>
      </div>
    
</section>

<!-- koniec seksji contact me -->
<script src="js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
  <script 
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  ></script>
  <script 
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
  ></script>

</body>
</html>