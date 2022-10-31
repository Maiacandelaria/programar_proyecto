<section class="mt-4">
    <h1 class="font-bold text-3xl text-white mb-2 bg-black">Valoración</h1>

    @can('enrolled', $course)
        <article>
            @can('valued', $course)
           
            <textarea wire:model="comment" class="form-input w-full text-black" rows="3" placeholder="Ingrese una reseña del curso"></textarea>

                <div class="flex items-center">
                    <button class="btn btn-primary mr-2" wire:click="store">Guardar</button>

                        <ul class="flex ">
                            <li class="mr-1 cursor-pointer" wire:click="$set('rating', 1)">
                                <i class="fas fa-star text-{{$rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1 cursor-pointer" wire:click="$set('rating', 2)">
                                <i class="fas fa-star text-{{$rating >= 2 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1 cursor-pointer" wire:click="$set('rating', 3)">
                                <i class="fas fa-star text-{{$rating >= 3 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1 cursor-pointer" wire:click="$set('rating', 4)">
                                <i class="fas fa-star text-{{$rating >= 4 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                            <li class="mr-1 cursor-pointer" wire:click="$set('rating', 5)">
                                <i class="fas fa-star text-{{$rating == 5 ? 'yellow' : 'gray'}}-400"></i>
                            </li>
                        </ul>

                </div>
                @endcan
        </article>
    @endcan

    <div class=" bg-black">
        <div class="card-body bg-black">
            <p class="text-white text-xl m-4">{{$course->reviews->count()}} Valoraciones</p>
            @foreach ($course->reviews as $review)
                <article class="flex mb-4 text-white">
                    <figure class="mr-4">
                        <img class="h-12 w-12 object-cover rounded-full shadow-xs" src="{{$review->user->profile_photo_url}}" alt="">
                    </figure>
                    
                    <div class=" flex-1">
                        <div class="card-body bg-black">
                            <p><b>{{$review->user->name}}</b><i class="fas fa-star text-yellow-300"></i>({{$review->rating}})</p>

                            {{$review->comment}}
                        </div>
                    </div>

                </article>
            @endforeach
        </div>
    </div>
</section>
