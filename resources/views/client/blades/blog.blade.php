

@extends('client.core.client')
@section('content')
<div class="banner-inner blog container-fluid d-flex justify-content-center align-items-center flex-column position-relative" style="--banner-bg: url('../images/banner-blog.png');">
   <span class="color-yellow font-changa font-16 font-bold position-relative z-3 text-center">Blog </span>
   <h1 class="font-changa font-40 font-bold text-white position-relative z-3 mt-2">Artigo Animal</h1>
   <p class="font-changa font-15 font-regular text-white position-relative z-3">Conheça um pouco sobre a gente aqui!</p>
</div>
<section id="news" >
   <div class="container p-3 p-lg-0">
      <div class="row mt-0 mt-lg-5 justify-content-between flex-column-reverse flex-lg-row">
         <div class="blog-content col-12 col-lg-8 mt-5 mt-lg-0">
            <div class="row g-4">
   
               @for($i = 0; $i < 12; $i++)
                  <div class="col-6 col-md-6 col-lg-4 m-0 mb-2 mb-lg-0 mt-0 mt-lg-4">
                     <article class="post-card">
                           <a href="">
                              <img src="{{asset('build/client/images/blog-' . (($i % 2) + 1) . '.png')}}" alt="">
                              <div class="post-overlay">
                                 <h5 class="font-changa font-18 font-bold text-white mb-2 mb-lg-3">
                                       Qual a melhor ração para fêmeas com filhotes?
                                 </h5>
                                 <p class="font-16 font-regular text-white mb-1 mb-lg-3">
                                       Proin viverra nisi at nisl imperdiet auctor. Donec iet auctor...
                                 </p>
                                 <span class="date font-16 font-regular text-white">
                                       04 Set 2026
                                 </span>
                              </div>
                           </a>
                     </article>
                  </div>
               @endfor
      
            </div>
   
         </div>
   
         <aside class="col-12 col-lg-4 mb-3 mb-lg-0">
   
            <!-- Busca -->
            <div class="card border-0 shadow-sm mb-4 bg-grey-light col-12 col-lg-10">
               <div class="card-body p-4">
                     <form class="position-relative">
                        <input
                           type="text"
                           class="form-control rounded-3 ps-4 pe-5"
                           placeholder="Pesquise aqui..."
                        >
                        <button
                           type="submit"
                           class="btn position-absolute top-50 end-0 translate-middle-y me-3 p-0 border-0 bg-transparent"
                        >
                           <i class="bi bi-search"></i>
                        </button>
                     </form>
               </div>
            </div>
   
            <!-- Categorias -->
            <div class="card border-0 shadow-sm mb-4 bg-grey-light px-3 col-12 col-lg-10">
               <div class="card-body">
                     <h5 class="font-changa font-24 font-bold mb-3">Categories</h5>
   
                     <ul class="list-unstyled mb-0">
                        <li class="d-flex justify-content-between py-2 border-bottom">
                           <span class="font-changa font-16 font-semibold">PETS</span>
                           <span class="color-yellow font-changa font-16 font-semibold">25</span>
                        </li>
                        <li class="d-flex justify-content-between py-2 border-bottom">
                           <span class="font-changa font-16 font-semibold">Gatos</span>
                           <span class="color-yellow font-changa font-16 font-semibold">3</span>
                        </li>
                        <li class="d-flex justify-content-between py-2 border-bottom">
                           <span class="font-changa font-16 font-semibold">Cachorros</span>
                           <span class="color-yellow font-changa font-16 font-semibold">7</span>
                        </li>
                        <li class="d-flex justify-content-between py-2 border-bottom">
                           <span class="font-changa font-16 font-semibold">Estilo de Vida</span>
                           <span class="color-yellow font-changa font-16 font-semibold">8</span>
                        </li>
                        <li class="d-flex justify-content-between py-2 border-bottom">
                           <span class="font-changa font-16 font-semibold">Nutrição</span>
                           <span class="color-yellow font-changa font-16 font-semibold">3</span>
                        </li>
                        <li class="d-flex justify-content-between py-2 border-bottom">
                           <span class="font-changa font-16 font-semibold">Banho</span>
                           <span class="color-yellow font-changa font-16 font-semibold">3</span>
                        </li>
                        <li class="d-flex justify-content-between py-2">
                           <span class="font-changa font-16 font-semibold">Brinquedos</span>
                           <span class="color-yellow font-changa font-16 font-semibold">9</span>
                        </li>
                     </ul>
               </div>
            </div>
   
            <!-- Relacionados -->
            <div class="card border-0 shadow-sm col-12 col-lg-10 relacionados bg-grey-light">
               <div class="card-body">
                     <h5 class="font-changa font-24 font-bold mb-3">Relacionados</h5>
   
                     @for($r = 0; $r < 6; $r++)
                        <div class="d-flex mb-3">
                           <div class="image me-2 rounded">
                              <img src="{{asset('build/client/images/blog-' . (($r % 2) + 1) . '.png')}}" class="me-3" alt="">
                           </div>
                           <div class="col-9">
                              <h6 class="font-changa font-16 font-semibold">
                                    Calopsita e suas vantagens no mundo PET...
                              </h6>
                              <small class="color-grey font-changa font-16 font-regular">Jun 22, 2026</small>
                           </div>
                        </div>
                     @endfor
               </div>
            </div>
   
         </aside>
      </div>
   </div>
</section>
@endsection