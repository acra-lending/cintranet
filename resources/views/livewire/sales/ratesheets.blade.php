<div>
    <div class="container">

      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card card-danger card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-table"></i>
                  Current Rate Sheets
                </h3>
              </div>
              <div class="card-body">
                 @include('livewire.sales.partials.toptabs.navtabs')
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-wholesale" role="tabpanel" aria-labelledby="nav-wholesale-tab">
                      <br>
                      @include('livewire.sales.partials.current.wholesale')
                    </div>
                    <div class="tab-pane fade" id="nav-ild" role="tabpanel" aria-labelledby="nav-ild-tab">
                      <br>
                      @include('livewire.sales.partials.current.ild')
                    </div>
                    <div class="tab-pane fade" id="nav-correspondent" role="tabpanel" aria-labelledby="nav-correspondent-tab">
                      <br>
                      @include('livewire.sales.partials.current.correspondent') 
                    </div>
                  </div>
              </div>
                  
              </div>
            </div>
        </div>
      </div>

      <br>
      @include('livewire.sales.partials.past.past')
      <br>
      @include('livewire.sales.partials.past.ild')
      <br>
      @include('livewire.sales.partials.past.correspondent')
      <br>

    </div>
</div>
