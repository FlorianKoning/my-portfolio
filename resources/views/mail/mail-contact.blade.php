<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio | Mail</title>
</head>
<body class="bg-background">

    <div class="bg-gradient-to-bl from-gradientBackground to-background shadow-xl">
        <h1 class="text-xl text-white">New contact mail from: {{ $fromAddress }}</h1>
        <h2 class="text-lg text-white">Subject: {{ $subject }}</h2>
    </div>
    
    <p class="text-base text-white">{{ $mailMessage }}</p>
</body>
</html>

