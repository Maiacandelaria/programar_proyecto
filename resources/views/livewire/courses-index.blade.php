<div>
    <div class="text-gray-200 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            
                            {{--BOTON TODOS LOS CURSOS--}}
            
            <button class="focus:outline-none bg-white shadow-lg h-12 px-4 rounded-lg text-gray-700 mr-4" wire:click="resetFilter">
                <i class="fas fa-archway text-xs text-gray-700 mr-2"></i>
                Todos los Cursos
            </button>

                               {{--BOTON DESPLEGABLE  CATEGORIAS Dropdown --}}
                                    
            <div class="relative mr-4" x-data="{open: false}">
                <button class="px-4 text-gray-700 block h-12  rounded-lg overflow-hidden focus:outline-none bg-white shadow-lg" x-on:click="open = true">
                    <i class="fas fa-tags text-xs text-gray-700 mr-2"></i>
                    Categorias
                    <i class="fas fa-angle-down text-gray-700 ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open"  x-on:click.away="open = false">   
                    @foreach ($categories as $category)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-700 hover:text-white" wire:click="$set('category_id', {{$category->id}})" x-on:click="open = false">{{$category->name}}</a>
                    @endforeach
                    
                </div>
            </div>
  
            <div class="relative mb-10" x-data="{open: false}">
                <button class="px-4 text-gray-700 block h-12  rounded-lg overflow-hidden focus:outline-none bg-white shadow-lg" x-on:click="open = true">
                    <i class="fas fa-layer-group text-xs text-gray-700 mr-2"></i>
                        Niveles
                    <i class="fas fa-angle-down text-gray-700 ml-2"></i>
                </button>
                                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open"  x-on:click.away="open = false">   
                    @foreach ($levels as $level)
                       
                       <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-700 hover:text-white" wire:click="$set('level_id', {{$level->id}})" x-on:click="open = false">{{$level->name}}</a>
                    @endforeach
                </div>
                               <!-- // Dropdown Body -->
            </div>
        </div>
  
                                {{-- LISTADO DE CURSOS --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-4 gap-x-6 gap-y-8">
               @foreach ($courses as $course)
                  <x-course-card :course="$course" />
                @endforeach
            </div>
        </div>

                                 {{-- Pie de pagina LINK DE NAVEGACION --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 mb-8">
            {{$courses->links()}}
        </div>

    <div class="bg-black">
        <div class="max-w-screen-lg py-10 px-4 sm:px-6 text-gray-800 sm:flex justify-between mx-auto">
          <div class="p-5 sm:w-2/12 border-r">
              <div class="text-sm uppercase text-indigo-600 font-bold">Menu</div>
            <ul>
              <li class="my-2">
                <a class="text-white hover:text-indigo-200" href="/#">Home</a>
              </li>
              <li class="my-2">
                <a class="text-white hover:text-indigo-600" href="/#">Cursos</a>
              </li>
            </ul>
           </div>
           <div class="p-5 sm:w-7/12 border-r text-center">
             <h3 class="font-bold text-xl text-indigo-600 mb-4">Programar Proyecto</h3>
             <p class="text-white text-sm mb-10">Proyecto final hecho por alumnos de la escuela tecnica Carmeno Molina de Llano
                <br>
                Disponible en github:
             </p>
             <li class="my-2">
                <a class="text-white  hover:text-indigo-600" href="https://github.com/Maiacandelaria/programar_proyecto"> https://github.com/Maiacandelaria/programar_proyecto</a>
              </li>
            </div>
           <div class="p-5 sm:w-3/12">
              <div class="text-sm uppercase text-indigo-600 font-bold">Contanos</div>
            <ul>
              <li class="my-2">
                <a class=" text-white hover:text-indigo-200" href="mailto:maiafigueredo0525@gmail.com?subject=Contactar&body=Que%20buena%20pagina!">maiafigueredo0525@gmail.com</a>
              </li>
              <li class="my-2">
                <a class="text-white hover:text-indigo-200" href="mailto:ga3rielleyes@gmail.com?subject=Contactar&body=Que%20buena%20pagina!">ga3rielleyes@gmail.com</a>
              </li>
              <li class="my-2">
                <a class="text-white hover:text-indigo-200" href="mailto:gleilaflores4to2da@gmail.com?subject=Contactar&body=Que%20buena%20pagina!">gleilaflores4to2da@gmail.com</a>
              </li>
            </ul>
           </div>
        </div>
       <div class="flex py-5 m-auto text-gray-800 text-sm flex-col items-center border-t max-w-screen-xl">
           <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
              <a href="/#" class="w-6 mx-1">
                 <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="Twitter" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                       5.373,-12 12,-12c6.627,0 12,5.373 12,12Zm-6.465,-3.192c-0.379,0.168
                       -0.786,0.281 -1.213,0.333c0.436,-0.262 0.771,-0.676
                       0.929,-1.169c-0.408,0.242 -0.86,0.418 -1.341,0.513c-0.385,-0.411
                       -0.934,-0.667 -1.541,-0.667c-1.167,0 -2.112,0.945 -2.112,2.111c0,0.166
                       0.018,0.327 0.054,0.482c-1.754,-0.088 -3.31,-0.929
                       -4.352,-2.206c-0.181,0.311 -0.286,0.674 -0.286,1.061c0,0.733 0.373,1.379
                       0.94,1.757c-0.346,-0.01 -0.672,-0.106 -0.956,-0.264c-0.001,0.009
                       -0.001,0.018 -0.001,0.027c0,1.023 0.728,1.877 1.694,2.07c-0.177,0.049
                       -0.364,0.075 -0.556,0.075c-0.137,0 -0.269,-0.014 -0.397,-0.038c0.268,0.838
                       1.048,1.449 1.972,1.466c-0.723,0.566 -1.633,0.904 -2.622,0.904c-0.171,0
                       -0.339,-0.01 -0.504,-0.03c0.934,0.599 2.044,0.949 3.237,0.949c3.883,0
                       6.007,-3.217 6.007,-6.008c0,-0.091 -0.002,-0.183 -0.006,-0.273c0.413,-0.298
                       0.771,-0.67 1.054,-1.093Z"></path>
                 </svg>
              </a>
              <a href="/#" class="w-6 mx-1">
                 <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="Facebook" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                       5.373,-12 12,-12c6.627,0 12,5.373
                       12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                       0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                       -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"></path>
                 </svg>
              </a>
              <a href="/#" class="w-6 mx-1">
                 <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <g id="Layer_1">
                       <circle id="Oval" cx="12" cy="12" r="12"></circle>
                       <path id="Shape" d="M19.05,8.362c0,-0.062 0,-0.125 -0.063,-0.187l0,-0.063c-0.187,-0.562
                          -0.687,-0.937 -1.312,-0.937l0.125,0c0,0 -2.438,-0.375 -5.75,-0.375c-3.25,0
                          -5.75,0.375 -5.75,0.375l0.125,0c-0.625,0 -1.125,0.375
                          -1.313,0.937l0,0.063c0,0.062 0,0.125 -0.062,0.187c-0.063,0.625 -0.25,1.938
                          -0.25,3.438c0,1.5 0.187,2.812 0.25,3.437c0,0.063 0,0.125
                          0.062,0.188l0,0.062c0.188,0.563 0.688,0.938 1.313,0.938l-0.125,0c0,0
                          2.437,0.375 5.75,0.375c3.25,0 5.75,-0.375 5.75,-0.375l-0.125,0c0.625,0
                          1.125,-0.375 1.312,-0.938l0,-0.062c0,-0.063 0,-0.125
                          0.063,-0.188c0.062,-0.625 0.25,-1.937 0.25,-3.437c0,-1.5 -0.125,-2.813
                          -0.25,-3.438Zm-4.634,3.927l-3.201,2.315c-0.068,0.068 -0.137,0.068
                          -0.205,0.068c-0.068,0 -0.136,0 -0.204,-0.068c-0.136,-0.068 -0.204,-0.204
                          -0.204,-0.34l0,-4.631c0,-0.136 0.068,-0.273 0.204,-0.341c0.136,-0.068
                          0.272,-0.068 0.409,0l3.201,2.316c0.068,0.068 0.136,0.204
                          0.136,0.34c0.068,0.136 0,0.273 -0.136,0.341Z" style="fill: rgb(255, 255, 255);"></path>
                    </g>
                 </svg>
              </a>
              <a href="/#" class="w-6 mx-1">
                 <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="Shape" d="M7.3,0.9c1.5,-0.6 3.1,-0.9 4.7,-0.9c1.6,0 3.2,0.3 4.7,0.9c1.5,0.6 2.8,1.5
                       3.8,2.6c1,1.1 1.9,2.3 2.6,3.8c0.7,1.5 0.9,3 0.9,4.7c0,1.7 -0.3,3.2
                       -0.9,4.7c-0.6,1.5 -1.5,2.8 -2.6,3.8c-1.1,1 -2.3,1.9 -3.8,2.6c-1.5,0.7
                       -3.1,0.9 -4.7,0.9c-1.6,0 -3.2,-0.3 -4.7,-0.9c-1.5,-0.6 -2.8,-1.5
                       -3.8,-2.6c-1,-1.1 -1.9,-2.3 -2.6,-3.8c-0.7,-1.5 -0.9,-3.1 -0.9,-4.7c0,-1.6
                       0.3,-3.2 0.9,-4.7c0.6,-1.5 1.5,-2.8 2.6,-3.8c1.1,-1 2.3,-1.9
                       3.8,-2.6Zm-0.3,7.1c0.6,0 1.1,-0.2 1.5,-0.5c0.4,-0.3 0.5,-0.8 0.5,-1.3c0,-0.5
                       -0.2,-0.9 -0.6,-1.2c-0.4,-0.3 -0.8,-0.5 -1.4,-0.5c-0.6,0 -1.1,0.2
                       -1.4,0.5c-0.3,0.3 -0.6,0.7 -0.6,1.2c0,0.5 0.2,0.9 0.5,1.3c0.3,0.4 0.9,0.5
                       1.5,0.5Zm1.5,10l0,-8.5l-3,0l0,8.5l3,0Zm11,0l0,-4.5c0,-1.4 -0.3,-2.5
                       -0.9,-3.3c-0.6,-0.8 -1.5,-1.2 -2.6,-1.2c-0.6,0 -1.1,0.2 -1.5,0.5c-0.4,0.3
                       -0.8,0.8 -0.9,1.3l-0.1,-1.3l-3,0l0.1,2l0,6.5l3,0l0,-4.5c0,-0.6 0.1,-1.1
                       0.4,-1.5c0.3,-0.4 0.6,-0.5 1.1,-0.5c0.5,0 0.9,0.2 1.1,0.5c0.2,0.3 0.4,0.8
                       0.4,1.5l0,4.5l2.9,0Z"></path>
                 </svg>
              </a>
              <a href="/#" class="w-6 mx-1">
                 <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="Combined-Shape" d="M12,24c6.627,0 12,-5.373 12,-12c0,-6.627 -5.373,-12 -12,-12c-6.627,0
                       -12,5.373 -12,12c0,6.627 5.373,12 12,12Zm6.591,-15.556l-0.722,0c-0.189,0
                       -0.681,0.208 -0.681,0.385l0,6.422c0,0.178 0.492,0.323
                       0.681,0.323l0.722,0l0,1.426l-4.675,0l0,-1.426l0.935,0l0,-6.655l-0.163,0l-2.251,8.081l-1.742,0l-2.222,-8.081l-0.168,0l0,6.655l0.935,0l0,1.426l-3.74,0l0,-1.426l0.519,0c0.203,0
                       0.416,-0.145 0.416,-0.323l0,-6.422c0,-0.177 -0.213,-0.385
                       -0.416,-0.385l-0.519,0l0,-1.426l4.847,0l1.583,5.704l0.042,0l1.598,-5.704l5.021,0l0,1.426Z"></path>
                 </svg>
              </a>
           </div>
           <div class="my-5">© Copyright 2020. All Rights Reserved.</div>
        </div>
     </div>
</div>
