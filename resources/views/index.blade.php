<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rocky-Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
    @include('layouts.sidebar')
    <div class="main">
        <div class="infoContainer">
            <div class="devInfo">
                <div class="hello">Hi i am</div>
                <div class="name">Rocky Kumar</div>
                <div class="about">Developer</div>
                <div class="moreabout">A highly motivated IT professional seeking an entry level position in a challenging and dynamic organization ,where I can utilize my
                    technical skills and knowledge to contribute to the company’s
                    success .I am committed to continuous learning and ready to
                    contribute to contribute to a dynamic team .while expanding my
                    expertise in IT field</div>
                <div class="button">
                    <a href="images/CV.pdf" target="_blank">
                        <button class="btn">Download CV</button></a>
                    <button class="btn"><a href="contact.php">Contact Me</a></button>
                </div>
            </div>
            <div class="devPic"><img src="images/dev2.png" alt="Rocky kumar"></div>
        </div>
    </div>
</div>
  </body>
</html>