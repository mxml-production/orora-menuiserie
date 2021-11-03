@extends('client.layout.app')

@section('title')
    Réalisation   
@endsection

@section('content')
    <div class="page realisation">
        <div class="realisation__avis back-bg p">
            <h2 class="main-font title mb container text-center">
                Les avis clients
            </h2>
            <div class="swiper-container-avis container">
                <div class="swiper-wrapper mb">
                    @foreach ($avis as $avi)
                        <div style="cursor: grab" class="swiper-slide shadow">
                            <p class="text-center mb-12">
                                {{ $avi->texte }}
                            </p>
                            <p class="main-font text-right main-color mr-8">
                                {{ $avi->auteur }}
                            </p>
                        </div>
                    @endforeach
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination">
                </div>
            </div>
        </div>
        <div class="realisation__real__container p">
            <h3 class="container text-center main-font main-color title mb">Nos dernieres realisations</h3>
            <div class="realisation__container__grid container mb">
                @foreach ($realisations as $realisation)
                <div class="realisation__grid__item shadow-lg">
                    <img src="{{ env('AWS_URL').$realisation->image_path }}" alt="{{ $realisation->description }}">
                    <p class="main-font subtitle text-white">{{ $realisation->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection