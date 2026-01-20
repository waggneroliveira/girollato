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
            <picture>
                <source srcset="{{ asset('build/client/images/slide-mobile.png') }}" media="(max-width: 530px)">
                <img src="{{ asset('build/client/images/slide.png') }}" alt="Distribuição PET" title="Distribuição PET">
            </picture>
          </div>

          <!-- Conteúdo -->
          <div class="hero-content mt-5 mt-lg-0">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">

                    <span class="hero-subtitle font-changa font-15 font-regular">
                        Te ajudando a compartilhar qualidade no seu negócio
                    </span>

                    <h1 class="hero-title font-changa font-40 font-bold">
                        Há 10 anos distribuindo soluções para empresas no mercado PET
                    </h1>

                    <div class="hero-actions d-flex">
                        <a href="#" class="btn-one rounded-pill px-4 btn-hero btn font-changa bg-yellow color-green font-18 font-medium text-decoration-none">
                            Conheça
                            <svg class="ms-2" width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.78794 12.474L8.02494 6.237L1.78794 -1.90735e-06L0.02079 1.76715L4.46985 6.237L0 10.7068L1.78794 12.474Z" fill="#0E523E"/>
                            </svg>
                        </a>
                        <a href="#" class="btn-two rounded-pill px-4 btn-hero btn font-changa bg-yellow color-green font-18 font-medium text-decoration-none">
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
      <div class="swiper-slide">
        <div class="hero-slide">

          <!-- Imagem full -->
          <div class="hero-bg">
            <picture>
                <source srcset="{{ asset('build/client/images/slide-mobile.png') }}" media="(max-width: 530px)">
                <img src="{{ asset('build/client/images/slide.png') }}" alt="Distribuição PET" title="Distribuição PET">
            </picture>
          </div>

          <!-- Conteúdo -->
          <div class="hero-content mt-5 mt-lg-0">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">

                  <span class="hero-subtitle font-changa font-15 font-regular">
                    Te ajudando a compartilhar qualidade no seu negócio
                  </span>

                  <h1 class="hero-title font-changa font-40 font-bold">
                    Há 10 anos distribuindo soluções para empresas no mercado PET
                  </h1>

                  <div class="hero-actions d-flex">
                    <a href="#" class="btn-one rounded-pill px-4 btn-hero btn font-changa bg-yellow color-green font-18 font-medium text-decoration-none">
                        Conheça
                        <svg class="ms-2" width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.78794 12.474L8.02494 6.237L1.78794 -1.90735e-06L0.02079 1.76715L4.46985 6.237L0 10.7068L1.78794 12.474Z" fill="#0E523E"/>
                        </svg>
                    </a>
                    <a href="#" class="btn-two rounded-pill px-4 btn-hero btn font-changa bg-yellow color-green font-18 font-medium text-decoration-none">
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

    </div>

    <!-- Paginação -->
    <div class="swiper-pagination news"></div>
  </div>
</section>

