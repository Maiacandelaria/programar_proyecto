<x-app-layout>

    <section class="bg-black py-12 mb-12">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">

            <figure>
                <img class="h-60 w-full object-cover" src="{{$course->image->url}} " alt="">
            </figure>

            <div class="text-white ">
                <h1 class="text-3xl">{{Str::limit($course->title, 40)}}</h1>
                <h2 class="text-xl mb-6">{{$course->subtitle}}</h2>

                <p class="mb-3"><i class="fas fa-chart-line mr-2"></i>Nivel: {{$course->level->name}}</p>
                <p class="mb-3"><i class="fas fa-layer-group mr-2"></i>Categoria: {{$course->category->name}}</p>
                <p class="mb-3"><i class="fas fa-user mr-2"></i>Matriculados: {{$course->students_count}}</p>
                <p><i class="far fa-star"></i> Calificación: {{$course->rating}}</p>
            </div>
        </div>
    </section>

    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6 bg-black">
        <div class="order-2 lg:col-span-2 lg:order-1 bg-black">
            <section class="mb-12 bg-black">
                <div class="card-body bg-black">
                    <h1 class="font-bold text-2xl mb-2 bg-black text-white">Lo que aprenderás</h1>

                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2 bg-black">
                        @foreach ($course->goals as $goal)
                            <li class="text-white text-base"><i class="fas fa-check text-gray-600 mr-2"></i> {{$goal->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <section class="mb-12 bg-black">
               <h1 class="font-fold text-3xl mb-2 text-white bg-black">Temario</h1>
               @foreach ($course->sections as $section)
                   <article class="mb-4 shadow bg-black"
                           @if ($loop->first)
                               x-data="{open: true}"
                           @else
                               x-data="{open: false}"
                           @endif
                           >
                        <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-black" x-on:click="open = !open">
                            <h1 class="font-bold text-lg text-gray-600">{{$section->name}}</h1>
                        </header>
                        <div class="bg-black py-2 px-4" x-show="open">
                            <ul class="grid grid-cols-1 gap-2">
                                @foreach ($section->lessons as $lesson)
                                    <li class="text-white text-base"><i class="fas fa-play-circle mr-2 text-white"></i> {{$lesson->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                   </article>
               @endforeach
            </section>

            <section class="mb-8 text-white">
                <h1 class="font-bold text-3xl text-white">Requisitos</h1>
                <ul class="list-disc list-inside text-white">
                    @foreach ($course->requirements as $requirement)
                        <li class="text-white text-base text-white">{{$requirement->name}}</li>
                    @endforeach
                </ul>
            </section>

            <section>
                <h1 class="font-bold text-3xl text-white ">Descripción</h1>
                <div class="text-white text-base">
                    {!!$course->description!!}
                </div>
             </section>

             @livewire('courses-reviews', ['course' => $course])
        </div>

        <div class="order-1 lg:order-2 bg-black">
        <section class=" mb-4 bg-black">
                <div class="card-body bg-black">
                    <div class="flex items-center bg-black">
                        <img class="h-12 w-12 object-cover shadow-lg rounded-full bg-black"  src="{{$course->teacher->profile_photo_url}}" alt="{{$course->teacher->name}}">
                        <div class="ml-4">
                           <h1 class="font-fold text-gray-500 text-lg">Prof: {{$course->teacher->name}}</h1>
                           <a class="text-blue-500 text-sm font-bold" href="">{{'@' . Str::slug($course->teacher->name, '' )}}</a>
                        </div>
                    </div>

                    @can('enrolled', $course)

                    <a class="btn btn-danger btn-block mt-4" href="{{route('courses.status', $course)}}">Continuar con el curso</a>

                @else
                    @if ($course->price->value  == 0)
                            <p class="text-2x1 font-bold text-green-500 mt-3 mb-2">Gratis</p>
                            <form action="{{route('courses.enrolled', $course)}}" method="POST">
                                @csrf
                                <button class="btn btn-danger btn-block mt-4" type="submit">
                                    Empezar este curso
                                </button>
                            </form>
                    @else 
                            <p class="text-2x1 font-bold text-gray-700 mt-3 mb-2">${{$course->price->value }}</p>
                            <a href="{{route('payment.checkout', $course)}}" class="btn btn-danger btn-block mt-4">Comprar este curso</a>
                    @endif
                @endcan

                </div>
        </section>
        <aside class="hidden lg:block">
            @foreach ($similares as $similar)
                <article class="flex mb-6">
                    <img class="h-32 w-40 object-cover" src="{{$similar->image->url}}" alt="">
                    <div class="">
                        <h1 class="ml-3">
                            <a class="font-bold text-gray-500 mb-3" href="{{route('courses.show', $similar)}}">{{Str::limit($similar->title, 40)}}</a>
                        </h1>
                        <div class="flex items-center mb-2">
                            <img class="w-8 h-8 rounded-full object-cover shadow-lg ml-2" src="{{$similar->teacher->profile_photo_url}}" alt="">
                            <p class="text-gray-500 text-sm ml-2">{{$similar->teacher->name}}</p>
                        </div>
                            <p class="ml-2 text-sm"><i class="fas fa-star mr-2 text-yellow-300"></i>{{$similar->rating}}</p>
                    </div>

                </article>
            @endforeach
        </aside>

        </div>
    </div>

</x-app-layout>

