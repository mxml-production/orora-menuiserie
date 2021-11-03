<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Réalisation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="/realisations/create" class="w-max flex bg-yellow-500 rounded-full font-bold text-white px-4 py-3 transition duration-300 ease-in-out hover:bg-yellow-600 mr-6 mb-10">
            Ajouter une Réalisation
            <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-2 w-6 stroke-current text-white stroke-2" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
        </div>
        <div class="mx-auto container">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">

                <!-- Column -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <!-- Article -->
                    @foreach ($realisations as $realisation)
                    <article class="overflow-hidden rounded-lg shadow-lg bg-white">
                        <div class="h-72 overflow-hidden">
                            <img alt="{{ $realisation->name }}" class="block h-full w-full object-cover" src="{{ env('AWS_URL').$realisation->image_path }}">
                        </div>
                        <div class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <h4 class="text-lg uppercase font-bold">
                                    {{ $realisation->description }}
                            </h4>
                            <p class="text-grey-darker text-sm">
                                {{ $realisation->created_at->format('d/m/Y') }}
                            </p>
                        </div>
                        <div class="flex items-center justify-end leading-none p-2 md:p-4">
                            <form method="POST" action="/realisations/{{ $realisation->id }}" class="flex items-center no-underline hover:bg-red-700 text-white px-5 py-2 bg-red-500 rounded" href="#">
                                @csrf
                                @method('delete')
                                <button type="submit">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    </article>
                    @endforeach
                    <!-- END Article -->
                </div>
                <!-- END Column -->   

            </div>
        </div>
    </div>
</x-app-layout>
