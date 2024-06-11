  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-0">
    <div class="row w-auto h-auto mx-0">
        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-1">
              <div class="d-flex align-items-center justify-content-between mb-4">
                  <h5 class="px-4">Profil</h5>
              </div>
              <div class="row p-4 justify-content-center">
                <div class="col-sm-3 col-xl-3 mx-4">
                    @if (auth()->user()->foto == NUll)
                        @if (auth()->user()->role_id == 1)
                    <img class="rounded-circle me-lg-2" src="{{ asset('img/admin.png') }}" alt="" style="width: 200px; height: 200px;">
                        @elseif (auth()->user()->role_id == 2)
                    <img class="rounded-circle me-lg-2" src="{{ asset('img/user.png') }}" alt="" style="width: 200px; height: 200px;"> 
                    @endif
                @else
                <img src="{{ asset('storage/' . auth()->user()->foto ) }}" style="width: 200px; height: 200px;">
                @endif
                </div>
                <div class="col-sm-4 col-xl-4">
                    <div class=" h-100 p-4 justify-content-between text-start">
                        <dl class=" d-flex row row-cols-2 mb-0">
                            
                                
                            <dt class="col-sm-6">Nama :</dt>
                            <dd class="col-sm-6 text-start">{{ auth()->user()->nama }}</dd>
                            <dt class="col-sm-6">Username :</dt>
                            <dd class="col-sm-6 text-start">{{ auth()->user()->username}}</dd>
                            <dt class="col-sm-6">No HP :</dt>
                            <dd class="col-sm-6 text-start">{{ auth()->user()->no_hp}}</dd>
                            <!-- <dt class="col-sm-6">Role :</dt>
                            <dd class="col-sm-6 text-start">{{ auth()->user()->role->nama}}</dd> -->
                        
                        </dl>
                    </div>
                    
                </div>
              
              </div>
          </div>
          <!-- Recent Sales End -->
  </div>
</div>
<!-- Blank End -->
