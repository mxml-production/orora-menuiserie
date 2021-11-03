<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bannière') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @foreach ($banners as $banner)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-auto px-4 py-8 max-w-xl my-20">
                <div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide" >
                    <div class="md:flex-shrink-0">
                        <img src="{{ env('AWS_URL').$banner->image_path }}" alt="mountains" class="w-full h-64 rounded-lg rounded-b-none">
                    </div>
                    <div class="px-4 py-2 mt-2">
                        <h2 class="font-bold text-2xl text-gray-800 tracking-normal">{{ $banner->title }}</h2>
                        <div class="flex items-center justify-end mt-7 mb-4">
                            <a class="font-bold px-2 py-1 bg-blue-500 hover:bg-blue-800 text-white rounded" href="/banner/{{ $banner->id }}/edit">Changer de banniere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        @endforeach
    </div>
</x-app-layout>
