@extends('layout.index')

@section('content')
<div class="row mt-5">
     <div class="col-md-4">
          <div class="card" style="width: 15rem;">
               <div class="card-header">
                    Kategori
               </div>
               <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                         <div class="accordion-item p-0">
                              <h2 class="accordion-header">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Pria
                                   </button>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                   <div class="accordion-body">
                                        <div class="d-flex flex-column gap-4">
                                             <a href="#" class="page-link">
                                                  <i class="fas fa-plus"></i> Baju Pria
                                             </a>
                                             <a href="#" class="page-link">
                                                  <i class="fas fa-plus"></i> Celana Pria
                                             </a>
                                             <a href="#" class="page-link">
                                                  <i class="fas fa-plus"></i> Aksesoris Pria
                                             </a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="accordion-item p-0">
                              <h2 class="accordion-header">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Wanita
                                   </button>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                   <div class="accordion-body">
                                        <div class="d-flex flex-column gap-4">
                                             <a href="#" class="page-link">
                                                  <i class="fas fa-plus"></i> Baju Wanita
                                             </a>
                                             <a href="#" class="page-link">
                                                  <i class="fas fa-plus"></i> Celana Wanita
                                             </a>
                                             <a href="#" class="page-link">
                                                  <i class="fas fa-plus"></i> Aksesoris Wanita
                                             </a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="accordion-item p-0">
                              <h2 class="accordion-header">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Anak-Anak
                                   </button>
                              </h2>
                              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                   <div class="accordion-body">
                                        <div class="d-flex flex-column gap-4">
                                             <a href="#" class="page-link">
                                                  <i class="fas fa-plus"></i> Baju Anak-Anak
                                             </a>
                                             <a href="#" class="page-link">
                                                  <i class="fas fa-plus"></i> Celana Anak-Anak
                                             </a>
                                             <a href="#" class="page-link">
                                                  <i class="fas fa-plus"></i> Aksesoris Anak-Anak
                                             </a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="col-md-8 d-flex flex-wrap gap-3 mb-3">
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <div class="card" style="width: 150px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{}asset('assets/image/juve.png')}" style="width: 115px; height: 150px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Bola </p>
                    <p class="m-0"><i class="fa-regular fa-star"></i> 5+</p>
               </div>
               <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    
               </div>
          </div>
          <nav class="m-auto">
  <ul class="pagination">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">2</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
     </div>
</div>
@endsection