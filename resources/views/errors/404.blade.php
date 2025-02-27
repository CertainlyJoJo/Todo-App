<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    @vite(['resources/css/app.css', 'resources/js/app/js'])
</head>
<body>
    <div class="text-center p-[50px] font-sans">
        <h1 class="text-5xl">404</h1>
        <p class="text-xl text-gray-600">Oops! The page you are looking for does not exist.</p>
        <a class="text-blue-500 text-xl" href="{{ url('/') }}">Go Back Home</a>
    </div>

</body>
</html>