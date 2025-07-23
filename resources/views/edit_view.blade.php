

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <div class="max-w-xl mx-auto mt-16 bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-6 text-center">Edit Post</h1>

        @if(!$post)
            <script>window.location.href = "/post";</script>
        @else
            <form action="{{ route('post.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" 
                           value="{{ old('name', $post->name) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500 p-2">
                </div>

                <!-- Description Field -->
                <div class="mb-4">
                    <label for="des" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="des" id="des" rows="4"
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500 p-2">{{ old('des', $post->des) }}</textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-2 rounded">
                        Update Post
                    </button>
                </div>
            </form>
        @endif
    </div>

</body>
</html>
