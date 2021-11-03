@extends('client.layout.app')

@section('title')
    Notre entreprise 
@endsection

@section('content')
    <div class="about page">
        <div class="about__hero">
            <div class="about__hero__container container">
                <div class="about__hero__item">
                    <h3 class="main-font title mb">
                        Notre equipe
                    </h3>
                    <p>
                        Notre entreprise est composée d’une équipe professionnelle, d’expérience et dynamique.
                        <br>
                        Nous sommes fiers de collaborer avec des fournisseurs compétents.
                    </p>
                </div>
                <div class="about__hero__item">
                    <img src="{{ asset("/assets/img/about-us.png") }}" alt="Bora et Romain chef de l'entreprise Orora Menuiserie">
                </div>
            </div>
        </div>
        <div class="about__content p container">
            <div class="about__content__item mb p">
                <h3 class="main-font title main-color mb">
                    Notre Entreprise
                </h3>
                <div class="about__content__panel shadow">
                    <p class="p25 about__panel__item">
                        Issus de notre longue expérience dans la vente et pose de menuiseries, nous sommes partis d’un constat simple :
                        <br>
                        De nos jours, de nombreux acteurs privilégient des fournisseurs délocalisés pour une question de rentabilité mais engrangent des délais de SAV importants.
                        <br>
                        Nous avons donc allié nos années d’expériences à la recherche de fournisseurs non pas seulement nationaux, mais essentiellement locaux avec qui nous avons convenue des gammes de produits alliant qualité, longévité et compétitivité.
                    </p>
                    <img class="about__panel__item" src="{{ asset('/assets/img/notre-entreprise.jpg') }}" alt="Entreprise Orora Menuiserie">
                </div>
            </div>
            <div class="about__content__item mb p">
                <h3 class="main-font title main-color mb">
                    Nos missions
                </h3>
                <div class="about__content__panel shadow">
                    <p class="about__panel__item p25">
                        Notre principale mission est de vous proposer des menuiseries répondant parfaitement à vos besoins.
Notre expérience nous permet de vous conseiller et de trouver des solutions adaptées à vos attentes.
Et grâce à notre savoir-faire, nous vous garantissons un suivi complet de votre rénovation : de la vente à la pose.
                    </p>
                    <img class="about__panel__item" src="{{ asset('/assets/img/nos-missions.jpg') }}" alt="Les missions de l'entreprise Orora Menuiserie">
                </div>
            </div>
            <div class="about__content__item mb p">
                <h3 class="main-font title main-color mb">
                    Nos valeurs
                </h3>
                <div class="about__content__panel shadow">
                    <p class="about__panel__item p25">
                        Nous avons à cœur de vous proposer des produits modernes et innovants, de qualité et conformes aux normes en vigueur.
Nous accordons également une grande importance à la satisfaction de nos clients en nous engageant tout au long de votre projet.
Et avec des fournisseurs locaux, nous contribuons à faire fonctionner les entreprises locales.
                    </p>
                    <img class="about__panel__item" src="{{ asset('/assets/img/nos-valeurs.jpg') }}" alt="Les valeurs de l'entreprise Orora Menuiserie">
                </div>
            </div>
        </div>
        <div class="about__content">

        </div>
    </div>
@endsection