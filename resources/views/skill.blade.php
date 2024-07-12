<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        @include('layouts.sidebar')
        <div class="main">
            <div class="infoContainer">
                <div class="devInfo">
                    <div class="hello">Skills</div>
                    <div class="moreabout">
                        <ul>
                            <li>
                                <a href="#">Java </a>
                                <p>(Intermediate lavel)</p>
                            </li>
                            <li>
                                <a href="#">PHP</a>
                                <p>(Advance lavel)</p>
                            </li>
                            <li>
                                <a href="#">Laravel</a>
                                <p>(In Laravel Model folter, route, view, Assets folder, controller, blade template,
                                    migration etc)</p>
                            </li>
                            <li>
                                <a href="#">SQL</a>
                                <p>(Intermediate lavel)</p>
                            </li>
                            <li>
                                <a href="#">HTML</a>
                                <p>(Intermediate lavel)</p>
                            </li>
                            <li>
                                <a href="#">CSS</a>
                                <p>(Intermediate Lavel)</p>
                            </li>
                            <li>
                                <a href="#">JavaScript</a>
                                <p>(basec Lavel)</p>
                            </li>
                            <li>
                                <a href="#">MVC</a>
                                <p>(I have knowlage about full concept)</p>
                            </li>

                        </ul>

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