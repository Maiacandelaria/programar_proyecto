<x-app-layout>
                            {{-- PORTADA--}}
    <section class="bg-cover" style="background-image: url({{asset('img/home/imagen_home_.jpg')}}) ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Aprende a programar junto a alumnos de tu misma escuela</h1> 
                <p class="text-white text-lg mt-2"> <html>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur porro aspernatur libero repudiandae veniam ullam a vel laborum nostrum, iure, eius quis saepe in, eos neque maiores laboriosam animi sed Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </html></p>
          
                @livewire('search')
          
            </div>
        </div>
    </section>

    <section class="mt-16">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Contenido</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/proyecto.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-500">Cursos y proyectos</h1>
                </header>
                    <p class="text-sm text-gray-500 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/laravel.png')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-500">Manual de Laravel</h1>
                </header>
                    <p class="text-sm text-gray-500 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/laptop-3087585_1280.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-500">Blog</h1>
                </header>
                    <p class="text-sm text-gray-500 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/desarrollo.png')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-500">Desarrollo web</h1>
                </header>
                    <p class="text-sm text-gray-500 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>
        </div>
    </section>

    <section class="mt-16 bg-blue-900 py-12">
        <h1 class="text-yellow-300 text-center text-3xl ">¿No sabes qué curso llevar?</h1>
        <p class="text-yellow-300 text-center text-lg">Dirígete al catálogo de cursos y filtralos por categorías o niveles :)</p>
            <div class="flex justify-center mt-4">
                    <a href="{{route('courses.index')}}" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        Catálogo de cursos
                    </a>
            </div>
    </section>

    <section class="my-24">
            
                <h1 class="text-gray-700 text-center text-3xl">ÚLTIMOS CURSOS</h1>
                <p class="text-gray-700 text-center text-md mb-6">Trabajamos duro para seguir subiendo cursos!</p>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-4 gap-x-6 gap-y-8">
                    @foreach ($courses as $course)
                        <x-course-card :course="$course" />
                    @endforeach

                </div>

            
    </section>
    
    <footer class="footer footer-center p-10 bg-primary text-primary-content">
        <div>
          <img src="data:image/png;base64,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">
          <p class="font-bold ">
            Programar. <br>Hecho por estudiantes.
          </p> 
          <p>Copyright © 2022</p>
        </div> 
        <div>
          <div class="grid grid-flow-col gap-4">
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a> 
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
          </div>
        </div>
      </footer>
    

</x-app-layout>