<section class="topics py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-4 col-lg-2 topic-col">
                <a href="#" class="topic-item d-block" rel="noopener noreferrer">
                    <img src="{{ asset('build/client/images/tp-1.png') }}" alt="Tópico 1" class="img-fluid d-block m-auto">
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-2 topic-col">
                <a href="#" class="topic-item d-block" rel="noopener noreferrer">
                    <img src="{{ asset('build/client/images/tp-2.png') }}" alt="Tópico 2" class="img-fluid d-block m-auto">
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-2 topic-col">
                <a href="#" class="topic-item d-block" rel="noopener noreferrer">
                    <img src="{{ asset('build/client/images/tp-3.png') }}" alt="Tópico 3" class="img-fluid d-block m-auto">
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-2 topic-col">
                <a href="#" class="topic-item d-block" rel="noopener noreferrer">
                    <img src="{{ asset('build/client/images/tp-4.png') }}" alt="Tópico 4" class="img-fluid d-block m-auto">
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-2 topic-col">
                <a href="#" class="topic-item d-block" rel="noopener noreferrer">
                    <img src="{{ asset('build/client/images/tp-5.png') }}" alt="Tópico 5" class="img-fluid d-block m-auto">
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-2 topic-col">
                <a href="#" class="topic-item d-block" rel="noopener noreferrer">
                    <img src="{{ asset('build/client/images/tp-6.png') }}" alt="Tópico 6" class="img-fluid d-block m-auto">
                </a>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container-fluid">
        <div class="row align-items-center">

        <!-- IMAGEM (fora do container) -->
        <div class="col-12 col-lg-6 p-0 about-image">
            <img
            src="{{ asset('build/client/images/about.png') }}"
            alt="Sobre a Girollato"
            class="img-fluid w-100"
            >
        </div>

        <!-- TEXTO (dentro do container) -->
        <div class="col-12 col-lg-5 mt-4 mt-lg-0 z-3">
            <div class="container position-relative">
                <img src="{{asset('build/client/images/firula-about.svg')}}" alt="Firula" class="position-absolute left-0 firula-about">

                <span class="about-subtitle color-yellow font-changa font-16 font-bold d-block mb-2">
                    Passo a passo
                </span>

                <h3 class="about-title font-changa font-50 font-bold mb-3 text-black">
                    Somos a <span class="color-green">Girollato</span>
                </h3>

                <!-- Conteúdo adicional opcional -->
                <p class="color-grey font-changa font-16 font-regular">
                    Há mais de 10 anos, nos destacamos como a distribuidora de rações e produtos ideais para o seu pet, levando inovação, eficiência e confiança ao mercado PET. Trabalhamos para garantir as melhores entregas, com agilidade, qualidade e compromisso. Nosso foco é conectar marcas e estabelecimentos com os produtos certos, no momento certo, oferecendo soluções logísticas que facilitam o dia a dia e impulsionam resultados. 
                </p>

                <ul class="list-unstyled mt-4">
                    <li class="d-flex align-items-baseline mb-3">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.1437 9.29862C9.82131 9.06395 9.56129 8.80262 9.36368 8.51462C9.16606 8.22662 9.02045 7.89062 8.92684 7.50662C8.80203 7.00528 8.52641 6.59462 8.09998 6.27462C7.67355 5.95462 7.20291 5.79995 6.68808 5.81062C6.17324 5.82128 5.7182 5.98662 5.32297 6.30662C4.92774 6.62662 4.66252 7.04262 4.52731 7.55462C4.4233 7.94928 4.2985 8.26928 4.15288 8.51462C3.96567 8.81328 3.72125 9.05328 3.41963 9.23462C3.066 9.43728 2.80598 9.72528 2.63957 10.0986C2.49396 10.408 2.41595 10.7386 2.40555 11.0906C2.39515 11.8586 2.53816 12.4586 2.83458 12.8906C3.13101 13.3226 3.56004 13.5813 4.12168 13.6666C4.3817 13.6986 4.65732 13.6826 4.94854 13.6186C5.17736 13.5653 5.44258 13.4746 5.7442 13.3466C6.56587 12.9946 7.33032 13.016 8.03758 13.4106C8.09998 13.4426 8.18839 13.48 8.3028 13.5226L8.3964 13.5706C9.03085 13.8373 9.6289 13.7626 10.1905 13.3466C10.5754 13.0586 10.8666 12.68 11.0642 12.2106C11.2618 11.6986 11.2982 11.1973 11.1734 10.7066C11.0382 10.152 10.695 9.68262 10.1437 9.29862ZM9.6601 4.89862C10.1489 4.33328 10.4584 3.72528 10.5884 3.07462C10.7184 2.42395 10.6586 1.74128 10.409 1.02662C10.2737 0.653284 10.0761 0.378617 9.81611 0.202617C9.55609 0.0266171 9.27267 -0.0347166 8.96585 0.0186167C8.65902 0.07195 8.3652 0.242617 8.08438 0.530617C7.43953 1.19195 7.10151 2.08262 7.0703 3.20262C7.0599 3.62928 7.13271 4.03728 7.28872 4.42662C7.44473 4.81595 7.65795 5.10128 7.92837 5.28262C8.19879 5.46395 8.48741 5.52262 8.79423 5.45862C9.10106 5.39462 9.38968 5.20795 9.6601 4.89862ZM4.09048 5.01062C4.3505 5.25595 4.62092 5.40262 4.90174 5.45062C5.18256 5.49862 5.44518 5.44795 5.6896 5.29862C5.93402 5.14928 6.13423 4.91462 6.29025 4.59462C6.48786 4.16795 6.57627 3.70395 6.55547 3.20262C6.53466 2.03995 6.17064 1.12262 5.46338 0.450617C5.21376 0.205284 4.94854 0.0612841 4.66772 0.0186167C4.3869 -0.0240498 4.12428 0.0292835 3.87986 0.178617C3.63545 0.32795 3.43523 0.559951 3.27922 0.874617C3.12321 1.18928 3.0348 1.54928 3.014 1.95462C2.94119 3.23462 3.30002 4.25328 4.09048 5.01062ZM13.5916 4.65862C13.5188 4.28528 13.342 4.00528 13.0612 3.81862C12.7803 3.63195 12.4579 3.57062 12.0939 3.63462C11.6674 3.71995 11.2566 3.94395 10.8614 4.30662C10.4662 4.66928 10.1489 5.10128 9.90972 5.60262C9.6705 6.10395 9.55609 6.58928 9.56649 7.05862C9.56649 7.16528 9.57169 7.24528 9.58209 7.29862C9.6549 7.85328 9.84991 8.24528 10.1671 8.47462C10.4844 8.70395 10.8822 8.73862 11.3606 8.57862C11.8183 8.42928 12.2447 8.13062 12.6399 7.68262C13.0144 7.25595 13.29 6.77062 13.4668 6.22662C13.654 5.66128 13.6956 5.13862 13.5916 4.65862ZM4.05928 7.17062C4.05928 6.53062 3.91887 5.94662 3.63805 5.41862C3.35722 4.89062 2.95679 4.42928 2.43675 4.03462C1.99992 3.70395 1.56829 3.56528 1.14186 3.61862C0.757028 3.66128 0.465807 3.84262 0.268192 4.16262C0.0705767 4.48262 -0.0178299 4.93062 0.00297165 5.50662C0.0757771 6.13595 0.268192 6.69062 0.580215 7.17062C0.923441 7.72528 1.39668 8.15728 1.99992 8.46662C2.37435 8.65862 2.72018 8.72528 3.0374 8.66662C3.35462 8.60795 3.60424 8.44262 3.78626 8.17062C3.96827 7.89862 4.05928 7.56528 4.05928 7.17062Z" fill="#565656"/>
                        </svg>

                        <p class="mb-0 color-grey font-changa font-16 font-semibold col-11 ms-3">
                            Impulsionar o crescimento do seu negócio no segmento pet é o que nos move.
                        </p>
                    </li>

                    <li class="d-flex align-items-baseline mb-3">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.1437 9.29862C9.82131 9.06395 9.56129 8.80262 9.36368 8.51462C9.16606 8.22662 9.02045 7.89062 8.92684 7.50662C8.80203 7.00528 8.52641 6.59462 8.09998 6.27462C7.67355 5.95462 7.20291 5.79995 6.68808 5.81062C6.17324 5.82128 5.7182 5.98662 5.32297 6.30662C4.92774 6.62662 4.66252 7.04262 4.52731 7.55462C4.4233 7.94928 4.2985 8.26928 4.15288 8.51462C3.96567 8.81328 3.72125 9.05328 3.41963 9.23462C3.066 9.43728 2.80598 9.72528 2.63957 10.0986C2.49396 10.408 2.41595 10.7386 2.40555 11.0906C2.39515 11.8586 2.53816 12.4586 2.83458 12.8906C3.13101 13.3226 3.56004 13.5813 4.12168 13.6666C4.3817 13.6986 4.65732 13.6826 4.94854 13.6186C5.17736 13.5653 5.44258 13.4746 5.7442 13.3466C6.56587 12.9946 7.33032 13.016 8.03758 13.4106C8.09998 13.4426 8.18839 13.48 8.3028 13.5226L8.3964 13.5706C9.03085 13.8373 9.6289 13.7626 10.1905 13.3466C10.5754 13.0586 10.8666 12.68 11.0642 12.2106C11.2618 11.6986 11.2982 11.1973 11.1734 10.7066C11.0382 10.152 10.695 9.68262 10.1437 9.29862ZM9.6601 4.89862C10.1489 4.33328 10.4584 3.72528 10.5884 3.07462C10.7184 2.42395 10.6586 1.74128 10.409 1.02662C10.2737 0.653284 10.0761 0.378617 9.81611 0.202617C9.55609 0.0266171 9.27267 -0.0347166 8.96585 0.0186167C8.65902 0.07195 8.3652 0.242617 8.08438 0.530617C7.43953 1.19195 7.10151 2.08262 7.0703 3.20262C7.0599 3.62928 7.13271 4.03728 7.28872 4.42662C7.44473 4.81595 7.65795 5.10128 7.92837 5.28262C8.19879 5.46395 8.48741 5.52262 8.79423 5.45862C9.10106 5.39462 9.38968 5.20795 9.6601 4.89862ZM4.09048 5.01062C4.3505 5.25595 4.62092 5.40262 4.90174 5.45062C5.18256 5.49862 5.44518 5.44795 5.6896 5.29862C5.93402 5.14928 6.13423 4.91462 6.29025 4.59462C6.48786 4.16795 6.57627 3.70395 6.55547 3.20262C6.53466 2.03995 6.17064 1.12262 5.46338 0.450617C5.21376 0.205284 4.94854 0.0612841 4.66772 0.0186167C4.3869 -0.0240498 4.12428 0.0292835 3.87986 0.178617C3.63545 0.32795 3.43523 0.559951 3.27922 0.874617C3.12321 1.18928 3.0348 1.54928 3.014 1.95462C2.94119 3.23462 3.30002 4.25328 4.09048 5.01062ZM13.5916 4.65862C13.5188 4.28528 13.342 4.00528 13.0612 3.81862C12.7803 3.63195 12.4579 3.57062 12.0939 3.63462C11.6674 3.71995 11.2566 3.94395 10.8614 4.30662C10.4662 4.66928 10.1489 5.10128 9.90972 5.60262C9.6705 6.10395 9.55609 6.58928 9.56649 7.05862C9.56649 7.16528 9.57169 7.24528 9.58209 7.29862C9.6549 7.85328 9.84991 8.24528 10.1671 8.47462C10.4844 8.70395 10.8822 8.73862 11.3606 8.57862C11.8183 8.42928 12.2447 8.13062 12.6399 7.68262C13.0144 7.25595 13.29 6.77062 13.4668 6.22662C13.654 5.66128 13.6956 5.13862 13.5916 4.65862ZM4.05928 7.17062C4.05928 6.53062 3.91887 5.94662 3.63805 5.41862C3.35722 4.89062 2.95679 4.42928 2.43675 4.03462C1.99992 3.70395 1.56829 3.56528 1.14186 3.61862C0.757028 3.66128 0.465807 3.84262 0.268192 4.16262C0.0705767 4.48262 -0.0178299 4.93062 0.00297165 5.50662C0.0757771 6.13595 0.268192 6.69062 0.580215 7.17062C0.923441 7.72528 1.39668 8.15728 1.99992 8.46662C2.37435 8.65862 2.72018 8.72528 3.0374 8.66662C3.35462 8.60795 3.60424 8.44262 3.78626 8.17062C3.96827 7.89862 4.05928 7.56528 4.05928 7.17062Z" fill="#565656"/>
                        </svg>
                        <p class="mb-0 color-grey font-changa font-16 font-semibold col-11 ms-3">
                            Existimos para apresentar um novo conceito em logística e distribuição de produtos pet, com mais agilidade e eficiência.
                        </p>
                    </li>

                    <li class="d-flex align-items-baseline">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.1437 9.29862C9.82131 9.06395 9.56129 8.80262 9.36368 8.51462C9.16606 8.22662 9.02045 7.89062 8.92684 7.50662C8.80203 7.00528 8.52641 6.59462 8.09998 6.27462C7.67355 5.95462 7.20291 5.79995 6.68808 5.81062C6.17324 5.82128 5.7182 5.98662 5.32297 6.30662C4.92774 6.62662 4.66252 7.04262 4.52731 7.55462C4.4233 7.94928 4.2985 8.26928 4.15288 8.51462C3.96567 8.81328 3.72125 9.05328 3.41963 9.23462C3.066 9.43728 2.80598 9.72528 2.63957 10.0986C2.49396 10.408 2.41595 10.7386 2.40555 11.0906C2.39515 11.8586 2.53816 12.4586 2.83458 12.8906C3.13101 13.3226 3.56004 13.5813 4.12168 13.6666C4.3817 13.6986 4.65732 13.6826 4.94854 13.6186C5.17736 13.5653 5.44258 13.4746 5.7442 13.3466C6.56587 12.9946 7.33032 13.016 8.03758 13.4106C8.09998 13.4426 8.18839 13.48 8.3028 13.5226L8.3964 13.5706C9.03085 13.8373 9.6289 13.7626 10.1905 13.3466C10.5754 13.0586 10.8666 12.68 11.0642 12.2106C11.2618 11.6986 11.2982 11.1973 11.1734 10.7066C11.0382 10.152 10.695 9.68262 10.1437 9.29862ZM9.6601 4.89862C10.1489 4.33328 10.4584 3.72528 10.5884 3.07462C10.7184 2.42395 10.6586 1.74128 10.409 1.02662C10.2737 0.653284 10.0761 0.378617 9.81611 0.202617C9.55609 0.0266171 9.27267 -0.0347166 8.96585 0.0186167C8.65902 0.07195 8.3652 0.242617 8.08438 0.530617C7.43953 1.19195 7.10151 2.08262 7.0703 3.20262C7.0599 3.62928 7.13271 4.03728 7.28872 4.42662C7.44473 4.81595 7.65795 5.10128 7.92837 5.28262C8.19879 5.46395 8.48741 5.52262 8.79423 5.45862C9.10106 5.39462 9.38968 5.20795 9.6601 4.89862ZM4.09048 5.01062C4.3505 5.25595 4.62092 5.40262 4.90174 5.45062C5.18256 5.49862 5.44518 5.44795 5.6896 5.29862C5.93402 5.14928 6.13423 4.91462 6.29025 4.59462C6.48786 4.16795 6.57627 3.70395 6.55547 3.20262C6.53466 2.03995 6.17064 1.12262 5.46338 0.450617C5.21376 0.205284 4.94854 0.0612841 4.66772 0.0186167C4.3869 -0.0240498 4.12428 0.0292835 3.87986 0.178617C3.63545 0.32795 3.43523 0.559951 3.27922 0.874617C3.12321 1.18928 3.0348 1.54928 3.014 1.95462C2.94119 3.23462 3.30002 4.25328 4.09048 5.01062ZM13.5916 4.65862C13.5188 4.28528 13.342 4.00528 13.0612 3.81862C12.7803 3.63195 12.4579 3.57062 12.0939 3.63462C11.6674 3.71995 11.2566 3.94395 10.8614 4.30662C10.4662 4.66928 10.1489 5.10128 9.90972 5.60262C9.6705 6.10395 9.55609 6.58928 9.56649 7.05862C9.56649 7.16528 9.57169 7.24528 9.58209 7.29862C9.6549 7.85328 9.84991 8.24528 10.1671 8.47462C10.4844 8.70395 10.8822 8.73862 11.3606 8.57862C11.8183 8.42928 12.2447 8.13062 12.6399 7.68262C13.0144 7.25595 13.29 6.77062 13.4668 6.22662C13.654 5.66128 13.6956 5.13862 13.5916 4.65862ZM4.05928 7.17062C4.05928 6.53062 3.91887 5.94662 3.63805 5.41862C3.35722 4.89062 2.95679 4.42928 2.43675 4.03462C1.99992 3.70395 1.56829 3.56528 1.14186 3.61862C0.757028 3.66128 0.465807 3.84262 0.268192 4.16262C0.0705767 4.48262 -0.0178299 4.93062 0.00297165 5.50662C0.0757771 6.13595 0.268192 6.69062 0.580215 7.17062C0.923441 7.72528 1.39668 8.15728 1.99992 8.46662C2.37435 8.65862 2.72018 8.72528 3.0374 8.66662C3.35462 8.60795 3.60424 8.44262 3.78626 8.17062C3.96827 7.89862 4.05928 7.56528 4.05928 7.17062Z" fill="#565656"/>
                        </svg>
                        <p class="mb-0 color-grey font-changa font-16 font-semibold col-11 ms-3">
                            Acompanhamos cada necessidade para nos tornarmos parceiros estratégicos no crescimento da sua empresa.
                        </p>
                    </li>
                </ul>

                <div class="btn-about my-4 d-flex justify-content-center justify-content-lg-start">
                    <a href="#" class="rounded-pill px-4 btn font-changa bg-green text-white font-18 font-medium text-decoration-none" rel="noopener noreferrer">
                        Saiba mais
                        <svg class="ms-2" width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.78794 12.474L8.02494 6.237L1.78794 -1.90735e-06L0.02079 1.76715L4.46985 6.237L0 10.7068L1.78794 12.474Z" fill="#0E523E"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        </div>
    </div>
