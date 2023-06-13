<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/alpine/start.js'])
</head>

<body>
    <h1 class=" p-12 border-spacing-0 text-blue-50 text-brand-main">
        Hello world!
    </h1>
    <div class="bg-deeppink-100 flex w-1.5">ola</div>


    <div x-data="counter()">
        <div class="flex items-center justify-center h-screen bg-gray-200">
            <button @click="increment()"
                class="text-white bg-indigo-500 px-4 py-2 rounded hover:bg-indigo-900">Increment</button>
            <span class="m-5" x-text="count"></span>
            <button @click="decrement()"
                class="text-white bg-indigo-500 px-4 py-2 rounded hover:bg-indigo-900">Decrement</button>
        </div>
    </div>
    
</body>

</html>
