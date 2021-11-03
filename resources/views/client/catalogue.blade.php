@extends('client.layout.app')

@section('title')
    Catalogue    
@endsection

@section('content')
    <div class="page catalogue">
        <div class="catalogue__container">
            <h2 class="container text-center main-font title p">
                Nos catalogues
            </h2>
            {{-- item --}}
            <div class="catalogue__section p">
                <div class="container catalogue__section__container">
                    <div class="catalogue__image">
                        <img src="{{ asset('/assets/img/catalogue.png') }}" alt="Catalogue de Menuiserie de Orora Menuiserie">
                    </div>
                    <div class="catalogue__content">
                        <h3 class="main-font main-color subtitle mb">
                            Le catalogue integral
                        </h3>
                        <p class="mb">
                            {{ $catalogue_integral[0]->description }}
                        </p>
                        <a target="__blank" href="{{ $catalogue_integral[0]->link }}" class="w-max flex button-bg rounded-full font-bold text-white px-4 py-3 transition duration-300 ease-in-out mr-6 mb-10">
                            Consulter le catalogue
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-2 w-6 stroke-current text-white stroke-2" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div> 
                </div>
            </div>
            {{-- item --}}
            <div class="catalogue__section back-bg p">
                <div class="container catalogue__section__container">
                    <div class="catalogue__image">
                        <img src="{{ asset('/assets/img/catalogue-porte.png') }}" alt="Catalogue des portes d'entrées de chez Orora Menuiserie">
                    </div>
                    <div class="catalogue__content">
                        <h3 class="main-font main-color subtitle mb">
                            le catalogue Porte d’entrees
                        </h3>
                        <p class="mb">
                            {{ $catalogue_porte[0]->description }}
                        </p>
                        <a target="__blank" href="{{ $catalogue_porte[0]->link }}" class="w-max flex button-bg rounded-full font-bold text-white px-4 py-3 transition duration-300 ease-in-out  mr-6 mb-10">
                            Consulter le catalogue
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-2 w-6 stroke-current text-white stroke-2" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div> 
                </div>
            </div>
            {{-- item --}}
            <div class="catalogue__section p">
                <div class="container catalogue__section__container">
                    <div class="catalogue__content">
                        <h3 class="main-font main-color subtitle mb">
                            le catalogue fenetres
                        </h3>
                        <p class="mb">
                            {{ $catalogue_fenetre[0]->description }}
                        </p>
                        <a target="__blank" href="{{ $catalogue_fenetre[0]->link }}" class="w-max flex rounded-full button-bg font-bold text-white px-4 py-3 transition duration-300 ease-in-out mr-6 mb-10">
                            Consulter le catalogue
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-2 w-6 stroke-current text-white stroke-2" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div> 
                    <div class="catalogue__image">
                        <img src="{{ asset('/assets/img/catalogue-fenetre.png') }}" alt="Catalogue des fenêtres de chez Orora Menuiserie">
                    </div>
                </div>
            </div>
            {{-- item --}}
            <div class="catalogue__section back-bg p">
                <div class="container catalogue__section__container">
                    <div class="catalogue__image">
                        <img src="{{ asset('/assets/img/catalogue-volets.png') }}" alt="Le catalogue des Volets de chez Orora Menuiserie">
                    </div>
                    <div class="catalogue__content">
                        <h3 class="main-font main-color subtitle mb">
                            le catalogue volets
                        </h3>
                        <p class="mb">
                            {{ $catalogue_volet[0]->description }}
                        </p>
                        <a target="__blank" href="{{ $catalogue_volet[0]->link }}" class="w-max flex rounded-full button-bg font-bold text-white px-4 py-3 transition duration-300 ease-in-out mr-6 mb-10">
                            Consulter le catalogue
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-2 w-6 stroke-current text-white stroke-2" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div> 
                </div>
            </div>
            {{-- item --}}
            <div class="catalogue__section p">
                <div class="container catalogue__section__container">
                    <div class="catalogue__content">
                        <h3 class="main-font main-color subtitle mb">
                            le catalogue baies coulissantes
                        </h3>
                        <p class="mb">
                            {{ $catalogue_baie[0]->description }}
                        </p>
                        <a target="__blank" href="{{ $catalogue_baie[0]->link }}" class="w-max flex rounded-full button-bg font-bold text-white px-4 py-3 transition duration-300 ease-in-out mr-6 mb-10">
                            Consulter le catalogue
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-2 w-6 stroke-current text-white stroke-2" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div> 
                    <div class="catalogue__image">
                        <img src="{{ asset('/assets/img/catalogue-baie.png') }}" alt="Catalogue des Baies Coulissantes de chez Orora Menuiserie">
                    </div>
                </div>
            </div>
            {{-- item --}}
            <div class="catalogue__section back-bg p">
                <div class="container catalogue__section__container">
                    <div class="catalogue__image">
                        <img src="{{ asset('/assets/img/catalogue-store.png') }}" alt="Catalogue des stores bannes de chez Orora Menuiserie">
                    </div>
                    <div class="catalogue__content">
                        <h3 class="main-font main-color subtitle mb">
                            le catalogue store banne
                        </h3>
                        <p class="mb">
                            {{ $catalogue_store[0]->description }}
                        </p>
                        <a target="__blank" href="{{ $catalogue_store[0]->link }}" class="w-max flex rounded-full button-bg font-bold text-white px-4 py-3 transition duration-300 ease-in-out mr-6 mb-10">
                            Consulter le catalogue
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-2 w-6 stroke-current text-white stroke-2" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div> 
                </div>
            </div>
            {{-- item --}}
            <div class="catalogue__section p">
                <div class="container catalogue__section__container">
                    <div class="catalogue__content">
                        <h3 class="main-font main-color subtitle mb">
                            le catalogue portails
                        </h3>
                        <p class="mb">
                            {{ $catalogue_portail[0]->description }}
                        </p>
                        <a target="__blank" href="{{ $catalogue_portail[0]->link }}" class="w-max flex rounded-full button-bg font-bold text-white px-4 py-3 transition duration-300 ease-in-out mr-6 mb-10">
                            Consulter le catalogue
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline ml-2 w-6 stroke-current text-white stroke-2" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div> 
                    <div class="catalogue__image">
                        <img src="{{ asset('/assets/img/catalogue-portail.png') }}" alt="Catalogue des portails de chez Orora Menuiserie">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection