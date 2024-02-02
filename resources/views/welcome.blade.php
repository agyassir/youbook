@include('header')

    <div class="container flex flex-col px-6 py-4 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
        <div class="flex flex-col items-center w-full lg:flex-row lg:w-1/2">
         
            <div class="max-w-lg lg:mx-12 lg:order-2">
                <h1 class="text-3xl font-semibold tracking-wide text-gray-800 dark:text-white lg:text-4xl">The best library you can have online</h1>
                <p class="mt-4 text-gray-600 dark:text-gray-300">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae laudantium quod rem voluptatem eos accusantium cumque.</p>
                <div class="mt-6">
                <section class="relative w-full max-w-md px-5 py-4 mx-auto rounded-md">
    <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </span>

        <input type="text" class="w-full py-3 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" placeholder="Search">
    </div>   
            </div>
            </div>
        </div>

        <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
            <img class="object-cover w-full h-full max-w-2xl rounded-md" src="https://images.unsplash.com/photo-1522211988038-6fcbb8c12c7e?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="apple watch photo">
        </div>
    </div>
</header>
<main>
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">best sellers
        </h1>

        <p class="mt-4 text-center text-gray-500 dark:text-gray-300">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quam voluptatibus
        </p>


        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
        @foreach   ($books as $book)
        <div class="overflow-hidden bg-cover rounded-lg cursor-pointer h-[550px] group"
                style="background-image:url('https://i.insider.com/5bdcbac4bde70f50762851d6?heigth=500&format=jpeg&auto=webp');">
                <div
                    class="flex flex-col justify-center w-auto h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                    <h2 class="mt-4 text-xl font-semibold text-white capitalize">{{$book->title}}</h2>
                    <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">{{$book->description}}</p>
                </div>
            </div>
@endforeach
           
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-12 mx-auto">
        <div class="text-center ">
            <p class="font-medium text-blue-500 dark:text-blue-400">Contact us</p>

            <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">We’d love to hear from you</h1>

            <p class="mt-3 text-gray-500 dark:text-gray-400">Chat to our friendly team.</p>
        </div>
<div class="flex flex-row gap-2">
@foreach   ($categories as $cat)
        <div class="w-full max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 ">
    <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">

    <div class="py-5 text-center">
        <a href="{{ url('./categorie/'.$cat->id) }}" class="block text-xl font-bold text-gray-800 dark:text-white" tabindex="0" role="link">{{$cat->name}}</a>
    </div>
 </div>
 @endforeach
   </div>
        <img class="object-cover w-full h-64 mt-10 rounded-lg lg:h-96" src="https://images.unsplash.com/photo-1568992688065-536aad8a12f6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=100" alt="">
        
        <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3 sm:grid-cols-2 ">
            <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </span>

                <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Chat to reclaim</h2>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Speak to our friendly team.</p>
                <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">hello@youbooks.com</p>
            </div>

            <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                </span>
                
                <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Visit us</h2>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Visit our office HQ..</p>
                <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">100 Smith Street Collingwood VIC 3066 AU</p>
            </div>

            <div class="p-4 rounded-lg bg-blue-50 md:p-6 dark:bg-gray-800">
                <span class="inline-block p-3 text-blue-500 rounded-lg bg-blue-100/80 dark:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                </span>
                
                <h2 class="mt-4 text-base font-medium text-gray-800 dark:text-white">Call us</h2>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Mon-Fri from 8am to 5pm.</p>
                <p class="mt-2 text-sm text-blue-500 dark:text-blue-400">+212 612-34567</p>
            </div>
        </div>
    </div>
</section>
</main>

@include('footer')