@props(['course'])


<article class="card flex flex-col">

    <img class="card flex flex-col">
        @isset($course->image)
             <img id="picture" class="h-36 w-full object-cover" src="{{($course->image->url)}}" alt="">
        @else
             <img id="picture" class="h-36 w-full object-cover" src="https://images.pexels.com/photos/5905885/pexels-photo-5905885.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
        @endisset
</img>
        
    <div class="card-body flex-1 flex flex-col">
            <h1 class="card-title">{{Str::limit($course->title, 40)}}  </h1>
            <p class="text-gray-700 text-center text-sm mb-2 mt-auto">Prof:{{$course->teacher->name}}</p>

                <div class="flex">
                    <ul class="flex text-sm ">
                        <li class="mr-2">
                            <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                        </li>
                        <li class="mr-2">
                            <i class="fas fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i>
                        </li>
                        <li class="mr-2">
                            <i class="fas fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i>
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i>
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star text-{{$course->rating == 5 ? 'yellow' : 'gray'}}-400"></i>
                        </li>
                    </ul>

                        <p class="text-sm text-gray-500 ml-auto">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                </div>

                <a href="{{route('courses.show', $course)}}" class=" mt-4  bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500  focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 btn-block transform transition duration-700 hover:scale-110 hover:text-white text-sm px-5 py-2.5 text-center  mr-2 mb-2">
                    Más información
                </a>
        </div>
</article>
