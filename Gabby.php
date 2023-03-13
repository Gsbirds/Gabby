<?php

if(!isset ($_POST['submit']))
{
    echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if(empty($name)||empty($visitor_email))
{
    echo"Name and email are mandatory!";
    exit;
}
$email_from = 'gabbyburgard@yahoo.com';
$email_subject = "New form submission";
$email_body = "You have recieved a new message from $name.\n".
    "email address: $visitor_email\n".
    "Here is the message: \n $message".

$to = "gabbyburgard@yahoo.com";
$headers = "From: email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

  
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Roboto+Slab:wght@100&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./Gabby.css" />
  <script type="text/javascript" src="./Gabby.js"></script>
  <title>Gabby Burgard</title>
</head>

<body>

  <header>
    <input type="checkbox" id="nav-menu1">
    <label id="nav-icon1" for="nav-menu1">
      <span>      <nav>
        <ul class="navItems">

          <li> <a class="nav1" href="https://frontendmasters.com/teachers/jen-kramer/" target="_blank">Projects</a></li>
          <li> <a class="nav2" href="https://frontendmasters.com/teachers/jen-kramer/" target="_blank">About</a></li>
          <li><a class="nav3"  href="https://frontendmasters.com/teachers/jen-kramer/" target="_blank">Contact</a></li>
          <li><a href="https://frontendmasters.com/teachers/jen-kramer/" target="_blank"><i
                class="fa-brands fa-linkedin"></i></a></li>
          <li><a href="https://frontendmasters.com/teachers/jen-kramer/" target="_blank"><i
                class="fa-brands fa-github"></i></a></li>
          <li><button class="resume" href="https://frontendmasters.com/teachers/jen-kramer/"
              target="_blank">Resume</button></i></li>
        </ul>
      </nav></span>
      <!-- <span></span>
      <span></span> -->

<!-- <hr class="first">
<hr class="second">
<hr class="third">
 -->

    </label>
  </header>
  <div class="fullname">

    <span class="header-first"> Gabrielle</span>

    <script src="https://kit.fontawesome.com/79acb8bbba.js" crossorigin="anonymous"></script>
  </div>
  <span class="hidden-div"><span>G</span><span>a</span><span>b</span><span>b</span><span>y</span></span>

  <span class="header"> Burgard</span>
  
  <section id="Me">
  <section id="intro">

    <p class="name">Hi, my name is <span>Gabby</i></span></p>

    <p class="name">I'm an educator specializing in HTML, CSS, user experience, and no-code technologies.</p>
    <p>Currently, I'm creating courses for <a href="https://frontendmasters.com/teachers/jen-kramer/"
        target="_blank">Frontend Masters</a>.</p>

    <div class="arrow bounce"></div>

  </section>
  <img class="shihtzu" src="/home/gabby/Portfolio/bg-shih-tzu-hero-m.jpg"/>
</section>

  <p> </p>

  <hr class="fourth">

  <div class="section-blue">
    <section id="projects">
      <h2>Projects I've worked on</h2>
      <article>
        <div class="text">
          <h4>Latest Project</h4>
          <h3></h3>
          <p class="blackbox">Description of the project. This should be fairly concise while also describing the key
            components that you developed or worked on. It can be as long as you need it to be but should at least be a
            few sentences long. Be sure to include specific links anywhere in the description. A link looks like <a
              href="https://frontendmasters.github.io/grid-flexbox-v2/">this</a>, and multiple links look <a
              href="#">like this</a> and <a href="#">like this</a>.</p>
          <h4>Technologies used include:</h4>
          <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>SVG</li>
          </ul>
        </div>
        <img src="https://assets.codepen.io/296057/fem-gettingstartedcss-ch5-1.png"
          alt="Screenshot of the Wall of Wonder." />
      </article>
    </section>
  </div>

  <hr class="fifth">

  <section id="contact">
    <h2>Contact me</h2>
    <p class="message">I'm always interested in hearing about
      [state what it is you'd like to get emails and contacted about].</p>
    

  <section>
        <form action="subscriberform.php" method="post">
          <ul>
            <li>
              <label class= "name" for="name">Name:</label>
              <input type="text" id="name" name="user_name" />
            </li>
          <li>
              <label class= "email" for="mail">Email:</label>
              <input type="email" id="email" name="user_email" />
            </li>
            <li>
              <label for="msg">Message:</label>
              <textarea id="message" name="message"></textarea>
            </li>
          </ul>
          <button class="form-button" type="submit">Send</button>

        </form>
      
  </section>
  </section>

  <footer>
    <h1>Gabby Burgard <i id="heart" class="fa-solid fa-heart"></i> Web Developer and Artist.</h1>

<!-- put the icons back!! -->

    <p> <i class="fa-solid fa-copyright"></i> 2022 Gabrielle Burgard. All Rights Reserved.</p>
  </footer>
</body>

</html>