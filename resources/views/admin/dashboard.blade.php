<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="/" class="w-max flex bg-yellow-500 rounded-full font-bold text-white px-4 py-3 transition duration-300 ease-in-out hover:bg-yellow-600 mr-6 mb-10">
                Retourner à la page d'accueil
                <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-2 w-6 stroke-current text-white stroke-2" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Bienvenue sur la page d'administration {{ Auth::user()->name }}</p>
                </div>
            </div>
        </div>
        {{-- information --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
        <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Les informations</th>
                        <th class="py-3 px-6 text-left">Les valeurs</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($informations as $information)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left overflow-auto">
                                <span class="font-medium">{{ $information->title }}</span>
                        </td>
                        <td class="py-3 px-6 text-left">
                                <span>{{ $information->information }}</span>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">
                                <a href="/informations/{{ $information->id }}/edit" class="w-4 mr-2 transform hover:text-yellow-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        {{-- end information --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-700 text-white uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Les Derniers Messages</th>
                            <th class="py-3 px-6 text-left">Nom</th>
                            <th class="py-3 px-6 text-left">Téléphone</th>
                            <th class="py-3 px-6 text-left">Mail</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                            <th class="py-3 px-6 text-center">Date</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($messages as $message)
                        <tr class="border-b border-gray-200 {{ $message->read ? 'bg-gray-200' : 'bg-white' }}">
                            <td class="py-3 px-6 text-left overflow-auto {{ $message->read ? 'font-medium' : 'font-bold' }}">
                                    <span>{{ Str::limit($message->message, 50, '...')  }}</span>
                            </td>
                            <td class="py-3 px-6 text-left {{ $message->read ? 'font-medium' : 'font-bold' }}">
                                    <span>{{ $message->name }}</span>
                            </td>
                            <td class="py-3 px-6 text-left {{ $message->read ? 'font-medium' : 'font-bold' }}">
                                <span>{{ $message->phone }}</span>
                            </td>
                            <td class="py-3 px-6 text-left {{ $message->read ? 'font-medium' : 'font-bold' }}">
                                <span>{{ $message->email }}</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <form action="/message/{{ $message->id }}" method="POST" class="w-4 mr-2 transform hover:text-yellow-500 hover:scale-110">
                                        @csrf
                                        @method('put')
                                        <button type="submit">
                                            <svg class="view_svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </button>
                                    </form>
                                    <form action="/message/{{ $message->id }}" method="POST" class="w-4 mr-2 transform hover:text-yellow-500 hover:scale-110">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">
                                            <svg style="width: 100%; height: 100%;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center {{ $message->read ? 'font-medium' : 'font-bold' }}">
                                {{ $message->created_at->format('d/m/Y') }}
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
