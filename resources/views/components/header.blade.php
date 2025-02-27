<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>


<div x-data="{ showForm: false }" x-init="showForm = @json($errors->any())">
    <header class="mb-7  bg-white rounded-t-2xl flex items-center justify-between px-5 py-5">
        <h1 class="text-lg sm:text-2xl md:text-4xl text-center absolute left-1/2 -translate-x-1/2">My To-Do List</h1>

        <button
            @click="showForm = true" 
            class="text-3xl border w-7 h-7 sm:w-10 sm:h-9 md:w-12 md:h-10 flex items-center justify-center rounded-lg bg-black text-white hover:scale-105 hover:shadow-[0px_5px_10px_rgba(0,0,0,0.5)] ml-auto">
            +
        </button>
    </header>

    <x-create/>
</div>

</body>
</html>