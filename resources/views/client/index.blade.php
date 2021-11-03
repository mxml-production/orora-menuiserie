@extends('client.layout.app')

@section('title')
Accueil
@endsection

@section('content')
<div class="page index p">
    <div class="hero">
        <h2 class="hero__title main-font title container main-color mb">
            L’ouverture sous un nouveau jour !
        </h2>
        <div class="hero__banner container">
            <img src="{{ env('AWS_URL').$banner->image_path }}"
                alt="Bannière de promotion de l'entreprise Orora : {{ $banner->title }}" title="{{ $banner->title }}"> 
        </div>
    </div>
    <div class="aboutus back-bg p">
        <h2 class="aboutus__title main-font title main-color container mb">
            Qui sommes-nous ?
        </h2>
        <div class="aboutus__pannel container shadow mb">
            <p class="p25">
                Issus de notre longue expérience dans la vente et pose de menuiseries, nous sommes partis d’un constat simple :
                <br><br>
                De nos jours, de nombreux acteurs privilégient des fournisseurs délocalisés pour une question de rentabilité mais engrangent des délais de SAV importants.
                <br><br>
                Nous avons donc allié nos années d’expériences à la recherche de fournisseurs non pas seulement nationaux, mais essentiellement locaux avec qui nous avons convenu des gammes de produits alliant qualité, longévité et compétitivité.
            </p>
            <div class="aboutus__image">
                <img src="{{ asset('/assets/img/about-us.jpg') }}" alt="Image de fenêtre a frappe Orora Menuiserie en aluminium">
            </div>
        </div>
        <a class="container main-font button" href="/entreprise">En savoir plus</a>
    </div>
    <div class="informations p">
        <h2 class="informations__title main-font title container mb">
            Informations utiles
        </h2>
        <div class="container mb">
            <div class="informations__pannel shadow">
                <div class="informations__buttons">
                    <div class="informations__button">
                        <svg class="svg-icon p" viewBox="0 0 20 20">
							<path d="M18.092,5.137l-3.977-1.466h-0.006c0.084,0.042-0.123-0.08-0.283,0H13.82L10,5.079L6.178,3.671H6.172c0.076,0.038-0.114-0.076-0.285,0H5.884L1.908,5.137c-0.151,0.062-0.25,0.207-0.25,0.369v10.451c0,0.691,0.879,0.244,0.545,0.369l3.829-1.406l3.821,1.406c0.186,0.062,0.385-0.029,0.294,0l3.822-1.406l3.83,1.406c0.26,0.1,0.543-0.08,0.543-0.369V5.506C18.342,5.344,18.242,5.199,18.092,5.137 M5.633,14.221l-3.181,1.15V5.776l3.181-1.15V14.221z M9.602,15.371l-3.173-1.15V4.626l3.173,1.15V15.371z M13.57,14.221l-3.173,1.15V5.776l3.173-1.15V14.221z M17.547,15.371l-3.182-1.15V4.626l3.182,1.15V15.371z"></path>
						</svg>
                    </div>
                    <div class="informations__button active">
                        <svg class="svg-icon p" viewBox="0 0 20 20">
							<path d="M13.372,1.781H6.628c-0.696,0-1.265,0.569-1.265,1.265v13.91c0,0.695,0.569,1.265,1.265,1.265h6.744c0.695,0,1.265-0.569,1.265-1.265V3.045C14.637,2.35,14.067,1.781,13.372,1.781 M13.794,16.955c0,0.228-0.194,0.421-0.422,0.421H6.628c-0.228,0-0.421-0.193-0.421-0.421v-0.843h7.587V16.955z M13.794,15.269H6.207V4.731h7.587V15.269z M13.794,3.888H6.207V3.045c0-0.228,0.194-0.421,0.421-0.421h6.744c0.228,0,0.422,0.194,0.422,0.421V3.888z"></path>
						</svg>
                    </div>
                    <div class="informations__button">
                        <svg class="svg-icon p" viewBox="0 0 20 20">
							<path fill="none" d="M16.254,3.399h-0.695V3.052c0-0.576-0.467-1.042-1.041-1.042c-0.576,0-1.043,0.467-1.043,1.042v0.347H6.526V3.052c0-0.576-0.467-1.042-1.042-1.042S4.441,2.476,4.441,3.052v0.347H3.747c-0.768,0-1.39,0.622-1.39,1.39v11.813c0,0.768,0.622,1.39,1.39,1.39h12.507c0.768,0,1.391-0.622,1.391-1.39V4.789C17.645,4.021,17.021,3.399,16.254,3.399z M14.17,3.052c0-0.192,0.154-0.348,0.348-0.348c0.191,0,0.348,0.156,0.348,0.348v0.347H14.17V3.052z M5.136,3.052c0-0.192,0.156-0.348,0.348-0.348S5.831,2.86,5.831,3.052v0.347H5.136V3.052z M16.949,16.602c0,0.384-0.311,0.694-0.695,0.694H3.747c-0.384,0-0.695-0.311-0.695-0.694V7.568h13.897V16.602z M16.949,6.874H3.052V4.789c0-0.383,0.311-0.695,0.695-0.695h12.507c0.385,0,0.695,0.312,0.695,0.695V6.874z M5.484,11.737c0.576,0,1.042-0.467,1.042-1.042c0-0.576-0.467-1.043-1.042-1.043s-1.042,0.467-1.042,1.043C4.441,11.271,4.908,11.737,5.484,11.737z M5.484,10.348c0.192,0,0.347,0.155,0.347,0.348c0,0.191-0.155,0.348-0.347,0.348s-0.348-0.156-0.348-0.348C5.136,10.503,5.292,10.348,5.484,10.348z M14.518,11.737c0.574,0,1.041-0.467,1.041-1.042c0-0.576-0.467-1.043-1.041-1.043c-0.576,0-1.043,0.467-1.043,1.043C13.475,11.271,13.941,11.737,14.518,11.737z M14.518,10.348c0.191,0,0.348,0.155,0.348,0.348c0,0.191-0.156,0.348-0.348,0.348c-0.193,0-0.348-0.156-0.348-0.348C14.17,10.503,14.324,10.348,14.518,10.348z M14.518,15.212c0.574,0,1.041-0.467,1.041-1.043c0-0.575-0.467-1.042-1.041-1.042c-0.576,0-1.043,0.467-1.043,1.042C13.475,14.745,13.941,15.212,14.518,15.212z M14.518,13.822c0.191,0,0.348,0.155,0.348,0.347c0,0.192-0.156,0.348-0.348,0.348c-0.193,0-0.348-0.155-0.348-0.348C14.17,13.978,14.324,13.822,14.518,13.822z M10,15.212c0.575,0,1.042-0.467,1.042-1.043c0-0.575-0.467-1.042-1.042-1.042c-0.576,0-1.042,0.467-1.042,1.042C8.958,14.745,9.425,15.212,10,15.212z M10,13.822c0.192,0,0.348,0.155,0.348,0.347c0,0.192-0.156,0.348-0.348,0.348s-0.348-0.155-0.348-0.348C9.653,13.978,9.809,13.822,10,13.822z M5.484,15.212c0.576,0,1.042-0.467,1.042-1.043c0-0.575-0.467-1.042-1.042-1.042s-1.042,0.467-1.042,1.042C4.441,14.745,4.908,15.212,5.484,15.212z M5.484,13.822c0.192,0,0.347,0.155,0.347,0.347c0,0.192-0.155,0.348-0.347,0.348s-0.348-0.155-0.348-0.348C5.136,13.978,5.292,13.822,5.484,13.822z M10,11.737c0.575,0,1.042-0.467,1.042-1.042c0-0.576-0.467-1.043-1.042-1.043c-0.576,0-1.042,0.467-1.042,1.043C8.958,11.271,9.425,11.737,10,11.737z M10,10.348c0.192,0,0.348,0.155,0.348,0.348c0,0.191-0.156,0.348-0.348,0.348s-0.348-0.156-0.348-0.348C9.653,10.503,9.809,10.348,10,10.348z"></path>
						</svg>
                    </div>
                </div>
                {{--  --}}
                <div class="informations__content p25">
                    <h3 class="main-font subtitle mb">
                        {{ $informationgps[0]->information }} 
                    </h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2692.080656277086!2d1.377364551373835!3d47.566219098657456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e4a8e523a9f3f5%3A0x3bd5d7a64afdc9ff!2s242%20Rue%20Jacquard%2C%2041350%20Vineuil!5e0!3m2!1sfr!2sfr!4v1615301869734!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                {{--  --}}
                <div class="informations__content p25 active">
                    <h3 class="main-font subtitle main-color">
                        Numero de telephone
                    </h3>
                    <a class="mb subtitle" href="tel:{{ $informationphone[0]->information }}">{{ $informationphone[0]->information }}</a>
                    <h3 class="main-font subtitle main-color">
                        Adresse email
                    </h3>
                    <a class="mb subtitle" href="mailto:{{ $informationmail[0]->information }}">
                        {{ $informationmail[0]->information }}
                    </a>
                </div>
                {{--  --}}
                <div class="informations__content p25">
                    <h3 class="main-font title mb">
                        Horaires d’ouverture
                    </h3>
                    <h3 class="main-font subtitle main-color">
                        Du lundi au vendredi
                    </h3>
                    <p class="mb">
                        {{ $informationweek[0]->information }}
                    </p>
                    <h3 class="main-font subtitle main-color">
                        Samedi
                    </h3>
                    <p>
                        {{ $informationweekend[0]->information }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="realisations back-bg p">
        <h2 class="main-font title main-color container mb realisations__title">
            Nos dernieres realisations
        </h2>
        <div class="realisations__container container">
            <div class="swiper-container">
                <div class="swiper-wrapper mb">
                    @foreach ($realisations as $realisation)
                        <a href="/realisation" class="swiper-slide shadow"><img src="{{ env('AWS_URL').$realisation->image_path }}" alt="{{ $realisation->description }}">
                            <p class="main-font subtitle">{{ $realisation->description }}</p>
                        </a>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination">

                </div>
            </div>
        </div>
    </div>
    <div class="certifications">
        <div class="certifications__banner p25">
            <h2 class="main-font title certifications__title">Nos certifications</h2>
        </div>
        <div class="certifications__grid container p25">
            <img src="{{ asset('assets/img/certifications/cekal.jpg') }}" alt="Certification logo de Cekal">
            <img src="{{ asset('assets/img/certifications/NF-serenite-certifiee.jpg') }}" alt="Certification logo de NF serenite certifiee">
            <img src="{{ asset('assets/img/certifications/origine-france-garantie.jpg') }}" alt="Certification logo de Origine france garantie">
            <img src="{{ asset('assets/img/certifications/pefc.jpg') }}" alt="Certification logo de pefc">
            <img src="{{ asset('assets/img/certifications/qualicoat.jpg') }}" alt="Certification logo de qualicoat">
            <img src="{{ asset('assets/img/certifications/qualimarine.jpg') }}" alt="Certification logo de qualimarine">
            <img src="{{ asset('assets/img/certifications/rge.jpg') }}" alt="Certification logo de RGE">
        </div>
    </div>

</div>
@endsection