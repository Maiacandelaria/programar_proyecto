<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-cover hover:bg-top bg-center" style="background-image: url({{asset('img/home/vsgif_com__.2122993.gif')}})">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-neutral-900  overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
