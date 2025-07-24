<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts & Tagged Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 font-sans leading-relaxed">

    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif


    <div class="max-w-5xl mx-auto px-6 py-10">
        <a href="{{ route('formRoute') }}" 
   class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg transition inline-block">
    Register
    </a>
        <h1 class="text-3xl font-bold text-gray-900 border-b pb-4 mb-6">📄 Posts Overview</h1>
        <!-- 🔍 Search Bar -->
        <form method="GET" action="{{ route('posts.index') }}" class="mb-8">
            <div class="flex flex-col md:flex-row items-stretch gap-4">
                <!-- Search by Post Title -->
                <input 
                    type="text" 
                    name="search_post" 
                    value="{{ request('search_post') }}" 
                    placeholder="Search by post title..." 
                    class="flex-1 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
            
                <!-- Search by Tag/User Name -->
                <input 
                    type="text" 
                    name="search_user" 
                    value="{{ request('search_user') }}" 
                    placeholder="Search by tagged user name..." 
                    class="flex-1 px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400"
                >
            
                <button 
                    type="submit" 
                    class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition" 
                >
                    Search
                </button>
            </div>
        </form>
        



        @forelse ($posts as $post)
            <div class="bg-white shadow-sm rounded-xl p-6 mb-6 hover:shadow-md transition">
                <h2 class="text-2xl font-semibold text-blue-800 mb-2">{{ $post->title }}</h2>

                <div class="mt-3">
                    <p class="text-sm text-gray-600 mb-1 font-medium">🔖 Tagged Users:</p>
                    @if ($post->tags->isNotEmpty())
                        <div class="flex flex-wrap gap-2 mt-1">
                            @foreach ($post->tags as $tag)
                                <span class="bg-blue-100 text-blue-700 text-sm font-medium px-3 py-1 rounded-full">
                                    {{ $tag->name }}
                                </span>
                            @endforeach
                        </div>
                    @else
                        <p class="text-sm italic text-red-500">No tags associated.</p>
                    @endif
                </div>
            </div>
        @empty
            <div class="bg-white p-6 rounded-xl shadow text-center">
                <p class="text-gray-500">No posts found for your search.</p>
            </div>
        @endforelse
    </div>

</body>
</html>
