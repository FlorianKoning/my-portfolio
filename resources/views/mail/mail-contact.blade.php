<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio | Mail</title>
</head>
<body>
    <h1>New contact mail from: {{ $fromAddress }}</h1>
    <h2>Subject: {{ $subject }}</h2>

    <p>{{ $mailMessage }}</p>
</body>
</html>

