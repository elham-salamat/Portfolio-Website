<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Elham Salamat - Portfolio</title>
  <link rel="shortcut icon" type="image/x-icon" href="#">

  <!-- reset the default web page style -->

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css?<?= time(); ?>">
</head>

<body>

  <!-- navbar -->
  <nav class="main-navigation header__item">
    <div class="logo">
      <h4>Elham</h4>
    </div>
    <ul role="menubar" class="nav-list" id="nav-list">
      <li role="presentation">
        <a href="#aboutme" role="menuitem" class="nav-list__item--active">About me</a>
      </li>
      <li role="presentation">
        <a href="#projects" role="menuitem" class="nav-list__item">Projects</a>
      </li>
      <li role="presentation">
        <a href="#contact" role="menuitem" class="nav-list__item">Contact</a>
      </li>
    </ul>
    <div class="burger-menu">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>
  <div>
    <section class="introduction">
      <div class="container">
        <img src="img/portrait-elhamsalamat.jpg" alt="my picture" class="container__picture">
        <div class="description">
          <h1 class="name">Razieh Salamat</h1>
          <h5>Full-Stack Web Developer</h5>
          <p class="my-message">
            With a high passion for programming, I will offer my skills in HTML, CSS, JavaScripts, PHP and related frameworks to take on new challenges and bring more success to your prestigous company.
          </p>
        </div>
      </div>

      <!-- footer -->
      <div class="footer">
        <a href="https://github.com/elham-salamat" target="_blank">
          <i class="fa fa-github-square"></i>
        </a>
        <a href="https://www.linkedin.com/in/elham-salamat-4991b486/" target="_blank">
          <i class="fa fa-linkedin-square" role="img" aria-label="LinkedIn"></i>
        </a>
        <a href="https://www.facebook.com/elham.salamat.9" target="_blank">
          <i class="fa fa-facebook-square" role="img" aria-label="Facebook"></i>
        </a>
      </div>

    </section>

    <section>
      <section id="aboutme" class="aboutme">
        <h3>About me</h3>
        <div class="aboutme-description">
          <p class="aboutme-description__item">
            "If you don't design your own life plan, chances are you'll fall into someone else's plan. And guess what they have planned for you? Not much." &nbsp;&nbsp;&nbsp;&nbsp;Jim Robert
          </p>
          <p class="aboutme-description__item">
            As a person who has a lot of passion for learning, I have tried many things in my life and I often throw myself into challenges. Doing different things not only was full of enjoyment for me but it also helped me to find out what I am really interested in.<br>
            After getting my PhD in Agricultural Engineering, I thought it is the time to establish my life, as in last two years I was seeking the time to make a fresh start and go for my interest - programming.<br>
            I love programming - why!? I really have no clear answer, but when I am into a coding challenge usually I lose track of time and the only thing that distracts me is HUNGER 😃 I love food more 😉<br>
            Anyway, in July 2021 finally I got the ball rolling and I started PHP learning as a backend developer and thanks to my good programming background, it went very quickly. At the moment I am doing a full-stack web development course by CareerFoundry in order to obtain enough experience so as to I am able to work as a junior web developer in a professional team to challenge myself and to continue learning. <br>
            I am very enthusiastic and a fast learning person. I am flexible and enjoy working in a team.
          </p>
          <a href="files/cv.pdf" download class="button aboutme-description__item" target="_blank">Download my CV</a>
        </div>
      </section>
    </section>

    <section id="projects" class="projects">
      <h3>Most recent projects</h3>
      <div>
        <a href="myprojects.php" target="_blank">
          <img alt="MyFlix-A Rest API" src="img/myflix.jpg" />
        </a>
        <a href="myprojects.php" target="_blank">
          <img alt="Chat Here" src="img/chathere.jpg" />
        </a>
        <a href="myprojects.php" target="_blank">
          <img alt="MyFlix-Client-Angular" src="img/myflix-angular.jpg" />
        </a>
      </div>
      <a href="myprojects.php" class="button aboutme-description__item" target="_blank">More projects</a>
    </section>

    <section id="contact" class="contact">
      <div class="contactinfo">
        <h3>Contact Info</h3>
        <p>
          Street, House Number <br>
          Postcode Potsdam <br>
          Germany
        </p>
        <a href="tel: +4915221443260">Telephone: +4915221443260</a>
        <br>
        <a href="mailto: elham_salamat63@yahoo.com">Email: me@elhamsalamat.com</a>
        <br>
        <p> * &nbsp;* &nbsp;* &nbsp;* &nbsp;*</p>
      </div>
      <div class="form">
        <p>I'd love to hear from you! Leave a message below and I'll get in touch with you shortly</p>
        <form action="https://elhamsalamat.com/php/contact.php" method="post" id="contactform">
          <label for="contact-email" class="standard-label">Email</label>
          <br>
          <input type="email" id="contact-email" name="email" required>
          <br>
          <label for="tel" class="standard-label">Telephone(optional)</label>
          <br>
          <input type="tel" id="tel" name="tel">
          <br>
          <label for="msg" class="standard-label">Message</label>
          <br>
          <textarea id="msg" name="msg" required maxlength="500" rows="10"></textarea>
          <br>
          <input class="button" type="submit" value="send message">
        </form>
        <?php
        if (isset($_GET['result']) && isset($_GET['msg'])) {
          $message = "";

          switch ($_GET['result']) {

            case "failed":
              switch ($_GET['msg']) {

                case "invalidemail":
                  $message = "Please enter a valid email!";
                  break;

                case "trylater":
                  $message = "Your email has not been sent. Please try it again!";
                  break;
              }
              echo
              "
                  <div class='alert alert-danger alert-dismissable'>
                      <button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>
                      {$message}
                  </div>
              ";
              break;

              break;

            case "done":
              $message = "Your email has been sent successfuly. I will contact you ASAP";
              echo
              "
                  <div class='alert alert-success alert-dismissable'>
                      <button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>
                      {$message}
                  </div>
              ";
              break;
          }
        }
        ?>
      </div>
    </section>
  </div>
  <script src="js/tota11y.min.js?<?= time(); ?>"></script>
  <script src="js/portfolio.js?<?= time(); ?>"></script>
</body>

</html>