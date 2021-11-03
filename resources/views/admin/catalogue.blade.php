<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catalogues') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto container">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">

                <!-- Column -->
                <div class="flex justify-center w-full flex-wrap">
                    <!-- Article -->
                    @foreach ($catalogues as $catalogue)
                    <article class="overflow-hidden rounded-lg shadow-lg w-full max-w-lg bg-white mb-10 mx-5">
                        <div class="h-96 overflow-hidden">
                            <iframe class="block h-full w-full" src="{{ $catalogue->link }}" frameborder="0"></iframe>
                        </div>
                        <div class="flex items-center justify-between leading-tight px-4 pt-4">
                            <p class="text-grey-darker text-sm font-bold uppercase">
                                {{ $catalogue->slug }}
                            </p>
                        </div>
                        <div class="flex items-center justify-between leading-tight px-4">
                            <p class="text-grey-darker text-sm">
                                {{ $catalogue->description }}
                            </p>
                        </div>
                        <div class="flex items-center justify-end leading-none p-2 md:p-4">
                            <a href="/catalogues/{{ $catalogue->id }}/edit" class="flex items-center no-underline hover:bg-blue-700 text-white px-5 py-2 bg-blue-500 rounded">
                                    Modifier
                            </a>
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
