<div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">
    <div class="card card-danger card-outline">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-history"></i>
          Past Rate Sheets
        </h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            @include('livewire.sales.partials.past.navtabs.navtabs')
          </div>
          <div class="col-sm-12 col-md-9">
            <div class="tab-content" id="vert-tabs-tabContent">
              @include('livewire.sales.partials.past.ombs.ombs')
              @include('livewire.sales.partials.past.3mbs.3mbs')
              @include('livewire.sales.partials.past.dscr.dscr')
              @include('livewire.sales.partials.past.nonprime.nonprime')
              @include('livewire.sales.partials.past.jumboprime.jumboprime')
              @include('livewire.sales.partials.past.sbmf.sbmf')
              @include('livewire.sales.partials.past.odd.odd')
              @include('livewire.sales.partials.past.oddplus.oddplus')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>