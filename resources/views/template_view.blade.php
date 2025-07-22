


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lade Template </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Optional: Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-800 font-sans">

    <h1>Template Variales Rendering</h1>
    <h1>{{ $name }}</h1>
<!-- If else statements -->
    @if($name)
        <p>Name is present!</p>
        <p>More Paragraphs here...</p>
    @else
        <p>Name is Missing</p>
    @endif

    <!-- isset -->
     @isset($name)
        <p>isset is working name is present {{ $name }}</p>
     @endisset
     
     <!--Loop  -->
     @for($i = 0 ; $i < 10 ; $i++)
     {
       <p>{{ $i }}</p> 
     }
     @endfor

     
</body>
</html>
