@include ('header')

<section class="py-20 font-poppins dark:bg-gray-800">
<div class="max-w-6xl px-4 mx-auto">
<div class="flex flex-wrap mb-24 -mx-4">
<div class="w-full px-4 mb-8 md:w-1/2 md:mb-0">
<div class="sticky top-0 overflow-hidden ">
<div class="relative mb-6 lg:mb-10 ">

<img class="object-cover w-full lg:h-1/2" src="https://i.insider.com/5bdcbac4bde70f50762851d6?heigth=500&format=jpeg&auto=webp')" alt="">

</div>

<div class="px-6 pb-6 mt-6 border-t border-gray-300 dark:border-gray-400 ">
<div class="flex items-center justify-center mt-6">
<span class="mr-3">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 text-blue-700 dark:text-gray-400 bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
<path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
</svg>
</span>
<div>
<h2 class="text-sm font-bold text-gray-700 lg:text-lg dark:text-gray-400">
Have question about buying an {{$book->title}}</h2>
<a class="text-xs text-blue-400 lg:text-sm dark:text-blue-200" href="#">
Chat with an {{$book->title}} specialist
</a>
</div>
</div>
</div>
</div>
</div>
<div class="w-full px-4 md:w-1/2">
<div class="lg:pl-20">
<div class="mb-6 ">
<span class="text-red-500 dark:text-red-200">New</span>
<h2 class="max-w-xl mt-2 mb-4 text-5xl font-bold md:text-6xl font-heading dark:text-gray-300">
{{$book->title}}
</h2>
<p class="max-w-md mb-4 text-gray-500 dark:text-gray-400">
{{$book->description}}
</br>   
Get $10-$50 off when you trade in an one plus 6 or newer.
</p>

</div>


<div class="mt-8">
<p class="mb-4 text-lg font-semibold dark:text-gray-400">do you want to buy it</p>
<div class="grid grid-cols-2 gap-4 pb-4 mt-2 mb-4  lg:grid-cols-3 dark:border-gray-600">
</div>
</div>

<div class="mt-1">
<div class="flex flex-wrap items-center">
<div class="mt-1 ">
<button class="w-50 px-4 py-2 font-bold text-white bg-blue-400 lg:w-50 hover:bg-blue-500">
purchase
</button>
<button onclick="openModal('update-modal')" class="w-25 px-4 py-2 font-bold text-white bg-blue-400 lg:w-50 hover:bg-blue-500">update</button>
<a href="{{route('delete',['id' =>$book->id])}}" type="button" class="w-50 px-4 py-2 font-bold text-white bg-red-400  lg:w-50 hover:bg-red-500">
delete
</a>
</div>
<div class="flex items-center mt-6 ">
<div>
<h2 class="mb-2 text-lg font-bold text-gray-700 dark:text-gray-400">Still deciding?
</h2>
<p class="mb-2 text-sm dark:text-gray-400"> Add this item to a list and easily come back
to it later </p>
</div>

<span class="ml-6">
<a href=#   ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6 text-blue-500 cursor-pointer hover:text-blue-600 dark:hover:text-blue-300 bi bi-bookmark dark:text-gray-400" viewBox="0 0 16 16">
<path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
</svg></a></span>
</div>
</div>
</div>
</div>
</div>
</section>
<div id="update-modal" class="fixed inset-0 z-[1] hidden overflow-auto bg-black bg-opacity-50">
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <span class="hidden sm:inline-block sm:h-screen sm:align-middle" aria-hidden="true">&#8203;</span>

                <div class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:w-full sm:max-w-sm sm:p-6 sm:align-middle">
                    <h3 class="text-lg font-medium leading-6 text-gray-800 capitalize dark:text-white" id="modal-title">
                        ajouter votre livre
                    </h3>
               

                    <form class="mt-4" action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="emails-list" class="text-sm text-gray-700 dark:text-gray-200">
                           title
                        </label>

                        <label class="block mt-3" for="email">
                            <input type="text" name="title"  value="{{$book->title}}" class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />
                        </label>

                        <label class="block mt-3" for="email">
                            <textarea  name="description" class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" >{{$book->description}}</textarea>
                        </label>
<select id="countries" name="categorie_id" class="bg-gray-50 mt-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Choose a category</option>
  @foreach ($categories as $cat)
  <option value="{{$cat->id}}" >{{$cat->name}}</option>
  @endforeach
</select>
<input type="hidden" value="{{$book->id}}" name="bookID">
                        <div class="mt-4 sm:flex sm:items-center sm:-mx-2">
                            <button type="button" onclick="closeModal('update-modal')" class="w-full px-4 py-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:w-1/2 sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                                Cancel
                            </button>

                            <button type="submit" class="w-full px-4 py-2 mt-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md sm:mt-0 sm:w-1/2 sm:mx-2 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                                add
                            </button>
                        </div>
                    </form>
                </div>
        </div>
</div>
@include ('footer')