<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container" style="max-width: 600px; margin: 50px auto;">
        <h2>User Profile</h2>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <a href="/home">Back to Home</a>
    </div>
</body>
</html>