</section>

<section class="stats-section py-5 position-relative container-fluid">
    <img src="{{asset('build/client/images/firula-count.svg')}}" alt="Firula" class="position-absolute top-0 left-0 firula-count">

    <div class="container">
        <div class="row text-center align-items-center g-4">
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <h3 class="stat-number font-changa font-bold font-44" data-target="3000">0</h3>
                    <p class="font-changa font-bold font-16 color-green">Clientes satisfeitos</p>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="stat-item highlight-blue">
                    <h3 class="stat-number font-changa font-bold font-44" data-target="50">0</h3>
                    <p class="font-changa font-bold font-16 color-green">Profissionais</p>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="stat-item highlight-yellow">
                    <h3 class="stat-number font-changa font-bold font-44" data-target="120">0</h3>
                    <p class="font-changa font-bold font-16 color-green">Ativos</p>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <h3 class="stat-number font-changa font-bold font-44" data-target="2000">0</h3>
                    <p class="font-changa font-bold font-16 color-green">Entregas</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="step-to-step">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="left-content col-12 col-lg-6 bg-green z-3 d-flex flex-column align-items-end justify-content-center py-5">
                <div class="image position-relative">
                    <img src="{{asset('build/client/images/step.png')}}" alt="Passo a passo" class="w-100 step-image">

                    <img src="{{asset('build/client/images/icon-step.png')}}" alt="Icone" class="w-100 icon-step position-absolute">
                </div>
    
                <div class="description col-12 col-lg-7 text-center text-lg-end px-0 px-lg-4">
                    <p class="font-changa font-28 font-bold">Atendimento exclusivo de segunda à sábado</p>
                    <span class="color-yellow font-changa font-28 font-medium">
                        <svg class="me-2" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 0C11.2057 0 9.52148 0.338541 7.94727 1.01562C6.35612 1.69271 4.97233 2.61947 3.7959 3.7959C2.61947 4.97233 1.69271 6.35612 1.01562 7.94727C0.338542 9.52148 0 11.2057 0 13C0 14.7943 0.338542 16.4785 1.01562 18.0527C1.69271 19.6439 2.61947 21.0277 3.7959 22.2041C4.97233 23.3805 6.35612 24.3073 7.94727 24.9844C9.52148 25.6615 11.2057 26 13 26C13.8971 26 14.7689 25.9154 15.6152 25.7461C16.4616 25.5599 17.2741 25.3018 18.0527 24.9717C18.8314 24.6416 19.5677 24.248 20.2617 23.791C20.9557 23.3171 21.599 22.7839 22.1914 22.1914C22.2422 22.1406 22.2803 22.0856 22.3057 22.0264C22.3311 21.9671 22.3438 21.8952 22.3438 21.8105C22.3438 21.6582 22.293 21.5312 22.1914 21.4297C22.0898 21.3281 21.9629 21.2773 21.8105 21.2773C21.7259 21.2773 21.654 21.29 21.5947 21.3154C21.5355 21.3408 21.4805 21.3789 21.4297 21.4297C20.888 21.9714 20.2956 22.4538 19.6523 22.877C19.026 23.3171 18.3574 23.6852 17.6465 23.9814C16.9355 24.2777 16.1908 24.5104 15.4121 24.6797C14.6335 24.832 13.8294 24.9082 13 24.9082C11.3581 24.9082 9.80925 24.5951 8.35352 23.9688C6.91471 23.3594 5.65365 22.513 4.57031 21.4297C3.48698 20.3464 2.64062 19.0853 2.03125 17.6465C1.40495 16.1908 1.0918 14.6419 1.0918 13C1.0918 11.3581 1.40495 9.80924 2.03125 8.35352C2.64062 6.91471 3.48698 5.65365 4.57031 4.57031C5.65365 3.48698 6.91471 2.64062 8.35352 2.03125C9.80925 1.40495 11.3581 1.0918 13 1.0918C14.6419 1.0918 16.1908 1.40495 17.6465 2.03125C19.0853 2.64062 20.3464 3.48698 21.4297 4.57031C22.513 5.65365 23.3594 6.91471 23.9688 8.35352C24.5951 9.80924 24.9082 11.3581 24.9082 13V14.625C24.9082 15.3698 24.6458 16.0088 24.1211 16.542C23.5964 17.0752 22.9616 17.3418 22.2168 17.3418H20.5918V16.5293C20.5918 16.1569 20.4606 15.8438 20.1982 15.5898C19.9359 15.3359 19.6185 15.209 19.2461 15.209C18.7721 15.209 18.3151 15.1709 17.875 15.0947C17.4349 15.0186 17.0033 14.9128 16.5801 14.7773H16.6309C16.5801 14.7604 16.5166 14.7477 16.4404 14.7393C16.3643 14.7308 16.2923 14.7266 16.2246 14.7266C16.0553 14.7266 15.8945 14.7562 15.7422 14.8154C15.5898 14.8747 15.4544 14.9551 15.3359 15.0566L13.7363 16.2754C12.873 15.8353 12.1029 15.2767 11.4258 14.5996C10.7487 13.9225 10.1901 13.1608 9.75 12.3145L9.72461 12.2637L10.8926 10.7148C11.0111 10.5964 11.1042 10.4567 11.1719 10.2959C11.2396 10.1351 11.2734 9.96159 11.2734 9.77539C11.2734 9.69076 11.2692 9.61458 11.2607 9.54688C11.2523 9.47917 11.2396 9.41146 11.2227 9.34375V9.36914C11.0872 8.97982 10.9814 8.56087 10.9053 8.1123C10.8291 7.66374 10.791 7.21094 10.791 6.75391C10.791 6.75391 10.791 6.74967 10.791 6.74121C10.791 6.73275 10.791 6.72852 10.791 6.72852C10.791 6.37305 10.6641 6.06413 10.4102 5.80176C10.1562 5.53939 9.8431 5.4082 9.4707 5.4082H6.75391C6.38151 5.4082 6.06413 5.53939 5.80176 5.80176C5.53939 6.06413 5.4082 6.37305 5.4082 6.72852C5.4082 8.64128 5.77214 10.444 6.5 12.1367C7.22786 13.8125 8.2181 15.2767 9.4707 16.5293C10.7233 17.7819 12.1875 18.7721 13.8633 19.5C15.556 20.2279 17.3503 20.5918 19.2461 20.5918C19.6185 20.5918 19.9359 20.4606 20.1982 20.1982C20.4606 19.9359 20.5918 19.627 20.5918 19.2715V18.4082H22.2168C23.2663 18.4082 24.1592 18.04 24.8955 17.3037C25.6318 16.5674 26 15.6745 26 14.625V13C26 11.2057 25.6615 9.52148 24.9844 7.94727C24.2904 6.37305 23.3551 4.99772 22.1787 3.82129C21.0023 2.64486 19.627 1.70963 18.0527 1.01562C16.4785 0.338541 14.7943 0 13 0ZM19.5 19.2715C19.5 19.3223 19.4746 19.373 19.4238 19.4238C19.373 19.4746 19.3138 19.5 19.2461 19.5C17.4857 19.5 15.8353 19.1615 14.2949 18.4844C12.7546 17.8242 11.4046 16.9144 10.2451 15.7549C9.08561 14.5954 8.17578 13.2454 7.51562 11.7051C6.83854 10.1647 6.5 8.51432 6.5 6.75391V6.72852C6.5 6.67773 6.52539 6.62695 6.57617 6.57617C6.62695 6.52539 6.6862 6.5 6.75391 6.5H9.4707C9.53841 6.5 9.59766 6.52539 9.64844 6.57617C9.69922 6.62695 9.72461 6.67773 9.72461 6.72852C9.72461 6.74544 9.72461 6.75391 9.72461 6.75391C9.72461 7.27865 9.76693 7.79492 9.85156 8.30273C9.9362 8.81055 10.0547 9.29297 10.207 9.75L10.1816 9.69922C10.1986 9.71615 10.2028 9.75423 10.1943 9.81348C10.1859 9.87272 10.1478 9.9362 10.0801 10.0039L8.6582 11.8828C8.62435 11.9336 8.59896 11.9886 8.58203 12.0479C8.5651 12.1071 8.55664 12.1621 8.55664 12.2129C8.55664 12.2637 8.56087 12.3102 8.56934 12.3525C8.5778 12.3949 8.5905 12.4329 8.60742 12.4668C9.13216 13.5501 9.81348 14.5107 10.6514 15.3486C11.4893 16.1865 12.4329 16.8594 13.4824 17.3672L13.5332 17.3926C13.5671 17.4095 13.6051 17.4222 13.6475 17.4307C13.6898 17.4391 13.7363 17.4434 13.7871 17.4434C13.8548 17.4434 13.9141 17.4349 13.9648 17.418C14.0156 17.401 14.0664 17.3757 14.1172 17.3418L16.0469 15.8691C16.0807 15.8522 16.1104 15.8353 16.1357 15.8184C16.1611 15.8014 16.1908 15.793 16.2246 15.793C16.2415 15.793 16.2542 15.7972 16.2627 15.8057C16.2712 15.8141 16.2839 15.8184 16.3008 15.8184C16.7409 15.9707 17.2106 16.085 17.71 16.1611C18.2093 16.2373 18.7214 16.2754 19.2461 16.2754C19.2461 16.2754 19.2503 16.2754 19.2588 16.2754C19.2673 16.2754 19.2715 16.2754 19.2715 16.2754C19.3392 16.2923 19.3942 16.3219 19.4365 16.3643C19.4788 16.4066 19.5 16.4616 19.5 16.5293V19.2461V19.2715Z" fill="#FDC20C"/>
                        </svg>
                        (71) 99623-8037
                    </span>
                </div>
            </div>
            <div class="right-content col-11 m-auto col-lg-6 py-5 px-2 px-md-4 px-lg-5">
                <span class="about-subtitle color-yellow font-changa font-16 font-bold d-block mb-2">
                    Passo a passo
                </span>
    
                <h3 class="about-title font-changa font-50 font-bold color-green mb-3">
                    Garanta aqui <span class="color-grey">as melhores marcas do mercado com entrega personalizada em poucos passos</span>
                </h3>

                <ul class="list-unstyled list-step mt-4 position-relative">
                    <li class="d-flex align-items-center mb-3">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" fill="white"/>
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#565656"/>
                        <path d="M18.3861 23.2768C18.2468 23.4161 18.0791 23.4857 17.8829 23.4857C17.6866 23.4857 17.5189 23.4161 17.3796 23.2768L14.3032 20.2004L15.2907 19.194L17.8734 21.7956L24.7668 14.8452L25.6973 15.8517L18.3861 23.2768Z" fill="#124937"/>
                        </svg>

                        <p class="mb-0 color-grey font-changa font-16 font-semibold col-10 col-lg-auto ms-3">
                            Veja os produtos disponíveis em nosso site ou catálogo
                        </p>
                    </li>

                    <li class="d-flex align-items-center mb-3">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" fill="white"/>
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#565656"/>
                        <path d="M18.3861 23.2768C18.2468 23.4161 18.0791 23.4857 17.8829 23.4857C17.6866 23.4857 17.5189 23.4161 17.3796 23.2768L14.3032 20.2004L15.2907 19.194L17.8734 21.7956L24.7668 14.8452L25.6973 15.8517L18.3861 23.2768Z" fill="#124937"/>
                        </svg>

                        <p class="mb-0 color-grey font-changa font-16 font-semibold col-10 col-lg-auto ms-3">
                            Faça a sua lista
                        </p>
                    </li>

                    <li class="d-flex align-items-center mb-3">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" fill="white"/>
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#565656"/>
                        <path d="M18.3861 23.2768C18.2468 23.4161 18.0791 23.4857 17.8829 23.4857C17.6866 23.4857 17.5189 23.4161 17.3796 23.2768L14.3032 20.2004L15.2907 19.194L17.8734 21.7956L24.7668 14.8452L25.6973 15.8517L18.3861 23.2768Z" fill="#124937"/>
                        </svg>

                        <p class="mb-0 color-grey font-changa font-16 font-semibold col-10 col-lg-auto ms-3">
                            Entre em contato conosco pelo site
                        </p>
                    </li>

                    <li class="d-flex align-items-center mb-3">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" fill="white"/>
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#565656"/>
                        <path d="M18.3861 23.2768C18.2468 23.4161 18.0791 23.4857 17.8829 23.4857C17.6866 23.4857 17.5189 23.4161 17.3796 23.2768L14.3032 20.2004L15.2907 19.194L17.8734 21.7956L24.7668 14.8452L25.6973 15.8517L18.3861 23.2768Z" fill="#124937"/>
                        </svg>

                        <p class="mb-0 color-grey font-changa font-16 font-semibold col-10 col-lg-auto ms-3">
                            Encaminhe os dados da empresa para cadastro conosco
                        </p>
                    </li>

                    <li class="d-flex align-items-center mb-3">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" fill="white"/>
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#565656"/>
                        <path d="M18.3861 23.2768C18.2468 23.4161 18.0791 23.4857 17.8829 23.4857C17.6866 23.4857 17.5189 23.4161 17.3796 23.2768L14.3032 20.2004L15.2907 19.194L17.8734 21.7956L24.7668 14.8452L25.6973 15.8517L18.3861 23.2768Z" fill="#124937"/>
                        </svg>

                        <p class="mb-0 color-grey font-changa font-16 font-semibold col-10 col-lg-auto ms-3">
                            Receba seu produto em até 30 dias corridos
                        </p>
                    </li>

                    <li class="d-flex align-items-center">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" fill="white"/>
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#565656"/>
                        <path d="M18.3861 23.2768C18.2468 23.4161 18.0791 23.4857 17.8829 23.4857C17.6866 23.4857 17.5189 23.4161 17.3796 23.2768L14.3032 20.2004L15.2907 19.194L17.8734 21.7956L24.7668 14.8452L25.6973 15.8517L18.3861 23.2768Z" fill="#124937"/>
                        </svg>

                        <p class="mb-0 color-grey font-changa font-16 font-semibold col-10 col-lg-auto ms-3">
                            Conte com a visita dos nossos representantes para acompanhamento.
                        </p>
                    </li>
                </ul>
                <div class="step-actions mt-4 d-flex justify-content-center justify-content-lg-start">
                    <a href="#" class="rounded-pill px-4 btn font-changa bg-green text-white font-18 font-medium text-decoration-none" rel="noopener noreferrer">
                        Realizar um orçamento
                        <svg class="ms-2" width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.78794 12.474L8.02494 6.237L1.78794 -1.90735e-06L0.02079 1.76715L4.46985 6.237L0 10.7068L1.78794 12.474Z" fill="#0E523E"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lets-go bg-grey-light py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="content-left col-12 col-lg-6">
                <img src="{{asset('build/client/images/lets-got.png')}}" alt="Carro de entrega" class="w-100">
            </div>
            <div class="content-left col-12 col-lg-6">
                <h3 class="about-title font-changa font-50 font-bold color-green mb-3">
                    A Girollato pode ir até você!
                </h3>
                <p class="color-grey font-changa font-16 font-regular text-center text-lg-start">Receba as melhores marcas e as soluções mais inovadoras do Mercado PET no seu negócio. Nosso atendimento é exclusivo para empresas do setor, realizado pelos nossos representantes. Lembramos que não atendemos consumidor final e não realizamos vendas diretas na porta.</p>
                <div class="step-actions gap-3 d-flex mt-4 flex-wrap justify-content-center justify-content-lg-start">
                    <a href="#" class="rounded-pill px-4 btn-hero btn font-changa bg-green text-white font-18 font-medium text-decoration-none" rel="noopener noreferrer">
                        Onde Distribuimos
                        <svg class="ms-2" width="31" height="13" viewBox="0 0 31 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.1708 12.4741L30.4078 6.23712L24.1708 0.000120163L22.4036 1.76727L26.8527 6.23712L22.3828 10.707L24.1708 12.4741Z" fill="#10513D"/>
                        <path d="M0 5H27V7.2H0V5Z" fill="#10513D"/>
                        </svg>
                    </a>
                    <a href="#" class="rounded-pill px-4 btn-hero btn font-changa bg-green text-white font-18 font-medium text-decoration-none" rel="noopener noreferrer">
                        Encontrar Representantes
                        <svg class="ms-2" width="31" height="13" viewBox="0 0 31 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.1708 12.4741L30.4078 6.23712L24.1708 0.000120163L22.4036 1.76727L26.8527 6.23712L22.3828 10.707L24.1708 12.4741Z" fill="#10513D"/>
                        <path d="M0 5H27V7.2H0V5Z" fill="#10513D"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="category-product position-relative">
    <img src="{{asset('build/client/images/firula-top-product.svg')}}" alt="Firula" class="position-absolute top-0 left-0">
    <div class="container py-5">
        <div class="row g-4">
            <!-- Item 1 -->
            <div class="col-12 col-md-4 mb-3 mb-lg-0">
                <div class="card p-4 d-flex flex-row justify-content-center align-items-center border-0 rounded-4 bg-yellow">
                    <img src="{{asset('build/client/images/cat-1.png')}}"
                        class="card-img-top rounded"
                        alt="Imagem 1">

                    <div class="card-body">
                        <a href="#" class="stretched-link text-decoration-none text-center">
                            <h5 class="card-title font-changa text-black font-25 font-bold">Cachorro</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-12 col-md-4 mb-3 mb-lg-0">
                <div class="card p-4 d-flex flex-row justify-content-center align-items-center border-0 rounded-4 bg-yellow">
                    <img src="{{asset('build/client/images/cat-2.png')}}"
                        class="card-img-top rounded"
                        alt="Imagem 1">

                    <div class="card-body">
                        <a href="#" class="stretched-link text-decoration-none text-center">
                            <h5 class="card-title font-changa text-black font-25 font-bold">Gato</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-12 col-md-4 mb-3 mb-lg-0">
                <div class="card p-4 d-flex flex-row justify-content-center align-items-center border-0 rounded-4 bg-yellow">
                    <img src="{{asset('build/client/images/cat-3.png')}}"
                        class="card-img-top rounded"
                        alt="Imagem 1">

                    <div class="card-body">
                        <a href="#" class="stretched-link text-decoration-none text-center">
                            <h5 class="card-title font-changa text-black font-25 font-bold">Pássaro</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products-section py-5">
    <div class="container">

        <!-- Header -->
        <div class="text-center mb-4">
            <span class="about-subtitle span-product color-yellow font-changa font-16 font-bold d-block mb-2 text-end m-0 z-3 position-relative">
                Conheça Aqui!
            </span>

            <h3 class="about-title font-changa font-50 font-bold color-green mb-3 position-relative">
                <img src="{{asset('build/client/images/firula-about.svg')}}" alt="Firula" class="position-absolute firula-products">
                Nossos <span class="color-grey z-3 position-relative">Produtos</span>
            </h3>
        </div>

        <!-- Filtros -->
        <div class="d-flex justify-content-center gap-2 mb-5 flex-wrap">
        <button class="btn btn-filter text-uppercase font-changa font-18 font-semibold color-green px-4 py-2 active" data-filter="all">Todos</button>
        <button class="btn btn-filter text-uppercase font-changa font-18 font-semibold color-green px-4 py-2" data-filter="alimentos">Alimentos</button>
        <button class="btn btn-filter text-uppercase font-changa font-18 font-semibold color-green px-4 py-2" data-filter="racao">Ração</button>
        <button class="btn btn-filter text-uppercase font-changa font-18 font-semibold color-green px-4 py-2" data-filter="acessorios">Acessórios</button>
        <button class="btn btn-filter text-uppercase font-changa font-18 font-semibold color-green px-4 py-2" data-filter="nutridani">Nutridani</button>
        </div>

        <!-- Produtos -->
        <div class="row g-4 products">
            <!-- Produto -->
            <div class="col-6 col-sm-6 col-lg-3 product alimentos nutridani">
                <div class="product-card">
                    <div class="image border rounded-3 position-relative mb-3">
                        <a href="#" class="col-12">
                            <span class="btn btn-view font-changa font-16 font-medium opacity-0 col-10 col-lg-5">Ver Produto</span>
                            <img src="{{asset('build/client/images/prod-1.png')}}" alt="">
                        </a>
                    </div>
                    <h6 class="font-changa font-18 font-semibold color-green">BILLY CAT 10 KG</h6>
                    <p class="color-grey font-changa font-18 font-medium">Gato filhote ao castrado, linha premium Nutridani</p>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-3 product acessorios">
                <div class="product-card">
                    <div class="image border rounded-3 position-relative mb-3">
                        <a href="#" class="col-12">
                            <span class="btn btn-view font-changa font-16 font-medium opacity-0 col-10 col-lg-5">Ver Produto</span>
                            <img src="{{asset('build/client/images/prod-2.png')}}" alt="">
                        </a>
                    </div>
                    
                    <h6 class="font-changa font-18 font-semibold color-green">LOUNGER DOG BED</h6>
                    <p class="color-grey font-changa font-18 font-medium">Produto confort premium Nutridani, para soneca PET</p>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-3 product acessorios">
                <div class="product-card">
                    <div class="image border rounded-3 position-relative mb-3">
                        <a href="#" class="col-12">
                            <span class="btn btn-view font-changa font-16 font-medium opacity-0 col-10 col-lg-5">Ver Produto</span>
                            <img src="{{asset('build/client/images/prod-3.png')}}" alt="">
                        </a>
                    </div>
                    <h6 class="font-changa font-18 font-semibold color-green">ACTIVE PET DOG HARNESS</h6>
                    <p class="color-grey font-changa font-18 font-medium">Gato filhote ao castrado, linha premium Nutridani</p>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-lg-3 product alimentos">
                <div class="product-card">
                    <div class="image border rounded-3 position-relative mb-3">
                        <a href="#" class="col-12">
                            <span class="btn btn-view font-changa font-16 font-medium opacity-0 col-10 col-lg-5">Ver Produto</span>
                            <img src="{{asset('build/client/images/prod-1.png')}}" alt="">
                        </a>
                    </div>
                    <h6 class="font-changa font-18 font-semibold color-green">SARA’S DOGGIE TREAT</h6>
                    <p class="color-grey font-changa font-18 font-medium">Produto confort premium Nutridani, para soneca PET</p>
                </div>
            </div>
        </div>

        <!-- Botão -->
        <div class="text-end mt-4 d-flex justify-content-center justify-content-lg-end align-items-center">
            <a href="#" class="btn btn-product bg-green rounded-pill px-4 text-white">
                Ver todos os produtos
                <svg class="ms-2" width="31" height="13" viewBox="0 0 31 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.1708 12.4741L30.4078 6.23712L24.1708 0.000120163L22.4036 1.76727L26.8527 6.23712L22.3828 10.707L24.1708 12.4741Z" fill="#10513D"></path>
                <path d="M0 5H27V7.2H0V5Z" fill="#10513D"></path>
                </svg>
            </a>
        </div>

    </div>
