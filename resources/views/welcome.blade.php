<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel CRUD</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

</head>

<body class="font-sans antialiased bg-orange-300">
    <div class="container px-10 mx-auto">
        <div class="flex justify-between my-5">
            <h1 class="text-2xl font-bold">Home</h1>
            <a class="bg-sky-600 text-white px-4 py-1 rounded-sm" href="/create">Add New Post</a>
        </div>
        <h1 class="text-7xl font-bold text-center mt-20">CRUD Project</h1>
        <h1 class="text-2xl text-gray-600 font-medium text-center mt-20">Create, Read, Update & Delete your data easily !</h1>
        
        @if (session('success'))
            <h2 class="text-3xl text-green-600 font-medium text-center mt-20">{{ session('success') }}</h2>
        @endif
    </div>
</body>

</html>
