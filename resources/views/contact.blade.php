<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Optional: Tailwind CDN for styling -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">


    <div class="text-center">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">Welcome to My Laravel App!</h1>
        <p class="text-gray-700 text-lg">Your Laravel application is ready.</p>

        <div class="mt-6">
            <a href="{{ url('/products') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                View Products
            </a>
        </div>
    </div>
    <a href="{{ url('/about') }}" class="ml-4 text-blue-500 underline hover:text-blue-700">
About Us
</a>

</body>
</html>
