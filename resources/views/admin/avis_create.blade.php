<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter un avis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if ($errors->any())
        <div class="p-4 text-red bg-red-400 w-full shadow rounded max-w-xl mb-10 text-white font-bold mx-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/avis" method="POST" class="w-full max-w-xl bg-white rounded-lg px-4 p-2 mx-auto">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Ajouter un avis</h2>
                <div class="w-full md:w-full px-3 mb-2 mt-2">
                    <input
                        class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                        name="auteur" placeholder="L'auteur" required/>
                </div>
                <div class="w-full md:w-full px-3 mb-2 mt-2">
                    <textarea
                        class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                        name="texte" placeholder="Ecrire le texte de l'avis" required></textarea>
                </div>
                <div class="w-full flex items-start md:w-full px-3">
                    <div class="flex items-start text-gray-700 px-2 mr-auto">
                        <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-xs md:text-sm pt-px">Tous les champs doivent être remplis.</p>
                    </div>
                    <div class="-mr-1">
                        <input type='submit'
                            class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100"
                            value="Ajouter l'avis">
                    </div>
                </div>
        </form>
    </div>
    </div>
</x-app-layout>
