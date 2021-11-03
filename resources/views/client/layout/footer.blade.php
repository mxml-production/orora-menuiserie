<footer id="contact">
    <div class="footer__contact">
        <img src="{{ asset('/assets/img/footer-image.jpg') }}" alt="Homme avec un marteau de chez Orora Menuiserie">
        <form method="POST" action="/message" class="container p">
            @csrf
            <h2 class="mb main-font title">
                Nous contacter
            </h2>
            <input class="mb" type="text" name="name" placeholder="Nom" required>
            <input class="mb" type="tel" name="phone" placeholder="Tel" required>
            <input class="mb" type="email" name="email" placeholder="Email" required>
            <textarea class="mb" name="message" placeholder="Message" required></textarea>
            <button type="submit" class="main-font button mb">
                Envoyer
            </button>
        </form>
    </div>
    <div class="footer__nav p">
        <div class="container footer__grid p">
            <div class="footer__item">
                <img class="footer__logo" src="{{ asset('/assets/img/logo-orora-blanc.png') }}" alt="Logo Orora Menuiserie Blanc">
            </div>
            <div class="footer__item">
                <h3 class="subtitle mb">
                    Navigation
                </h3>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/entreprise">Notre entreprise</a></li>
                    <li><a href="/realisation">Nos réalisations</a></li>
                    <li><a href="/catalogue">Nos catalogues</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer__item">
                <h3 class="subtitle mb">
                    Contact
                </h3>
                <ul>                   
                    <li><a href="tel:{{ $footer_information[1]->information }}">{{ $footer_information[1]->information }}</a></li>
                    <li><a href="mailto:{{ $footer_information[0]->information }}">{{ $footer_information[0]->information }}</a></li>
                    <li><a>{{ $footer_information[2]->information }}</a></li>       
                </ul>
            </div>
            <div class="footer__item">
            <h3 class="subtitle mb">
                Légal
            </h3>
            <ul>
                <li><a href="/mentions-legales">Mentions légales</a></li>
                <li><a href="/sitemap/sitemap.xml">Plan du site</a></li>
            </ul>
        </div>
        </div>
        </div>
    </div>
</footer>

<script src="{{ asset('/js/swiper-bundle.min.js') }}"></script>
        <script>
            var swiper=new Swiper('.swiper-container', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 40
                        },
                        1200: {
                            slidesPerView: 3,
                            spaceBetween: 40
                        },
                    }
                }
            );

            var swiper=new Swiper('.swiper-container-avis', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    autoplay: {
                        delay: 10000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                }
            );
        </script>
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>