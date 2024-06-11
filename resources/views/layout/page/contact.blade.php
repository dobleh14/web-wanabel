@extends('.layout.index')

@section('content')
<div class="row mt-4 align-items-center">
     <div class="col-md-6">
          <div class="content-text">
               <div class="content-text">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum id blanditiis harum, sequi totam, rem similique autem quasi inventore nisi amet nam nemo corporis ipsam ratione ab praesentium debitis alias maiores illum? Velit repudiandae nihil doloremque quasi veniam facere omnis suscipit quam porro quidem, hic numquam ullam natus ipsam eum error ratione saepe illo animi minima sit totam possimus deleniti fugit. Velit, nobis, tenetur quos consectetur voluptatem praesentium voluptate aliquid impedit libero repellat dignissimos eaque explicabo est fuga expedita ratione similique eos blanditiis itaque vero labore et adipisci atque quam?
               </div>
          </div>
          <div class="col md-6">
               <img src="" style="width: 100%;" style="float: right;">
          </div>
     </div>

     <div class="d-flex justify-content-lg-between mt-5">
          <div class="d-flex align-items-center gap-4 border-primary">
               <i class="fa fa-users fa-2x"></i>
               <p class="m-0 fs-5">+ 300 Pelanggan</p>
          </div>
          <div class="d-flex align-items-center gap-4">
               <i class="fa-solid fa-house fa-2x"></i>
               <p class="m-0 fs-5">+ 500 Seller</p>
          </div>
          <div class="d-flex align-items-center gap-4">
               <i class="fa-solid fa-shirt fa-2x"></i>
               <p class="m-0 fs-5">+ 300 Product</p>
          </div>
     </div>
</div>

<h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
<hr class="mb-5">
<div class="row mb-md-5">
     <div class="col-md-5">
          <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px;"></div>
     </div>
     <div class="col-md-7">
          <div class="card">
               <div class="card-header text-center">
                    <h4>Kritik dan Saran</h4>
               </div>
               <div class="card-body">
                    <div class="mb-3 row">
                         <label for="email" class="col-sm-2 col-form-label">Email</label>
                         <div class="col-sm-10">
                              <input type="text" class="form-control" id="email" value="" placeholder="Masukkan email Anda">
                         </div>
                    </div>
                    <div class="mb-3 row">
                         <label for="pesan" class="col-sm-2 col-form-label">Password</label>
                         <div class="col-sm-10">
                              <input type="text" class="form-control" id="pesan" placeholder="Masukkan Pesan Anda">
                         </div>
                    </div>
                    <button class="btn btn-primary mt-5 w-100">Kirim pesan anda</button>
               </div>
          </div>
     </div>
</div>
@endsection