<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container" style="max-width: 600px; margin: 50px auto;">
        <h2>Home</h2>
        <p>Welcome to the Home page! Only logged-in users can see this page.</p>
        <nav style="margin-bottom: 20px;">
            <a href="/">Dashboard</a> |
            <form method="POST" action="/logout" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
            </form>
        </nav>
    </div>
</body>
</html>
