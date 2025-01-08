<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post | CRUD</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
</head>

<body class="bg-orange-300">
    <div class="container px-10 mx-auto">
        <div class="flex justify-between my-5">
            <h1 class="text-2xl font-bold">Create Post</h1>
            <a class="bg-sky-600 text-white px-4 py-1 rounded-sm" href="/">Back To Home</a>
        </div>

        <div>
            <form method="POST" action="{{ route('store') }}" enctype=multipart/form-data>
                @csrf
                <div class="flex flex-col gap-1">
                    <label for="">Name</label>
                    <input class="rounded-md" type="text" name="name" value="{{old('name')}}">
                    @error('name')
                        <p class="text-red-500 font-bold">{{ $message }}</p>
                    @enderror

                    <label class="mt-3" for="">Description</label>
                    <input class="rounded-md" type="text" name="description" value="{{old('description')}}">
                    @error('description')
                        <p class="text-red-500 font-bold">{{ $message }}</p>
                    @enderror

                    <label class="mt-3" for="">Select an Image</label>
                    <input type="file" name="image" id="">
                    @error('image')
                        <p class="text-red-500 font-bold">{{ $message }}</p>
                    @enderror

                    <div class="mt-6">
                        <input class="bg-green-500 text-white px-4 py-1 rounded-sm" type="submit">
                    </div>
                </div>
            </form>
        </div>

    </div>
</body>

</html>
