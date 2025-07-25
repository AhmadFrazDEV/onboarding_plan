<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container" style="max-width: 400px; margin: 50px auto;">
        <h2>Login</h2>
        <form method="POST" action="/login">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required autofocus>
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 20px; width: 100%;">Login</button>
        </form>
    </div>
</body>
</html>
