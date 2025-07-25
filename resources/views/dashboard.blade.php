<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <nav style="background: #f8f9fa; padding: 10px; margin-bottom: 20px;">
        <a href="/">Dashboard</a> |
        @if(session()->has('user_id'))
            <a href="/home">Home</a> |
            <form method="POST" action="/logout" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
            </form>
        @else
            <a href="/login">Home</a> |
        @endif
    </nav>
    <div class="container" style="max-width: 600px; margin: 50px auto;">
        <h2>Welcome to the Dashboard!</h2>
        <p>You are successfully logged in.</p>
    </div>
</body>
</html>
