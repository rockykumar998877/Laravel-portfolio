<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="sidebar">
        <nav>
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('about') }}">about</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="{{ route('experience') }}">Experiences</a></li>
                <li><a href="{{ route('contact') }}">Contact me</a></li>
                <li><a href="{{ route('skill') }}">Skills</a></li>
                <li><a href="{{ route('education') }}">Educations</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>