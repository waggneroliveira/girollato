@extends('client.core.client')
@section('content')
<section class="hero">
  <div class="swiper main-swiper">

    <div class="swiper-wrapper">

      <!-- Slide -->
      <div class="swiper-slide">
        <div class="hero-slide">

          <!-- Imagem full -->
          <div class="hero-bg">
            <img src="build/client/images/slide.png" alt="Distribuição PET">
          </div>

          <!-- Conteúdo -->
          <div class="hero-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">

                  <span class="hero-subtitle">
                    Te ajudando a compartilhar qualidade no seu negócio
                  </span>

                  <h1 class="hero-title">
                    Há 10 anos distribuindo soluções<br>
                    para empresas no mercado <strong>PET</strong>
                  </h1>

                  <div class="hero-actions">
                    <a href="#" class="rounded-pill px-4 btn-hero btn font-changa bg-yellow color-green font-18 font-medium text-decoration-none">
                        Conheça
                        <svg class="ms-2" width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.78794 12.474L8.02494 6.237L1.78794 -1.90735e-06L0.02079 1.76715L4.46985 6.237L0 10.7068L1.78794 12.474Z" fill="#0E523E"/>
                        </svg>
                    </a>
                    <a href="#" class="rounded-pill px-4 btn-hero btn font-changa bg-yellow color-green font-18 font-medium text-decoration-none">
                        Acessar Catálogo
                        <svg class="ms-2" width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.28975 9.17017C1.30848 9.53072 1.45344 9.87123 1.70426 10.1283L6.49015 15.0333C7.04555 15.6025 7.95515 15.6025 8.51054 15.0333L13.2964 10.1283C14.18 9.22192 13.5749 7.6319 12.2858 7.6319C11.9063 7.6319 11.544 7.78129 11.2752 8.05672L8.92907 10.4621V1.46592C8.92907 1.07699 8.77679 0.708085 8.51947 0.444363C7.53737 -0.533798 6.07158 0.23571 6.07158 1.46592V10.463L3.7246 8.05757C2.88827 7.19959 1.28975 7.66954 1.28975 9.17017ZM0.466453 17.457C-0.547411 18.4961 0.236799 20 1.43064 20H13.5708C14.8526 20 15.465 18.3842 14.5904 17.5136C14.307 17.2315 13.9706 17.0713 13.5708 17.0713L1.43064 17.0705C1.0715 17.0705 0.729482 17.2091 0.466453 17.457Z" fill="#0E523E"/>
                        </svg>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Slide extra (opcional) -->
      {{-- <div class="swiper-slide">
        <div class="hero-slide">

          <div class="hero-bg">
            <img src="build/client/images/slide.png" alt="Distribuição">
          </div>

          <div class="hero-overlay"></div>

          <div class="hero-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <h1 class="hero-title">
                    Distribuição inteligente<br>
                    para o seu negócio
                  </h1>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div> --}}

    </div>

    <!-- Paginação -->
    <div class="swiper-pagination"></div>

  </div>
</section>


@endsection
