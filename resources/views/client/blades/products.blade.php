@extends('client.core.client')

@section('content')
<div class="banner-inner blog container-fluid d-flex justify-content-center align-items-center flex-column position-relative" style="--banner-bg: url('../images/banner-product.png');">
   <span class="color-yellow font-changa font-16 font-bold position-relative z-3 text-center">Produtos </span>
   <h1 class="font-changa font-40 font-bold text-white position-relative z-3 mt-2">Catálogo</h1>
   <p class="font-changa font-15 font-regular text-white position-relative z-3">Confira aqui a seleção dos nossos melhores produtos.</p>
</div>

<div class="container">
    <div class="row mt-5 justify-content-between">
        <div class="col-12 col-lg-3">

            <aside class="filter-aside">
                <!-- Categorias -->
                <div class="filter-box mb-4 bg-grey-light rounded-4 overflow-hidden">
                    <div class="filter-title filter-toggle bg-grey-medium d-flex justify-content-center align-items-center py-1">
                        <i class="bi bi-list"></i>
                        <span class="font-changa font-20 font-semibold color-green ms-2">Categorias</span>
                    </div>

                    <ul class="filter-list">
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border active">Gato</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Cachorro</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Pássaro</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Grãos e Alimentos</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Petiscos</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Granulados Sanitários</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Acessórios</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Higiene e Limpeza</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Controle de pragas</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Jardinagem</li>
                    </ul>
                </div>

                <!-- Marcas -->
                <div class="filter-box mb-4 bg-grey-light rounded-4 overflow-hidden">
                    <div class="filter-title filter-toggle bg-grey-medium d-flex justify-content-center align-items-center py-1">
                        <i class="bi bi-list"></i>
                        <span class="font-changa font-20 font-semibold color-green ms-2">Marcas</span>
                    </div>

                    <ul class="filter-list">
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border active">Nutricon</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">AUK</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Faisca</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Turboaçã</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Cão Criador</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Billy Dog</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Kau</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Kindy</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Quartz</li>
                        <li class="text-center color-grey font-changa font-16 font-medium py-2 border">Miuk</li>
                    </ul>
                </div>

            </aside>
            <script>
            document.querySelectorAll('.filter-toggle').forEach(title => {
                title.addEventListener('click', () => {
                    const box = title.closest('.filter-box');
                    box.classList.toggle('active');
                });
            });
            </script>

        </div>
        <div class="col-12 col-lg-9">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-8">
                    <h2 class="about-title font-changa font-28 font-bold color-green">Gato</h2>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="search-wrapper w-100 justify-content-end">
                        <input 
                            type="text" 
                            class="form-control search-input font-changa font-16 font-medium color-grey" 
                            placeholder="Pesquisar..."
                        >
                        <div class="bg-green px-2 py-1 rounded-3">
                            <i class="bi bi-search search-icon text-white font-20"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produtos -->
            <div class="row g-4 products mt-5">
                <!-- Produto -->
                <div class="col-6 col-sm-6 col-lg-4 product">
                    <div class="product-card">
                        <div class="image border rounded-3 position-relative mb-3">
                            <a href="{{route('product')}}" class="col-12">
                                <span class="btn btn-view font-changa font-16 font-medium opacity-0 col-10 col-lg-5">Ver Produto</span>
                                <img src="{{asset('build/client/images/prod-1.png')}}" alt="">
                            </a>
                        </div>
                        <h6 class="font-changa font-18 font-semibold color-green">BILLY CAT 10 KG</h6>
                        <p class="color-grey font-changa font-18 font-medium">Gato filhote ao castrado, linha premium Nutridani</p>
                    </div>
                </div>
    
                <div class="col-6 col-sm-6 col-lg-4">
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
    
                <div class="col-6 col-sm-6 col-lg-4">
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
    
                <div class="col-6 col-sm-6 col-lg-4">
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
        </div>
    </div>
</div>
@endsection