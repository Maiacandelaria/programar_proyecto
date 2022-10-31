@props(['course'])


<article class="card flex flex-col text-white rounded overflow-hidden">

    <figure>
            @isset($course->image)
            <img id="picture" class="h-36 w-full object-cover" src="{{($course->image->url)}}" alt=""> 
       @else
                <img id="picture" class="w-full h-36 object-cover object-center" src="https://images.pexels.com/photos/5905885/pexels-photo-5905885.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="">
           @endisset
        </figure>

        
    <div class="card-body flex-1 flex flex-col bg-black text-white">
            <h1 class=" text-white text-center text-xl mb-2 leading-6">{{Str::limit($course->title, 40)}} </h1>
            <p class="text-white text-center text-sm mb-2 mt-auto">Prof:{{$course->teacher->name}}</p>
            

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

                        <p class="text-sm text-white ml-auto m-2">
                            <i class="fas fa-users"></i>
                            ({{$course->students_count}})
                        </p>
                </div>

               <div class="flex items-center justify-between">
                <span>
                    @if ($course->price->value == 0)

                    <p class="my-2 text-2xl text-green-800">Gratis :) </p>
                     @else
                         <p class="my-2 text-2xl font-bold text-white">$ {{$course->price->value}}</p>
                   @endif
                </span>
                <a href="{{route('courses.show', $course)}}"
                class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mas info</a>
               </div>
        </div>
</article>
