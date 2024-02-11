@extends('theme.template')
@section('title', 'Bazuca | Dashboard')
@section('content')
<div class="container-fluid content-inner pb-0">
   <div class="row">
      <div class="d-flex justify-content-between">
         <div>
            <h2 class="text-primary fw-bold mb-3"><span id="greetings">Boa noite</span>{{ __(Auth::user()->name.'
               '.Auth::user()->last_name) }}</h2>
            <p>seja bem vindo(a) a MtFood</p>
         </div>
      </div>
      <div class="col-lg-12 mt-3">
         <div class="card banner d-block">
            <div class="banner-actions d-none">
               <button type="button" class="banner-slider-next btn btn-white text-primary rounded-pill btn-icon me-3 ">
                  <span class="btn-inner">
                     <svg width="32" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                     </svg>
                  </span>
               </button>
               <button type="button" class="banner-slider-prev btn btn-white text-primary rounded-pill btn-icon">
                  <span class="btn-inner">
                     <svg width="32" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                     </svg>
                  </span>
               </button>
            </div>
            <div class="card-body banner-body">
               <span class="banner-text">BAZUCA</span>
               <div class="banner-item py-5">
                  <div class="banner-text-1">
                     <h1 class="fw-bold mb-4">Sistema de
                        <span class="text-primary">Gestão de stock</span><br />
                     </h1>
                  </div>
               </div>
            </div>
         </div>
         <div class="card banner-sm d-none">
            <div class="card-body banner-body">
               <div class="banner-item">
                  <div class="banner-text-1">
                     <p class="text-center m-0">Video Game</p>
                     <div class="countdown banner-countdown text-center">
                        <p class="mb-0">Game Stars in<span data-days="">15</span>:<span data-hours="">11</span>:<span
                              data-minutes="">33</span>:<span data-seconds="">34</span></p>
                     </div>
                     <h1 class="fw-bold mb-4 text-center">Let <span class="ms-2">The</span>
                        <span class="text-primary ms-2">Matriachy</span><br /> <span class="mt-2">Begin</span>
                     </h1>
                  </div>
                  <div class="iq-video-thumb iq-video-thumb-resposive align-self-end">
                     <img src="assets/images/pages/02.png" class="img-fluid m-0 iq-img iq-img-shadow-blue" alt="img8">
                     <button type="button" class="iq-btn-thumb btn btn-white text-primary rounded-pill btn-icon">
                        <span class="btn-inner">
                           <svg viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M15.8817 9.20912C14.5492 8.3891 12.8335 9.3478 12.8335 10.9124V33.0875C12.8335 34.6522 14.5492 35.6109 15.8817 34.7908L33.8989 23.7033C35.168 22.9223 35.168 21.0776 33.8989 20.2967L15.8817 9.20912Z"
                                 fill="currentColor" />
                           </svg>
                        </span>
                     </button>
                  </div>
                  <div class="mt-4 text-center">
                     <button type="button" class="btn btn-primary">Know More</button>
                     <button type="button" class="btn btn-white ms-3">Play</button>
                  </div>
               </div>
               <div class="banner-img">
                  <img src="assets/images/pages/01.png" class="img-fluid" alt="img8">
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <div class="row">
                     <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                           <h3 class="mb-0">{{ __($entries) }}</h3>
                        </div>
                     </div>
                     <div class="col-3">
                        <div class="icon icon-box-success ">
                           <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                     </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Produtos em stock</h6>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <div class="row">
                     <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                           <h3 class="mb-0">{{ __($outlets) }}</h3>
                        </div>
                     </div>
                     <div class="col-3">
                        <div class="icon icon-box-success">
                           <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                     </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Saidas neste mês</h6>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <div class="row">
                     <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                           <h3 class="mb-0">{{ __($users) }}</h3>
                        </div>
                     </div>
                     <div class="col-3">
                        <div class="icon icon-box-danger">
                           <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                        </div>
                     </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Utilizadores</h6>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <div class="row">
                     <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                           <h3 class="mb-0">{{ __($totalPrice) }}</h3>
                        </div>
                     </div>
                     <div class="col-3">
                        <div class="icon icon-box-success ">
                           <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                     </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Valor ganho (MZN)</h6>
               </div>
            </div>
         </div>
      </div>
   </div>

</div>

<script>
   const horaAtual = new Date().getHours();
   const greetings = document.getElementById('greetings');
   if (horaAtual >= 5 && horaAtual < 12) {
      greetings.innerHTML = "Bom dia ";
   } else if (horaAtual >= 12 && horaAtual < 18) {
      greetings.innerHTML = "Boa tarde ";
   } else {
      greetings.innerHTML = "Boa noite ";
   }
</script>
@endSection