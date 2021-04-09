<?php include 'action.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Jasey Smith | Front-end Developer</title>
  </head>
  <body>
    <header id="header">
      <div class="container">
        <a class="logo" href="index.php">J<span>S</span></span></a>
        <nav id="navbar">
          <input type="checkbox" id="check" onClick="disableScroll()">
          <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
          </label>
          <ul class="nav-links">
            <li><a onclick="uncheck(), enableScroll()" href="index.php">Home</a></li>
            <li><a onclick="uncheck(), enableScroll()" href="#about">About</a></li>
            <li><a onclick="uncheck(), enableScroll()" href="#projects">Work</a></li>
            <li><a onclick="uncheck(), enableScroll()" href="#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="home">
      <div class="container">
        <div class="content-column">
          <h1>Hi,<br> I'm Jasey</h1>
          <p class="home-text">A <span class="green-text">front-end developer</span> looking to <span class="line-break">grow your business with code.</span></p>
          <a href="#projects" class="button">View my work</a>
        </div>
        <div class="position-column">
          <div class="canvas-column">
            <div class="row">
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner two"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner four"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner six"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner eight"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner ten"></div></div></div>
            </div>
            <div class="row">
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner one"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner three"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner five"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner seven"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner nine"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner eleven"></div></div></div>
            </div>
            <div class="row">
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner two"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner four"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner six"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner eight"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner ten"></div></div></div>
            </div>
            <div class="row">
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner one"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner three"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner five"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner seven"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner nine"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner eleven"></div></div></div>
            </div>
            <div class="row">
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner two"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner four"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner six"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner eight"></div></div></div>
              <div class="hexagon-wrap"><div class="hexagon"><div class="hexagon inner ten"></div></div></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about">
      <h2>About Me</h2>
      <hr class="h2-divider">
      <div class="container">
        <div class="card">
          <div class="hex-wrap">
            <div class="hex"><img class="about-icons" src="img/creativity.svg" alt="Design tools"></div>
          </div>
          <h3>Designer</h3>
          <p class="about-text">I admire simple web layouts, clean design patterns, and interactions that engage users.</p>
        </div>
        <div class="card">
          <div class="hex-wrap">
            <div class="hex"><img class="about-icons" src="img/web-programming.svg" alt="Web developer icon"></div>
          </div>
          <h3>Developer</h3>
          <p class="about-text">I enjoy bringing ideas and businesses to life with an efficient and responsive website.</p>
        </div>
        <div class="card">
          <div class="hex-wrap">
            <div class="hex"><img class="alt-about-icon" src="img/physics.svg" alt="Lightbulb"></div>
          </div>
          <h3>Programmer</h3>
          <p class="about-text">Programming is my passion and in the future, I plan to build something truly innovative.</p>
        </div>
      </div>
    </section>
    <section id="projects">
      <h2>Recent Work</h2>
      <hr class="h2-divider">
      <div class="container">
        <div class="img-container">
          <img class="proj-img" src="img/project-one-img.jpg" alt="project image">
          <div class="overlay">
            <p class="proj-desc">Scary Places</p>
            <a class="button" href="project-one.html">View Project</a>
          </div>
        </div>
        <div class="img-container">
          <img class="proj-img" src="img/project-two-img.jpg" alt="project image">
          <div class="overlay">
            <p class="proj-desc">Hay's Clays Co.</p>
            <a class="button" href="project-two.html">View Project</a>
          </div>
        </div>
        <div class="img-container">
          <img class="background-img" src="img/project-three-img.jpg" alt="project image">
          <div class="overlay">
            <p class="proj-desc">Jasey Smith</p>
            <a class="button" href="project-three.html">View Project</a>
          </div>
        </div>
        <div class="img-container project-four">
          <p class="proj-desc">Loading...</p>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="container">
        <h2>Let's Talk!</h2>
        <hr class="h2-divider">
        <p class="contact-text">Have a question or want to work together?</p>
        <form class="form" method="POST" action="index.php#contact">
          <input type="text" name="name" placeholder="Name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES) : ''; ?>">
          <input type="text" name="email" placeholder="Enter email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : ''; ?>">
          <textarea name="message" placeholder="How may I help?"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES) : ''; ?></textarea>
          <?php echo $alert; ?>
          <input type="submit" name="submit" class="button" value="Send Message">
        </form>
      </div>
    </section>
    <footer>
      <div class="container">
        <nav class="footer-links">
          <ul>
            <li><a href="#"><i class="fab fa-instagram social-link"></i></a></li>
            <li><a href="#"><i class="fab fa-github social-link"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in social-link"></i></a></li>
            <li><a href="#"><i class="fab fa-codepen social-link"></i></a></li>
          </ul>
        </nav>
        <p class="copyright">© 2021 <a href="index.php">Jasey Smith</a></p>
      </div>
    </footer>
    <script src="scripts/script.js"></script>
  </body>
</html>
