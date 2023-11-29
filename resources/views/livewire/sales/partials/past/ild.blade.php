<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card card-danger card-outline">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-history"></i>
          Past ILD Rate Sheets
        </h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            @include('livewire.sales.partials.past.navtabs.navtabsild')
          </div>
          <div class="col-sm-12 col-md-9">
            <div class="tab-content" id="vert-tabs-tabContent">
              @include('livewire.sales.partials.past.ff.ffMain')
              @include('livewire.sales.partials.past.ff.ffDscr')
              @include('livewire.sales.partials.past.ff.ffMFBridge')
              @include('livewire.sales.partials.past.ff.ffMFLongTerm')
              @include('livewire.sales.partials.past.ff.ffSFRBridge')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>