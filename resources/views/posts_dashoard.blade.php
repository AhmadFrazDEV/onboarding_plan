<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <div class="container mx-auto px-4 py-12">
        <h1 class="text-3xl font-bold mb-8 text-center">All Posts</h1>

        @if($posts->isEmpty())
            <p class="text-center text-gray-600">No posts found.</p>
        @else
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $p)
                    <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition">
                        <h2 class="text-xl font-semibold mb-2">{{ $p->name }}</h2>
                        <p class="text-gray-600 mb-4">{{ \Illuminate\Support\Str::limit($p->des, 100) }}</p>

                        <!-- Edit Button -->
                        <a href="{{ route('post.edit', $p->id) }}" 
                           class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mr-2">
                            Edit
                        </a>

                        <!-- Delete Form -->
                        <form action="{{ route('post.destroy', $p->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                                Delete
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

</body>
</html>
