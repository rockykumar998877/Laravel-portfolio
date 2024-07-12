<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        @include('layouts.sidebar')
        <div class="main">
            <div class="infoContainer">
                <div class="devInfo">
                    <div class="hello">About</div>
                    <div class="moreabout">List your technical skills and technologies essential for Laravel
                        development. Include your expertise in PHP programming, Laravel framework, MySQL databases,
                        JavaScript, HTML, CSS, version control systems (such as Git), and other relevant tools or
                        libraries.
                        Your front-end development knowledge, API integration, database management, and troubleshooting
                        abilities should be highlighted as well.
                        Don’t forget to also include soft skills like communication, teamwork, and adaptability, as
                        these contribute to your overall effectiveness as a developer.
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