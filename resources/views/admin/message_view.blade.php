<x-app-layout>
    <x-slot name="header">
        <div class=" flex align-center justify-between">
            <a class="font-semibold text-xl text-gray-800 leading-tight" href="/dashboard">Retour à l'accueil</a>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-right">
            {{ __('Message de '.$one_message->name) }}
        </h2>
        </div> 
    </x-slot>

    <div class="py-12">
        <div class="w-full max-w-xl bg-white rounded-lg p-5 mx-auto">
            <div class="mb-5 flex">
                <p class="font-bold w-1/2">{{ $one_message->name }}</p>
                <p class="font-bold w-1/2 text-right">{{ $one_message->created_at }}</p> 
            </div>
            <p class="mb-4">
                {{ $one_message->message }}
            </p>
            <div>
                <a class="mb-3 font-bold text-blue-800 hover:text-blue-900" href="mailto:{{ $one_message->email }}">{{ $one_message->email }}</a>
                <a class="font-bold text-blue-800 hover:text-blue-900" href="tel:{{ $one_message->phone }}">{{ $one_message->phone }}</a>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
