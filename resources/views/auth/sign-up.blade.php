<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up | Money Logger</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen w-full">
    <div class="flex h-full">
        <div class="my-auto w-1/2">
            <div class="mb-24 flex justify-center">
                <h1 class="text-primary text-4xl">Money Logger</h1>
            </div>
            <form action="/sign-up" method="post">
                @csrf
                <div class="mx-auto mb-20 flex w-1/2 flex-col justify-center">
                    @error('name')
                        <span class="mb-2 text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="border-b-primary mb-6 flex gap-x-12 border-b">
                        <label class="text-primary block w-1/6">Name</label>
                        <input class="w-5/6 focus:outline-none" type="text" name="name">
                    </div>
                    @error('email')
                        <span class="mb-2 text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="border-b-primary mb-6 flex gap-x-12 border-b">
                        <label class="text-primary block w-1/6">Email</label>
                        <input class="w-5/6 focus:outline-none" type="text" name="email">
                    </div>
                    @error('password')
                        <span class="mb-2 text-red-500">{{ $message }}</span>
                    @enderror
                    <div class="border-b-primary flex gap-x-12 border-b">
                        <label class="text-primary block w-1/6">Password</label>
                        <input class="w-5/6 focus:outline-none" type="password" name="password">
                    </div>
                </div>
                <div class="mx-auto flex w-1/2 justify-center">
                    <button type="submit"
                        class="bg-primary hover:text-primary hover:border-primary w-3/4 rounded-2xl border py-4 text-white hover:bg-white">Sign up</button>
                </div>
            </form>
        </div>
        <div class="bg-primary w-1/2">
            <div class="my-auto flex h-full items-center">
                <img src="{{ asset('img/entrance.png') }}" alt="entrance image">
            </div>
        </div>
    </div>
</body>

</html>