</section>

<section class="faq-section py-5">
    <div class="container">
        <div class="row align-items-center g-5">

        <!-- COLUNA ESQUERDA -->
        <div class="col-lg-6">
            <!-- Header -->
            <div class="mb-4">
                <span class="faq-eyebrow color-yellow font-changa font-16 font-bold d-block mb-2">
                    Conheça Aqui!
                </span>

                <h3 class="faq-title font-changa font-50 font-bold color-green mb-3">
                    Dúvidas <span>frequentes</span>
                </h3>
            </div>

            <p class="faq-text">
                Encontre respostas claras e detalhadas para perguntas
                frequentes sobre nossos produtos, entregas, prazos além de
                orçamentos.
            </p>

            <a href="#" class="btn btn-faq">
                Continuo com dúvidas
            </a>

            <div class="faq-image mt-4">
                <img src="{{asset('build/client/images/faq.png')}}" alt="Entrega" class="img-fluid">
            </div>
        </div>

        <!-- COLUNA DIREITA -->
        <div class="col-lg-6">
            <div class="accordion" id="faqAccordion">

            <!-- ITEM -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq1">
                    Quem pode comprar diretamente com a Girolatto?
                </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.
                </div>
                </div>
            </div>

            <!-- ITEM -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq2">
                    Existe valor mínimo para pedidos?
                </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Lorem Ipsum has been the industry’s standard dummy text.
                </div>
                </div>
            </div>

            <!-- ITEM ATIVO -->
            <div class="accordion-item active">
                <h2 class="accordion-header">
                <button class="accordion-button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq3">
                    Quais regiões vocês atendem?
                </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse show"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Lorem Ipsum has survived not only five centuries, but
                    also the leap into electronic typesetting.
                </div>
                </div>
            </div>

            <!-- ITEM -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq4">
                    Qual o prazo de entrega?
                </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse"
                data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    O prazo varia conforme a região e o volume do pedido.
                </div>
                </div>
            </div>

            </div>
        </div>

        </div>
    </div>
</section>




<script>
  const buttons = document.querySelectorAll('.btn-filter');
  const products = document.querySelectorAll('.product');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;

      products.forEach(product => {
        product.classList.toggle(
          'd-none',
          filter !== 'all' && !product.classList.contains(filter)
        );
      });
    });
  });
</script>

@endsection
