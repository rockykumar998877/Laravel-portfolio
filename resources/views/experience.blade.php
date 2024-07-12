<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rocky-portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        @include('layouts.sidebar')
        <div class="main">
            <div class="infoContainer">
                <div class="devInfo">
                    <div class="hello">Experiences</div>
                    <div class="moreabout">
                        <div id="myeducation">
                            <ul>
                                <li>
                                    <a href="#">Jingle Infotech Limited</a>
                                    <p><br><br>
                                        I have 6 months internship experience with Jingle Infotech Limited at Lajpat
                                        Nagar Delhi. <br>
                                        I have worked on some projects in the company: <br>
                                        There are my project <br><br>
                                         <a href="https://www.godawaripowerispat.com/" target="_blank"
                                            rel="noopener noreferrer"style="color: blue;">Godawari Power & Ispat</a>
                                    </p>

                                </li><br>

                            </ul>
                        </div>
                    </div>
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