<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card card-danger card-outline">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-history"></i>
          Past Correspondent Rate Sheets
        </h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            @include('livewire.sales.partials.past.navtabs.navtabscorr')
          </div>
          <div class="col-sm-12 col-md-9">
            <div class="tab-content" id="vert-tabs-tabContent">
              @include('livewire.sales.partials.past.ombs.ombscorr')
              @include('livewire.sales.partials.past.3mbs.3mbscorr')
              @include('livewire.sales.partials.past.dscr.dscrcorr')
              @include('livewire.sales.partials.past.itin.itincorr')
              @include('livewire.sales.partials.past.nonprime.nonprimecorr')
              @include('livewire.sales.partials.past.jumboprime.jumboprimecorr')
              @include('livewire.sales.partials.past.odd.oddcorr')
              @include('livewire.sales.partials.past.oddplus.oddpluscorr')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>