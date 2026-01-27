@extends('client.core.client')

@section('content')
    <div class="banner-inner container-fluid d-flex justify-content-center align-items-center flex-column position-relative" style="--banner-bg: url('../images/banner-sobre.png');">
        <span class="color-yellow font-changa font-16 font-bold position-relative z-3">Quem somos? </span>
        <h1 class="font-changa font-40 font-bold text-white position-relative z-3 mt-2">Somos a Girollato</h1>
        <p class="font-changa font-15 font-regular text-white position-relative z-3">Conheça um pouco sobre a gente aqui!</p>
    </div>
    <section id="topic" class="topics py-5">
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

    <section class="stats-section py-5 position-relative container-fluid overflow-hidden">
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

    <section class="mvw-section d-flex justify-content-center align-items-end" id="mvwSection">
        <div class="mvw-overlay"></div>
        <div class="container">
            <div class="mvw-cards row justify-content-center flex-wrap">
                <div class="col-12 col-lg-4 mvw-card d-flex justify-content-center align-items-start active" data-bg="{{asset('build/client/images/missao.png')}}">
                    <div class="icon rounded-circle bg-white d-flex justify-content-center align-items-center">
                        <img src="{{asset('build/client/images/dog-1.png')}}" alt="">
                    </div>
                    <div class="description ms-2 col-8">
                        <h4 class="color-yellow font-changa font-30 font-semibold">Missão</h4>
                        <p class="text-white font-changa font-16 font-regular mb-0">Well gaudy hound hired set flailed much followed less this maternal well unavoidable crudely aloof more save groomed.</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mvw-card d-flex justify-content-center align-items-start" data-bg="{{asset('build/client/images/visao.png')}}">
                    <div class="icon rounded-circle bg-white d-flex justify-content-center align-items-center">
                        <img src="{{asset('build/client/images/dog-2.png')}}" alt="">
                    </div>
                    <div class="description ms-2 col-8">                        
                        <h4 class="color-yellow font-changa font-30 font-semibold">Visão</h4>
                        <p class="text-white font-changa font-16 font-regular mb-0">Well gaudy hound hired set flailed much followed less this maternal well unavoidable crudely aloof more save groomed.</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mvw-card d-flex justify-content-center align-items-start" data-bg="{{asset('build/client/images/valores.png')}}">
                    <div class="icon rounded-circle bg-white d-flex justify-content-center align-items-center">
                        <img src="{{asset('build/client/images/dog-3.png')}}" alt="">
                    </div>
                    <div class="description ms-2 col-8">                        
                        <h4 class="color-yellow font-changa font-30 font-semibold">Valores</h4>
                        <p class="text-white font-changa font-16 font-regular mb-0">Well gaudy hound hired set flailed much followed less this maternal well unavoidable crudely aloof more save groomed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section py-5 position-relative">
        <img src="{{asset('build/client/images/firula-blog.svg')}}" alt="Firula blog" class="firula-blog position-absolute top-0 left-0">
        <div class="container z-3 position-relative">
            <span class="blog-subtitle color-yellow font-changa font-16 font-bold d-block mb-2 m-auto me-0">
                Equipe
            </span>

            <h3 class="about-title font-changa font-50 font-bold color-green mb-3 text-center">
                Respresentantes 
            </h3>
            <div class="row g-4">
                <!-- Card -->
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="team-card position-relative">
                        <div class="team-image">
                            <img src="{{asset('build/client/images/team.png')}}" alt="Wagner Moura">
                        </div>
                        <div class="team-body text-center position-absolute col-11 z-3 bg-white py-2 py-lg-3 px-1 px-lg-2">
                            <h6 class="mb-0 font-changa font-medium font-18 color-green">Wagner Moura</h6>
                            <small class="color-grey font-changa font-15 font-regular d-block mb-2">Vendas Internas</small>
                            <a href="#" class="btn btn-team bg-green text-white font-changa font-15 font-regular rounded-5 px-2 px-lg-5">
                                <i class="bi bi-envelope me-1"></i> Enviar mensagem
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="team-card position-relative">
                        <div class="team-image">
                            <img src="{{asset('build/client/images/team.png')}}" alt="Wagner Moura">
                        </div>
                        <div class="team-body text-center position-absolute col-11 z-3 bg-white py-2 py-lg-3 px-1 px-lg-2">
                            <h6 class="mb-0 font-changa font-medium font-18 color-green">Wagner Moura</h6>
                            <small class="color-grey font-changa font-15 font-regular d-block mb-2">Vendas Internas</small>
                            <a href="#" class="btn btn-team bg-green text-white font-changa font-15 font-regular rounded-5 px-2 px-lg-5">
                                <i class="bi bi-envelope me-1"></i> Enviar mensagem
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="team-card position-relative">
                        <div class="team-image">
                            <img src="{{asset('build/client/images/team.png')}}" alt="Wagner Moura">
                        </div>
                        <div class="team-body text-center position-absolute col-11 z-3 bg-white py-2 py-lg-3 px-1 px-lg-2">
                            <h6 class="mb-0 font-changa font-medium font-18 color-green">Wagner Moura</h6>
                            <small class="color-grey font-changa font-15 font-regular d-block mb-2">Vendas Internas</small>
                            <a href="#" class="btn btn-team bg-green text-white font-changa font-15 font-regular rounded-5 px-2 px-lg-5">
                                <i class="bi bi-envelope me-1"></i> Enviar mensagem
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="team-card position-relative">
                        <div class="team-image">
                            <img src="{{asset('build/client/images/team.png')}}" alt="Wagner Moura">
                        </div>
                        <div class="team-body text-center position-absolute col-11 z-3 bg-white py-2 py-lg-3 px-1 px-lg-2">
                            <h6 class="mb-0 font-changa font-medium font-18 color-green">Wagner Moura</h6>
                            <small class="color-grey font-changa font-15 font-regular d-block mb-2">Vendas Internas</small>
                            <a href="#" class="btn btn-team bg-green text-white font-changa font-15 font-regular rounded-5 px-2 px-lg-5">
                                <i class="bi bi-envelope me-1"></i> Enviar mensagem
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="team-card position-relative">
                        <div class="team-image">
                            <img src="{{asset('build/client/images/team.png')}}" alt="Wagner Moura">
                        </div>
                        <div class="team-body text-center position-absolute col-11 z-3 bg-white py-2 py-lg-3 px-1 px-lg-2">
                            <h6 class="mb-0 font-changa font-medium font-18 color-green">Wagner Moura</h6>
                            <small class="color-grey font-changa font-15 font-regular d-block mb-2">Vendas Internas</small>
                            <a href="#" class="btn btn-team bg-green text-white font-changa font-15 font-regular rounded-5 px-2 px-lg-5">
                                <i class="bi bi-envelope me-1"></i> Enviar mensagem
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="team-card position-relative">
                        <div class="team-image">
                            <img src="{{asset('build/client/images/team.png')}}" alt="Wagner Moura">
                        </div>
                        <div class="team-body text-center position-absolute col-11 z-3 bg-white py-2 py-lg-3 px-1 px-lg-2">
                            <h6 class="mb-0 font-changa font-medium font-18 color-green">Wagner Moura</h6>
                            <small class="color-grey font-changa font-15 font-regular d-block mb-2">Vendas Internas</small>
                            <a href="#" class="btn btn-team bg-green text-white font-changa font-15 font-regular rounded-5 px-2 px-lg-5">
                                <i class="bi bi-envelope me-1"></i> Enviar mensagem
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="team-card position-relative">
                        <div class="team-image">
                            <img src="{{asset('build/client/images/team.png')}}" alt="Wagner Moura">
                        </div>
                        <div class="team-body text-center position-absolute col-11 z-3 bg-white py-2 py-lg-3 px-1 px-lg-2">
                            <h6 class="mb-0 font-changa font-medium font-18 color-green">Wagner Moura</h6>
                            <small class="color-grey font-changa font-15 font-regular d-block mb-2">Vendas Internas</small>
                            <a href="#" class="btn btn-team bg-green text-white font-changa font-15 font-regular rounded-5 px-2 px-lg-5">
                                <i class="bi bi-envelope me-1"></i> Enviar mensagem
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="col-6 col-sm-6 col-lg-3">
                    <div class="team-card position-relative">
                        <div class="team-image">
                            <img src="{{asset('build/client/images/team.png')}}" alt="Wagner Moura">
                        </div>
                        <div class="team-body text-center position-absolute col-11 z-3 bg-white py-2 py-lg-3 px-1 px-lg-2">
                            <h6 class="mb-0 font-changa font-medium font-18 color-green">Wagner Moura</h6>
                            <small class="color-grey font-changa font-15 font-regular d-block mb-2">Vendas Internas</small>
                            <a href="#" class="btn btn-team bg-green text-white font-changa font-15 font-regular rounded-5 px-2 px-lg-5">
                                <i class="bi bi-envelope me-1"></i> Enviar mensagem
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-section">
        <div class="video-container position-relative">
            <!-- Thumbnail -->
            <img
                src="https://img.youtube.com/vi/qyGUoxcTfvw/maxresdefault.jpg"
                alt="Vídeo institucional"
                class="video-thumb"
                loading="eager"
                >
            <!-- Botão Play -->
            <button class="video-play-btn" aria-label="Reproduzir vídeo"></button>
        </div>
    </section>

    <section class="coverage-section py-5 position-relative">
        <div class="container">
            <div class="row align-items-center gy-4">
                <!-- MAPA -->
                <div class="col-12 col-lg-6 text-center">
                    <div class="text-center text-lg-end mb-4 col-12 col-lg-11">
                        <span class="about-subtitle color-yellow font-changa font-16 font-bold d-block mb-2 text-end m-0 z-3 position-relative w-100">
                            Distribuição
                        </span>

                        <h3 class="about-title font-changa font-50 font-bold color-green mb-3 position-relative">                            
                            Onde atendemos
                        </h3>
                    </div>
                    <img 
                        src="{{asset('build/client/images/mapa.png')}}" 
                        alt="Mapa de cobertura"
                        class="img-fluid coverage-map"
                        >
                </div>
                <!-- LISTAS -->
                <div class="col-12 col-lg-6 mt-0">
                    <!-- BAHIA -->
                    <div class="state-block mb-4">
                        <h4 class="state-title color-yellow font-changa font-40 font-medium">Bahia</h4>
                        <div class="row">
                            <div class="col-6">
                                <ul class="state-list">
                                    <li class="font-changa font-20 font-medium">Salvador</li>
                                    <li class="font-changa font-20 font-medium">Amélia Rodrigues</li>
                                    <li class="font-changa font-20 font-medium">Saubara</li>
                                    <li class="font-changa font-20 font-medium">Terra Nova</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="state-list">
                                    <li class="font-changa font-20 font-medium">Lauro de Freitas</li>
                                    <li class="font-changa font-20 font-medium">Santo Amaro</li>
                                    <li class="font-changa font-20 font-medium">São Sebastião do Passé</li>
                                    <li class="font-changa font-20 font-medium">Madre de Deus</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- SERGIPE -->
                    <div class="state-block">
                        <h4 class="state-title color-yellow font-changa font-40 font-medium">Sergipe</h4>
                        <div class="row">
                            <div class="col-6">
                                <ul class="state-list">
                                    <li class="font-changa font-20 font-medium">Salvador</li>
                                    <li class="font-changa font-20 font-medium">Amélia Rodrigues</li>
                                    <li class="font-changa font-20 font-medium">Saubara</li>
                                    <li class="font-changa font-20 font-medium">Terra Nova</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="state-list">
                                    <li class="font-changa font-20 font-medium">Lauro de Freitas</li>
                                    <li class="font-changa font-20 font-medium">Santo Amaro</li>
                                    <li class="font-changa font-20 font-medium">São Sebastião do Passé</li>
                                    <li class="font-changa font-20 font-medium">Madre de Deus</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('build/client/images/firula-about.svg')}}" alt="Firula" class="position-absolute bottom-0 start-0">
    </section>

    <script>
        //Video youtube
          document.querySelector('.video-play-btn').addEventListener('click', function () {
            const container = this.closest('.video-container');

            container.innerHTML = `
            <iframe
                src="https://www.youtube.com/embed/qyGUoxcTfvw?si=oVEe4FJtOr4dBzjp"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen
                style="width:100%; height:100%;">
            </iframe>
            `;
        });
        

        const section = document.getElementById("mvwSection");
        const cards = document.querySelectorAll(".mvw-card");

        function changeBackground(card) {
            const bg = card.getAttribute("data-bg");
            section.style.backgroundImage = `url(${bg})`;

            cards.forEach(c => c.classList.remove("active"));
            card.classList.add("active");
        }

        // Desktop (hover)
        cards.forEach(card => {
                card.addEventListener("mouseenter", () => {
                    if (window.innerWidth > 768) {
                        changeBackground(card);
                    }
                });
        });

        // Mobile (click)
        cards.forEach(card => {
            card.addEventListener("click", () => {
                if (window.innerWidth <= 768) {
                    changeBackground(card);
                }
            });
        });
    </script>

@endsection