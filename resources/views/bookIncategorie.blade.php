@include('header')
</header>
<main class="bg-white dark:bg-gray-900">
<h1 class="font-serif text-center flex justify-center text-white font-bold text-2xl mb-3">
    Categories
</h1>

<div class="container max-w-screen-2xl bg-white dark:bg-gray-900 flex flex-wrap">
@foreach ($books as $book)
<div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto ">
    <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-image: url(https://images.unsplash.com/photo-1589998059171-988d887df646?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)"></div>

    <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
        <h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">{{$book->title}}</h3>

        <div class="flex items-center justify-between px-3 py-2 bg-gray-200 dark:bg-gray-700">
            <span class="font-bold text-gray-800 dark:text-gray-200">free</span>
            <button class="px-2 py-1 text-xs font-semibold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded hover:bg-gray-700 dark:hover:bg-gray-600 focus:bg-gray-700 dark:focus:bg-gray-600 focus:outline-none">reserver</button>
        </div>
    </div>
</div>
@endforeach
</div>
</main>
@include('footer')