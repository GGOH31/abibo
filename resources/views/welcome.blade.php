
    <!-- End Header -->
    @extends('layout/app')
    <style>
        .hero-section {
  
    background: url("{{ asset('front/Outdoors/HABIBO VERTICAL.png') }}") no-repeat center center !important;
  
    }
    </style>
    @section('container')

  
   
    <!-- hero section -->
    <section class="hero-section">
        <div class="container" id="hero-cont">
          <div class="row" id="hero-row">
            <div class="col-12" id="hero-col">
              <h1 class="hero-h1">Bienvenue Au Complexe Hotelier Habibo</h1>
              <p class="hero-p">
                Le complexe hôtelier Habibo offre une expérience unique, mariant
                un lounge au style<br />
                classique jazz bar à cigares avec une architecture africaine.
              </p>
  
            </div>
          </div>
        </div>
      </section>
    <!-- hero section end -->

    <!-- About Section -->
    <section class="about-section">
      <div class="container" id="about-cont">
        <div class="row" id="home-about-row">
          <div class="col-12 col-lg-6" id="left-abt-col">
            <img
              class="home-abt-img"
              src="{{ asset('front/Outdoors/IMG_1660.png') }}"
              alt="home-abt-img"
            />
          </div>
          <div class="col-12 col-lg-6" id="right-abt-col">
            <h2 class="header-h2">A Propos Du Complexe Hotelier Habibo</h2>
            <p class="text-parag">
              Le complexe Habibo, écrin de luxe à Cocody, allie l'élégance d'un
              design africain à la modernité. Avec 30 chambres, dont 5 suites,
              il offre une expérience unique où tradition et confort se
              rencontrent. Son lounge au style jazz bar invite à des moments de
              détente sophistiquée, tandis que les vues sur la lagune depuis les
              toits ajoutent à son charme. Compact mais complet, Habibo est
              l'adresse idéale pour s'imprégner de sérénité et de raffinement.
            </p>

            <button
              class="yellow-btn"
              onclick="window.location.href = './about.html'"
            >
              Voir Plus
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section end -->

    <!-- Featured Rooms -->
    <section class="featured-room-section">
      <div class="container" id="featured-container">
        <div class="row" id="featured-row">
          <div class="col-12" id="featured-header">
            <h2 class="header-h2 text-center">Chambres et Suites en Vedette</h2>
            <p class="paragraph text-center">
              Voir quelques-uns des hébergements proposés au sein de notre
              complexe
            </p>
          </div>
          <!-- Cards -->

          <!-- Cottage -->
          <div class="col-12 col-lg-4" id="card-col">
            <div class="card-img" id="card-img-1">
              <div
                class="card-info"
                onclick="window.location.href = './accommodations/cottage.html'"
              >
                <h3>Standard</h3>
                <div class="icon-info">
                  <div class="icon-facilities">
                    <img src="./icons/family.svg" width="24px" alt="family" />
                    <p>Big Size</p>
                  </div>

                  <div class="icon-facilities">
                    <img src="./icons/bed.svg" width="24px" alt="Bedroom" />
                    <p>Une piece</p>
                  </div>

                  <div class="icon-facilities">
                    <img src="./icons/tissue.svg" width="24px" alt="Bathroom" />
                    <p>Douche Independante</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Round House -->
          <div class="col-12 col-lg-4" id="card-col">
            <div class="card-img" id="card-img-2">
              <div
                class="card-info"
                onclick="window.location.href = './accommodations/round-house.html'"
              >
                <h3>Medium</h3>
                <div class="icon-info">
                  <div class="icon-facilities">
                    <img src="./icons/family.svg" width="24px" alt="family" />
                    <p>Familly Size</p>
                  </div>

                  <div class="icon-facilities">
                    <img src="./icons/bed.svg" width="24px" alt="Bedroom" />
                    <p>Une Piece</p>
                  </div>

                  <div class="icon-facilities">
                    <img src="./icons/tissue.svg" width="24px" alt="Bathroom" />
                    <p>Douche Independante</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- VVIP -->
          <div class="col-12 col-lg-4" id="card-col">
            <div class="card-img" id="card-img-3">
              <div
                class="card-info"
                onclick="window.location.href = './accommodations/vvip.html'"
              >
                <h3>Suites</h3>
                <div class="icon-info">
                  <div class="icon-facilities">
                    <img src="./icons/couple.svg" width="24px" alt="people" />
                    <p>Big King Size</p>
                  </div>

                  <div class="icon-facilities">
                    <img src="./icons/bed.svg" width="24px" alt="Bedroom" />
                    <p>Deux pieces</p>
                  </div>

                  <div class="icon-facilities">
                    <img src="./icons/tissue.svg" width="24px" alt="Bathroom" />
                    <p>Douche Independante</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="ft-btn">
            <button
              class="yellow-btn"
              onclick="window.location.href = './rooms.html'"
            >
              Voir toutes les chambres
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Rooms End -->

    <!-- Beach Section -->
    <section class="beach-section">
      <div class="container">
        <div class="row" id="beach-row">
          <div class="col-12 col-lg-6" id="left-beach-section">
            <img class="beach-img" src="{{ asset('front/Outdoors/flag.png') }}" alt="" />
          </div>

          <div class="col-12 col-lg-6" id="right-beach-section">
            <h2 class="header-h2">Habibo Inside</h2>
            <p class="text-parag">
              Offrez-vous un moment de répit en admirant la vue panoramique sur
              la lagune tout en savourant l’authenticité d’un cadre africain
              moderne et élégant.
              <br />
              Habibo est la destination idéale pour vos vacances, pique-niques,
              escapades de week-end, fêtes, événements sociaux et professionnels
              en plein air. Découvrez le charme unique de notre lounge, au style
              jazz bar à cigares, où vous pourrez apprécier une boisson fraîche
              tout en étant bercé par la brise légère et apaisante. Visitez
              notre pizzeria et notre espace barbecue pour un voyage culinaire
              inoubliable.
              <br />
              Les arômes et saveurs de nos grillades et pizzas vous
              transporteront, laissant un souvenir impérissable de votre
              expérience.
              <br />
              Besoin de vous réchauffer avant de plonger dans les activités ?
              Habibo offre une multitude de jeux de plage comme le volleyball et
              le football, promettant divertissement et plaisir dans un cadre
              somptueux.
              <br />
              Chez Habibo, vivez la différence entre le naturel et l'artificiel,
              tout en goûtant à la belle vie, dans un environnement où chaque
              instant est conçu pour être mémorable.
            </p>
            <br />
            <button
              class="yellow-btn"
              onclick="window.location.href = './amenities.html'"
            >
              Voir tout les services
            </button>
          </div>
        </div>
        <div class="ameni-btn"></div>
      </div>
    </section>
    <!-- Beach End -->

    <!-- Video -->
    <section class="video-section">
      <div class="container" id="video-cont">
        <div class="row" id="video-row">
          <div class="col-12" id="video-col">
            <h2 class="text-center yellow-header">Regardez Notre Video</h2>
            <button class="vimeo-launch" data-vimeo-id="931323058">
              <i
                class="fa-solid fa-circle-play fa-6x"
                style="color: #efeef3bb"
              ></i>
            </button>
          </div>
        </div>
      </div>
    </section>

    @endsection


  
