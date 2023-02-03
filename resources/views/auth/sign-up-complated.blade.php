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
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-primary mb-24 text-4xl">Sign up Complated!!</h1>
            </div>
            <div class="mx-auto flex w-1/2 justify-center">
                <button type="button" onclick="location.href='/login'"
                    class="bg-primary hover:text-primary hover:border-primary w-3/4 rounded-2xl border py-4 text-white hover:bg-white">Go to login page</button>
            </div>
        </div>
        <div class="bg-primary w-1/2">
            <div class="my-auto flex h-full items-center">
                <img src="{{ asset('img/entrance.png') }}" alt="entrance image">
            </div>
        </div>
    </div>
</body>

</html>
