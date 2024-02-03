@include ('header')
<main class="relative min-h-screen bg-gray-900 py-14 ">
<h1 class="font-serif text-center flex justify-center text-white font-bold text-2xl mb-3">
    My Bookmarks
</h1>
  <section class="px-5 grid sm:grid-cols-2 lg:flex items-center  flex-wrap justify-center gap-16 lg:gap-20 xl:gap-20 relative z-10 min-h-screen mr-3">
  @foreach ($books as $book) 
  <article class="flex flex-wrap mt-3">

      <div class="relative">
        <img src="https://i.insider.com/5bdcbac4bde70f50762851d6?heigth=500&format=jpeg&auto=webp');" class="w-full aspect-[3/2] lg:aspect-[3/4] h-44 lg:h-[32rem] object-cover shadow-lg">
        <div class="lg:rounded-l-[30px] lg:rounded-t-[30px] bg-white lg:absolute bottom-8 -right-14 lg:w-[19rem] px-8 py-6 lg:h-96 shadow">
          <span class="inline-block text-sm text-gray-500">{{$book->created_at}}</span>
          <h2 class="text-2xl font-bold leading-tight mt-1.5 mb-2.5">{{$book->title}}</h2>
          <a href="#" class="inline-block text-blue-400 text-sm capitalize hover:underline">new article</a>
          <p class="text-gray-800 my-7 leading-relaxed">{{$book->description}}</p>
          <a href="{{route('detail', ['id' => $book->id])}}" class="flex justify-end items-center uppercase text-blue-800 font-semibold text-sm hover:underline"><span class="mr-4 block w-10 h-0.5 bg-blue-800"></span>read more</a>
        </div>
      </div>
    </article>
    @endforeach
  </section>

</main>


@include ('footer')