@include('header')
</header>
<main class="bg-white dark:bg-gray-900">
<h1 class="font-serif text-center flex justify-center text-white font-bold text-2xl mb-3">
    Categories
</h1>
<div class="container max-w-screen-2xl  justify-between bg-white dark:bg-gray-900 flex flex-wrap ">
@foreach ($categories as $res)
<div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto mb-5 ">
    <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-image: url(https://images.unsplash.com/photo-1589998059171-988d887df646?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)"></div>

    <div class="w-56 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg md:w-64 dark:bg-gray-800">
        <a href="{{ route('bookInCategorie', ['id' => $res->id]) }}"><h3 class="py-2 font-bold tracking-wide text-center text-gray-800 uppercase dark:text-white">{{$res->name}}</h3></a>

      
    </div>
</div>
@endforeach
</div>
</main>
@include('footer')
